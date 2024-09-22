<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function index() {
        return response()->json([
            'mensagem' => 'Olá mundo!',
            'cod' => 0
        ]);
    }

}
