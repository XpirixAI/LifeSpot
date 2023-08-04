<?php

namespace App\Http\Livewire;

use App\Models\AssetLien;
use Livewire\Component;

class Creditor extends Component
{
    public $creditor_name, $balance_owed, $account_number, $phone, $website, $notes, $asset_id, $asset, $creditor;
    public $isModalOpen = 0;

    public function mount($asset)
    {
        $this->asset_id = $asset->id;
        $this->creditor = AssetLien::where('asset_id', $asset->id)->latest()->get();
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
            'asset_id' => '',
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

        AssetLien::create($validatedData);

        $this->closeModal();

        return redirect(request()->header('Referer'));
    }

    public function editCreditor(AssetLien $creditor)
    {
        $this->creditor_name = $creditor->creditor_name;
        $this->balance_owed = $creditor->balance_owed;
        $this->account_number = $creditor->account_number;
        $this->phone = $creditor->phone;
        $this->website = $creditor->website;
        $this->notes = $creditor->notes;
    }

    public function updateCreditor(AssetLien $creditor)
    {
        $validatedData = $this->validate();

        $creditor->update($validatedData);

        return redirect(request()->header('Referer'));
    }

    public function destroy(AssetLien $creditor)
    {
        $creditor->delete();
        return redirect(request()->header('Referer'));
    }

    public function render(AssetLien $asset)
    {
        $creditor = AssetLien::where('asset_id', $asset->id)->latest()->get();
        return view('livewire.creditor',compact('asset','creditor'));
    }
}
