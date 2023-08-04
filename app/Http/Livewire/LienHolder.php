<?php

namespace App\Http\Livewire;

use App\Models\RealestateLien;
use Livewire\Component;

class LienHolder extends Component
{
    public $creditor_name, $balance_owed, $account_number, $phone, $website, $notes, $real_estate_id, $asset, $creditor;
    public $isModalOpen = 0;

    public function mount($asset)
    {
        $this->real_estate_id = $asset->id;
        $this->creditor = RealestateLien::where('real_estate_id', $asset->id)->latest()->get();
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
            'creditor_name' => 'required|max:35',
            'balance_owed' => '',
            'account_number' => '',
            'phone' => '',
            'website' => '',
            'notes' => '',
            'real_estate_id' => '',
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function addCreditor()
    {
        $validatedData = $this->validate();
        $validatedData['user_id'] = auth()->id();

        RealestateLien::create($validatedData);

        $this->closeModal();

        return redirect(request()->header('Referer'));
    }

    public function editCreditor(RealestateLien $creditor)
    {
        $this->creditor_name = $creditor->creditor_name;
        $this->balance_owed = $creditor->balance_owed;
        $this->account_number = $creditor->account_number;
        $this->phone = $creditor->phone;
        $this->website = $creditor->website;
        $this->notes = $creditor->notes;
    }

    public function updateCreditor(RealestateLien $creditor)
    {
        $validatedData = $this->validate();

        $creditor->update($validatedData);

        return redirect(request()->header('Referer'));
    }

    public function destroy(RealestateLien $creditor)
    {
        $creditor->delete();
        return redirect(request()->header('Referer'));
    }

    public function render(RealestateLien $asset)
    {
        $creditor = RealestateLien::where('real_estate_id', $asset->id)->latest()->get();
        return view('livewire.lien-holder',compact('asset','creditor'));
    }

}
