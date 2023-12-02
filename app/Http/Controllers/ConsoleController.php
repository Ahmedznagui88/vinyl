<?php

namespace App\Http\Controllers;

use App\Models\Vinyl;
use App\Models\Console;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConsoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consoles = Console::all();
        return view('console.index', compact('consoles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vinyls = Vinyl::all();
        return view('console.create', compact('vinyls'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        
        //protected massagnment
        $console = Console::create([
            'name' => $request->name,
            'brand' => $request->brand,
            'description' => $request->description,
            'logo' => $request->file('logo')->store('public/logos'),
            'user_id' => Auth::user()->id,
        ]);
        $console->vinyls()->attach($request->vinyls);
        return redirect()->Route('console.index')->with('ConsoleCreated' , 'You\'ve added a new turntable');
    }

    /**
     * Display the specified resource.
     */
    public function show(Console $console)
    {
       return view('console.show', compact('console'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Console $console)
    {
        $vinyls = Vinyl::all();
        return view('console.edit', compact('console', 'vinyls'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Console $console)
    {
        $console->update([
            'name' => $request->name,
            'brand' => $request->brand,
            'description' => $request->description,
            'logo' => $request->file('logo') ? $request->file('logo')->store('public/logos') : $console->logo,
            'user_id' => Auth::user()->id,
        ]);
        $console->vinyls()->detach();
        $console->vinyls()->attach($request->vinyls);
        return redirect()->route('console.index')->with('consoleUpdated', "You've successfully updated turntable");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Console $console)
    {
        $console->vinyls()->detach();
        $console->delete();
        return redirect()->route('console.index')->with('consoleDeleted', "You've DELETED turntable $console->name");
    }
}
