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

    // public $file;
    public $original_filename = "";
    public $filepath = "";
    public $success = 0;
    public $isImage = false;
    public $image_exts;
    public $user_id;


    public $file, $title;

    public $files = [];

    protected function rules()
    {
        return [
            'title' => 'required',
            'file' => 'required',
        ];

    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function submit()
    {
        // $validatedData = $this->validate([
        //     'title' => 'required',
        //     'file' => 'required',

        // ]);

        // $validatedData['name'] = $this->file->store('files', 'public');
        $validatedData['name'] = $this->file->store('upload/docs_personal', 'public');

        // $validatedData['user_id'] = auth()->id();
        // dd($validatedData);
        // Reset value
        $this->success = 0;
        $this->isImage = false;

        // Validate
        $this->validate([
            'file' => 'required|mimes:png,jpg,jpeg,avif,csv,pdf,html|max:2048',//2MB Max
        ]);

        // Orginal File name
        $this->original_filename = $this->file->getClientOriginalName();

        // Upload file
        $filename = $this->file->store('files', 'public');

        // Check file extension is an image type
        $extension = strtolower($this->file->extension());
        $image_exts = array('png','jpg','jpeg','avif');
        if(in_array($extension,$image_exts)){
            $this->isImage = true;
        }



        // Success
        // $this->success = 1;

        // File path
        $this->filepath = Storage::url($filename);




        $validatedData = $this->validate();
        $validatedData['user_id'] = auth()->id();

        File::create($validatedData);

        session()->flash('message', 'File successfully uploaded.');
        // return redirect(request()->header('Referer'));
    }


    // public function updatedProductImage()
    // {
    //     $extension = strtolower($this->file->extension());
    //     $image_exts = array('png','jpg','jpeg','avif');
    //     if(in_array($extension,$image_exts)){
    //         $this->isImage = true;
    //     }
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
