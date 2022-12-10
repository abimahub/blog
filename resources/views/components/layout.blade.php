<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <title>Abi's Laravel Blog</title>
 <link rel="stylesheet" href="/app.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3
/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  </head> 
    <body>
     <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light border-dark p-2">
      <a class="navbar-brand text-primary" href="#">Abi's Blog</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link text-secondary" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">All Posts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">Genres</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">Authors</a>
          </li>
        </ul>
      </div>
    </nav>
  <main role="main">
  
      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container img text-light">
          <h1 class="display-3">Hello!</h1>
          <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
        </div>
      </div> <!--end of jumbotron-->
      <br>
      <div class="container">
        <div class="row bg-light text-center text-primary"> <h4>Latest Posts </h4></div>
        <div class="row">
          <div class="col-md-4">
             </div>
          <div class="col-md-4">
            
            {{$slot}}
<br> <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-4">
             </div>
        </div>

        <hr>
       </div> <!-- end of posts container-->

    
     </main> 
      <footer class="container">
      <p>&copy; AbiMA 2022</p>
    </footer>
    </body>`