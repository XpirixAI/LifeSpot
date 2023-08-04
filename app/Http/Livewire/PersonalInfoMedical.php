<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\UserMedical;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class PersonalInfoMedical extends Component
{
    public $family_doctor, $phone, $notes, $user_id, $asset, $medical;
    public $isModalOpen = 0;

    public function mount($asset)
    {

        $this->user_id = $asset->id;

        $this->medical = UserMedical::where('user_id', Auth::user()->id)->latest()->get();
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
            'family_doctor' => 'required|max:35',
            'phone' => '',
            'notes' => '',
            // 'user_id' => '',
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function addUserMedical()
    {
        $validatedData = $this->validate();
        $validatedData['user_id'] = auth()->id();

        UserMedical::create($validatedData);

        $this->closeModal();

        return redirect(request()->header('Referer'));
    }

    public function editUserMedical(UserMedical $medical)
    {
        $this->family_doctor = $medical->family_doctor;
        $this->phone = $medical->phone;
        $this->notes = $medical->notes;
    }

    public function updateUserMedical(UserMedical $medical)
    {
        $validatedData = $this->validate();

        $medical->update($validatedData);

        return redirect(request()->header('Referer'));
    }

    public function destroy(UserMedical $medical)
    {
        $medical->delete();
        return redirect(request()->header('Referer'));
    }

    public function render(UserMedical $asset)
    {
        $medical = UserMedical::where('user_id', $asset->id)->latest()->get();
        return view('livewire.personal-info-medical',compact('asset','medical'));
    }

}
