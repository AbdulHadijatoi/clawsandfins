<?php

namespace App\Http\Controllers;

use App\CentralLogics\Helpers;
use App\Models\City;
use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function fetchCity(Request $request)
    {
        $country = Country::find($request->country_id);
        $states = State::where('country_id',$request->country_id)->get(['id']);
        $data['cities'] = [];
        foreach ($states as $key => $state) {
            $data['cities'] = array_merge($data['cities'], City::where("state_id", $state->id)
            ->orderBy('name')
                ->get(["name", "id"])->toArray());
            // array_push(
            //     $data['cities'],
            //     City::where("state_id", $state->id)
            //         ->orderBy('name')
            //         ->get(["name", "id"]));
        }
        $cities = array_column($data['cities'], 'name');
        array_multisort($cities, SORT_ASC, $data['cities']);

        $data['dial_code'] = $country->dial_code;
                                      
        return response()->json($data);
    }

    public function sendMessage(Request $request){
        $address = config("mail.from.address");
        $mailer= Helpers::getSettingValue('contact_us_mailer');
        try {
            Mail::send('mail.contact-us', ['description'=> $request->message], function ($m) use ($request, $address, $mailer) {
                $m->from($address, $request->name);
                $m->replyTo($request->email, $request->name);
                $m->to($mailer)->subject($request->subject);
            });
            Helpers::js("parent.loader.remove();parent.$('#form')[0].reset();parent.openDialog('Message sent', 'Thanks, you message have been sent to us. We will reply to you shortly')");
        } catch (\Exception $e) {
            Helpers::js("parent.loader.remove();parent.openDialog('Message error', 'Message cant send, Please try again')");
        }
    }
}
