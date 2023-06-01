<?php

namespace App\Http\Controllers;

use App\Models\Studium;
use Illuminate\Http\Request;

class StudiumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $studia = Studium::all();
        return view('admin.studium.index', compact('studia'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.studium.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate inputs
        $request->validate([
            'name' => 'required',
            'name_off' => 'required',
            'phone_off' => 'required',
            'duration' => 'required',
            'price' => 'required',
            'image' => 'required',
        ]);

        // Uploads files
        $img_name =$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('uploads'), $img_name);

        // Store to Database
        Studium::create([
            'name' => $request->name,
            'name_off' => $request->name_off,
            'phone_off' => $request->phone_off,
            'duration' => $request->duration,
            'price' => $request->price,
            'image' => $img_name,
        ]);

        // Redirect to all data
        return redirect()->route('studium.index')->with('msg', 'Studiam added successfully')->with('type', 'success');
       }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $studium = Studium::findOrFail($id);
        return view('admin.studium.edit', compact('studium'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'name_off' => 'required',
            'phone_off' => 'required',
            'duration' => 'required',
            'price' => 'required',
            'image' => 'required',
        ]);

        $studium = Studium::findOrFail($id);

        if ($request->hasFile('image')) {
            $img_name =$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads'), $img_name);
            $studium->update([
                'image' => $img_name,
            ]);
        }

        $studium->update([
            'name' => $request->name,
            'name_off' => $request->name_off,
            'phone_off' => $request->phone_off,
            'duration' => $request->duration,
            'price' => $request->price,
        ]);

        return redirect()->route('studium.index')->with('msg', 'Studium updated successfully')->with('type', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
