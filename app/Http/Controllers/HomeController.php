<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dropee;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $results = Dropee::orderBy('location', 'asc')->get();

        return view('home', compact('results'));
    }

    public function edit($id)
    {
        $dropee = Dropee::where('id', $id)->first();

        return view('update', compact('dropee'));
    }
    
    public function update(Request $request, $id)
    {
        $dropee = Dropee::where('id', $id)->first();

        if ($request->old_loc !== $request->location) {

        }

        $dropee->update($request->all());
    
        return redirect()->route('home')
                        ->with('success','Table updated successfully');
    }
}
