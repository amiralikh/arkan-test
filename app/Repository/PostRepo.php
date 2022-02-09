<?php

namespace App\Repository;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostRepo
{
    public function getAll()
    {
        return Post::with('user')->orderByDesc('id')
            ->paginate(10);
    }

    public function single($postId)
    {
        return Post::with('user')->findOrFail($postId);
    }

    public function store($request)
    {
        $post = Post::query()->create([
           'title' => $request->get('title'),
           'content' => $request->get('content'),
//           'user_id' => Auth::id(),
           'user_id' => 101,
        ]);
        if ($request->file('image')) {
            $post->addMedia($request->file('image'))->toMediaCollection('image');
            $post->save();
        }
    }

    public function update($id,$request)
    {
        $post = Post::query()->findOrFail($id)->update([
            'title' => $request->get('title'),
            'content' => $request->get('content'),
        ]);
    }

    public function destroy($id)
    {
        Post::query()->findOrFail($id)->delete();
    }
}
