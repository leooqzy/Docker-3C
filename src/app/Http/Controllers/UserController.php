<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return [
            'id' => 1,
            'name' => 'Jon Snow'
        ];;
    }

    public function show(User $user){

        return $user;

    }
}
