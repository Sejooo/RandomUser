<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // RANDOM USER GENERATOR https://randomuser.me
        $name = json_decode(file_get_contents(''));

        // Determine the gender of a name https://genderize.io
        $gender = json_decode(file_get_contents(''));

        // APIs: Predict the age of a name https://agify.io
        $age = json_decode(file_get_contents(''));

        // Predict the nationality of a name https://nationalize.io
        $nationality = json_decode(file_get_contents(''));
        return view('user-page.user-page');
    }
}
