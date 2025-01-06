<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function create()
    {
        // Menampilkan view untuk formulir tambah buku
        return view('books.create');
    }

    public function store(Request $request)
    {
        // Untuk validasi input
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'category' => 'required',
            'cover' => 'nullable|image|mimes:jpg,png,jpeg',
            'file' => 'required|mimes:pdf',
            'synopsis' => 'nullable',
            'year' => 'required|integer',
        ]);
    
        // Menyimpan file cover ke storage
        $coverPath = $request->file('cover') ? $request->file('cover')->store('covers', 'public') : null;
        // Menyimpan file pdf ke storage
        $filePath = $request->file('file')->store('books', 'public');
    
        // Menyimpan data ke database
        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'category' => $request->category,
            'cover' => $coverPath,
            'file' => $filePath,
            'synopsis' => $request->synopsis,
            'year' => $request->year,
        ]);
    
        return redirect()->route('books.index');
    }

    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }
}
