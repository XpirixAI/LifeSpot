<?php

namespace App\Http\Livewire;

use App\Models\UserActivity;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PersonalInfoActivity extends Component
{
    public $activity_name, $phone, $notes, $user_id, $asset, $activity;
    public $isModalOpen = 0;

    public function mount($asset)
    {

        $this->user_id = $asset->id;

        $this->activity = UserActivity::where('user_id', Auth::user()->id)->latest()->get();
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
            // 'user_id' => '',
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function addUserActivity()
    {
        $validatedData = $this->validate();
        $validatedData['user_id'] = auth()->id();

        UserActivity::create($validatedData);

        $this->closeModal();

        return redirect(request()->header('Referer'));
    }

    public function editUserActivity(UserActivity $activity)
    {
        $this->activity_name = $activity->activity_name;
        $this->phone = $activity->phone;
        $this->notes = $activity->notes;
    }

    public function updateUserActivity(UserActivity $activity)
    {
        $validatedData = $this->validate();

        $activity->update($validatedData);

        return redirect(request()->header('Referer'));
    }

    public function destroy(UserActivity $activity)
    {
        $activity->delete();
        return redirect(request()->header('Referer'));
    }

    public function render(UserActivity $asset)
    {
        $activity = UserActivity::where('user_id', $asset->id)->latest()->get();
        return view('livewire.personal-info-activity',compact('asset','activity'));
    }
}
