<x-layout>

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
   
   </x-layout>
