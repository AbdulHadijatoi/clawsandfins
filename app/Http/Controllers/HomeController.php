<?php

namespace App\Http\Controllers;

use App\CentralLogics\Helpers;
use App\Models\City;
use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Jobs\SendMessageJob;
use App\Mail\ContactUs;
use App\Models\Distributor;
use Illuminate\Support\Facades\Cookie;

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
    
    public function whereToBuy()
    {
        $countries = Helpers::getCountries()->toQuery()->withCount('distributors')->get();
        return view('where-to-buy/index', compact('countries'));
    }
    
    public function distributors($countryId)
    {
        
        $country=Country::where('id',$countryId);
        if(!$country){
            return redirect()->route('home.where-to-buy');
        }
        $country= $country->first();
        $distributors= Distributor::with(['getCountry' => function ($query) {
            $query->select('id', 'dial_code');
        }])->where('country', $countryId)->get();

        return view('where-to-buy/distributors', compact('country', 'distributors'));
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
        $country = Country::where('id',$request->country_id)->first(['dial_code']);
        $data = [];
        
        $cities = DB::table('countries')
                    ->rightJoin('states', 'countries.id', '=', 'states.country_id')
                    ->rightJoin('cities', 'states.id', '=', 'cities.state_id')
                    ->where('countries.id','=',$request->country_id)
                    ->select('cities.id', 'cities.name')
                    ->orderBy('name')
                    ->get();                           
        $data['dial_code'] = $country->dial_code;             
        $data['cities'] = $cities;             
        return response()->json($data);
    }

    public static function sendMessage(Request $request, $return = false, $from = true, $replyTo = true, $queue = false){
        $address = config("mail.from.address");
        $mailer= $request->recipient ?? Helpers::getSettingValue('contact_us_mailer');

        try {
            if($queue){
                $request=(object) $request->toArray();
                if(!is_array($mailer)){ $mailer=[$mailer]; }
                foreach ($mailer as $recipient) {
                    dispatch(new SendMessageJob($request, $address, $recipient, $from, $replyTo));
                }
            }else{
                Mail::send( [], [], function ($m) use ($request, $address, $mailer, $from, $replyTo) {
                    if ($from) { $m->from($address, $request->name ?? $request->from); }
                    if ($replyTo) { $m->replyTo($request->email, $request->name ?? $request->replyTo); }

                    $m->to($mailer)->subject($request->subject)->setBody('<div>'.$request->message.'</div>', 'text/html');
                });
            }

            if($return){
                return true;
            }else{
                Helpers::js("parent.loader.remove();parent.$('#form')[0].reset();parent.openDialog('Message sent', 'Thanks, you message have been sent to us. We will reply to you shortly')");
            }
        } catch (\Exception $e) {
            if ($return) {
                return false;
            } else {
                Helpers::js("parent.loader.remove();parent.openDialog('Message error', 'Message cant send, Please try again')");
            }
        }
    }
}
