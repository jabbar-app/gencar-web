<?php

namespace App\Http\Controllers;

use App\Models\Selection;
use App\Models\User;
use Illuminate\Http\Request;

class SelectionController extends Controller
{
    public function create(User $user)
    {
        return view('selection.create', compact('user'));
    }

    public function store(User $user, Request $request)
    {
        $validated = $request->validate([
            'user_id' => '',
            'pj_name' => 'nullable|string|max:255',
            'pj_contact' => 'nullable|string|max:20',
            'dateline' => 'nullable|date'
        ]);
        $validated['user_id'] = $user->id;

        Selection::create($validated);

        return redirect()->route('users.index')->with('success', 'Data seleksi berhasil disimpan.');
    }

    public function edit(User $user)
    {
        $selection = Selection::where('user_id', $user->id)->first();
        return view('selection.edit', compact('user', 'selection'));
    }

    public function update(User $user, Request $request)
    {
        $selection = Selection::where('user_id', $user->id)->first();

        $selection->update([
            'pj_name' => $request->pj_name,
            'pj_contact' => $request->pj_contact,
            'dateline' => $request->dateline,
        ]);

        return redirect()->route('users.index')->with('success', 'Data seleksi berhasil disimpan.');
    }
}
