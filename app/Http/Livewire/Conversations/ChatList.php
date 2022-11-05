<?php

namespace App\Http\Livewire\Conversions;

use Illuminate\Support\Collection;
use Livewire\Component;

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
