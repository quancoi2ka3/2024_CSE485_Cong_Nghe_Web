<?php
$products = [
    [
        "image" => "assets/images/wooden.png",
         "description" => "Wooden Bathroom Set",
         "price" => ""
    ],
    [
        "image" => "assets/images/balo.png",
        "description" => "Waterproof Emil Backpack",
        "price" => "$99.00",
    ],
    [
        "image" => "assets/images/stylo.png",
        "description" => "Stylo Stool",
        "price" => "$300.00",
        ],
    [
        "image" => "assets/images/chair.png",
        "description" => "Stylish Wooden Chair",
        "price" => "$349.00 $249.00",
    ],

    [
        "image" => "assets/images/image1.webp",
        "description" => "This photo is very beautiful",
        "price" => "$200.00"
    ],
    [
        "image" => "assets/images/image2.jpg",
        "description" => "This photo is very beautiful",
        "price" => "$50.00"
    ],
    [
        "image" => "assets/images/image3.jpg",
        "description" => "This photo is very beautiful",
        "price" => "$100.00"
    ],
    [
        "image" => "assets/images/image4.jpg",
        "description" => "This photo is very beautiful",
        "price" => "$150.00"
    ],
    [
        "image" => "assets/images/image5.jpeg",
        "description" => "This photo is very beautiful",
        "price" => "$10.00"
    ],
    [
        "image" => "assets/images/image6.jpeg",
        "description" => "This photo is very beautiful",
        "price" => "$20.00"
    ],
    [
        "image" => "assets/images/image7.jpg",
        "description" => "This photo is very beautiful",
        "price" => "$40.00"
    ],
    [
        "image" => "assets/images/image8.jpg",
        "description" => "This photo is very beautiful",
        "price" => "$90.00"
    ],
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project21</title>
    <link rel="stylesheet" href="assets/css/style21.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <?php
            $items = 4; //số sản phẩm hiển thị trên mỗi trang
            $currentPage = isset($_GET['page']) ? $_GET['page'] : 1; //mặc định trang hiện tại là trang 1
            $totalPages = ceil(count($products) / $items); //tính tổng số trang
            $startIndex = ($currentPage - 1) * $items; //lấy ra các sản phẩm của trang hiện tại
            $count = 0;
            foreach(array_slice($products, $startIndex, $items) as $product) {
                if($count % 4 == 0) {
                    echo '<div class="row">';
                }
                
                echo '<div class="col-md-3">';
                echo '<div class="product">';
                echo '<img src="'. $product['image'] .'" alt="" class="product-image">';
                echo '<p>'. $product['description'] .'</p>';
            echo '<p>' . $product['price'] . '</p>';
                echo '</div>';
                echo '</div>';
                
                if($count % 4 == 3) {
                    echo '</div>';
                }
               
                $count++;
            }    

            if($count % 4 != 0) {
                echo '</div>';
            }

            //Hiển thị phân trang
            echo '<div class="pagination">';
            for($i = 1; $i <= $totalPages; $i++) {
                echo '<a href="?page='. $i .'">'. $i .'</a>';

                if ($i <= $totalPages) {
                    echo "&nbsp;&nbsp;"; 
                }
            }
            if($currentPage < $totalPages) {
                echo '<a href="?page='. ($currentPage + 1) .'">Next</a>';
            }
            echo '</div>';
       ?>
    </div>
    
</body>
</html>