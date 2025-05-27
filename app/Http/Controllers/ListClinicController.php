<?php

namespace App\Http\Controllers;

use App\Models\Clinica;
use Illuminate\Http\Request;

class ListClinicController extends Controller
{
    public function list(Request $request) {
        $clinicas = Clinica::all();
        return response($clinicas, 200);
    }
}
