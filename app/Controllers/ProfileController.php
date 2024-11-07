<?php 

namespace App\Controllers;

class ProfileController extends Controller
{
    public function index()
    {

        // return $this->view('profile', [
        //     "message" => "Hello from controller"
        // ]);
        return view('profile', [
            "message" => "Hello from controller"
        ]);
    }
}