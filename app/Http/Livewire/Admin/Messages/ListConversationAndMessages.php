<?php

namespace App\Http\Livewire\Admin\Messages;

use App\Models\Conversation;
use App\Models\Message;
use App\Models\User;
use Livewire\Component;


use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ListConversationAndMessages extends Component
{
    public $body;
    public $attachment;

    public $selectedConversation;

    public function mount()
    {
        if (session()->has('selectedConversation')) {
            return $this->selectedConversation = session('selectedConversation');
        }

        $this->selectedConversation = Conversation::query()
            ->where('sender_id', auth()->id())
            ->orWhere('receiver_id', auth()->id())
            ->first();
    }

    public function sendMessage()
    {
        Message::create([
            'conversation_id' => $this->selectedConversation->id,
            'user_id' => auth()->id(),
            'body' => $this->body,
            'attachment' => $this->attachment,
        ]);

        $this->reset('body');

        $this->viewMessage($this->selectedConversation->id);

        $this->dispatchBrowserEvent('scrollDown');
        // dd($this->body);
    }

    public function viewMessage($conversationId)
    {
        $this->selectedConversation = Conversation::findOrFail($conversationId);
    }

    public function render()
    {
        $conversations = Conversation::query()
            ->where('sender_id', auth()->id())
            ->orWhere('receiver_id', auth()->id())
            ->latest()
            ->get();

        
        $relations = array();

        // Find users that are in the current user's estate
        $estate_relationships = DB::table('estate_relationships')->where('owner_id', Auth::user()->id)->get();
        foreach($estate_relationships as $estate_rel) {
            $rel_user = User::find($estate_rel->rel_user_id);
            array_push($relations, $rel_user);
        }

        // Find users that are in the current user's estate
        $non_owned_estate_relationships = DB::table('estate_relationships')->where('rel_user_id', Auth::user()->id)->get();
        foreach($non_owned_estate_relationships as $estate_rel) {
            $non_owned_estate_rel = DB::table('estate_relationships')->where('owner_id', $estate_rel->owner_id)->get();
            foreach($non_owned_estate_rel as $rel) {
                $rel_user = User::find($rel->rel_user_id);
                array_push($relations, $rel_user);
            }
        }

        return view('livewire.admin.messages.list-conversation-and-messages', [
            'conversations' => $conversations,
            'users' => $relations,
        ]);
    }

    public function startConversation($userId)
    {

        $conversation = Conversation::firstOrCreate([
            'sender_id' => auth()->id(),
            'receiver_id' => $userId,
        ]);

        return redirect('/messages')->with('selectedConversation', $conversation);
    }
}
