<?php

// app/Http/Controllers/BookController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\MenuDetail;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::with('detail')->get();
        return view('menus.index', compact('menus'));
    }

    public function create()
    {
        return view('menus.create');
    }

    public function store(Request $request)
    {
        $menu = Menu::create($request->only('nama_menu'));
        $menu->detail()->create($request->only('deskripsi', 'tanggal_ubah'));
        return redirect()->route('menus.index')->with('success', 'Menu created successfully.');
    }

    public function show($id)
    {
        $menu = Menu::with('detail')->findOrFail($id);
        return view('menus.show', compact('menu'));
    }

    public function edit($id)
    {
        $menu = Menu::with('detail')->findOrFail($id);
        return view('menus.edit', compact('menu'));
    }

    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);
        $menu->update($request->only('nama_menu'));
        $menu->detail()->update($request->only('deskripsi', 'tanggal_ubah'));
        return redirect()->route('menus.index')->with('success', 'Menu updated successfully.');
    }

    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->detail()->delete();
        $menu->delete();
        return redirect()->route('menus.index')->with('success', 'Menu deleted successfully.');
    }
}
