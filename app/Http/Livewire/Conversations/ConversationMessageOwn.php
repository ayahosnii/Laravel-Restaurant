<?php

namespace App\Http\Livewire\Conversations;

use App\Models\Message;
use Illuminate\Support\Collection;
use Livewire\Component;
use function view;

class ConversationMessageOwn extends Component
{
    public $message;
    public function mount(Message $message)
    {
        $this->message = $message;
    }
    public function render()
    {
        return view('livewire.conversations.conversation-message-own');
    }
}
