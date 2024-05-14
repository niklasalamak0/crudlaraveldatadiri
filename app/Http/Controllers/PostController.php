<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\View\View;

use App\Http\Controllers\Controller;

use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * index
     * 
     * @return View
     */
    public function index(): View
    {
        $posts = Post::latest()->paginate(5);

        return view('posts.index', compact('posts'));
    }

    public function create(): View
    {
        return view('posts.create');
    }

    public function store(Request $request): RedirectResponse
{
    // Validate form
    $this->validate($request, [
        'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        'nama' => 'required|min:5',
        'jurusan' => 'required|min:1',
        'nohp' => 'required|numeric|min:100',
        'email' => 'required|email|min:10',
        'alamat' => 'required|min:10',
    ]);

    // Upload image
    $image = $request->file('image');
    $image->storeAs('public/posts', $image->hashName());

    // Create post
    Post::create([
        'image' => $image->hashName(),
        'nama' => $request->input('nama'),
        'jurusan' => $request->input('jurusan'),
        'nohp' => $request->input('nohp'),
        'email' => $request->input('email'),
        'alamat' => $request->input('alamat'),
    ]);

    // Redirect to index
    return redirect()->route('posts.index')->with(['success' => 'Berhasil Disimpan!']);
}

    //menampilkan
    public function show(string $id):View
    {
        $post = Post::findOrFail($id);

        return view('posts.show', compact('post'));
    }

    //hapus
    public function destroy($id) : RedirectResponse
    {
        $post = Post::findOrFail($id);
    
        Storage::delete('public/posts/' . $post->image);
    
        $post->delete();
    
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Dihapus']);

    }

    //edit dan update
    public function edit(string $id): View
    {
        $post = Post::findOrFail($id);

        return view('posts.edit', compact('post'));
    }
    
    public function update(Request $request, $id): RedirectResponse
{
    // Validate form
    $this->validate($request, [
        'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        'nama' => 'required|min:5',
        'jurusan' => 'required|min:1',
        'nohp' => 'required|min:12',
        'email' => 'required|email|min:5',
        'alamat' => 'required|min:5',
    ]);

    $post = Post::findOrFail($id);

    if ($request->hasFile('image')) {
        // Upload image
        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

        // Delete old image
        Storage::delete('public/posts/' . $post->image);

        // Update post with new image
        $post->update([
            'image' => $image->hashName(),
            'nama' => $request->input('nama'),
            'jurusan' => $request->input('jurusan'),
            'nohp' => $request->input('nohp'),
            'email' => $request->input('email'),
            'alamat' => $request->input('alamat'),
        ]);
    } else {
        // Update post without changing the image
        $post->update([
            'nama' => $request->input('nama'),
            'jurusan' => $request->input('jurusan'),
            'nohp' => $request->input('nohp'),
            'email' => $request->input('email'),
            'alamat' => $request->input('alamat'),
        ]);
    }

    // Redirect to index
    return redirect()->route('posts.index')->with(['success' => 'Berhasil Disimpan!']);
}

    
}


