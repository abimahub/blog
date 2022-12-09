<x-layout>

    <article>
      <h1><?= $post->title; ?></h1>
      <div>
      <p> By <a href="/author/{{ $post->author->id }}">{{ $post->author->username }}</a> in <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a> category.</p>
         <em><?= $post->date; ?></em>
      <p><?= $post->body; ?></p>
      </div>
    </article>
   <br><br>
   <footer> <sub><a href="/">Go Home</a></sub>
  </footer>
    
  </x-layout>  
