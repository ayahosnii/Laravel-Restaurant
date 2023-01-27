<?php

namespace App\Http\Controllers\Api;

use App\Events\NewCustomerMessage;
use App\Http\Controllers\Controller;
use App\Models\CustomerServiceMessages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class CustomerServerMessageController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function store(Request $request)
    {

      // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'conversation_id' => 'required|exists:customer_service_chats,id',
            'user_id' => 'required',
            'body' => 'required|string',
        ]);

        if ($validator->fails()) {
            // If validation fails, return a 422 Unprocessable Entity response
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Create a new message with the request data
        $message = CustomerServiceMessages::create([
            'conversation_id' => $request->conversation_id,
            'user_id' => $request->user_id,
            'sender_type' =>'user',
            'body' => $request->body,
        ]);

        broadcast(new NewCustomerMessage($message))->toOthers();
        return response()->json(['message' => $message], 201);
    }
}
