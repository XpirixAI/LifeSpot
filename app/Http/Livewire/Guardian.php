<?php

namespace App\Http\Livewire;

use App\Models\DependentGuardian;
use Livewire\Component;

class Guardian extends Component
{
    public $fname, $lname, $email, $phone, $dependent_id, $asset, $guardian;
    public $isModalOpen = 0;

    public function mount($asset)
    {
        $this->dependent_id = $asset->id;
        $this->guardian = DependentGuardian::where('dependent_id', $asset->id)->latest()->get();
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
            'dependent_id' => '',
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

        DependentGuardian::create($validatedData);

        $this->closeModal();

        return redirect(request()->header('Referer'));
    }

    public function editGuardian(DependentGuardian $guardian)
    {
        $this->fname = $guardian->fname;
        $this->lname = $guardian->lname;
        $this->email = $guardian->email;
        $this->phone = $guardian->phone;
    }

    public function updateGuardian(DependentGuardian $guardian)
    {
        $validatedData = $this->validate();

        $guardian->update($validatedData);

        return redirect(request()->header('Referer'));
    }

    public function destroy(DependentGuardian $guardian)
    {
        $guardian->delete();
        return redirect(request()->header('Referer'));
    }

    public function render(DependentGuardian $asset)
    {
        $guardian = DependentGuardian::where('dependent_id', $asset->id)->latest()->get();

        return view('livewire.guardian',compact('asset','guardian'));
    }
}
