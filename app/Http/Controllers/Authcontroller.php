<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AuthController extends Controller {

    public function me() {
        return [
            "nis" => 3103118013,
            "name" => "Almas Rais Syaebani",
            "gender" => "Laki-laki",
            "phone" => 089665871807,
            "class" => "XII RPL 1"
        ];
    }
}