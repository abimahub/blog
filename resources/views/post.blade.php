<!DOCTYPE html>
    <title>Laravel Blog</title>
    <link rel="stylesheet" href="/app.css">
    
    <body> 
    <article>
      <h1><?= $post->title; ?></h1>
      <div>
      <em><?= $post->date; ?></em>
      <p><?= $post->body; ?></p>
      </div>
    </article>
    <br><br>
    <a href="/">Go Back</a>
    </body>
