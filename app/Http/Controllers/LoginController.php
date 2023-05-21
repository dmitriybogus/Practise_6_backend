<?php

namespace App\Http\Controllers;

use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;


class LoginController extends Controller
{
    public function index()
    {

        return view('login');
    }
}

