<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FriendController extends Controller
{
    public function showFriends(){
        $resultado= DB::select('SELECT * FROM dpto');
        return $resultado;
    }
}
