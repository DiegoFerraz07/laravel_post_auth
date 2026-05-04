<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;

use function Pest\Laravel\delete;

class MainController extends Controller
{
    public function index(): View
    {
        $posts = Post::with('user')->get();
        return view('dashboard', ['posts' => $posts]);
    }

    public function createPost()
    {
        if (Gate::denies('post.create')) {
            abort(403, 'Voĉe não tem permissão para criar um post.');
        }

        return view('create-post');
    }

    public function storePost(Request $request)
    {
        if (Gate::denies('post.create')) {
            abort(403, 'Voĉe não tem permissão para criar um post.');
        }

        $request->validate(
            [
                'title' => 'required|min:3|max:100',
                'content' => 'required|min:3|max:100',
            ],
            [
                'title.required' => "O campo title é obrigatório.",
                'title.min' => 'O campo title deve ter no mínimo :min caracteres.',
                'title.max' => 'O campo title deve ter no máximo :max caracteres.',
                'content.required' => "O campo content é obrigatório.",
                'content.min' => 'O campo content deve ter no mínimo :min caracteres.',
                'content.max' => 'O campo content deve ter no máximo :max caracteres.',
            ]
        );

        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => Auth::user()->id
        ]);
        return redirect()->route('dashboard');
    }

    public function deletePost($id)
    {
        $post = Post::find($id);

        if (Gate::denies('post.delete', $post)) {
            abort(403, 'Voĉe não tem permissão para eliminar um post.');
        }

        $post->delete();
        return redirect()->route('dashboard');
    }
}
