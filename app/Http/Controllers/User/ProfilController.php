<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProfilController extends Controller
{
    public function index(Request $request, int $id):Response
    {
        return Response(view('user/profile',['id'=>$id]));
    }
}
