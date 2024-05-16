<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AduanModel;
use Illuminate\Support\Facades\Redirect;

class AduanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $breadcrumb = (object)[
            'title' => 'Dashboard',
            // 'list' =>['Home','Welcome']
        ];
        $activeMenu = 'pengaduan';

        $aduan = AduanModel::all();
        return view('aduan.index', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu, 'aduan' => $aduan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('aduan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
            'status' => 'required|in:Dalam Proses,Valid',
            'NIK_warga' => 'required|string|size:16|exists:t_users,NIK',
        ]);

        AduanModel::create($validatedData);
        return redirect()->route('aduan.index')->with('success', 'Aduan created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $aduan = AduanModel::find($id);

        if ($aduan === null) {
            return Redirect::route('aduan.index')->with('error', 'Aduan not found.');
        }

        return view('aduan.show', compact('aduan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $aduan = AduanModel::find($id);

        if ($aduan === null) {
            return Redirect::route('aduan.index')->with('error', 'Aduan not found.');
        }

        return view('aduan.edit', compact('aduan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
            'status' => 'required|in:Dalam Proses,Valid',
            'NIK_warga' => 'required|string|size:16|exists:t_users,NIK',
        ]);

        $aduan = AduanModel::find($id);

        if ($aduan === null) {
            return Redirect::route('aduan.index')->with('error', 'Aduan not found.');
        }

        $aduan->update($validatedData);
        return redirect()->route('aduan.index')->with('success', 'Aduan updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $aduan = AduanModel::find($id);

        if ($aduan === null) {
            return Redirect::route('aduan.index')->with('error', 'Aduan not found.');
        }

        $aduan->delete();
        return redirect()->route('aduan.index')->with('success', 'Aduan deleted successfully.');
    }
}
