<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ImageController extends Controller
{
    function index($imageName) {
        $path = public_path().'/images/'.$imageName.'.png';

        return Response::download($path);    
    }
}
