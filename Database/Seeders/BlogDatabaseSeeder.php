<?php

namespace Son\Blog\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Son\Blog\Entities\Post;

class BlogDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $post = new Post();
        $post->title = 'Home - Meu primeiro artigo';
        $post->body = 'HOME - Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque commodi ipsam velit voluptatibus modi sequi praesentium quae magni, vitae id.';
        $post->save();

        $post = new Post();
        $post->title = 'AboutUs - Meu primeiro artigo';
        $post->body = 'AboutUs - Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque commodi ipsam velit voluptatibus modi sequi praesentium quae magni, vitae id.';
        $post->save();

        // $this->call("OthersTableSeeder");
    }
}
