<x-layout>
<div class="container-fluid bg-light">
 <div class="row bg-light text-center text-primary"> <h4 class="display-5">Latest Posts </h4></div>
   @if ($posts->count())   
     @foreach ($posts as $post) 
    <article>
      <h1>
        <a href="/posts/{{ $post->slug }} ">
          {{ $post->title }}
        </a>
       </h1>
       <div> 
         <p> By <a href="/authors/{{ $post->author->id }}">{{ $post->author->username }}</a> in <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a> category.</p>
            <p>{{ $post->excerpt }}</p>
            <br>
   <footer> <sub><a href="/">Go Home</a></sub>
  </footer>
         </div>
         
    </article>
    @endforeach
    @else <p>No posts yet!</p>
    @endif
    </div> <!--end of container-->
   </x-layout>
