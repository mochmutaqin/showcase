<?php

namespace App\Http\Controllers;

use App\Models\Showcase;

class ShowcaseController extends Controller
{
    public function index()
    {
        $data = Showcase::where('user_id', auth()->id())->get();
        return view('dashboard', compact('data'));
    }

    public function show($id)
    {
        $s = Showcase::findOrFail($id);

        if ($s->user_id !== auth()->id()) {
            abort(403);
        }

        return view('detail', compact('s'));
    }

    public function unit($serial)
    {
        $s = Showcase::where('serial_number', $serial)->firstOrFail();
        return view('unit', compact('s'));
    }
}