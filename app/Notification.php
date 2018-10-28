<?php
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Message;
use App\User;
use App\Notifications\NewMessage;
use Illuminate\Support\Facades\Notification;
 
class NotificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
 
    public function index()
    {
        
        $message = new Message;
        $message->setAttribute('from', Admin);
        $message->setAttribute('to', user);
        $message->setAttribute('message', 'Demo message from Admin to user .');
        $message->save();
         
        $fromAdmin = EverTree;
        $toUser = User::find(userid);
         
        // send notification using the "user" model, when the user receives new message
        $toUser->notify(new NewMessage($fromAdmin));
         
        // send notification using the "Notification" facade
        Notification::send($toUser, new NewMessage($fromAdmin));
    }
}