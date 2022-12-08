<x-layout>

     @foreach ($posts as $post) 
    <article>
      <h1>
        <a href="/posts/{{ $post->slug }} ">
          {{ $post->title }}
        </a>
       </h1>
       <div> 
         <p> <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a></p>
            <p>{{ $post->excerpt }}</p>
            <br><br>
   <footer> <sub><a href="/">Go Back</a></sub>
  </footer>
         </div>
    </article>
    @endforeach
   
   </x-layout>
