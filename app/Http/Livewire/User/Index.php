<?php

namespace App\Http\Livewire\User;

use App\Models\SendEmail;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $userID;
    public $userType;
    public $userStatus;
    public $userRole;
    public $user;
    public $iteration = 0;
    public $load = true;
    public $refresh;
    public $users_temp;
    public $users;
    public $userchecked;
    public $usercheckedValue = [];
    public $findValue;
    public $findUser;
    public $userCheckedExpand= false;
    public $draftId;
    public $filter;
    public $search;
    protected $listeners = [
        'addChecked',
        'clearChecked',
        'removeChecked',
        'findUsers',
        'refreshComponent',
        'setFilter',
        'setSearch',
        'approve',
        'reject',
        'candidate',
        'sendEmail',
    ];

    public function mount(){
        if (session()->has('mail-draft-id') && !$this->draftId) {
            $this->draftId = session()->get('mail-draft-id');
        }

        if(!request()->direct && session()->has('userchecked_temp')){
            Session::put('userchecked', Session::get('userchecked_temp'));
        }

        if ($this->userStatus) {
            $this->user = User::find($this->userID);
        }
    }

    public function dehydrate()
    {
        if(!isset($this->userchecked)){
            $this->emit('js', 'scrollBody()');
        }
    }

    public function setFilter($filter){
        $this->filter = $filter;
        if(!$this->filter){

        }
    }

    public function setSearch($search){
        $this->search = $search;
    }

    public function findUsers($f)
    {
        $this->findValue = $f;
        $this->users =
            empty($f) ? null
            :
            User::whereHas(
                'roles',
                function ($q) {
                    $q->where('name', '!=', 'admin')
                        ->where('name', '!=', 'candidate');
                }
            )->whereHas('distributor')->orWhereHas('investor')->where(function($q) use ($f){
                $q->where('name', 'like', "%{$f}%")->orWhere('email', 'like', "%{$f}%");
            })->limit(20)->get();
    }

    public function addChecked($email){
        $recipients=session()->has('userchecked')? Session::get('userchecked'):[];
        if($email[0]==1){
            if(!in_array($email[1], $recipients)){
                array_push($recipients, $email[1]);
            }
        }else{
            $key = array_search($email[1], $recipients);
            if (false !== $key) {
                unset($recipients[$key]);
            }
        }
        Session::put('userchecked', $recipients);
    }

    public function refreshComponent(){
        $this->refresh= !$this->refresh;
    }

    public function clearChecked($refresh=false)
    {
        if ($this->userType) {
            if(Session::has('userchecked')){
                $usercheckedValue=Session::get('userchecked', []);
                $usercheckedValue = array_diff($usercheckedValue, $this->usercheckedValue);
                Session::put('userchecked', $usercheckedValue);
            }
        }else{
            Session::remove('userchecked');
        }
        if($refresh){
            $this->refreshComponent();
        }
    }

    public function removeChecked($email)
    {
        $recipients = session()->has('userchecked') ? Session::get('userchecked') : [];
        $key = array_search($email, $recipients);
        if (false !== $key) {
            unset($recipients[$key]);
        }
        Session::put('userchecked', $recipients);
        $this->findUsers($this->findValue);
    }

    public function smallPopup($content)
    {
        $this->dispatchBrowserEvent('smallPopup', [
            'content' => $content,
            'callback' => '(){}',
            'delay' => 0,
            'autohide' => 2000,
            'mouseout' => false,
            'closeBtn' => false
        ]);
    }

    public function approve($id)
    {

        $user = User::find($id);
        $currentRole = $user->getRoleNames()[0];
        if($currentRole == 'investor candidate'){
            $user->syncRoles(['investor']);
        }else if($currentRole == 'distributor candidate'){
            $user->syncRoles(['distributor']);
        }
        $user->status = 1;
        if ($user->save()) {
            $this->user = $user;
            $this->smallPopup('Approved');
        }else{
            $this->dispatchBrowserEvent('openDialog', ['title' => 'Error', 'content' => 'Something went wrong, please try again']);
        }
    }

    public function reject($id)
    {
        $user = User::find($id);
        $user->status = 2;
        if ($user->save()) {
            $this->user = $user;
            $this->smallPopup('Rejected');
        } else {
            $this->dispatchBrowserEvent('openDialog', ['title' => 'Error', 'content' => 'Something went wrong, please try again']);
        }
    }

    public function candidate($id)
    {
        $user = User::find($id);
        $user->status = 0;
        if ($user->save()) {
            $this->user = $user;
            $this->smallPopup('Candidate');
        } else {
            $this->dispatchBrowserEvent('openDialog', ['title' => 'Error', 'content' => 'Something went wrong, please try again']);
        }
    }

    public function sendEmail($id)
    {
        $user = User::find($id);
        $rc = session()->has('userchecked') ? Session::get('userchecked') : [];

        if(count($rc) > 0){
            Session::put('userchecked_temp', $rc);
        }

        Session::put('userchecked', [ $user->email ]);

        return redirect()->route('email.send', [ 'direct' => 'true' ]);
    }

    public function render()
    {
        if ($this->load) {
            $this->users_temp = $this->users;
            if($this->draftId){
                $sm= SendEmail::find($this->draftId);
                Session::put('userchecked', json_decode($sm->recipient));
            }
            $this->load=false;
        }else{

            // $this->users = User::hydrate($this->users);
            // $this->users = User::to;
        }

        // $this->users= collect($this->users)->map(function ($user) {
        //     if (!is_array($user)) {
        //     //     $users_temp = User::hydrate($user);
        //     // } else {
        //         $users_temp = $user->toArray();
        //     }
        //     return $users_temp;
        // });


        // dd($this->users);
        if($this->userType){
            $users = User::with([$this->userType])->whereHas(
                'roles',
                function ($q) {
                    $q->where('name', '=', $this->userType)->orWhere('name', '=', $this->userType . ' candidate');
                }
            );
            if($this->filter || $this->search){
                $userFilter= $users->whereHas($this->userType,function($q){
                    if($this->search){
                        $q->where(function ($query) {
                            if($this->userType=='distributor'){
                                $query->where("company_name", "LIKE", "%" . $this->search . "%")
                                    ->orWhere("contact_name", "LIKE", "%" . $this->search . "%")
                                    ->orWhere("phone_number", "LIKE", "%" . $this->search . "%")
                                    ->orWhere("order_email", "LIKE", "%" . $this->search . "%");
                            }
                            if($this->userType=='investor'){
                                $query->where("first_name", "LIKE", "%" . $this->search . "%")
                                    ->orWhere("last_name", "LIKE", "%" . $this->search . "%");
                            }
                        });
                    }

                });
                if($this->filter){
                    $filter= $this->filter == 2 ? 0 : 1;
                    $userFilter=$userFilter->where('status', $filter);
                }
                if($this->search){
                    // $userFilter=$userFilter->where(function ($query) {
                    //     $query->where("email", "LIKE", "%" . $this->search . "%")
                    //         ->orWhere("name", "LIKE", "%" . $this->search . "%");
                    // });
                }
                // $userPaginate= $userFilter->latest()->paginate(10);

            }else{
                $userFilter = $users->whereHas($this->userType);
            }

            $userPaginate = $userFilter->latest()->paginate(10);
            $this->users = $userPaginate->all();
        }

        if($this->findUser && $this->users){
            $rc = session()->has('userchecked') ? Session::get('userchecked') : [];

            $this->users = $this->users->filter(function ($item) use ($rc){
                return !in_array($item->email, $rc);
            })->values();

        }

        if(session()->has('userchecked')){
            $this->usercheckedValue = session()->get('userchecked', []);
            if ($this->userType && $users->get()->count() > 0) {
                $q=$users->get()->toQuery();
                $q->whereIn('email', $this->usercheckedValue);
                $this->usercheckedValue = $q->pluck('email')->toArray();
            }else{
                $this->usercheckedValue = [];
            }
        }

        if($this->userStatus){
            // if($this->user){
            //     $user = $this->user;
            // }
            return <<<'blade'
            <div class="d-flex full-width form-responsive tile-show align-center justify-between">
                <div class="button-primary">
                    <button type="button" wire:click="$emit('reject','{{$user->id}}')" {{$user->status==2?'disabled':null}}>{{$user->status==2?'Rejected':'Reject'}}</button>
                </div>
                <h4 class="text-white font-weight-400">{{ ucfirst($userRole.($user->status!=1?' candidate':'s'))}} {{($user->status==2?' (Rejected)':null)}}</h4>
                <div class="button-secondary">
                    <button type="button" wire:click="$emit('approve','{{$user->id}}')" {{$user->status==1?'disabled':null}}>{{$user->status==1?'Approved':'Approve'}}</button>
                </div>
            </div>
            blade;
        }

        return view($this->findUser?'livewire.user.list':'livewire.user.index', [
            'userPaginate' => $userPaginate ?? null
        ]);
    }

}
