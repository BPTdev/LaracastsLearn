<?php

namespace App\Models;

use Illuminate\Support\Facades\File;

class Post
{
    public static function all()
    {
        $files = File::files(resource_path("posts"));
        array_map(fn($file) => $file->getContents(), $files);
    }

    public static function find($slug)
    {
        $path = resource_path("posts/{$slug}.html");
        if (!file_exists($path)) {
            return redirect('ex/hardroutes/posts');
            //abort(404);
        }

        //setting cache
        //now->addMinutes([NUMBER]) is for process time in seconds
        return cache()->remember("posts.{$slug}", now()->addMinutes(10), fn() => file_get_contents($path));


    }
}
