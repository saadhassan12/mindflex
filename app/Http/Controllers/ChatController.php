<?php

namespace App\Http\Controllers;

use App\Models\ChatSession;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Events\MessageSent;

class ChatController extends Controller
{
    public function startChat(Request $request)
    {
        $chatSession = ChatSession::where('doctor_id', $request->doctor_id)
            ->where('patient_id', $request->patient_id)
            ->first();
        // If no session exists, create a new one
        if (!$chatSession) {
            $chatSession = ChatSession::create([
                'doctor_id' => $request->doctor_id,
                'patient_id' => $request->patient_id,
            ]);
        }

        if (auth()->user()->type == 'patient') {
            return response()->json([
                'session' => $chatSession->id
            ]);
        } else {
            return redirect()->route('chat.view', ['session' => $chatSession->id]);

        }
    }

    public function viewChat($sessionId)
    {


        // Retrieve the chat session by ID
        $chatSession = ChatSession::with(['doctor', 'patient'])->findOrFail($sessionId);


        // Fetch messages related to this chat session
        $messages = Message::where('chat_session_id', $sessionId)->get();

        // Pass data to the view (you'll create the view file)
        return view('chat.view', [
            'chatSession' => $chatSession,
            'messages' => $messages,
        ]);
    }

    public function sendMessage(Request $request)
    {
        $message = new Message();
        $message->user_id = auth()->id();
        $message->chat_session_id = $request->chat_session_id;
        $message->content = $request->message;
        $message->save();
        return response()->json([
            'user_name' => auth()->user()->first_name . ' ' . auth()->user()->last_name,
            'message_content' => $message->content,
            'message_timestamp' => $message->created_at->format('H:i')
        ]);
    }
}

