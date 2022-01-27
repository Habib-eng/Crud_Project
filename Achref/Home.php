<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Myproject</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
	<?php 
	echo " <header class='p-3 bg-dark text-white'>
    <div class='container'>
      <div class='d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start'>
        <a href='/' class='d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none'>
          <svg class='bi me-2' width='40' height='32' role='img' aria-label='Bootstrap'><use xlink:href='#bootstrap'/></svg>
        </a>

        <ul class='nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0'>
          <li><a href='#' class='nav-link px-2 text-secondary'>Home</a></li>
          <li><a href='#' class='nav-link px-2 text-white'>Create</a></li>
          <li><a href='#' class='nav-link px-2 text-white'>Pricing</a></li>
          <li><a href='#' class='nav-link px-2 text-white'>FAQs</a></li>
          <li><a href='#' class='nav-link px-2 text-white'>About</a></li>
        </ul>

        <form class='col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3'>
          <input type='search' class='form-control form-control-dark' placeholder='Search...' aria-label='Search'>
        </form>

        <div class='text-end'>
          <a type='button' class='btn btn-outline-light me-2'>Login</a>
          <a href='formulaire.php'type='button' class='btn btn-warning'>Sign-up</a></a>
        </div>
      </div>
    </div>
  </header>";
  ?>
    <?php 
      $mysqli= new mysqli('localhost','root','','achref') or die(mysqli_error($mysqli));
      $result=$mysqli->query("SELECT * FROM supref") or die($mysqli->error);
      ?>
      <table class="table table-striped table-dark">
         <thead class="thead-light">
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nom</th>
              <th scope="col">Prénom</th>
              <th scope="col">Email</th>
              <th scope="col">Article</th>
              <th scope="col">Détails</th>
            </tr>
         </thead>
      <?php
        while ($row = $result->fetch_assoc()):  
      ?>
       <tr>
        <td><?php echo $row['id'] ?></td>
         <td><?php echo $row['Nom'] ?></td>
         <td><?php echo $row['Prénom'] ?></td>
         <td><?php echo $row['Email'] ?></td>
         <td><?php echo $row['Article'] ?></td>
         <td><?php echo $row['Détails'] ?></td>
         <td></td>
       </tr>
     <?php endwhile; ?>
      </table>
      <?php  
      function pre_r( $array ) {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
      }
      pre_r($result->fetch_assoc());
      ?>
      



</body>
</html>