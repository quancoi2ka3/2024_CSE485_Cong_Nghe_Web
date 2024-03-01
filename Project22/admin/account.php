<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Account Settings</title>
   <link rel="stylesheet" href="/phpdemo/Project22/assets/css/css.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <style>

   </style>
</head>

<body>
   <div class="container">
      <form class ="mx-auto mt-5" action="/phpdemo/Project22/admin/upload.php" method="post" enctype="multipart/form-data">
         <h2>Account Settings</h2>
         <ul>
            <li><a href="">Profile</a></li>
            <li><a href="">Password</a></li>
            <li><a href="">Intergrations</a></li>
            <li><a href="">Billing</a></li>
         </ul>
         <div class="profile">
        <div id="imageContainer"></div>
            <label for="avatar" id="custom">Change my avatar</label>
            <input type="file" class="form-control-file" id="avatar" accept="image/*" style="display:none;" onchange="displayImage(this)">
            <div class="row g-1" id="row1">
               <label for="exampleInputEmail1" class="form-label">Email address</label>
               <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="row g-1">
               <label for="exampleInputEmail1" class="form-label">Email address</label>
               <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="row g-1">
               <label for="exampleInputEmail1" class="form-label">Email address</label>
               <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="row g-1">
               <label for="exampleInputEmail1" class="form-label">Email address</label>
               <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit">Submit</button>
         </div>

      </form>
   </div>
   
   <script>
      function displayImage(input) {
         var file = input.files[0];
         var reader = new FileReader();
         
         reader.onload = function(e) {
            var imageContainer = document.getElementById('imageContainer');
            imageContainer.innerHTML = ''; // Xóa ảnh cũ trước khi hiển thị ảnh mới
            var img = document.createElement('img');
            img.src = e.target.result;
            img.style.maxWidth = '200px'; // Thiết lập chiều rộng tối đa cho ảnh
            img.className="rounded-image"
            imageContainer.appendChild(img);
         };
         
         reader.readAsDataURL(file);
      }
   </script>
</body>
</html>
