<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthUserController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        return User::with('roles')->where('id', $userId)->get()[0];
    }
}