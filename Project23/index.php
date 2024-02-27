<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/phpdemo/Project23/assets/css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<?php
$products = [
[
"images"=>"https://www.shakedownrecords.com/cdn/shop/products/IMG_1268.jpg?v=1515582805",
"id" => 1,
"name" => "T-Shirt",
"price" => 15.99,
"description" => "A comfortable and stylish T-Shirt."
],
[
"images"=>"https://www.shakedownrecords.com/cdn/shop/products/IMG_1268.jpg?v=1515582805",
"id" => 2,
"name" => "Jean",
"price" => 23,
"description" => "A comfortable and stylish Jean."
],

];
$itemsPerPage = 2;
$currentPage= isset($_GET['page']) ? $_GET['page'] : 1;
$totalPages = ceil(count($products) / $itemsPerPage);
$currentPageItems =array_slice($products, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
?>
<div class="product-list row container-fluid"id ="row">
<?php foreach ($currentPageItems as $product): ?>
<div class="col-3" id="custom">
<div class="product">
<img src="<?php 
echo $product['images']; 
?>" alt="">
</div>
</div>
<?php endforeach; ?>
</div>
<div class="pagination">
<?php if ($currentPage > 1): ?>
<a href="?page=<?php echo $currentPage - 1; ?>">Previous</a>
<?php endif; ?><?php for ($i = 1; $i <= $totalPages; $i++): ?>
<?php if ($i == $currentPage): ?>
<span class="active"><?php echo $i; ?></span>
<?php else: ?>
<a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
<?php endif; ?>
<?php endfor; ?>
<?php if ($currentPage < $totalPages): ?>
<a href="?page=<?php echo $currentPage + 1; ?>">Next</a>
<?php endif; ?>
</div>
</body>
</html>