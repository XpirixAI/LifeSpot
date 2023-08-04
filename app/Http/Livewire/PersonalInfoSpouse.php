<?php

namespace App\Http\Livewire;

use App\Models\BirthDay;
use App\Models\BirthMonth;
use App\Models\UserSpouse;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PersonalInfoSpouse extends Component
{
    public $spouse_fname, $spouse_lname, $isBeneficiary, $estate_role, $spouse_email, $spouse_phone, $birth_month, $birth_day, $birth_year, $anniversary_month, $anniversary_day, $anniversary_year, $user_id, $asset, $spouse;
    public $isModalOpen = 0;

    public function mount($asset)
    {

        $this->user_id = $asset->id;

        $this->spouse = UserSpouse::where('user_id', Auth::user()->id)->latest()->get();
    }

    public function openModal()
    {
        $this->isModalOpen = true;
    }

    public function closeModal()
    {
        $this->isModalOpen = false;
    }

    public function create()
    {
        $this->openModal();
    }

    protected function rules()
    {
        return [
            'spouse_fname' => 'required|max:35',
            'spouse_lname' => 'required|max:35',
            'isBeneficiary' => '',
            'estate_role' => 'max:15',
            'spouse_email' => '',
            'spouse_phone' => '',
            'birth_month' => '',
            'birth_day' => '',
            'birth_year' => '',
            'anniversary_month' => '',
            'anniversary_day' => '',
            'anniversary_year' => '',

            // 'notes' => '',
            // 'user_id' => '',
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function addUserSpouse()
    {
        $validatedData = $this->validate();
        $validatedData['user_id'] = auth()->id();

        UserSpouse::create($validatedData);

        $this->closeModal();

        return redirect(request()->header('Referer'));
    }

    public function editUserSpouse(UserSpouse $spouse)
    {
        $this->spouse_fname = $spouse->spouse_fname;
        $this->spouse_lname = $spouse->spouse_lname;
        $this->estate_role = $spouse->estate_role;
        $this->spouse_email = $spouse->spouse_email;
        $this->spouse_phone = $spouse->spouse_phone;
        $this->birth_month = $spouse->birth_month;
        $this->birth_day = $spouse->birth_day;
        $this->birth_year = $spouse->birth_year;
        $this->anniversary_month = $spouse->anniversary_month;
        $this->anniversary_day = $spouse->anniversary_day;
        $this->anniversary_year = $spouse->anniversary_year;

    }

    public function updateUserSpouse(UserSpouse $spouse)
    {
        $validatedData = $this->validate();

        $spouse->update($validatedData);

        return redirect(request()->header('Referer'));
    }

    public function destroy(UserSpouse $spouse)
    {
        $spouse->delete();
        return redirect(request()->header('Referer'));
    }

    public function render(UserSpouse $asset)
    {
        $months = BirthMonth::all();
        $days = BirthDay::all();
        $spouse = UserSpouse::where('user_id', $asset->id)->latest()->get();
        return view('livewire.personal-info-spouse',compact('asset','spouse','months','days'));
    }

}
