<x-layout>

    <article>
      <h1><?= $post->title; ?></h1>
      <div>
      <p> <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a></p>
      <em><?= $post->date; ?></em>
      <p><?= $post->body; ?></p>
      </div>
    </article>
   <br><br>
   <footer> <sub><a href="/">Go Back</a></sub>
  </footer>
    
  </x-layout>  
