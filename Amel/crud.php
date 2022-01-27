<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="stylesheet.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">CRUD</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Read.php">Read</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="update.php">Update & Delete</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <?php
      $Name ='';
      $LastName  ='';
      $Email = '';
      $Article = '';
      $Comments = '';
    ?>
    <div class="row" style="margin-inline-start:370px;">
        <form action="link.php" method="POST">
            <div class="form-group">
                <label>First Name</label>
                <input type="texte" name="Name" class="form-control" value="<?php echo $Name; ?>" placeholder="Write your own article">
            </div>
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" name="LastName" class="form-control" value="<?php echo $LastName; ?>" placeholder="Write your comment">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="Email" class="form-control" value="<?php echo $Email; ?>" placeholder="Write your comment">
            </div>
            <div class="form-group">
                <label>Article</label>
                <input type="text" name="Article" class="form-control" value="<?php echo $Article; ?>" placeholder="Write your comment">
            </div>
            <div class="form-group">
                <label>Comments</label>
                <input type="text" name="Comments" class="form-control" value="<?php echo $Comments; ?>" placeholder="Write your comment">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="save" style="color=aquamarine;">Submit</button>
            </div>
        </form>
    </div>
    <?php include "footer.php"; ?>
</body>
</html>