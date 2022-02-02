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
  echo "<div class='col-md-6' id = '".(string)$value->ID."'>
          <div class='art row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative'>
            <div class= 'col p-4 d-flex flex-column position-static'>
              <div class='row justify-content-end'>
                <div class='col-4 con' id='ds'>
                  <button type='button' target = '".(string)$value->ID."'  class='up btn btn-secondary' >Update <div id='lle' style='display:none'>".(string)$value->ID."</div></button>
                </div>
                <div class='col-4 con'>
                <button type='button' target = '".(string)$value->ID."' class='btn btn-danger'>Delete</button>
                </div>
              </div>
              <strong class='d-inline-block mb-2 text-success'>".$value->category."</strong>
              <h3 class='mb-0'>".$value->title."</h3>
              <div class='mb-1 text-muted'>".format($value->date)." By ".$value->firstName."  ".$value->lastName."</div>
              <p class='mb-auto'>".$txt."</p>
              <div class='row'>
                <div class='col' ><span class='badge rounded-pill bg-info text-dark'><div id ='likeslayout".(string)$value->ID."'>".$value->likes."</div>&ensp;<i class='bi bi-suit-heart-fill'></i></span></div>
                <div class='col-6'></div>
                <div class='col'>
                  <button type='button' class='btn like btn-warning' target='".(string)$value->ID." '><i class='bi bi-suit-heart'></i>  like<div style='display:none'>".(string)$value->ID."</div></button>
                  <button type='button' class='btn comment btn-dark'><i class='bi bi-chat'></i>  Comment<div style='display:none'>".(string)$value->ID."</div></button>
                </div>
              </div>
              <div class = 'form-floating' id ='textareaN".(string)$value->ID."'>
                <textarea  class = 'form-control' placeholder='Leave a comment here' id='floatingTextarea''></textarea>
                <label for='floatingTextarea'>Comments</label>
              </div>
              <div class='row' id = 'commentslayout".(string)$value->ID."' style ='display:none;overflow-x:auto;overflow-y:auto;max-height:10rem'>
              </div>    
            </div>
            <div class='col-auto d-none d-lg-block' style='width:30%'>
              <svg style='width:100%' class='bd-placeholder-img' width='200' height='250' xmlns='http://www.w3.org/2000/svg' role='img' aria-label='Placeholder: Thumbnail' preserveAspectRatio='xMidYMid slice' focusable='false'><image href =".(string)$value->image_path." x='0' y='0' height='100%' width='100%'/></svg>
            </div>
          </div>
        </div>";
}
//<button type='button' class='btn btn-dark comment'><i class='bi bi-chat'></i>Comment</button>
?>
<?php require 'footer.php' ?>