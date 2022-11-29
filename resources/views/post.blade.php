<!DOCTYPE html>
    <title>Laravel Blog</title>
    <link rel="stylesheet" href="/app.css">
    
    <body> 
    <?php foreach ($posts as $post) : ?>
    <article>
      <h1><?= $post->title; ?></h1>
      <div>
         <?php $post->body; ?>
      </div>
    </article>
    <br><br>
    <a href="/">Go Back</a>
    <?php endforeach; ?>
    </body>
