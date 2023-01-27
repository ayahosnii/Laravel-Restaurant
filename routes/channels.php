<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('App.Models.admin.Admin.{id}', function ($admin, $id) {
    return (int) $admin->id === (int) $id;
});

Broadcast::channel('conversations.{id}', function ($user, $id) {
    return $user->inConversation($id);
});

Broadcast::channel('conversation.{id}', function ($user, $id) {
    return $user->conversations->contains($id);
});


