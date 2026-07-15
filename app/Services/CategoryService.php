<?php

namespace App\Services;

use App\Models\Category;

class CategoryService
{
    /**
     * Mengambil kategori beserta item di dalamnya berdasarkan ID.
     * * @param int $id
     * @return Category|null
     */
    public function getCategoryWithItems(int $id)
    {
        // Menggunakan eager loading 'with' untuk membawa relasi items
        return Category::with('items')->find($id);
    }
}


