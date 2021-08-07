<?php

namespace App\Http\Controllers;

use App\Repositories\BilletRepository;
use Illuminate\Http\Request;

class BilletController extends Controller
{
    public function getAll(Request $request, BilletRepository $billet): array
    {
        return $billet->billets($request);
    }
}
