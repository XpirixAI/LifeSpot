<?php

namespace App\Http\Livewire;

use App\Models\PetEmergency;
use Livewire\Component;

class PetEmergencycontact extends Component
{
    public $fname, $lname, $phone, $email, $notes, $pet_id, $asset, $er_contact;
    public $isModalOpen = 0;

    public function mount($asset)
    {
        $this->pet_id = $asset->id;
        $this->er_contact = PetEmergency::where('pet_id', $asset->id)->latest()->get();
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
            'fname' => 'required|max:35',
            'lname' => 'required|max:35',
            'phone' => '',
            'email' => '',
            'notes' => '',
            'pet_id' => '',
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function addERContact()
    {
        $validatedData = $this->validate();
        $validatedData['user_id'] = auth()->id();

        PetEmergency::create($validatedData);

        $this->closeModal();

        return redirect(request()->header('Referer'));
    }

    public function editERContact(PetEmergency $er_contact)
    {
        $this->fname = $er_contact->fname;
        $this->lname = $er_contact->lname;
        $this->phone = $er_contact->phone;
        $this->email = $er_contact->email;
        $this->notes = $er_contact->notes;
    }

    public function updateERContact(PetEmergency $er_contact)
    {
        $validatedData = $this->validate();

        $er_contact->update($validatedData);

        return redirect(request()->header('Referer'));
    }

    public function destroy(PetEmergency $er_contact)
    {
        $er_contact->delete();
        return redirect(request()->header('Referer'));
    }

    public function render(PetEmergency $asset)
    {
        $er_contact = PetEmergency::where('pet_id', $asset->id)->latest()->get();
        return view('livewire.pet-emergencycontact',compact('asset','er_contact'));
    }

}
