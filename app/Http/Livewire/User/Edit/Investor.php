<?php

namespace App\Http\Livewire\User\Edit;

use App\Models\Investor as ModelsInvestor;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Investor extends Component
{
    private $SORT_KEY = 'investor_sort';
    private $FIELDS_KEY = 'investor_fields';
    public $load = true;
    public $iteration = 0;
    public $option;
    public $users;
    public $sort_column = ['', ''];
    public $listeners = ['emitAll', 'set', 'update'];
    public
        $first_name = [],
        $last_name = [],
        $address = [],
        $size_of_investment = [],
        $special_skills = [],
        $updated_at = [];
    public $fields = [
        'first_name',
        'last_name',
        'address',
        'size_of_investment',
        'special_skills',
        'updated_at'
    ];

    public $userType = 'investor';

    public function emitAll($emitArr)
    {
        foreach ($emitArr as $emit) {
            $this->emit($emit['event'], ...$emit['params']);
        }
    }

    public function set($property, $value)
    {
        $p = explode('.', $property, 2);
        if (count($p) > 1) {
            $this->{$p[0]}[$p[1]] = $value;
        } else {
            $this->{$p[0]} = $value;
        }
    }

    public function mount()
    {

        if (Session::has($this->SORT_KEY)) {
            $this->sort_column = Session::get($this->SORT_KEY);
        }

        $this->users = User::whereHas(
            'roles',
            function ($q) {
                $q->where('name', '=', $this->userType);
            }
        )->whereHas($this->userType);

        if ($this->option != 'all') {
            if ($this->option == 'selected') {
                $usercheckedValue = session()->get('userchecked', []);
                $this->users =    $this->users->get()->toQuery()->whereIn('email', $usercheckedValue);
            } else {
                $optArr = explode('-', $this->option);
                $isCandidate = ($optArr[1] ?? '') == 'candidate';
                $this->users = $this->users->where('status', $isCandidate ? 0 : 1);
            }
        }

        $sorter = $this->getSort();

        if ($sorter) {
            $investor = new ModelsInvestor();
            $investor = $investor->select($sorter->column);

            $this->users = $this->users->select('*')
                ->orderBy(
                    $investor->whereColumn('investors.user_id', 'users.id'),
                    $sorter->sort_type
                );
        } else {
            $this->users = $this->users->latest();
        }

        $this->users = $this->users->get();

        // dd($this->users);

        foreach ($this->users as $user) {
            foreach ($this->fields as $field) {
                $userinvestor = $user->investor;

                $this->{$field}[$user->id] = $userinvestor->{$field};

                if ($field == 'updated_at') {
                    $this->{$field}[$user->id] = (string) $this->{$field}[$user->id];
                }
            }
        }

        // dd($this->dial_code);
    }

    public function sort($column, $order)
    {

        $sorter = $this->getSort();

        if ($sorter && $sorter->column != $column) {
            $order = 'ASC';
        }

        $this->sort_column = empty($order) ? ['', ''] : [
            $column,
            $order
        ];

        if (empty($order)) {
            if (Session::has($this->SORT_KEY)) {
                Session::remove($this->SORT_KEY);
            }
        } else {
            Session::put($this->SORT_KEY, $this->sort_column);
        }

        $this->mount();

        $this->iteration++;

        $this->load = true;
    }

    public function getSort()
    {
        if ($this->sort_column[0] == '') {
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

    public function getData($id)
    {
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

    public function update($id)
    {
        $data = $this->getData($id);
        $data = Arr::except($data, ['updated_at']);
        $investorId = Modelsinvestor::where('user_id', $id)->first()->id;
        $investor = Modelsinvestor::find($investorId);
        $investor->update($data);
        if ($investor) {
            $this->reload();
            $this->updated_at[$id] = (string) $investor->updated_at;
            $this->dispatchBrowserEvent('openDialog', ['title' => 'Success', 'content' => 'Data has been updated']);
        } else {
            $this->dispatchBrowserEvent('openDialog', ['title' => 'Error', 'content' => 'Something went wrong, please try again']);
        }
        $this->emit('removeSpinner');
    }

    public function updateAll()
    {
        $usersId = $this->users->pluck('id')->toArray();
        $updatedId = [];
        foreach ($usersId as $id) {
            $data = $this->getData($id);
            $investorId = ModelsInvestor::where('user_id', $id)->first()->id;
            $investor = ModelsInvestor::find($investorId);
            $investor->update($data);
            array_push($updatedId, $id);
        }

        if (count($usersId) === count($updatedId)) {
            $this->dispatchBrowserEvent('openDialog', ['title' => 'Success', 'content' => 'All data has been updated']);
            $this->reload();
        } else {
            $this->dispatchBrowserEvent('openDialog', ['title' => 'Error', 'content' => 'Something went wrong, please try again']);
        }
        $this->emit('removeSpinner');
    }

    public function render()
    {
        if ($this->load) {
            $this->load = false;
            if (Session::has($this->FIELDS_KEY)) {
                foreach (Session::get($this->FIELDS_KEY) as $field_key => $values) {
                    foreach ($values as $value_key => $value) {
                        $this->{$field_key}[$value_key] = $value;
                    }
                }
            }
        } else {
            $fields = [];
            foreach ($this->fields as $field) {
                $fields[$field] = $this->{$field};
            }
            // dd($fields);
            Session::put($this->FIELDS_KEY, $fields);
        }
        return view('livewire.user.edit.investor');
    }
}
