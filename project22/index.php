<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <form action="update_profile.php" method="post" enctype="multipart/form-data">
      <h2>Profile Information</h2> <label for="name">Name:</label> <input type="text" name="name"
         value="<?php $user=['name'=>"quan"];echo $user['name']; ?>" required> <br> <label for="email">Email:</label>
      <input type="email" name="email" value="<?php  $user=['email'=>"quan@gmail.com"];echo $user['email']; ?>"
         disabled> <br>
      <label for="avatar">Avatar:</label> <input type="file" name="avatar" accept="image/*"> <br> <button
         type="submit">Update Profile</button>
      <?php  
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {    
       $errors = [];     
       $user['name'] = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);       $allowedExtensions = ['jpg', 'jpeg', 'png'];     $maxSize = 1048576;   $targetDir = "uploads/"; 
      if (!empty($_FILES['avatar']['tmp_name'])) {         $fileInfo = pathinfo($_FILES['avatar']['name']);         if (!in_array($fileInfo['extension'], $allowedExtensions)) {             $errors[] = "Only JPG, JPEG, and PNG files are allowed.";         } else if ($_FILES['avatar']['size'] > $maxSize) {             $errors[] = "File size must be less than 1MB.";         } else {             $fileName = uniqid() . "." . $fileInfo['extension'];             $targetFile = $targetDir . $fileName;              if (move_uploaded_file($_FILES['avatar']['tmp_name'], $targetFile)) {                 $user['avatar'] = $targetFile;     } else {                 $errors[] = "Failed to upload file.";             }         }     }        if (empty($errors)) {               echo "Profile updated successfully!";     } else {         echo "Errors:";         foreach ($errors as $error) {             echo "<br> - $error";         }     } } 
       ?>
   </form>

</body>

</html>