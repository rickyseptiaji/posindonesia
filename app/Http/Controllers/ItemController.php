<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    // Menampilkan daftar barang
    public function index()
    {
        $items = Item::all();
        return view('items.index', compact('items'));
    }

    // Menampilkan form untuk menambah barang baru
    public function create()
    {
        return view('items.create');
    }

    // Menyimpan barang baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'weight' => 'nullable|numeric',
            'dimensions' => 'nullable|string',
            'category' => 'nullable|string',
            'status' => 'required|string|in:available,unavailable',
        ]);
        Item::create($request->all());

        return redirect()->route('item.index')->with('success', 'Item created successfully.');
    }

    // Menampilkan detail barang
    public function show(Item $item)
    {
        return view('items.show', compact('item'));
    }

    // Menampilkan form untuk mengedit barang
    public function edit(Item $item)
    {
        return view('items.edit', compact('item'));
    }

    // Mengupdate barang di database
    public function update(Request $request, Item $item)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'weight' => 'nullable|numeric',
            'dimensions' => 'nullable|string',
            'category' => 'nullable|string',
            'status' => 'required|string|in:available,unavailable',
        ]);

        $item->update($request->all());

        return redirect()->route('item.index')->with('success', 'Item updated successfully.');
    }

    // Menghapus barang dari database
    public function destroy(Item $item)
    {
        $item->delete();

        return redirect()->route('item.index')->with('success', 'Item deleted successfully.');
    }
}
