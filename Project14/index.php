<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet"href="index.css">
 
</head>
<body>
<!-- <h3>Basic Info</h3>
<hr>
<form class="row g-3">
<div class="row mt-0 align-items-center">
  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label">Employee ID</label>
  </div>
  <div class="col-auto">
    <span id="passwordHelpInline" class="form-text">
      9
    </span>
  </div>
  
</div>
<div class="row mt-0 align-items-center">
  <div class="col-auto">
    <label for="inputLastname" class="col-form-label">Lastname</label>
  </div>
  <div class="col-auto">
    <span id="passwordHelpInline" class="form-text">
      Dodsworth
    </span>
  </div>
  </div>
  <div class="row mt-3 ">
  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label">First Name</label>
    </div>
    <div class="col-md-6">
    <input type="text" id="inputSulfix" class="form-control " aria-describedby="basic-addon1">
  </div>
    
    </div>
    <div class="row mt-2 ">
  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label">Gender</label>
    </div>
    <div class="col-auto">
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Female
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    XXX
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    ZZZ
  </label>
</div>
</div>
<div class="row mt-0">
  <div class="col-auto align-self-center">
    <label for="inputTitle" class="col-form-label">Title</label>
  </div>
  <div class="col-md-6">
    <input type="text" id="inputTitle" class="form-control mx-5" aria-describedby="basic-addon1">
    </div>
</div>
<div class="row mt-3">
  <div class="col-auto align-self-center">
    <label for="inputSulfix" class="col-form-label">Sulfix</label>
  </div>
  <div class="col-md-6 ml-5">
    <input type="text" id="inputSulfix" class="form-control " aria-describedby="basic-addon1">
</div>

</div>

</form> -->
<select>
<?php
$countries = array (
    "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Anguilla",
    "Antigua & Barbuda",
    "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan",
    "Bahamas", "Bahrain",
    "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin",
    "Bermuda", "Bhutan",
    "Bolivia", "Bosnia & Herzegovina", "Botswana", "Brazil", "British Virgin
    Islands", "Brunei",
    "Bulgaria", "Burkina Faso", "Burundi", "Vietnam"
);
foreach($countries as $country){
    echo '<option value="' . $country . '">' . $country . '</option>';
}
?>
</select>


</body>
</html>