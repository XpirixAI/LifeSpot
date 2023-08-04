<?php

namespace App\Http\Livewire;

use App\Models\UserMilitary;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PersonalInfoMilitary extends Component
{
    public $branch, $rank, $service_length, $notes, $user_id, $asset, $military;
    public $isModalOpen = 0;

    public function mount($asset)
    {

        $this->user_id = $asset->id;

        $this->military = UserMilitary::where('user_id', Auth::user()->id)->latest()->get();
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
            'branch' => 'required|max:35',
            'rank' => 'max:35',
            'service_length' => '',


            'notes' => '',
            // 'user_id' => '',
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function addUserMilitary()
    {
        $validatedData = $this->validate();
        $validatedData['user_id'] = auth()->id();

        UserMilitary::create($validatedData);

        $this->closeModal();

        return redirect(request()->header('Referer'));
    }

    public function editUserMilitary(UserMilitary $military)
    {
        $this->branch = $military->branch;
        $this->rank = $military->rank;
        $this->service_length = $military->service_length;

        $this->notes = $military->notes;
    }

    public function updateUserMilitary(UserMilitary $military)
    {
        $validatedData = $this->validate();

        $military->update($validatedData);

        return redirect(request()->header('Referer'));
    }

    public function destroy(UserMilitary $military)
    {
        $military->delete();
        return redirect(request()->header('Referer'));
    }

    public function render(UserMilitary $asset)
    {
        $military = UserMilitary::where('user_id', $asset->id)->latest()->get();
        return view('livewire.personal-info-military',compact('asset','military'));
    }
}
