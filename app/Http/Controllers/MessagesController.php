<?php

namespace App\Http\Controllers;

use App\Messages;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Datatables;

class MessagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Messages $m)
    {
        return view('website.messages.recu', ['messages' => Messages::Received(Auth::user()->id)->orderBy('created_at', 'desc')->groupby('emetteur')->distinct()->get()]);

    }
    public function create(Request $request)
    {
        $user_id=$request->get('user');

        $user=User::find($user_id);

        return view('website.messages.create',compact('user'))->with('message', ' message sent with success ! ');
    }
    public function store(Requests\MessageRequest $mRequest,Messages $m)
    {
        //$user = Auth::user();
        $data = [
            'recepteur' => $mRequest->get('user_id'),
            'contenu' => $mRequest->get('contenu'),
            'emetteur' => $mRequest->user()->id,


        ];
        $m->create($data);
        return Redirect('/envoyer')->with('message', ' message sent with success ! ');

    }

    public function envoyer(Messages $m, User $user)
    {
        return view('website.messages.envoyer', ['messages' => Messages::Reçu(Auth::user()->id)->orderBy('created_at', 'desc')->groupby('recepteur')->distinct()->get()])->with('message','Response sent with success!');

    }

    public function show($id,User $user)
    {
        $user=$user->find($id);

        $message=Messages::findOrFail($id);
        //  $message->vu=1;
        $message->save();
        $id=$message->recepteur;

        // $msg_recus=Message::SentByUser($id)->where('recepteur',$message->recepteur)->orderBy('created_at','desc');
        $msg_envoye=Messages::Recu($id)->orderBy('created_at','desc')->get();

        return view('website.messages.showenvoyer',['message'=>$msg_envoye,'user'=>$user] );

    }

    public function showrecu($id,User $user )
    {
        $user=$user->find($id);

        $message=Messages::findOrFail($id);

        $message->save();
        $id=$message->emetteur;

        $msg_recus=Messages::SentByUser($id)->orderBy('created_at','desc')->get();

        return view('website.messages.showrecu',['message'=>$msg_recus,'user'=>$user],compact('message') );

    }



}
