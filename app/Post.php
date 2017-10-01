<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content', 'active'];

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
