<?php

namespace App\Http\Controllers;

use App\Models\MESSAGEPRIVE;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function addMessage(Request $request) {

        $request->validate([
            'id_user' => 'numeric | required',
            'id_user_envoyer' => 'numeric | required',
            'contenu' => 'string | required',
        ]);

        $message = new MESSAGEPRIVE();
        $message->ID_USER = $request->id_user;
        $message->ID_USER_ENVOYER = $request->id_user_envoyer;
        $message->CONTENU = $request->contenu;
        $message->save();
        return true;
    }

    public function getAll() {
        return MESSAGEPRIVE::all();
    }
}
