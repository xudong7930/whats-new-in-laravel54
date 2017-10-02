<?php

namespace App\Listeners;

use App\Events\PostWasPublished;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifyBlogSubscribers
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  PostWasPublished  $event
     * @return void
     */
    public function handle(PostWasPublished $event)
    {
        dump('notify an email to subscribe user.');
        $post = $event->post->toArray();
        dump($post);
    }
}
