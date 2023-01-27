<?php

namespace App\Http\Controllers;

use App\Models\admin\Admin;
use App\Models\CustomerServiceChat;
use App\Models\CustomerServiceMessages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Str;

class CustomerServiceChatController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $user = Auth::user();
        $admin = Auth::guard('admin')->user();
        $userType = $admin ? 'admin' : 'user';
        $conversations = $userType === 'admin' ? $admin->cs_chats : $user->cs_chats;
        return view('site.customer-service.index', compact( 'conversations','userType'));
    }


    public function create()
    {
        if(auth()->check() && $user = auth()->user()){
            $admins = Admin::all();
            return view('site.customer-service.create', compact('admins'));
        }
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $admin = Auth::guard('admin')->user();
        $conversation = new CustomerServiceChat();
        $conversation->uuid = Str::uuid();
        if ($admin) {
            $conversation->admin_id = $admin->id;
        } else {
            $conversation->user_id = $user->id;
            $conversation->admin_id = $request->admin_id;
        }
        $conversation->save();
         return redirect()->route('customer-server.index', ['uuid' => $conversation->uuid]);

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CustomerServiceChat  $customerServiceChat
     * @return \Illuminate\Http\Response
     */
    public function showConversation($uuid)
    {
        $user = Auth::user();
        $admin = Auth::guard('admin')->user();
        $userType = $admin ? 'admin' : 'user';
        $conversations = $userType === 'admin' ? $admin->cs_chats : $user->cs_chats;

        $conversation = CustomerServiceChat::where('uuid', $uuid)->first();
        $messages = $conversation->messages;
        $user = Auth::user();
        $admin = Auth::guard('admin')->user();
        $userType = $admin ? 'admin' : 'user';
        return view('site.customer-service.showConversation', compact('conversation','conversations', 'messages', 'userType'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CustomerServiceChat  $customerServiceChat
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomerServiceChat $customerServiceChat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CustomerServiceChat  $customerServiceChat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CustomerServiceChat $customerServiceChat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustomerServiceChat  $customerServiceChat
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerServiceChat $customerServiceChat)
    {
        //
    }
}
