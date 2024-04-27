<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">  
</head>
  <body class="bg-primary bg-opacity-50">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRmaL6t2xhRdOAaO6ih6jemqjNL-A8J3NAU2ohxG3papA&s" alt="" height="70px" width="70px"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="btn btn-danger btn-sm me-5" aria-current="page" href="/">Home</a>
                  </li>    
                  <li>
                  <a href="{{ route('create.product') }}" class="btn btn-warning btn-sm text-light me-5">Add_product</a>
                  </li>
                  <li>
                  <a href="{{ route('view.product') }}" class="btn btn-danger btn-sm text-light me-5">view_product</a>
                  </li>
                  </ul>             
              </div>
            </div>
          </nav>
    </header>
    <section id="product">
       <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6 mt-5">
           
            
          @yield('content')
          @yield('script')
            </div>
            <div class="col-3"></div>

        </div>
       </div>
    </section>
   
  </body>
</html>