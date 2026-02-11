<?php

namespace App\Http\Controllers;

use App\Models\Argot;
use Illuminate\Http\Request;

class ArgotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $argots = Argot::get();
        return view('argots.show', compact('argots'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('argots.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Argot::create(array_merge($request->all(), [
            'actuel' => $request->has('actuel'),
        ]));

        return redirect()->route('argots.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Argot $argot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Argot $argot)
    {
        return view('argots.update', compact('argot'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Argot $argot)
    {
        $argot->update(array_merge($request->all(), [
            'actuel' => $request->has('actuel'),
        ]));

        return redirect()->route('argots.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Argot $argot)
    {
        $argot->delete();

        return redirect()->route('argots.index');
    }
}
