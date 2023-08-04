<?php

namespace App\Http\Livewire\Admin\Messages;

use App\Models\Conversation;
use App\Models\Message;
use Livewire\Component;

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

        return view('livewire.admin.messages.list-conversation-and-messages', [
            'conversations' => $conversations
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
