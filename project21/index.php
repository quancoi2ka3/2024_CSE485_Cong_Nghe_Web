<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="/project21/assets/css/style.css">
   <title>Project21</title>
</head>

<body>

   <div class="home_page">
      <?php
   $products = [ [ "id" => 1, 
   'image_url'=>'.vscode/php/2024_CSE485_Cong_Nghe_Web/project21/assets/image/1934c9b6b43c2aa99beb21141d8d8a83.jpg',
   "name" => "T-Shirt",
    "price" => 15.99, "description" => "A comfortable and stylish T-Shirt." ], 
    [ "id" => 2,
    'image_url'=>'.vscode/php/2024_CSE485_Cong_Nghe_Web/project21/assets/image/1934c9b6b43c2aa99beb21141d8d8a83.jpg', 
    "name" => "Jean", "price" => 23, 
    "description" => "A comfortable and stylish Jean." ] ,
    [ "id" => 3,
    'image_url'=>'.vscode/php/2024_CSE485_Cong_Nghe_Web/project21/assets/image/1934c9b6b43c2aa99beb21141d8d8a83.jpg', 
    "name" => "Hat",
     "price" => 30,
      "description" => "A comfortable and stylish Jean." ] ];
      foreach ($products as $product) {
         echo '<div class="product" style ="">'; 
         echo '<div class="image" style ="">'; 
         echo '<img src="' . $product['image_url'] . '" alt="' . $product['id'] . '">';
         echo '</div>' ;
         echo '<h3>' . $product['name'] . '</h3>'; echo '<p>' . $product['description'] . '</p>' ;
          echo '</div>' ; }
   ?>
   </div>
   <div class="pagination"> <?php  
   $itemsPerPage = 10;
   $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
   $currentPageItems = array_slice($products, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
   if ($currentPage > 1): ?> <a href="?page=<?php echo $currentPage - 1; ?>">Previous</a>
      <?php endif; ?> <?php for ($i = 1; $i <= 3; $i++): ?> <?php if ($i == $currentPage): ?> <span
         class="active"><?php echo $i; ?></span> <?php else: ?> <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
      <?php endif; ?> <?php endfor; ?> <?php if ($currentPage < 3): ?> <a
         href="?page=<?php echo $currentPage + 1; ?>">Next</a> <?php endif; ?> </div>
</body>

</html>