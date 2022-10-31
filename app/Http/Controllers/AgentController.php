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

    public function add(){
        return view('add', [
            'title' => 'Add'
        ]);
    }

    public function input(Request $request){
        $request->validate([
            'agent_name' => 'required|min:1',
            'agent_desc' => 'required',
        ]);

        DB::table('agent')->insert([
            'agent_name' => $request->agent_name,
            'agent_desc' => $request->agent_desc,
            'agent_pict' => $request->agent_pict
        ]);
        return redirect('/');
    }

    public function delete(Request $request){
        DB::table('agent')->where('agent_id', $request->id)->delete();
        return redirect('/');
    }

    public function edit($id){
        $agents = DB::table('agent')->where('agent_id', $id)->get();

        return view('edit', ['agent' => $agents], [
            'title' => 'Edit'
        ]);
    }

    public function update(Request $request){
        $request->validate([
            'agent_name' => 'required|min:1',
            'agent_desc' => 'required',
            // 'agent_image' => 'required|mimes:png,jpg',
        ]);

        DB::table('agent')->where('agent_id', $request->agent_id)->update([
            'agent_name' => $request->agent_name,
            'agent_desc' => $request->agent_desc,
            'agent_pict' => $request->agent_pict
        ]);

        return redirect('/');
    }
}
