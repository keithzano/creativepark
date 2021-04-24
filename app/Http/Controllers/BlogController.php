<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Canvas\Models\User;
use Canvas\Events\PostViewed;
use Canvas\Models\Post;
use Canvas\Models\Tag;
use Canvas\Models\Topic;
use Illuminate\Pagination\LengthAwarePaginator;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function getPosts()
    {
        $data = [
            'posts' => Post::published()->orderByDesc('published_at')->simplePaginate(10),
            'meta' => [
                'title' => '',
            ],
        ];
 
        return view('blog.index', compact('data'));
    }
 
    public function getPostsByTag(string $slug)
    {
        if (Tag::where('slug', $slug)->first()) {
            $data = [
                'posts' => Post::whereHas('tags', function ($query) use ($slug) {
                    $query->where('slug', $slug);
                })->published()->orderByDesc('published_at')->simplePaginate(10),
                'meta' => [
                    'title' => '',
                ],
            ];
 
            return view('blog.index', compact('data'));
        } else {
            abort(404);
        }
    }
 
    public function getPostsByTopic(string $slug)
    {
        if (Topic::where('slug', $slug)->first()) {
            $data = [
                'posts' => Post::whereHas('topic', function ($query) use ($slug) {
                    $query->where('slug', $slug);
                })->published()->orderByDesc('published_at')->simplePaginate(10),

                'meta' => [
                    'title' => '',
                ],
            ];
 
            return view('blog.index', compact('data'));
        } else {
            abort(404);
        }
    }
 
    public function findPostBySlug(string $slug)
    {
        $posts = Post::with('tags', 'topic')->published()->get();
        $post = $posts->firstWhere('slug', $slug);
 
        if (optional($post)->published) {
            $data = [
                'author' => $post->user,
                'post'   => $post,
                'meta'   => $post->meta,
            ];
 
            // IMPORTANT: This event must be called for tracking visitor/view traffic
            event(new PostViewed($post));
 
            return view('blog.show', compact('data'));
        } else {
            abort(404);
        }
    }
}
