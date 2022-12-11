<x-layout>
    <section>
      <main> <br>
      <div class="container-fluid bg-light">
        <div class="row text-center text-primary"> <h4 class="display-5">Register Here!</h4></div>
        <form method="POST" action="/register">
        @csrf
         <div class="d-flex flex-column p-2 mb-6">
           <label class="block mb-2 text-secondary text-center"
             for="username">username</label>
             <input class="border border-secondary"
                type="text"
                name="username"
                id="username"
                required>
            <label class="block mb-2 text-secondary text-center"
             for="display_name">display name</label>
             <input class="border border-secondary"
                type="text"
                name="display_name"
                id="display_name"
                required>
                <label class="block mb-2 text-secondary text-center"
             for="email">email</label>
             <input class="border border-secondary"
                type="email"
                name="email"
                id="email"
                required>
                <label class="block mb-2 text-secondary text-center"
             for="password">password</label>
             <input class="border border-secondary"
                type="password"
                name="password"
                id="password"
                required></div>
                <div class="p-2 mb-6">
              <button type="submit" class="btn btn-primary text-white py-2 px-4">
              Submit</button>
          </div>
          </div>
        </form>
       </main>
    </section>
   <br><br>
 <footer> <sub><a href="/">Go Home</a></sub>
  </footer>
    
  </x-layout>  
