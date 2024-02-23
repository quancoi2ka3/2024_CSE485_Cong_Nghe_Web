<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet"href="/phpdemo/Project14/assets/css/index.css">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="/phpdemo/Project14/assets/js/ckeditor/ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"></script>

</head>
<body>
<form class="row g-3 w-50 mt-1 justify-content-center">
<div class="row g-1">
<h3 class="">Basic Info</h3>
<div class="row g-0">
<hr class="">
</div>
  <div class="row g-1">
  <div class="col-2">
  <label for="exampleFormControlInput1" class="form-label">Email</label>
  </div>  
  <div class="col-2 my-1">
    <span>9</span>
  </div>
</div>
<div class="row g-0">
  <div class="col-2">
  <label for="exampleFormControlInput1" class="form-label">Last Name</label>
  </div>  
  <div class="col-2">
    <span>Dodsworth</span>
  </div>
</div>
<div class="row g-1">
  <div class="col-2">
  <label for="exampleFormControlInput1" class="form-label">First Name</label>
  </div>
  <div class="col-9">
  <input type="text" class="form-control input-group-lg" aria-label="Recipient's username" aria-describedby="basic-addon2" name="firstname">
  </div>
</div>
<div class="row g-1">
  <div class="col-2">
  <label for="exampleFormControlInput1" class="form-label">Gender</label>
  </div>
  <div class="col-5 ml-5">
  <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <span>Male</span>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <span>Female</span>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <span>XXX</span>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <span>ZZZ</span>
</div>
  </div>

</div>
<div class="row g-1">
  <div class="col-2">
  <label for="exampleFormControlInput1" class="form-label">Title</label>
  </div>
  <div class="col-9">
  <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">
  </div>
</div>
<div class="row g-1">
  <div class="col-2">
  <label for="exampleFormControlInput1" class="form-label">Suffix</label>
  </div>
  <div class="col-9">
  <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">
  </div>
</div>
<div class="row g-1">
  <div class="col-2">
  <label for="exampleFormControlInput1" class="form-label">BirthDate</label>
  </div>
  <div class="col-9">
  <input type="datetime-local" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">
  </div>
</div>
<div class="row g-1">
  <div class="col-2">
  <label for="exampleFormControlInput1" class="form-label">HireDate</label>
  </div>
  <div class="col-9">
  <input type="datetime-local" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">
  </div>
</div> 
<div class="row g-1">
  <div class="col-2">
  <label for="exampleFormControlInput1" class="form-label">SSN # (if applicable)</label>
  </div>
  <div class="col-9">
  <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">
  </div>
</div>
<div class="row g-0 mb-5">
  <div class="col-2">
  <label for="exampleFormControlInput1" class="form-label">Reports to</label>
  </div>
  <div class="col-2">
  <select class="form-select" aria-label="select example" enabled>
  <?php
  $Reports= array("Bunachan","XXY","XYY");
  foreach($Reports as $Report){
    echo '<option value="'.$Report.'">'.$Report.'</option>';
  }
  ?>
</select>
  </div>
</div>
<div class="row g-1">
<h3 class="">Contact Info</h3>
<div class="row g-0">
<hr class="">
</div>
<div class="row g-1">
  <div class="col-2">
  <label for="exampleFormControlInput1" class="form-label">Employee ID</label>
  </div>  
  <div class="col-9">
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
</div>
<div class="row g-1">
  <div class="col-2">
  <label for="exampleFormControlInput1" class="form-label">Address</label>
  </div>  
  <div class="col-9">
  <input type="text" value="7 Houndstooth Rd." class="form-control" id="exampleFormControlInput1">
  </div>
</div>
<div class="row g-1">
  <div class="col-2">
  <label for="exampleFormControlInput1" class="form-label">City</label>
  </div>  
  <div class="col-9">
  <input type="text" value="London" class="form-control" id="exampleFormControlInput1">
  </div>
