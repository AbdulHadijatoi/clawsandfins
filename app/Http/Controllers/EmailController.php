<?php

namespace App\Http\Controllers;

use App\Models\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EmailController extends Controller
{
    public function index($param=null, $id=null){
        $recent = $id ?? SendEmail::where('status','=',1)->orderBy('id', 'desc');
        $draft = $id ?? SendEmail::where('status','=',0)->orderBy('id','desc')->get();

        $mailItem=null;
        $showAll=null;
        if($param=='show' && $id){
            $mailItem=SendEmail::find($id);
        }else
        if($param=='show-all'){
            $showAll=true;
            $recent=$recent->paginate(10);
        }else{
            $recent=$recent->limit(10)->get();
        }
        return view("admin.email.index", compact('recent', 'draft', 'id', 'mailItem', 'showAll'));
    }
    
    public function send($option=null, $draftId=null){
        

        $pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';
        
        if(!$pageWasRefreshed ) {
            if(session()->has('mail-draft-id')){
                Session::remove('mail-draft-id');
                Session::remove('userchecked');
                Session::remove('mail-subject');
                Session::remove('mail-message');
            }
        }

        if($draftId){
            $sm = SendEmail::find($draftId);
            if (!$sm) {
                return redirect()->route('email.index');
            }
            Session::put('mail-draft-id', $draftId);
        }
        return view("admin.email.send", compact('option', 'draftId'));
    }

    public function action($param=null, $id=null)
    {
        $respone=[];
        if($param=='copy' && isset($id)){
            $sm = SendEmail::find($id);
            $recipient=json_decode($sm->recipient) ?? $sm->recipient;
            if(is_array($recipient)){ Session::put('userchecked', $recipient); }
            Session::put('mail-subject', $sm->subject);
            Session::put('mail-message', $sm->message);
            return redirect()->route('email.send',[ (is_array($recipient)?'selected': $recipient) ]);
        } 
        if($param=='delete-draft' && isset($id)){
            $del= SendEmail::destroy($id);
            if($del){
                $respone = ['success' => 'Draft deleted'];
            }else{
                $respone = ['error' => 'Something went wrong, please try again'];
            }
        } 
        else if ($param == 'clear-draft') {
            if(SendEmail::truncate()){
                $respone = ['success' => 'Draft cleared'];
                return redirect()->route('email.index')->with($respone);
            }else{
                echo "<script>alert('Something went wrong, please try again');location.href='".route('email.index')."'</script>";
            }
        }
        else{
            $respone = ['error'=>'Access denied'];
        }
        return json_encode($respone);
    }
}
