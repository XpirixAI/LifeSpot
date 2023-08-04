<?php

namespace App\Http\Livewire;

use App\Models\UserEducation;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PersonalInfoEducation extends Component
{
    public $school, $degree, $school_phone, $school_email, $school_start_month, $school_start_day, $school_start_year, $school_end_month, $school_end_day, $school_end_year, $notes, $user_id, $asset, $education;
    public $isModalOpen = 0;

    public function mount($asset)
    {

        $this->user_id = $asset->id;

        $this->education = UserEducation::where('user_id', Auth::user()->id)->latest()->get();
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
            'school' => 'required|max:35',
            'degree' => 'max:35',
            'school_phone' => '',
            'school_email' => '',
            'school_start_month' => '',
            // 'school_start_day' => '',
            'school_start_year' => '',
            'school_end_month' => '',
            // 'school_end_day' => '',
            'school_end_year' => '',

            'notes' => '',
            // 'user_id' => '',
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function addUserEducation()
    {
        $validatedData = $this->validate();
        $validatedData['user_id'] = auth()->id();

        UserEducation::create($validatedData);

        $this->closeModal();

        return redirect(request()->header('Referer'));
    }

    public function editUserEducation(UserEducation $education)
    {
        $this->school = $education->school;
        $this->degree = $education->degree;
        $this->school_phone = $education->school_phone;
        $this->school_email = $education->school_email;
        $this->school_start_month = $education->school_start_month;
        // $this->school_start_day = $education->school_start_day;
        $this->school_start_year = $education->school_start_year;
        $this->school_end_month = $education->school_end_month;
        // $this->school_end_day = $education->school_end_day;
        $this->school_end_year = $education->school_end_year;
        $this->notes = $education->notes;
    }

    public function updateUserEducation(UserEducation $education)
    {
        $validatedData = $this->validate();

        $education->update($validatedData);

        return redirect(request()->header('Referer'));
    }

    public function destroy(UserEducation $education)
    {
        $education->delete();
        return redirect(request()->header('Referer'));
    }

    public function render(UserEducation $asset)
    {
        $education = UserEducation::where('user_id', $asset->id)->latest()->get();
        return view('livewire.personal-info-education',compact('asset','education'));
    }
}
