    <div class="px-4 py-2" style="background: #ffc107; color: white; margin-bottom: 8px; font-size: 22px">
        <img src="{{ asset('assets/img/chats/beautiful-housewife-is-cooking.webp') }}"
             width="50" class="rounded-circle" style="">
        {{$conversation->name}}</div>

@foreach($messages as $message)
    @if($message->isOwn())
        <livewire:conversations.conversation-message-own :message="$message" :key="$message->id" />
    @else
        <livewire:conversations.conversation-message :message="$message" :key="$message->id" />
     @endif
@endforeach


