<?php
require 'header.php';
?>
<div class="container list">
    <div class="row">
        <div class="col">
            <div class="list-group list-group-checkable">
              <input class="list-group-item-check" type="radio" name="listGroupCheckableRadios" id="listGroupCheckableRadios1" value="" checked>
              First radio
                <span class="d-block small opacity-50">With support text underneath to add more detail</span>
              </label>
              
              <input class="list-group-item-check" type="radio" name="listGroupCheckableRadios" id="listGroupCheckableRadios2" value="">
              <label class="list-group-item py-3" for="listGroupCheckableRadios2">
              <label class="list-group-item py-3" for="listGroupCheckableRadios1">
                Second radio
                <span class="d-block small opacity-50">Some other text goes here</span>
              </label>

              <input class="list-group-item-check" type="radio" name="listGroupCheckableRadios" id="listGroupCheckableRadios3" value="">
              <label class="list-group-item py-3" for="listGroupCheckableRadios3">
                Third radio
                <span class="d-block small opacity-50">And we end with another snippet of text</span>
              </label>

              <input class="list-group-item-check" type="radio" name="listGroupCheckableRadios" id="listGroupCheckableRadios4" value="" disabled>
              <label class="list-group-item py-3" for="listGroupCheckableRadios4">
                Fourth disabled radio
                <span class="d-block small opacity-50">This option is disabled</span>
              </label>
            </div>
        </div>
        <div class="col">
        .col-sm-9: width of 75% above sm breakpoint
        </div>
        </div>
    </div>    
</div>
<?php require 'footer.php' ?>