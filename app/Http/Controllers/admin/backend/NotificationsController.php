<?php

namespace App\Http\Controllers\admin\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationsController extends Controller
{
    public function getNotifications()
    {
        return [
            'read'      => Auth::guard('admin')->user()->readNotifications,
            'unread'    => Auth::guard('admin')->user()->unreadNotifications,
            'usertype'  => auth()->guard('admin'),
        ];
    }

    public function markAsRead(Request $request)
    {
        return Auth::guard('admin')->user()->notifications->where('id', $request->id)->markAsRead();
    }

    //    public function markAsReadAndRedirect($id)
//    {
//        $notification = auth()->user()->notifications->where('id', $id)->first();
//        $notification->markAsRead();
//
//        if (auth()->user()->roles->first()->name == 'user') {
//
//            if ($notification->type == 'App\Notifications\NewCommentForPostOwnerNotify') {
//                return redirect()->route('users.comment.edit', $notification->data['id']);
//            } else {
//                return redirect()->back();
//            }
//        }
//
//    }

}
