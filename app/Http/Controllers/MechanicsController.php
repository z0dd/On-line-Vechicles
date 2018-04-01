<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mechanic;
use App\User;
class MechanicsController extends Controller
{
    public function index()
    {
    	dd(User::with('mechanic')->get());
    }
}
