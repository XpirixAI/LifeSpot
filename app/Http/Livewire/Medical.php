<?php

namespace App\Http\Livewire;

use App\Models\DependentMedical;
use Livewire\Component;

class Medical extends Component
{
    public $family_doctor, $phone, $notes, $dependent_id, $asset, $medical;
    public $isModalOpen = 0;

    public function mount($asset)
    {
        $this->dependent_id = $asset->id;
        $this->medical = DependentMedical::where('dependent_id', $asset->id)->latest()->get();
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
            'dependent_id' => '',
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

        DependentMedical::create($validatedData);

        $this->closeModal();

        return redirect(request()->header('Referer'));
    }

    public function editMedical(DependentMedical $medical)
    {
        $this->family_doctor = $medical->family_doctor;
        $this->phone = $medical->phone;
        $this->notes = $medical->notes;
    }

    public function updateMedical(DependentMedical $medical)
    {
        $validatedData = $this->validate();

        $medical->update($validatedData);

        return redirect(request()->header('Referer'));
    }

    public function destroy(DependentMedical $medical)
    {
        $medical->delete();
        return redirect(request()->header('Referer'));
    }

    public function render(DependentMedical $asset)
    {
        $medical = DependentMedical::where('dependent_id', $asset->id)->latest()->get();
        return view('livewire.medical',compact('asset','medical'));
    }
}
