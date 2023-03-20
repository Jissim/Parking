<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function getUsers()
    {
        // Query to retrieve user data
        $users = DB::table('users')->select('id', 'name', 'email')->get();

        // Check if query returned results
        if ($users->isNotEmpty()) {
            // Return array of user data as JSON response
            return response()->json($users, 200);
        } else {
            // Return error message as JSON response
            return response()->json(['error' => 'No users found'], 404);
        }
    }
}
