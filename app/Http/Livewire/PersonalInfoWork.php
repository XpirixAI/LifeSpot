<?php

namespace App\Http\Livewire;

use App\Models\UserWork;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PersonalInfoWork extends Component
{
    public $employer, $title_position, $work_phone, $work_email, $notes, $user_id, $asset, $work;
    public $isModalOpen = 0;

    public function mount($asset)
    {

        $this->user_id = $asset->id;

        $this->work = UserWork::where('user_id', Auth::user()->id)->latest()->get();
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
            'employer' => 'required|max:35',
            'title_position' => 'max:35',
            'work_phone' => '',
            'work_email' => '',

            'notes' => '',
            // 'user_id' => '',
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function addUserWork()
    {
        $validatedData = $this->validate();
        $validatedData['user_id'] = auth()->id();

        UserWork::create($validatedData);

        $this->closeModal();

        return redirect(request()->header('Referer'));
    }

    public function editUserWork(UserWork $work)
    {
        $this->employer = $work->employer;
        $this->title_position = $work->title_position;
        $this->work_phone = $work->work_phone;
        $this->work_email = $work->work_email;
        $this->notes = $work->notes;
    }

    public function updateUserWork(UserWork $work)
    {
        $validatedData = $this->validate();

        $work->update($validatedData);

        return redirect(request()->header('Referer'));
    }

    public function destroy(UserWork $work)
    {
        $work->delete();
        return redirect(request()->header('Referer'));
    }

    public function render(UserWork $asset)
    {
        $work = UserWork::where('user_id', $asset->id)->latest()->get();
        return view('livewire.personal-info-work',compact('asset','work'));
    }

}
