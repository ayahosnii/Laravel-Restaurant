<?php

namespace App\Http\Livewire\Conversations;

use Illuminate\Support\Collection;
use Livewire\Component;
use function view;

class ChatList extends Component
{
    public $chats;
    public function mount(Collection $conversations)
    {
        $this->chats = $conversations->reverse();
    }
    public function render()
    {
        return view('livewire.conversations.chat-list');
    }
}
