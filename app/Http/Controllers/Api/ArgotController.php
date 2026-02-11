<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Argot;
use Illuminate\Http\Request;

class ArgotController extends Controller
{
    public function index()
    {
        return response()->json(Argot::all());
    }

    public function show(Argot $argot)
    {
        return response()->json($argot);
    }

    public function store(Request $request)
    {
        $argot = Argot::create($request->all());

        return response()->json($argot, 201);
    }

    public function update(Request $request, Argot $argot)
    {
        $argot->update($request->all());

        return response()->json($argot);
    }

    public function destroy(Argot $argot)
    {
        $argot->delete();

        return response()->json(null, 204);
    }
}
