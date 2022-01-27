<?php 
require 'header.php';
?>
<div class='space40'></div>
<div class="container formulaire ">
  <div class="row">
    <div class="col align-self-center interface">
    <form method = 'POST' action = 'sign_up.php'>
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
        <div class="col-sm-6">
            <label for="inputEmail3" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="inputEmail3">
            <div class='invalid-feedback'>
              Valid email is required.
            </div>
        </div>
        <div class="col-sm-6">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
            <input type="password" name="password" class="form-control" id="inputPassword3">
            <div class='invalid-feedback'>
              Valid password  is required.
            </div>
        </div>
        <fieldset class="col-sm-6">
          <legend class="form-label">Level of study</legend>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="level" id="gridRadios1" value="1">
              <label class="form-check-label" for="gridRadios1">
                INDP1
               </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="level" id="gridRadios2" value="2">
              <label class="form-check-label" for="gridRadios2">
                INDP2
              </label>
            </div>
            <div class="form-check disabled">
              <input class="form-check-input" type="radio" name="level" id="gridRadios3" value="3">
              <label class="form-check-label" for="gridRadios3">
                INDP3
              </label>
            </div>
          </div>
          <div class='invalid-feedback'>
              Valid level of study is required.
            </div>
        </fieldset>
          <div class="col-sm-6" style='text-align:center'>
            <button type="submit" name="save" class="btn btn-primary">Sign in</button>
          </div>
        </form>
    </div>
  </div>
</div>



