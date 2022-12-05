<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\UserRepositories;

class UserController extends Controller
{
    /*
    |   Show the profile for the given user.
        *
        @param int $id
        return View
    |
    */   
    public function show($name)
    {
        return "Hello ".$name."...!";
    }

    /*
    |   The user repository instance.
    */
    protected $users;

    public function __construct(UserRepository $users)
    {
        $this->users = $users;
    }

    /*
    |   Store a new user.
        *
        @param Request $request
        @return Response
    */   
    public function store(Request $request)
    {
        $name = $request->name;
    }
}
