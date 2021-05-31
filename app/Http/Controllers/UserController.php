<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function work() {
        $date = date('Y-m-d');

        return view('work', [
            'date' => $date,
        ]);
    }
}
