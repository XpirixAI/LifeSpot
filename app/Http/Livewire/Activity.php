<?php

namespace App\Http\Livewire;

use App\Models\DependentActivity;
use Livewire\Component;

class Activity extends Component
{
    public $activity_name, $phone, $notes, $dependent_id, $asset, $activity;
    public $isModalOpen = 0;

    public function mount($asset)
    {
        $this->dependent_id = $asset->id;
        $this->activity = DependentActivity::where('dependent_id', $asset->id)->latest()->get();
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
            'activity_name' => 'required|max:35',
            'phone' => '',
            'notes' => '',
            'dependent_id' => '',
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function addActivity()
    {
        $validatedData = $this->validate();
        $validatedData['user_id'] = auth()->id();

        DependentActivity::create($validatedData);

        $this->closeModal();

        return redirect(request()->header('Referer'));
    }

    public function editActivity(DependentActivity $activity)
    {
        $this->activity_name = $activity->activity_name;
        $this->phone = $activity->phone;
        $this->notes = $activity->notes;
    }

    public function updateActivity(DependentActivity $activity)
    {
        $validatedData = $this->validate();

        $activity->update($validatedData);

        return redirect(request()->header('Referer'));
    }

    public function destroy(DependentActivity $activity)
    {
        $activity->delete();
        return redirect(request()->header('Referer'));
    }

    public function render(DependentActivity $asset)
    {
        $activity = DependentActivity::where('dependent_id', $asset->id)->latest()->get();
        return view('livewire.activity',compact('asset','activity'));
    }

}
