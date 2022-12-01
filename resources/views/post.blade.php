<x-layout>

    <article>
      <h1><?= $post->title; ?></h1>
      <div>
      <em><?= $post->date; ?></em>
      <p><?= $post->body; ?></p>
      </div>
    </article>
   <br><br>
   <footer> <sub>Filler text from <a href="www.fillerama.io">fillerama.io</a></sub>
   <br><br><a href="/">Go Back</a>
  </footer>
    
  </x-layout>  
