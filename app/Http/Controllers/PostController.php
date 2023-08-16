<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //


    public function obtenercomentario(Request $request)
    {
        $comments = Post::find(1)->comments;
  
        dd($comments);
    }

    public function obtenerpost(Request $request)
    {
        $post = Comment::find(1)->post;
  
        dd($post);
    }

    public function agregarcomentario(Request $request)
    {
        $post = Post::find(1);
   
        $comment = new Comment;
        $comment->comment = "Hi ItSolutionStuff.com";
           
        $post = $post->comments()->save($comment);
    }

    public function agregarnuevos(Request $request)
    {
        $post = Post::find(1);
   
        $comment1 = new Comment;
        $comment1->comment = "Hi ItSolutionStuff.com Comment 1";
           
        $comment2 = new Comment;
        $comment2->comment = "Hi ItSolutionStuff.com Comment 2";
           
        $post = $post->comments()->saveMany([$comment1, $comment2]);
    }

    public function asociar(Request $request)
    {
        $comment = Comment::find(1);
        $post = Post::find(2);
           
        $comment->post()->associate($post)->save();
    }
    //Edil Zapata es un colaborador estuvo aca
}
