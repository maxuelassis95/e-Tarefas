<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function index() {

        $user = User::find(1);

        $profile = $user->profile;
        
        return response()->json([
            'name: ' => $user->name,
            'email: ' => $user->email,
            'image: ' => $profile->image
        ]);

    }

}
