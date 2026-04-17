<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RegistrationController extends Controller
{
    //
    public  function register(Request $request)
    {

        Log::info("Registration Called with data:" . $request);
    }
}
