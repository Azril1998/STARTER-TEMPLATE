<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class ShowProfile extends Controller
{
     /*
    |   Show the profile for the given user.
        *
        @param int $id
        return View
    |
*/
    public function __invoke($id)
    {
        return view('user.profile');
    }
}