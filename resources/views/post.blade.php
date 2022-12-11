<x-layout>

    <article>
    <div class="container-fluid bg-light">
 <div class="row bg-light text-center text-primary"> <h4 class="display-5"><?= $post->title; ?></h4></div>
 
    
      <div>
      <p> By <a href="/authors/{{ $post->author->id }}">{{ $post->author->username }}</a> in <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a> category.</p>
         <em><?= $post->date; ?></em>
      <p><?= $post->body; ?></p>
      </div>
    </article>
    </div> <!--end of container -->
   <br><br>
   <footer> <sub><a href="/">Go Home</a></sub>
  </footer>
    
  </x-layout>  
