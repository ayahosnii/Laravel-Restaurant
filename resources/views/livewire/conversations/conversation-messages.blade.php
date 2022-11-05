@foreach($messages as $message)
    @if($message->isOwn())
        <livewire:conversations.conversation-message-own
    @else

@endforeach


