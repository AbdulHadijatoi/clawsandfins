<?php

namespace App\Http\Livewire\User;

use App\Models\SendEmail;
use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Index extends Component
{
    public $load = true;
    public $refresh;
    public $users;
    public $userchecked;
    public $findValue;
    public $findUser;
    public $userCheckedExpand= false;
    public $draftId;
    protected $listeners = ['addChecked', 'clearChecked', 'removeChecked','findUsers', 'refreshComponent'];

    public function mount(){
        if (session()->has('mail-draft-id') && !$this->draftId) {
            $this->draftId = session()->get('mail-draft-id');
        }
    }

    public function findUsers($f)
    {
        $this->findValue=$f;
        $this->users=empty($f)?null:User::where('name','like',"%{$f}%")->orWhere('email','like',"%{$f}%")->limit(20)->get();
        // dd($user)
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
        Session::remove('userchecked');
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

    public function render()
    {
        if ($this->load) {
            if($this->draftId){
                $sm= SendEmail::find($this->draftId);
                Session::put('userchecked', json_decode($sm->recipient));
            }
            $this->load=false;
        }

        if($this->findUser && $this->users){
            $rc = session()->has('userchecked') ? Session::get('userchecked') : [];

            $this->users = $this->users->filter(function ($item) use ($rc){
                return !in_array($item->email, $rc);
            })->values();

        }
    
        return view($this->findUser?'livewire.user.list':'livewire.user.index');
    }
    
}
