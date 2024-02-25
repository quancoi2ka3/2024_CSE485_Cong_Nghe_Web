<!DOCTYPE html>
<html lang="en">

<head>
   <title>Bài tập thực hành 14</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="/project14/assets/css/css.css">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
   <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
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
   <div class="form-container">
      <h1>Basic Info</h1>
      <form action="#" method="post">
         <div class="form-group">
            <label for="employee-id">Employee ID:</label>
            <input type="text" id="employee-id" name="employee-id">
         </div>
         <div class="form-group">
            <label for="last-name">Last Name:</label>
            <input type="text" id="last-name" name="last-name">
         </div>
         <div class="form-group">
            <label for="first-name">First Name:</label>
            <input type="text" id="first-name" name="first-name">
         </div>
         <div class="form-group" style="display : flex">
            <label>Gender:</label><br>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label><br>
         </div>
         <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title">
         </div>
         <div class="form-group">
            <label for="suffix">Suffix:</label>
            <input type="text" id="suffix" name="suffix">
         </div>
         <div class="form-group">
            <label for="birthdate">Birth Date:</label>
            <input type="date" id="birthdate" name="birthdate">
         </div>
         <div class="form-group">
            <label for="hiredate">Hire Date:</label>
            <input type="date" id="hiredate" name="hiredate">
         </div>
         <div class="form-group">
            <label for="ssn">SSN #:</label>
            <input type="text" id="ssn" name="ssn">
         </div>
         <div class="form-group">
            <label for="report-to">Report To:</label>
            <input type="text" id="report-to" name="report-to">
         </div>
      </form>
      <h1>Contact Info</h1>
      <form action="#" method="post">
         <div class="form-group">
            <label for="employee-id">Email :</label>
            <input type="text" id="employee-id" name="employee-id">
         </div>
         <div class="form-group">
            <label for="last-name">Address</label>
            <input type="text" id="last-name" name="last-name">
         </div>
         <div class="form-group">
            <label for="first-name">City</label>
            <input type="text" id="first-name" name="first-name">
         </div>
         <div class="form-group">
            <label for="gender">Region:</label>
            <input type="text" id="first-name" name="first-name">
         </div>
         <div class="form-group">
            <label for="title">Postal Code</label>
            <input type="text" id="title" name="title">
         </div>
         <div class="form-group">
            <label for="suffix">Country:</label>
            <select id="gender" name="gender">
               <option value="male">Vietnam</option>
               <option value="female">US</option>
               <option value="other">UKr</option>
            </select>
         </div>
         <div class="form-group">
            <label for="birthdate">US Home Phone:</label>
            <input type="text" id="last-name" name="last-name">
         </div>
         <div class="form-group">
            <label for="hiredate">Photo:</label>
            <input type="file" id="photo" name="photo" accept="image/*">
         </div>
      </form>
      <h1>Optional Info</h1>
      <form action="#" method="post">
         <div class="form-group">
            <label for="note">Note:</label>
            <textarea id="note" name="note"></textarea>
         </div>
         <div class="form-group" style="display : flex">
            <label for=" last-name">Preferred Shift:</label>
            <input type="radio" id="male" name="gender" value="male">
            <label for=" last-name">Regular</label><br>
            <input type="radio" id="male" name="gender" value="male">
            <label for=" last-name">Gravy Yard</label>
         </div>
         <div class="form-group">
            <label for="first-name">Active:</label>
            <input type="radio" id="male" name="gender" value="male">

         </div>
         <div class="form-group">
            <label for="captcha">Are you human? </label><br>
            <img src="captcha_image.jpg" alt="CAPTCHA"><br>
            <input type="text" id="captcha" name="captcha" placeholder="Enter the code">
         </div>
   </div>

   <div class="form-group">
      <button type="submit" style="float : right">Submit</button>
      <button type="cancel" style="float : right">Cancel</button>
   </div>
   </form>
   </div>

</body>


</html>