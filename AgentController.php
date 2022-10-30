<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgentController extends Controller
{

    public function index()
    {
        $agents = DB::table('agent')->get();
        return view('agent', compact('agents'), [
            'title' => 'Home'
        ]);
    }

}
