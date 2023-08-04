<?php

namespace App\Http\Livewire;

use App\Models\File;
use App\Models\Personaldocs;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\TemporaryUploadedFile;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class FileUploader extends Component
{
    use WithFileUploads;

    public $original_filename = "";
    public $filepath = "";
    public $success = 0;
    public $isImage = false;
    public $isModalOpen = 0;

    public $file, $title;

    public $files = [];

    // public function mount($asset)
    // {
    //     $this->pet_id = $asset->id;
    //     $this->guardian = PetGuardian::where('pet_id', $asset->id)->latest()->get();
    // }

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
            'title' => 'required|max:30',
            'file' => 'required',
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function submit()
    {
        $validatedData = $this->validate();
        $validatedData['user_id'] = auth()->id();
        $validatedData['category'] = 'personal'; //Change this when on different set of docs
        $validatedData['name'] = $this->file->store('upload/docs_personal', 'public');

        File::create($validatedData);
        session()->flash('message', 'File successfully uploaded.');
// Check file extension is an image type
        $extension = strtolower($this->file->extension());
        $image_exts = array('png','jpg','jpeg','avif');
       if(in_array($extension,$image_exts)){
            $this->isImage = true;
        }
 // Reset value
        // $this->success = 0;
        // $this->isImage = false;
        // $this->original_filename ="";
        // $this->filepath = "";
        // $this->title ="";


            // public function finishUpload($name, $tmpPath, $isMultiple)
    // {
    //     // dd($name);
    //     $this->cleanupOldUploads();

    //     $files = collect($tmpPath)->map(function ($i) {
    //         return TemporaryUploadedFile::createFromLivewire($i);
    //     })->toArray();
    //     $this->emitSelf('upload:finished', $name, collect($files)->map->getFilename()->toArray());

    //     $files = array_merge($this->getPropertyValue($name), $files);
    //     $this->syncInput($name, $files);
    // }


        // $this->closeModal();

        // return redirect(request()->header('Referer'));
    }
// public $flag;
//     public function deactivate($value)
//     {
//         $flag = 1;
//     }

    public function close()
    {
        $this->reset(['title']);
        $this->dispatchBrowserEvent('close-modal');
        return redirect(request()->header('Referer'));
    }


        // public function finishUpload($name, $tmpPath, $isMultiple)
    // {
    //     // dd($name);
    //     $this->cleanupOldUploads();

    //     $files = collect($tmpPath)->map(function ($i) {
    //         return TemporaryUploadedFile::createFromLivewire($i);
    //     })->toArray();
    //     $this->emitSelf('upload:finished', $name, collect($files)->map->getFilename()->toArray());

    //     $files = array_merge($this->getPropertyValue($name), $files);
    //     $this->syncInput($name, $files);
    // }

    // public function editGuardian(PetGuardian $guardian)
    // {
    //     $this->fname = $guardian->fname;
    //     $this->lname = $guardian->lname;
    //     $this->email = $guardian->email;
    //     $this->phone = $guardian->phone;
    // }

    // public function updateGuardian(PetGuardian $guardian)
    // {
    //     $validatedData = $this->validate();

    //     $guardian->update($validatedData);

    //     return redirect(request()->header('Referer'));
    // }

    // public function destroy(PetGuardian $guardian)
    // {
    //     $guardian->delete();
    //     return redirect(request()->header('Referer'));
    // }
        // public function finishUpload($name, $tmpPath, $isMultiple)
    // {
    //     // dd($name);
    //     $this->cleanupOldUploads();

    //     $files = collect($tmpPath)->map(function ($i) {
    //         return TemporaryUploadedFile::createFromLivewire($i);
    //     })->toArray();
    //     $this->emitSelf('upload:finished', $name, collect($files)->map->getFilename()->toArray());

    //     $files = array_merge($this->getPropertyValue($name), $files);
    //     $this->syncInput($name, $files);
    // }

    public function render()
    {
        return view('livewire.file-uploader');
    }
}
// {
//     use WithFileUploads;

//     // public $file;
//     public $original_filename = "";
//     public $filepath = "";
//     public $success = 0;
//     public $isImage = false;
//     public $image_exts;
//     public $user_id;


//     public $file, $title;

//     public $files = [];

//     protected function rules()
//     {
//         return [
//             'title' => 'required',
//             'file' => 'required',
//         ];

//     }

//     public function updated($fields)
//     {
//         $this->validateOnly($fields);
//     }

//     public function submit()
//     {
//         // $validatedData = $this->validate([
//         //     'title' => 'required',
//         //     'file' => 'required',

//         // ]);

//         // $validatedData['name'] = $this->file->store('files', 'public');
//         $validatedData['name'] = $this->file->store('upload/docs_personal', 'public');

//         // $validatedData['user_id'] = auth()->id();
//         // dd($validatedData);
//         // Reset value
//         $this->success = 0;
//         $this->isImage = false;

//         // Validate
//         $this->validate([
//             'file' => 'required|mimes:png,jpg,jpeg,avif,csv,pdf,html|max:2048',//2MB Max
//         ]);

//         // Orginal File name
//         $this->original_filename = $this->file->getClientOriginalName();

//         // Upload file
//         $filename = $this->file->store('files', 'public');

//         // Check file extension is an image type
//         $extension = strtolower($this->file->extension());
//         $image_exts = array('png','jpg','jpeg','avif');
//         if(in_array($extension,$image_exts)){
//             $this->isImage = true;
//         }



//         // Success
//         // $this->success = 1;

//         // File path
//         $this->filepath = Storage::url($filename);




//         $validatedData = $this->validate();
//         $validatedData['user_id'] = auth()->id();

//         File::create($validatedData);

//         session()->flash('message', 'File successfully uploaded.');
//         // return redirect(request()->header('Referer'));
//     }


//     // public function updatedProductImage()
//     // {
//     //     $extension = strtolower($this->file->extension());
//     //     $image_exts = array('png','jpg','jpeg','avif');
//     //     if(in_array($extension,$image_exts)){
//     //         $this->isImage = true;
//     //     }
//     // }



    // public function finishUpload($name, $tmpPath, $isMultiple)
    // {
    //     // dd($name);
    //     $this->cleanupOldUploads();

    //     $files = collect($tmpPath)->map(function ($i) {
    //         return TemporaryUploadedFile::createFromLivewire($i);
    //     })->toArray();
    //     $this->emitSelf('upload:finished', $name, collect($files)->map->getFilename()->toArray());

    //     $files = array_merge($this->getPropertyValue($name), $files);
    //     $this->syncInput($name, $files);
    // }

//     public function render()
//     {
//         return view('livewire.file-uploader');
//     }
// }
