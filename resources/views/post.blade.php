<x-layout>

    <article>
      <h1><?= $post->title; ?></h1>
      <div>
      <em><?= $post->date; ?></em>
      <p><?= $post->body; ?></p>
      </div>
    </article>
   <br><br>
   <footer> <a href="/">Go Back</a>
  </footer>
    
  </x-layout>  
