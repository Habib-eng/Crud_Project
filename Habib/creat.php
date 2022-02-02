<?php 
require 'db.php';
$query = "INSERT INTO `data` (`firstName`, `lastName`, `email`, `text_path`,`date`, `title`, `category`,`image_path`) VALUES (?,?,?,?,?,?,?,?)";
$stmt = $db->prepare($query);
if(isset($_POST["save"])){
  //stocker l'image
  $tmpName = $_FILES['fichier']['tmp_name'];
  $name = $_FILES['fichier']['name'];
  move_uploaded_file($tmpName,'upload/'.$name);
  //stocker le texte
  $text_path = 'upload/'.(string)time();
  $file = fopen($text_path,'w');
  fwrite($file,$_POST["exampleFormControlTextarea1"]);
  fclose($file);
  //enregistrer dans la base de donnée 
  $data = [$_POST["firstName"], $_POST["lastName"] , $_POST["email"] ,$text_path,date('d-m-y'),$_POST["title"] ,$_POST["category"],'upload/'.$name];
  $stmt->execute($data);
}
?>
<?php require 'header.php';?>
<div class='container'>
  <div class='py-5 text-center'>
    <h2>SUP'MAG</h2>
    <p class='lead'>Feel Free To Express your opinion. We are also committed to give a platform to the budding writers.</p>
  </div>
    <div class='col-md-7 col-lg-8' style='position:relativc;width:100%'>
      <h4 class='mb-3'>Informations</h4>
      <div id="alerte" class="alert alert-success" role="alert">
          Your article has been successfully submitted!
      </div>
      <form enctype="multipart/form-data" class='needs-validation' method="post" action="creat.php">
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
        <div class='mb-3 article'>
          <label for='exampleFormControlTextarea1' class='form-label'>Write your article here</label>
          <textarea required class='form-control' name='exampleFormControlTextarea1' rows='3'></textarea>
        </div>
        <hr class='my-4'>
        <div class="col-md-3 upload">
          <label for='upload-photo'>Browse...</label><br>
          <input type='file' name='fichier' class='upload-photo'/><br>
        </div>
        <button class='w-100 btn btn-primary btn-lg' name="save" type='submit' pattern=''>Post your article</button>
      </form>
    </div>
  </div>
</div>
<?php require 'footer.php';?>