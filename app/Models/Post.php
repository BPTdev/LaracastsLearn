<?php

namespace App\Models;

class Post
{
    public static function find($slug)
    {
        $path =__DIR__ . '/../resources/posts/' . $slug . '.html';
        if (!file_exists($path)) {
            return redirect('ex/hardroutes/posts');
            //abort(404);
        }

        //setting cache
        //now->addMinutes([NUMBER]) is for process time in seconds
        return cache()->remember("posts.{$slug}", now()->addMinutes(10), fn() => file_get_contents($path));


    }
}
