<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Articles</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js" type = "text/javascript"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/list-groups/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </head>
  <body class="bg-light">
  <header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><image href = 'SUPMaG.png' width = '100%'></svg>
        </a>
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="index.php" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="creat.php" class="nav-link px-2 text-white">Create</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Authors</a></li>
          <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
          <li><a href="#" class="nav-link px-2 text-white">About</a></li>
        </ul>
        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>
        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2">Login</button>
          <a class='login' href='index0.php'><button type="button" class="btn btn-warning">Sign-up</button></a>
        </div>
      </div>
    </div>
  </header>
  <div id='pop-upcontainer' style ='display:none'>
            <div>
                <div style = 'margin-left:95%'><i id='closepop-up' class='bi bi-x-circle'></i></div>
                <div class='title'><h2>You can Modify your artcile here !</h2></div>
            </div>
            <form enctype='multipart/form-data' class='needs-validation' method='post' action='#' id ='formup'>
              <div class='row g-3'>
                <div class='col-12'>
                  <label for='email' class='form-label'>Email</label>
                  <input type='email' class='form-control' name='email' placeholder='you@example.com' value=''>
                  <div class='invalid-feedback'>
                    Please enter a valid email address for shipping updates.
                  </div>
                </div>
                <div class='col-md-3'>
                  <label for='inscrinum' class='form-label'>Title</label>
                  <input type='text' class='form-control' name='title' placeholder='Title' required>
                  <div class='invalid-feedback'>
                    Title is required.
                  </div>
                </div>
                <div class='col-md-4'>
                  <label for='state' class='form-label'>Category</label>
                  <select class='form-select' name='category' required>
                    <option value='Technology'>Technology</option>
                    <option value='Culutre'>Culutre</option>
                    <option value='Politics'>Politics</option>
                    <option value='Science'>Health</option>
                    <option value='Travel'>Travel</option>
                    <option value='Business'>Business</option>
                  </select>
                  <div class='invalid-feedback'>
                    Please provide a valid state.
                  </div>
                </div>
              </div>
              <hr class='my-4'>
              <div class='mb-3 article' style='width:80%; justfify-content:center'>
                <label for='exampleFormControlTextarea1' class='form-label'>you can continue your article here</label>
                <textarea required class='form-control' name='exampleFormControlTextarea1' rows='3'></textarea>
              </div>
              <hr class='my-4'>
              <button class='w-100 modif btn btn-primary btn-lg' name='save' type='submit' pattern=''>Modify</button>
            </form>
        </div>
