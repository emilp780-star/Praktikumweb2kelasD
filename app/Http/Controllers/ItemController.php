<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreItemRequest;
use App\Models\Item;

class ItemController extends Controller
{
    public function store(StoreItemRequest $request)
    {
        $item = Item::create($request->validated());

        return response()->json([
            'message' => 'Data berhasil disimpan',
            'data' => $item
        ], 201);
    }

    public function index()
    {
        return response()->json(Item::all());
    }

    public function show($id)
    {
        $item = Item::find($id);

        if (!$item) {
            return response()->json([
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

        return response()->json($item);
    }

    public function destroy($id)
    {
        $item = Item::find($id);

        if (!$item) {
            return response()->json([
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

        $item->delete();

        return response()->json(null, 204);
    }
}
