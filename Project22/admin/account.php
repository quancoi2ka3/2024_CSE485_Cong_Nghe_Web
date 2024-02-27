<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="/phpdemo/Project22/assets/css/account.css">
</head>
<body>
   <div class="container">
      <form action="../upload.php" method="post" enctype="multipart/form-data">
         <p>Account Settings</p>
         <div class="listfuntion">
            <a href="#">Profile</a>
            <a href="#">Password</a>
            <a href="#">Integrations</a>
            <a href="#">Billing</a>
         </div>
         <div class="content">
            <div class="avatar-container">
               <label for="avatarInput" class="avatar">
                  <input type="file" id="avatarInput" name="avatar" accept="image/jpeg, image/png" style="display: none;"> 
                  <?php
                  $images=[
                     ['image'=>'https://gcs.tripi.vn/public-tripi/tripi-feed/img/474083mVb/hinh-anh-avatar-doi-ban-than-de-thuong-2_031546147.png'],
                  ];
                  foreach($images as $image):?>
                  <img src="<?php echo $image['image']?>" alt="">
                  <?php endforeach ?>
               </label>
               <label for="avatarInput" class="choose-image-button">Change my avatar</label>
            </div>
            <?php 
            $profiles=[
               'full name'=>'ABCD',
               'Email'=>'example@gmail.com',
               'phone number'=>'0123456', 
               'Company name'=>"Company",
            ];
            foreach($profiles as $label => $value):?>
               <label for="" class="label">
                  <?php echo ucfirst($label); ?>
               </label>
               <br>
               <input type="text" class="custominput" name="<?php echo str_replace(' ', '_', strtolower($label)); ?>" value="<?php echo $value ?>">
            <?php endforeach ?>
            
         </div>
      </form>
   </div>
</body>
</html>
