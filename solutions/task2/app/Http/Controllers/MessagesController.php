<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function create(){
        return view('contact');
    }
    
    public function submit(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        
        // Создаем сообщение по модели
        $message = new Message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');
        
        // Сохраняем сообщение в БД
        $message->save();
        
        return redirect('/messages')->with('success', 'Сообщение успешно отправлено');
    }
    
    public function getMessages(){
        $messages = Message::orderBy('created_at', 'desc')->get();
        
        return view('messages')->with('messages', $messages);
    }
}
