<?php

namespace App\Http\Livewire;

use App\Models\Pet;
use App\Models\PetMedical;
use Livewire\Component;

class PetVet extends Component
{
    public $family_doctor, $phone, $notes, $pet_id, $asset, $medical;
    public $isModalOpen = 0;

    public function mount($asset)
    {
        $this->pet_id = $asset->id;
        $this->medical = PetMedical::where('pet_id', $asset->id)->latest()->get();
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
            'pet_id' => '',
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function addMedical()
    {
        $validatedData = $this->validate();
        $validatedData['user_id'] = auth()->id();

        PetMedical::create($validatedData);

        $this->closeModal();

        return redirect(request()->header('Referer'));
    }

    public function editMedical(PetMedical $medical)
    {
        $this->family_doctor = $medical->family_doctor;
        $this->phone = $medical->phone;
        $this->notes = $medical->notes;
    }

    public function updateMedical(PetMedical $medical)
    {
        $validatedData = $this->validate();

        $medical->update($validatedData);

        return redirect(request()->header('Referer'));
    }

    public function destroy(PetMedical $medical)
    {
        $medical->delete();
        return redirect(request()->header('Referer'));
    }

    public function render(PetMedical $asset)
    {
        $medical = PetMedical::where('pet_id', $asset->id)->latest()->get();
        return view('livewire.pet-vet',compact('asset','medical'));
    }

}
