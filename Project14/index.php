<!DOCTYPE html>
<html lang="en">

<head>
   <title>Bài tập thực hành 14</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
   <link rel="stylesheet" href="assets/css/style.css">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
   <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
   <script src="https://ckeditor.com/ckeditor-5/download/"></script>
   <script>
      ClassicEditor
         .create(document.querySelector('#note'), {
            toolbar: ['heading', '|', 'bold', 'italic', 'underline', 'strikethrough', '|', 'bulletedList',
               'numberedList', '|', 'alignment', '|', 'indent', 'outdent', '|', 'link', 'blockQuote', 'imageUpload',
               '|', 'undo', 'redo'
            ]
         })
         .catch(error => {
            console.error(error);
         });
   </script>

</head>

<body>
   <div class="main-form">
      <h1 style="border-bottom:3px solid rgb(0, 0,0)">Basic Info</h1>
      <form action=" #" method="post">
         <div class="item-form-group">
            <h5>Employee ID:</h5>
            <input type="text">
         </div>
         <div class="item-form-group">
            <h5>Last Name:</h5>
            <input type="text">
         </div>
         <div class="item-form-group">
            <h5>First Name:</h5>
            <input type="text">
         </div>
         <div style="display : flex; ">
            <h5 style="margin-right: 180px">Gender</h5>
            <div class="options">
               <input type="radio" id="option1" name="options">
               <label for="option1">Male</label><br>
               <input type="radio" id="option2" name="options">
               <label for="option2">Female</label><br>
               <input type="radio" id="option2" name="options">
               <label for="option2">XXX</label><br>
               <input type="radio" id="option2" name="options">
               <label for="option2">ZZZ</label><br>
            </div>
         </div>
         <div class="item-form-group">
            <h5>Title:</h5>
            <input type="text">
         </div>
         <div class="item-form-group">
            <h5>Suffix:</h5>
            <input type="text">
         </div>
         <div class="item-form-group">
            <h5>BirthDate:</h5>
            <input type="date" style="width: 700px">
         </div>
         <div class="item-form-group">
            <h5>HireDate:</h5>
            <input type="date" style="width: 700px">
         </div>
         <div style="display :flex;">
            <h5>SSN # (if applicable):</h5>
            <div class=" input-container">
               <input type="text" class="icon-input">
            </div>
         </div>
         <div class="item-form-group">
            <h5>Report To</h5>
            <input type="text">
         </div>
         <h1 style="border-bottom:3px solid rgb(0, 0,0)">Contact Info</h1>
         <form action=" #" method="post">
            <div class="item-form-group">
               <h5>Email:</h5>
               <input type="text" placeholder="name@example.com">
            </div>
            <div class="item-form-group">
               <h5>Address:</h5>
               <input type="text">
            </div>
            <div class="item-form-group">
               <h5>City:</h5>
               <input type="text">
            </div>
            <div style="display : flex; ">
               <h5 style="margin-right: 180px">Gender</h5>
               <input type="text">
            </div>
            <div class="item-form-group">
               <h5>Region:</h5>
               <input type="text">
            </div>
            <div class="item-form-group">
               <h5>Postal Code:</h5>
               <input type="text">
            </div>
            <div class="item-form-group">
               <h5>Country:</h5>
               <input type="text">
            </div>
            <div class=" item-form-group">
               <h5>VN Home Phone:</h5>
               <input type="text" placeholder="(+84)">
            </div>
            <div style="display :flex;">
               <h5>Photo:</h5>
               <div class=" input-container">
                  <input type="file" style="margin-left: 130px">
               </div>
            </div>
         </form>
         <h1 style="border-bottom:3px solid rgb(0, 0,0)">Optional Info</h1>
         <form action=" #" method="post">
            <div class="item-form-group">
               <h5>Notes:</h5>
               <div style="margin-right : 64px">
                  <textarea name="editor" id="editor" rows="14"></textarea>

                  <script>
                     ClassicEditor
                        .create(document.querySelector('#editor'))
                        .then(editor => {
                           console.log(editor);
                        })
                        .catch(error => {
                           console.error(error);
                        });
                  </script>
               </div>
            </div>
            <div class="" style="display: flex;">
               <h5>Preferred Shift:</h5>
               <div style="margin-left: 107px;"><input type="checkbox" id="my-checkbox"><label for="">Regular</label><br><input type="checkbox" id="my-checkbox"><label for="">Gravy Yard</label><br>
               </div>
            </div>
            <div class="" style="display: flex;">
               <h5>Active:</h5>
               <div style="margin-left: 183px;"><input type="checkbox" id="my-checkbox">
               </div>
            </div>
            <div style="display : flex; ">
               <h5 style="margin-right: 97px">Are you human?</h5>
               <?php
               // Generate a random number on the server
               $random_number = rand(1, 10);
               ?>

               <form action="your_form_submission_action.php" method="post">
                  <input type="hidden" name="challenge_number" value="<?php echo $random_number; ?>">
                  <label for="challenge_response">What is <?php echo $random_number; ?> + 2?</label>
                  <input type="number" name="challenge_response" required>
                  <button type="submit">Answer</button>
               </form>

            </div>
            <div class="item-form-group">
               <div>
                  <button type="button" onclick="back()">Quay lại</button>
                  <button type="button" onclick="next()">Tiếp theo</button>
               </div>
               <div> <button type="submit">Submit</button>
                  <button type="cancel">Cancel</button>
               </div>

            </div>

   </div>

</body>


</html>