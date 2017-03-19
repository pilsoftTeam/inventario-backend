<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUserInfo($email)
    {
        $user = User::where('email', $email)->get();
        return response()->json($user, 200);
    }
}
