<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CustomerServiceChat;
use Illuminate\Http\Request;

class CustomerServerChatController extends Controller
{
    public function show($uuid)
    {
        $conversation = CustomerServiceChat::where('uuid', $uuid)->with(['admin', 'messages', 'user'])->first();
        return response()->json($conversation);
    }
}
