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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </head>
  <body class="bg-light"> 
<div class='container'>
<main>
  <div class='py-5 text-center'>
    <h2>Articles</h2>
    <p class='lead'>Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
  </div>
    <div class='col-md-7 col-lg-8'>
      <h4 class='mb-3'>Informations</h4>
      <form class='needs-validation' method="post" action="proccess.php">
        <div class='row g-3'>
          <div class='col-sm-6'>
            <label for='firstName' class='form-label'>First name</label>
            <input type='text' class='form-control'  name="firstName" placeholder='' value='' >
            <div class='invalid-feedback'>
              Valid first name is required.
            </div>
          </div>

          <div class='col-sm-6'>
            <label for='lastName' class='form-label'>Last name</label>
            <input type='text' class='form-control' name="lastName" placeholder='' value='' required>
            <div class='invalid-feedback'>
              Valid last name is required.
            </div>
          </div>
          <div class='col-12'>
            <label for='email' class='form-label'>Email</label>
            <input type='email' class='form-control' name="email" placeholder='you@example.com' value=''>
            <div class='invalid-feedback'>
              Please enter a valid email address for shipping updates.
            </div>
          </div>
          <div class='col-md-5'>
            <label for='country' class='form-label'>Level Of Study</label>
            <select class='form-select' name='level' required>
              <option value='1'>INDP1</option>
              <option value='2'>INDP2</option>
              <option value='3'>INDP3</option>
            </select>
            <div class='invalid-feedback'>
              Please select a valid country.
            </div>
          </div>
          <div class='col-md-4'>
            <label for='state' class='form-label'>Group</label>
            <select class='form-select' name='group' required>
              <option value='A'>A</option>
              <option value='B'>B</option>
              <option value='C'>C</option>
              <option value='D'>D</option>
              <option value='E'>E</option>
              <option value='F'>F</option>
            </select>
            <div class='invalid-feedback'>
              Please provide a valid state.
            </div>
          </div>

          <div class='col-md-3'>
            <label for='inscrinum' class='form-label'>Inscription Number</label>
            <input type='text' class='form-control' name='inscrinum' placeholder='Inscription Number' required>
            <div class='invalid-feedback'>
              Inscription Number code required.
            </div>
          </div>
        </div>
        <hr class='my-4'>
        <div class='mb-3'>
          <label for='exampleFormControlTextarea1' class='form-label'>Write your article here</label>
          <textarea required class='form-control' name='exampleFormControlTextarea1' rows='3'></textarea>
        </div>
        <hr class='my-4'>
        <button class='w-100 btn btn-primary btn-lg' name="save" type='submit'>Post your article</button>
      </form>
    </div>
  </div>
</main>
</div>
  </body>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="form-validation.js"></script>
</html>