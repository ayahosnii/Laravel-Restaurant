<div>
    @foreach($chats as $chat)
        <a href="{{route('conversations.show', $chat)}}" class="list-group-item list-group-item-action warning text-white rounded-0">
            <div class="media"><img src="{{ asset('assets/img/chats/beautiful-housewife-is-cooking.webp') }}" alt="{{$chat->name != '' ? $chat->name : $chat->users->pluck('name')->join(', ')}}" width="50" class="rounded-circle">
                <div class="media-body ml-4">
                    <div class="d-flex align-items-center justify-content-between mb-1">
                        <h6 class="mb-0">{{$chat->name != '' ? $chat->name : $chat->users->pluck('name')->join(', ')}}</h6><small class="small font-weight-bold">25 Dec</small>
                    </div>
                    <p class="font-italic mb-0 text-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                </div>
            </div>
        </a>
        {{--@empty
            <p>No Conversation Found</p>--}}
    @endforeach
    {{--
      <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0">
                                        <div class="media"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
                                            <div class="media-body ml-4">
                                                <div class="d-flex align-items-center justify-content-between mb-1">
                                                    <h6 class="mb-0">Jason Doe</h6><small class="small font-weight-bold">14 Dec</small>
                                                </div>
                                                <p class="font-italic text-muted mb-0 text-small">Lorem ipsum dolor sit amet, consectetur. incididunt ut labore.</p>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0">
                                        <div class="media"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
                                            <div class="media-body ml-4">
                                                <div class="d-flex align-items-center justify-content-between mb-1">
                                                    <h6 class="mb-0">Jason Doe</h6><small class="small font-weight-bold">9 Nov</small>
                                                </div>
                                                <p class="font-italic text-muted mb-0 text-small">consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0">
                                        <div class="media"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
                                            <div class="media-body ml-4">
                                                <div class="d-flex align-items-center justify-content-between mb-1">
                                                    <h6 class="mb-0">Jason Doe</h6><small class="small font-weight-bold">18 Oct</small>
                                                </div>
                                                <p class="font-italic text-muted mb-0 text-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0">
                                        <div class="media"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
                                            <div class="media-body ml-4">
                                                <div class="d-flex align-items-center justify-content-between mb-1">
                                                    <h6 class="mb-0">Jason Doe</h6><small class="small font-weight-bold">17 Oct</small>
                                                </div>
                                                <p class="font-italic text-muted mb-0 text-small">consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0">
                                        <div class="media"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
                                            <div class="media-body ml-4">
                                                <div class="d-flex align-items-center justify-content-between mb-1">
                                                    <h6 class="mb-0">Jason Doe</h6><small class="small font-weight-bold">2 Sep</small>
                                                </div>
                                                <p class="font-italic text-muted mb-0 text-small">Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0">
                                        <div class="media"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
                                            <div class="media-body ml-4">
                                                <div class="d-flex align-items-center justify-content-between mb-1">
                                                    <h6 class="mb-0">Jason Doe</h6><small class="small font-weight-bold">30 Aug</small>
                                                </div>
                                                <p class="font-italic text-muted mb-0 text-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0">
                                        <div class="media"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
                                            <div class="media-body ml-4">
                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                    <h6 class="mb-0">Jason Doe</h6><small class="small font-weight-bold">21 Aug</small>
                                                </div>
                                                <p class="font-italic text-muted mb-0 text-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                            </div>
                                        </div>
                                    </a>

     --}}
</div>
