<?php

namespace App\Http\Livewire\Conversations;

use Livewire\Component;

class ConversationCreate extends Component
{
    public $name = '';
    public $body = '';
    public $users = [];

    public function addUser($user)
    {
        $this->users[] = $user;
    }
    public function create()
    {

    }
    public function render()
    {
        return view('livewire.conversations.conversation-create');
    }
}
