<?php

namespace App\Http\Livewire;

use App\Http\Controllers\HomeController;
use App\Models\Investor;
use App\Models\SendEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Email extends Component
{
    public $load=true;
    public $userType;
    public $option;
    public $subject;
    public $message;
    public $draftId;
    public $sm;
    protected $listeners=['saveDraft'];

    public function mount(){
        if (session()->has('mail-draft-id') && !$this->draftId) {
            $this->draftId = session()->get('mail-draft-id');
        }
    }

    public function saveDraft($autosave=false)
    {
        if($autosave && !$this->draftId){
            return;
        }

        $recipients = ($this->option && $this->option!='selected') ? $this->option : json_encode(session()->has('userchecked') ? Session::get('userchecked') : []);
        $mail_draft_data= [
            'recipient' => $recipients,
            'subject' => $this->subject ?? '',
            'message' => $this->message ?? '',
            'status' => 0
        ];

        if($autosave){
            SendEmail::find($this->draftId)->update($mail_draft_data);
        }else{
            $send_mail=SendEmail::create($mail_draft_data);
            if($send_mail){
                $this->draftId= $send_mail->id;
                Session::put('mail-draft-id', $this->draftId);
            }else{
                $this->dispatchBrowserEvent('openDialog', ['title' => 'Error', 'content' => 'Something went wrong, please try again']);
            }
        }
    }

    public function sendEmail()
    {
        $users= new User;
        $recipientsData= [];
        $hasUserChecked= session()->has('userchecked') && count(session()->get('userchecked', [])) > 0;

        if( $this->option && $this->option != 'selected' ){
            if( $this->option != 'all' ){
                $optArr = explode('-', $this->option);
                $isCandidate = ($optArr[1] ?? '') == 'candidate';
                $opt = substr($optArr[0], 0, -1);
                $role = Role::where('name', 'LIKE', $opt . '%')->first()->name;

                $users = $users->whereHas(
                    'roles',
                    function ($q) use ($role){
                        $q->where('name', '=', $role)->orWhere('name', '=', $role . ' candidate');
                    }
                )->whereHas($role)->where('status', ($isCandidate?0:1));

            }else{
                $users = $users->whereHas('distributor')->orWhereHas('investor')->where('status', '!=', 2);
            }

            $recipientsData=$users->get()->pluck('email')->toArray();
        } else if ( ($this->option == 'selected' && $hasUserChecked) || $hasUserChecked ){
            if ($this->userType){
                $users = $users->whereHas(
                    'roles',
                    function ($q) {
                        $q->where('name', '=', $this->userType)->orWhere('name', '=', $this->userType . ' candidate');
                    }
                )->whereHas($this->userType);

                if($users->get()->count() > 0) {
                    $q = $users->get()->toQuery();
                    $q->whereIn('email', session()->get('userchecked'));
                    $recipientsData = $q->pluck('email')->toArray();
                }
            }else{
                $recipientsData= session()->get('userchecked');
            }
        } else {
            $this->dispatchBrowserEvent('openDialog', ['title' => 'Error', 'content' => 'Please specify at least one recipient.']);
            return;
        }

        $recipients = ($this->option && $this->option != 'selected') ? $this->option : json_encode($recipientsData);
        $isDraft= $this->draftId?true:false;
        $mail_data = [
            'recipient' => $recipients,
            'subject' => $this->subject,
            'message' => $this->message,
            'status' => 1
        ];

        $request = new Request($mail_data);
        $request->merge([
            'from' => "Pete's Claws and Fins",
            'recipient' => $recipientsData,
        ]);


        $sended = HomeController::sendMessage($request, true, true, false, true);
        // dd($sended);

        $send_mail = $sended ? ( $isDraft? SendEmail::where('id', '=', $this->draftId)->update($mail_data) : SendEmail::create($mail_data) ) : null;
        if ($send_mail) {
            $this->draftId=null;
            $this->dispatchBrowserEvent('openDialog', ['title' => 'Success', 'content' => 'Email has been sent']);
            return redirect()->route('email.index');
        } else {
            $this->dispatchBrowserEvent('openDialog', ['title' => 'Error', 'content' => 'Something went wrong, please try again']);
        }
    }

    public function render()
    {
        // $this->draftId=2;
        // Session::put('mail-draft-id', $this->draftId);
        // dd($this->message);

        $_MAIL_SUBJECT = 'mail-subject'. ($this->draftId ?? '');
        $_MAIL_MESSAGE = 'mail-message'. ($this->draftId ?? '');

        if($this->load){
            if($this->draftId){
                $this->sm = SendEmail::find($this->draftId);
                Session::put($_MAIL_SUBJECT, $this->sm->subject);
                Session::put($_MAIL_MESSAGE, $this->sm->message);
            }else{

            }

            if (session()->has($_MAIL_SUBJECT)) {
                $this->subject = session()->get($_MAIL_SUBJECT);
            }
            if (session()->has($_MAIL_MESSAGE)) {
                $this->message = session()->get($_MAIL_MESSAGE);
            }
            $this->load=false;
        }else{
            Session::put($_MAIL_SUBJECT, $this->subject);
            Session::put($_MAIL_MESSAGE, $this->message);

        }

        return view('livewire.email');
    }
}
