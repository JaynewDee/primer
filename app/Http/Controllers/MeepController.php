<?php

namespace App\Http\Controllers;

use App\Models\Meep;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class MeepController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        return Inertia::render('Meeps/Index', [
            'meeps' => Meep::with('user:id,name')->latest()->get(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);
 
        $request->user()->meeps()->create($validated);
 
        return redirect(route('meeps.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Meep $meep)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Meep $meep)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Meep $meep)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Meep $meep)
    {
        //
    }
}
