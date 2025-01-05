<?php

namespace App\Http\Controllers;

use App\Models\Book;

class AdminController extends Controller
{
    public function index()
    {
        // Mengambil semua data dari tabel books
        $booksTotal = Book::count();
    
        // Mengirim data ke view
        return view('admin.dashboard', compact('booksTotal'));
    }
}
