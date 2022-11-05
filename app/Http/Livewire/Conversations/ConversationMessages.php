<?php

namespace App\Http\Livewire\Conversations;

use App\Models\Conversation;
use Illuminate\Support\Collection;
use Livewire\Component;
use function view;

class ConversationMessages extends Component
{
    public $conversation;
    public $messages;

    public function getListeners()
    {
        'message.created' => ''
    }

    public function mount(Conversation $conversation, Collection $messages)
    {
        $this->conversation = $conversation;
        $this->messages = $messages;
    }

    public function render()
    {
        return view('livewire.conversations.conversation-messages');
    }
}
