<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function index(){
       $user = User::where('id',1)->first();
       return response()->json(['users' => $user]);
   }


}
