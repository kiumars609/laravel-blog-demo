<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run(){
        Post::create(['title'=>'First Post','content'=>'This is the first demo post.','status'=>'published']);
        Post::create(['title'=>'Second Post','content'=>'Demo content for second post.','status'=>'draft']);
    }
}
