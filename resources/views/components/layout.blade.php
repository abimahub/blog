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
        <li class="nav-item">
            <a class="nav-link btn btn-outline-dark text-dark" href="#">Log In</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-dark text-dark" href="#">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-dark text-dark" href="#">Contact Me</a>
          </li>
          <li>
            <a class="nav-link text-dark" href="#">|</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text-secondary" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">All Posts </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#"></>All Genres</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">All Authors</a>
          </li>
          
          
        </ul>
      </div>
    </nav>
  <main role="main">
  
      <!-- jumbotron -->
      <div class="jumbotron">
        <div class="container img text-light">
          <h1 class="display-3">Hello!</h1>
          <h3>This is a simple blog website I have created using Laravel.
          <br><br><a class="btn btn-primary text-white btn-lg" href="#" role="button">About Me &raquo;</a></h3>
        </div>
      </div> <!--end of jumbotron-->
      <br><hr>
      <div class="container">
         <div class="row">
          <div class="col-md-3">
             </div>
          <div class="col-md-6">
            
            {{$slot}}
<br>   </div>
          <div class="col-md-3">
             </div>
        </div>

        <hr>
       </div> <!-- end of posts container-->

    
     </main> 
      <footer class="container img2 text-white text-center">
      <p class="text-center">&copy; AbiMA 2022</p>
    </footer>
    </body>