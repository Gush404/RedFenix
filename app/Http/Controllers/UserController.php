<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    
    public function changeName(Request $request)
    {
        $user = auth()->user();
        $user->name = $request->input('name');
        $user->save();
                
        return response()->json(['success' => true]);
    }
    
}