</div>
<div class="row g-1">
  <div class="col-2">
  <label for="exampleFormControlInput1" class="form-label">Region</label>
  </div>  
  <div class="col-9">
  <input type="text" value="" class="form-control" id="exampleFormControlInput1">
  </div>
</div>
<div class="row g-1">
  <div class="col-2">
  <label for="exampleFormControlInput1" class="form-label" >Postal Code</label>
  </div>  
  <div class="col-9">
  <input type="text" value="WG2 7LT" class="form-control" id="exampleFormControlInput1">
  </div>
</div>
<div class="row g-1">
  <div class="col-2">
  <label for="exampleFormControlInput1" class="form-label">Country</label>
  </div>  
  <div class="col-9">

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
  </div>
</div>
<div class="row g-1">
  <div class="col-2">
  <label for="exampleFormControlInput1" class="form-label">US Home Phone</label>
  </div>  
  <div class="col-9">
  <input type="phone" value="(234)234-2342" class="form-control" id="exampleFormControlInput1">
  </div>
</div>
<div class="row g-1">
  <div class="col-2">
  <label for="exampleFormControlInput1" class="form-label">Photo</label>
  </div>  
  <div class="col-9">
  <input type="phone" value="EmpID9.bmp" class="form-control" id="exampleFormControlInput1">
  </div>
</div>
<div class="row g-1">
<h3 class="">Optinal Info</h3>
<div class="row g-0">
<hr class="">
</div>
<div class="row g-1">
  <div class="col-2">
  <label for="exampleFormControlInput1" class="form-label">Notes</label>
  </div>  
  <div class="col-9">
  <div>

  <div id="editor">This is some sample content.</div>
                <script>
                        ClassicEditor
                                .create( document.querySelector( '#editor' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                </script>
  </div>
  
  </div>
  </div>

</div>
<div class="row g-1">
  <div class="col-2">
  <label for="exampleFormControlInput1" class="form-label">Preffered Shift</label>
  </div>  
  <div class="col-3">
  <div class="form-check">
  <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1">
  <span>Regular</span>
  </div>
  </div>
 
</div>
<div class="row-sm g-1 mx-5">
<div class="form-check mx-5">
  <input class="form-check-input mx-1" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1">
  <span>Gravy Yard</span>
  </div>

</div>
  </div>
  <div class="row g-1">
  <div class="col-2">
  <label for="exampleFormControlInput1" class="form-label">Active?</label>
  </div>  
  <div class="col-3">
  <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1">
                              </div>
  </div>
  <div class="row g-1 mx-5">
  <div class="col-2 mx-5">
    <img src="/phpdemo/Project14/assets/images/validate.png" alt="" class="h-100 w-100 mx-4">
  </div>
  </div>
  <div class="row g-1">

    <div class="col-2">
  <label for="exampleFormControlInput1" class="form-label">Are you human</label>
                              </div>
 <div class="col-3 mx-5 d-flex justify-content-end">
 <label for="exampleFormControlInput1" class="form-label" id="customlabel">Click to change</label>
 </div>
 <div class="row g-1 mb-5 mx-5 -xxl">
   
 <div class="col-9">
  <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2" id="custom">
  </div>
 </div>
  
  <hr>
<div class="row g-1">
<div class="col-2">
<button type="button" class="btn btn-dark" id="but"><i class="fa-solid fa-caret-left"></i></button>
<button type="button" class="btn btn-dark mx-2" id="but2"><i class="fa-solid fa-caret-right"></i></button>
                              </div>
<div class="col-4" id="customcol">
<button type="submit" class="btn btn-dark"><i class="fa-solid fa-hard-drive"></i> Submit</button>
<button type="cancel" class="btn btn-dark mx-2"><i class="fa-solid fa-xmark"></i> Cancel</button>
                            
                              </div>
</div>

</form>
<div class="row g-1">
  <label for="">* required</label>
  
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
</body>
</html>