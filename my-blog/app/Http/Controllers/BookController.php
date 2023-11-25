<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::with('users')->get();
        return view('book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authors = user::all();
        return view('book.add', compact('authors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $bookData = $request->validate([
            'title' => 'required|max:255',
            'user_ids' => 'required|array',
            'user_ids.*' => 'exists:users,id',
            'description' => 'required',
            'type_book' => 'required',
            'department' => 'required',
            'specialization' => 'required',
            'pdf' => 'required|mimes:pdf,docx|max:2048',
        ]);
        $pdfPath = $request->file('pdf')->store('public/pdf');
        //dd($pdfPath);
        $bookData['pdf'] = $pdfPath;
        $book = new Book($bookData);
        $book->save();
        $users = $request->input('user_ids', []);
        $book->users()->attach($users);
        return redirect()->back()->with('success', 'Book added successfully.');
    }
    public function showPdf($id)
    {
        $book = Book::findOrFail($id);
        $pdfPath = $book->pdf;
        return Storage::download($pdfPath);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
