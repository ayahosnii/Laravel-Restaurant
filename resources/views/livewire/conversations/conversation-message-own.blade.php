<div class="media w-50 ml-auto mb-3">
    <div class="media-body">
        <div class="bg-warning rounded py-2 px-3 mb-2">
            <p class="text-small mb-0 text-white">{{$message->body}}</p>
        </div>
        <p class="small text-muted"><small>{{$message->created_at->diffForHumans()}}</small></p>
    </div>
</div>
