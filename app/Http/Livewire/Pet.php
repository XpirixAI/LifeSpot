<?php

namespace App\Http\Livewire;

use App\Models\PetGuardian;
use Livewire\Component;

class Pet extends Component
{
    public $fname, $lname, $email, $phone, $pet_id, $asset, $guardian;
    public $isModalOpen = 0;

    public function mount($asset)
    {
        $this->pet_id = $asset->id;
        $this->guardian = PetGuardian::where('pet_id', $asset->id)->latest()->get();
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
            'fname' => 'required|max:14',
            'lname' => 'required|max:14',
            'email' => ['required', 'email'],
            'phone' => 'required',
            'pet_id' => '',
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function addGuardian()
    {
        $validatedData = $this->validate();
        $validatedData['user_id'] = auth()->id();

        PetGuardian::create($validatedData);

        $this->closeModal();

        return redirect(request()->header('Referer'));
    }

    public function editGuardian(PetGuardian $guardian)
    {
        $this->fname = $guardian->fname;
        $this->lname = $guardian->lname;
        $this->email = $guardian->email;
        $this->phone = $guardian->phone;
    }

    public function updateGuardian(PetGuardian $guardian)
    {
        $validatedData = $this->validate();

        $guardian->update($validatedData);

        return redirect(request()->header('Referer'));
    }

    public function destroy(PetGuardian $guardian)
    {
        $guardian->delete();
        return redirect(request()->header('Referer'));
    }

    public function render(PetGuardian $asset)
    {
        $guardian = PetGuardian::where('pet_id', $asset->id)->latest()->get();

        return view('livewire.pet',compact('asset','guardian'));
    }
}
