<?php
require 'header.php';
require 'db.php';
$sql = 'SELECT * FROM data ';
$result = $db->prepare($sql);
$result->execute();
$articles = $result->fetchALl(PDO::FETCH_OBJ);
?>
<?php
function format($date){ //ecrire la date sous la forme:  Mois date, année
  $dict = array(
    '01' => 'January',
    '02' => 'February',
    '03' => 'March',
    '04' => 'April',
    '05' => 'May',
    '06' => 'June',
    '07' => 'July',
    '08' => 'August',
    '09' => 'September',
    '10' => 'October',
    '11' => 'NOvember',
    '12' => 'December'
  );
  return $dict[substr($date,3,2)].substr($date,0,2).','.' 20'.substr($date,6,2); 
}
foreach(array_reverse($articles) as $value){
  $file = fopen($value->text_path,'r');
  $txt = fread($file,filesize($value->text_path));
  fclose($file);
  echo "<div class='col-md-6'>
          <div class='row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative'>
            <div class='col p-4 d-flex flex-column position-static'>
              <div class='row justify-content-end'>
                <div class='col-4 con'>
                <form  method = 'POST' action = 'delete.php'>
                <input name = 'id' style='display:none' value = ".(string)$value->ID.">
                <button type='submit' class='btn btn-secondary'>Update</button>
                </form>
                </div>
                <div class='col-4 con'>
                <form  method = 'POST' action = 'delete.php'>
                <input name = 'id' style='display:none' value = ".(string)$value->ID.">
                <button type='submit'  class='btn btn-danger'>Delete</button>
                </form>
                </div>
              </div>
              <strong class='d-inline-block mb-2 text-success'>".$value->category."</strong>
              <h3 class='mb-0'>".$value->title."</h3>
              <div class='mb-1 text-muted'>".format($value->date)." By ".$value->firstName."  ".$value->lastName."</div>
              <p class='mb-auto'>".$txt."</p>    
            </div>
            <div class='col-auto d-none d-lg-block' style='width:30%'>
              <svg style='width:100%' class='bd-placeholder-img' width='200' height='250' xmlns='http://www.w3.org/2000/svg' role='img' aria-label='Placeholder: Thumbnail' preserveAspectRatio='xMidYMid slice' focusable='false'><image href =".(string)$value->image_path." x='0' y='0' height='100%' width='100%'/></svg>
            </div>
          </div>
        </div>";
}
?>
<?php require 'footer.php' ?>