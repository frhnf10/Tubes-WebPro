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
        // Validasi input
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

        // Menyimpan data ke database dengan status `pending`
        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'category' => $request->category,
            'cover' => $coverPath,
            'file' => $filePath,
            'synopsis' => $request->synopsis,
            'year' => $request->year,
            'status' => 'pending', // default status is pending
        ]);

        return redirect()->route('books.create')->with('success', 'Request berhasil dikirim ke admin.');
    }

    public function index()
    {
        // Menampilkan hanya buku yang statusnya `approved`
        $books = Book::where('status', 'approved')->get();
        return view('books.index', compact('books'));
    }

    public function showRequests()
    {
    // Ambil data buku dengan status pending
    $books = Book::where('status', 'pending')->get();
    
    // Kirim data ke view
    return view('admin.bookrequests', compact('books'));
    }


    public function approve($id)
    {
        // Menyetujui buku dengan mengubah status menjadi `approved`
        $book = Book::findOrFail($id);
        $book->update(['status' => 'approved']);
        return redirect()->route('admin.bookrequests')->with('success', 'Buku berhasil disetujui.');
    }

    public function reject($id)
    {
        // Menolak buku dengan menghapusnya dari database
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect()->route('admin.bookrequests')->with('success', 'Buku berhasil ditolak.');
    }
}
