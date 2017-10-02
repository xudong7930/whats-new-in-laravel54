<?php

namespace App;

use App\Events\PostWasPublished;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content', 'active'];

    // 'creating', 'created', 'updating', 'updated', 'deleting', 'deleted', 'saving', 'saved', 'restoring', 'restored',
    protected $events = [
        'created' => PostWasPublished::class
    ];

    public function archive()
    {
        $this->update(['active' => false]);

        // tinker terminal
        $posts = App\Post::all();
        $posts->each->archive();

        $posts->each(function($post) {
            $post->archive();
        });

        $posts->pluck('title');
        $posts->map->title;
        $posts->map(function ($post) {
            return $post->title;
        });
    }
}
