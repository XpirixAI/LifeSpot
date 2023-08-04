<?php

namespace App\Http\Livewire;

use App\Models\DependentSchool;
use Livewire\Component;

class School extends Component
{
    public $school_name, $phone, $notes, $dependent_id, $asset, $school;
    public $isModalOpen = 0;

    public function mount($asset)
    {
        $this->dependent_id = $asset->id;
        $this->school = DependentSchool::where('dependent_id', $asset->id)->latest()->get();
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
            'school_name' => 'required|max:35',
            'phone' => '',
            'notes' => '',
            'dependent_id' => '',
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function addSchool()
    {
        $validatedData = $this->validate();
        $validatedData['user_id'] = auth()->id();

        DependentSchool::create($validatedData);

        $this->closeModal();

        return redirect(request()->header('Referer'));
    }

    public function editSchool(DependentSchool $school)
    {
        $this->school_name = $school->school_name;
        $this->phone = $school->phone;
        $this->notes = $school->notes;
    }

    public function updateSchool(DependentSchool $school)
    {
        $validatedData = $this->validate();

        $school->update($validatedData);

        return redirect(request()->header('Referer'));
    }

    public function destroy(DependentSchool $school)
    {
        $school->delete();
        return redirect(request()->header('Referer'));
    }

    public function render(DependentSchool $asset)
    {
        $school = DependentSchool::where('dependent_id', $asset->id)->latest()->get();
        return view('livewire.school',compact('asset','school'));
    }

}
