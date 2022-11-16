<?php

namespace App\Http\Livewire\User\Edit;

use App\Models\Country;
use App\Models\Distributor as ModelsDistributor;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Distributor extends Component
{
    private $SORT_KEY = 'distributor_sort';
    private $FIELDS_KEY = 'distributor_fields';
    public $load=true;
    public $iteration=0;
    public $iterationSetLocation=0;
    public $option;
    public $users;
    public $sort_column = ['', ''];
    public $listeners = ['emitAll', 'set', 'setCountry', 'setLocation', 'removeLocation', 'update'];
    public 
        $company_name = [], 
        $contact_name= [],
        $order_email= [],
        $dial_code= [],
        $phone_number= [],
        $country= [],
        $country_name= [],
        $city= [],
        $city_name= [],
        $postal_address= [],
        $website_url= [],
        $visiting_address= [],
        $location_disclose= [],
        $location_is_correct= [],
        $need_support= [],
        $latitude= [],
        $longitude= [],
        $updated_at= []
    ;
    public $fields = [
        'company_name',
        'contact_name',
        'order_email',
        'dial_code',
        'phone_number',
        'country',
        'country_name',
        'city',
        'city_name',
        'postal_address',
        'website_url',
        'visiting_address',
        'location_disclose',
        'location_is_correct',
        'need_support',
        'latitude',
        'longitude',
        'updated_at'
    ];
    public $userType='distributor';

    public function emitAll($emitArr)
    {
        // dd($emitArr);
        foreach ($emitArr as $emit) {
            $this->emit($emit['event'], ...$emit['params']);
        }
    }

    public function set($property, $value){
        $p=explode('.', $property, 2);
        if(count($p) > 1 ){
            $this->{$p[0]}[$p[1]] = $value;
        }else{
            $this->{$p[0]} = $value;
        }
    }

    public function setCountry($id, $dial_code, $country_name)
    {
        $this->dial_code[$id]= $dial_code;
        $this->country_name[$id]= $country_name;
        $this->city_name[$id]= null;
    }
    
    public function setLocation($id, $lat, $lng)
    {
        // dd('location'.$lat);
        $this->latitude[$id]= $lat;
        $this->longitude[$id]= $lng;
    }
    
    public function removeLocation($id)
    {
        // dd('location'.$lat);
        $this->latitude[$id]= 0;
        $this->longitude[$id]= 0;
    }

    public function mount()
    {

        if(Session::has($this->SORT_KEY)){
            $this->sort_column = Session::get($this->SORT_KEY);
        }

        $this->users = User::whereHas(
            'roles',
            function ($q) {
                $q->where('name', '=', $this->userType);
            }
        )->whereHas($this->userType);

        if($this->option != 'all'){
            if($this->option == 'selected'){
                $usercheckedValue = session()->get('userchecked', []);
                $this->users =    $this->users->get()->toQuery()->whereIn('email', $usercheckedValue);
                    // $q->whereIn('email', $usercheckedValue);
                    // $this->usercheckedValue = $q->pluck('email')->toArray();
                // $this->users = $this->users->where('status', )
            }else{
                $optArr = explode('-', $this->option);
                $isCandidate = ($optArr[1] ?? '') == 'candidate';
                $this->users = $this->users->where('status', $isCandidate? 0 : 1 );
            }
        }

        $sorter = $this->getSort();

        if($sorter){
            $distributor = new ModelsDistributor();
            if($sorter->column == 'country'){
                $distributor = $distributor->join('countries', 'countries.id', '=', 'distributors.country')->select('countries.name');
            }else
            if($sorter->column == 'city'){
                $distributor = $distributor->join('cities', 'cities.id', '=', 'distributors.city')->select('cities.name');
            } else
            if ($sorter->column == 'website_url') {
                $distributor = $distributor->selectRaw("REPLACE( REPLACE( $sorter->column, 'http://', ''), 'https://', '' )");
            }else{
                $distributor = $distributor->select($sorter->column);
            }

            $this->users = $this-> users->select('*')
                ->orderBy(
                    $distributor->whereColumn('distributors.user_id', 'users.id'),
                    $sorter->sort_type
                );
        }else{
            $this->users = $this->users->latest();
        }
        
        $this->users = $this->users->get();

        // dd($this->users);

        foreach($this->users as $user){
            foreach($this->fields as $field){
                if($field == 'location_disclose' || $field == 'need_support'){
                    if($user->distributor->{$field} == 0){
                        $user->distributor->{$field} = '';
                    }
                }

                $field2 = null;

                $userDistributor = $user->distributor;

                if($field == 'dial_code'){
                    $userDistributor = $userDistributor->getCountry;
                }

                if($field == 'country_name'){
                    $userDistributor = $userDistributor->getCountry;
                    $field2 = 'name';
                }

                if($field == 'city_name'){
                    $userDistributor = $userDistributor->getCity;
                    $field2 = 'name';
                }
                
                $this->{$field}[$user->id] = $userDistributor->{ ($field2 ?? $field) };

                if($field == 'updated_at'){
                    $this->{$field}[$user->id] = (string) $this->{$field}[$user->id];
                }
            }
        }

        // dd($this->dial_code);
    }

    public function sort($column, $order){

        $sorter = $this->getSort();

        if ($sorter && $sorter->column != $column) {
            $order = 'ASC';
        }

        $this->sort_column= empty($order)?['','']:[
            $column,
            $order
        ];

        if(empty($order)){
            if (Session::has($this->SORT_KEY)) {
                Session::remove($this->SORT_KEY);
            }
        }else{
            Session::put($this->SORT_KEY, $this->sort_column);
        }

        $this->mount();

        $this->iteration++;

        $this->load = true;
        
    }

    public function getSort(){
        if($this->sort_column[0]==''){
            return null;
        }

        return (object) [
            'column' => $this->sort_column[0],
            'sort_type' => $this->sort_column[1]
        ];

    }

    public function dehydrate()
    {
        $this->dispatchBrowserEvent('initRender');
    }
    
    public function getData($id){
        $data = [];
        foreach ($this->fields as $field) {
            if ($field == 'location_disclose' || $field == 'need_support') {
                $data[$field] = $this->{$field}[$id] != '' ? $this->{$field}[$id] : 0;
            } else {
                $data[$field] = $this->{$field}[$id];
            }
        }
        return $data;
    }

    public function reload()
    {
        $this->mount();
        if (Session::has($this->FIELDS_KEY)) {
            Session::remove($this->FIELDS_KEY);
        }
        $this->load = true;
        $this->iteration++;
    }

    public function update($id){
        $data = $this->getData($id);
        $data = Arr::except($data, ['updated_at']);
        $distributorId = ModelsDistributor::where('user_id', $id)->first()->id;
        $distributor = ModelsDistributor::find($distributorId);
        $distributor->update($data);
        if ($distributor) {
            $this->reload();
            $this->updated_at[$id] = (string) $distributor->updated_at;
            $this->dispatchBrowserEvent('openDialog', ['title' => 'Success', 'content' => 'Data has been updated']);
        } else {
            $this->dispatchBrowserEvent('openDialog', ['title' => 'Error', 'content' => 'Something went wrong, please try again']);
        }
        $this->emit('removeSpinner');
    }

    public function updateAll(){
        $usersId = $this->users->pluck('id')->toArray();
        $updatedId = [];
        foreach ($usersId as $id) {
            $data = $this->getData($id);
            $distributorId = ModelsDistributor::where('user_id', $id)->first()->id;
            $distributor = ModelsDistributor::find($distributorId);
            $distributor->update($data);
            array_push($updatedId, $id);
        }

        if(count($usersId) === count($updatedId)){
            $this->dispatchBrowserEvent('openDialog', ['title' => 'Success', 'content' => 'All data has been updated']);
            $this->reload();
        } else {
            $this->dispatchBrowserEvent('openDialog', ['title' => 'Error', 'content' => 'Something went wrong, please try again']);
        }
        $this->emit('removeSpinner');
    }

    public function render()
    {
        if($this->load){
            $this->load = false;
            // dd(Session::get($this->FIELDS_KEY));
            if(Session::has($this->FIELDS_KEY)){
                foreach (Session::get($this->FIELDS_KEY) as $field_key => $values) {
                    foreach ($values as $value_key => $value) {
                        $this->{$field_key}[$value_key] = $value;
                    }
                }
            }
            // dd(Session::get($this->FIELDS_KEY));
        }else{
            $fields= [];
            foreach ($this->fields as $field) {
                $fields[$field] = $this->{$field};
            }
            // dd($fields);
            Session::put($this->FIELDS_KEY, $fields);
        }
        return view('livewire.user.edit.distributor');
    }
}
