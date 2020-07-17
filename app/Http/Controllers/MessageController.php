<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Pusher\Pusher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use BaklySystems\LaravelMessenger\Models\Message;
use BaklySystems\LaravelMessenger\Facades\Messenger;
use BaklySystems\LaravelMessenger\Models\Conversation;
class MessageController extends Controller
{
    public function index(){

       $messages=DB::table('messages_contact_us')->get();
        // dd($messages);
        return view('backend.messages.messages',compact('messages'));



    }


    public function destroy($id){

        $messages=DB::table('messages_contact_us')->where('id',$id)->delete();

         return  back()->with('success','The message was deleted successfully');

     }
     public function chat()
     {
         $threads  = Messenger::threads(auth()->id());
        // dd($withUser);
         return view('vendor.messenger.messenger1', compact('threads'));
     }

     public function laravelMessenger($withId)
     {
        //  dd('test');
        
         Messenger::makeSeen(auth()->id(), $withId);
         $withUser = config('messenger.user.model', 'App\Model\User')::findOrFail($withId);
         if(!(($withUser->hasRole('seller') && auth()->user()->hasRole('client'))||($withUser->hasRole('client') && auth()->user()->hasRole('seller')))){
            return redirect('/');
         }


         $messages = Messenger::messagesWith(auth()->id(), $withUser->id);
        //  $message['image'] = User::find($withUser)->image;
         $threads  = Messenger::threads(auth()->id());
        // dd($threads);
         return view('vendor.messenger.messenger1', compact('withUser', 'messages', 'threads'));
     }
 
     /**
      * Create a new message.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return Response
      */
     public function store(Request $request)
     {
         $this->validate($request, Message::rules());
 
         $authId = auth()->id();
         $withId = $request->withId;
         $user = User::find($withId);
         if(!(($user->hasRole('seller') && auth()->user()->hasRole('client'))||($user->hasRole('client') && auth()->user()->hasRole('seller')))){
            return response()->json([
                'success' => false,
                'message' => []
            ], 200);
         }
         $conversation = Messenger::getConversation($authId, $withId);

         if (! $conversation) {
             $conversation = Messenger::newConversation($authId, $withId);
         }

         $message = Messenger::newMessage($conversation->id, $authId, $request->message);
         $message['image'] = User::find($authId)->image;
         
         // Pusher
         $pusher = new Pusher(
             config('messenger.pusher.app_key'),
             config('messenger.pusher.app_secret'),
             config('messenger.pusher.app_id'),
             [
                 'cluster' => config('messenger.pusher.options.cluster')
             ]
         );
         $pusher->trigger('messenger-channel', 'messenger-event', [
             'message'    => $message,
             'senderId'   => $authId,
             'withId'     => $withId
         ]);
 
         return response()->json([
             'success' => true,
             'message' => $message
         ], 200);
     }
 
     /**
      * Load threads view.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return Response.
      */
     public function loadThreads(Request $request)
     {
         if ($request->ajax()) {
             $withUser = config('messenger.user.model', 'App\User')::findOrFail($request->withId);
             $threads  = Messenger::threads(auth()->id());
             $view     = view('messenger::partials.threads', compact('threads', 'withUser'))->render();
 
             return response()->json($view, 200);
         }
     }
 
     /**
      * Load more messages.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return Response.
      */
     public function moreMessages(Request $request)
     {
         $this->validate($request, ['withId' => 'required|integer']);
 
         if ($request->ajax()) {
             $messages = Messenger::messagesWith(
                 auth()->id(),
                 $request->withId,
                 $request->take
             );
             $view = view('messenger::partials.messages', compact('messages'))->render();
 
             return response()->json([
                 'view'          => $view,
                 'messagesCount' => $messages->count()
             ], 200);
         }
     }
 
     /**
      * Make a message seen.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return Response
      */
     public function makeSeen(Request $request)
     {
         Messenger::makeSeen($request->authId, $request->withId);
 
         return response()->json(['success' => true], 200);
     }
 
     /**
      * Delete a message.
      *
      * @param  int  $id
      * @return Response.
      */
     public function destroy1($id)
     {
        if(!(($withUser->hasRole('seller') && auth()->user()->hasRole('client'))||($withUser->hasRole('client') && auth()->user()->hasRole('seller')))){
            return response()->json(['success' => false], 403);
         }

         $confirm = Messenger::deleteMessage($id, auth()->id());
        
         return response()->json(['success' => true], 200);
     }
}
