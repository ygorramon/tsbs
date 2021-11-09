<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function __construct(Post $post, Author $author, Category $category)
    {
        $this->repository = $post;
        $this->author = $author;
        $this->category= $category;

    }
    public function index(){
        $posts=$this->repository->get()->shuffle()->take(6);
       
        return view ('site.index', compact('posts'));
    }

    public function show ($slug){
      $post=$this->repository->where('slug',$slug)->first();
    //  dd($post);
      return view ('site.show', compact('post'));
    }

    public function posts(){
      $posts=$this->repository->paginate(2);
      return view ('site.posts', compact('posts'));
  }

  public function postsLinks(){
    $posts= Post::all();
    foreach ($posts as $post){
      echo 'Tema:'.$post->title.' / Terapeuta: '.$post->author->name.' / Link: <a href="'. route('post.site.show', $post->slug).'">'.route('post.site.show', $post->slug).' </a><br><br>';
    };
}
public function especialistas($slug){
  $category=$this->category->where('slug',$slug)->first();
 return view ('site.specialists', compact('category'));
}

}
