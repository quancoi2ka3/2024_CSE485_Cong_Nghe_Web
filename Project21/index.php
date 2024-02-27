<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTTH1</title>
    <link rel="stylesheet" href="/phpdemo/Project21/assets/css/index.css">
    
</head>

<body>

<div class="product-list">

<?php 
$products = array(
    array(
        "image" => "https://gtemplates.wdesignkit.com/theplusblocks/wp-content/uploads/sites/40/2021/05/stool-1-1.jpg",
        "id" => 1,
        "name" => "T-Shirt",
        "price" => 15.99,
        "description" => "A comfortable and stylish T-Shirt."
    ),
    array(
        "image" => "https://5.imimg.com/data5/KY/ZH/JX/SELLER-93099060/wooden-modern-chair-500x500.png",
        "id" => 2,
        "name" => "Chair",
        "price" => 99.99,
        "description" => "A comfortable and stylish Chair."
    ),
    array(
        "image" => "https://images.squarespace-cdn.com/content/v1/53883795e4b016c956b8d243/1551170526130-MW106C3T9XAV4Z5UMBTT/chup-anh-tui-xach-2.jpg",
        "id" => 3,
        "name" => "Bag",
        "price" => 29.99,
        "description" => "A fashionable bag."
    ),
    array(
        "image" => "https://studiovietnam.com/wp-content/uploads/2020/08/50-mau-chup-anh-vi-da-tui-xach-cho-nu-2.jpg",
        "id" => 4,
        "name" => "Leather Bag",
        "price" => 49.99,
        "description" => "A stylish leather bag for women."
    ),
    array(
        "image" => "https://vidatuixachlouiskimmi.com/wp-content/uploads/2021/12/Tui-xach-nu-cao-cap-Louis-Vuitton-Den-4.jpg",
        "id" => 5,
        "name" => "Luxury Bag",
        "price" => 199.99,
        "description" => "A luxurious designer bag."
    ),
    array(
        "image" => "https://bizweb.dktcdn.net/100/302/614/products/z3313605423268-6f79767fc973ed7ab4ad4e227fb418c0.jpg?v=1650014952787",
        "id" => 6,
        "name" => "Backpack",
        "price" => 39.99,
        "description" => "A trendy backpack for everyday use."
    ),
    array(
        "image" => "https://bizweb.dktcdn.net/100/302/614/products/z3313605423268-6f79767fc973ed7ab4ad4e227fb418c0.jpg?v=1650014952787",
        "id" => 6,
        "name" => "Backpack",
        "price" => 39.99,
        "description" => "A trendy backpack for everyday use."
    ),
    array(
        "image" => "https://bizweb.dktcdn.net/100/302/614/products/z3313605423268-6f79767fc973ed7ab4ad4e227fb418c0.jpg?v=1650014952787",
        "id" => 6,
        "name" => "Backpack",
        "price" => 39.99,
        "description" => "A trendy backpack for everyday use."
    ),
    array(
        "image" => "https://bizweb.dktcdn.net/100/302/614/products/z3313605423268-6f79767fc973ed7ab4ad4e227fb418c0.jpg?v=1650014952787",
        "id" => 6,
        "name" => "Backpack",
        "price" => 39.99,
        "description" => "A trendy backpack for everyday use."
    ),
    array(
        "image" => "https://bizweb.dktcdn.net/100/302/614/products/z3313605423268-6f79767fc973ed7ab4ad4e227fb418c0.jpg?v=1650014952787",
        "id" => 6,
        "name" => "Backpack",
        "price" => 39.99,
        "description" => "A trendy backpack for everyday use."
    ),
    array(
        "image" => "https://bizweb.dktcdn.net/100/302/614/products/z3313605423268-6f79767fc973ed7ab4ad4e227fb418c0.jpg?v=1650014952787",
        "id" => 6,
        "name" => "Backpack",
        "price" => 39.99,
        "description" => "A trendy backpack for everyday use."
    ),
    array(
        "image" => "https://bizweb.dktcdn.net/100/302/614/products/z3313605423268-6f79767fc973ed7ab4ad4e227fb418c0.jpg?v=1650014952787",
        "id" => 6,
        "name" => "Backpack",
        "price" => 39.99,
        "description" => "A trendy backpack for everyday use."
    ),
     array(
        "image" => "https://bizweb.dktcdn.net/100/302/614/products/z3313605423268-6f79767fc973ed7ab4ad4e227fb418c0.jpg?v=1650014952787",
        "id" => 6,
        "name" => "Backpack",
        "price" => 39.99,
        "description" => "A trendy backpack for everyday use."
    ),
    array(
        "image" => "https://bizweb.dktcdn.net/100/302/614/products/z3313605423268-6f79767fc973ed7ab4ad4e227fb418c0.jpg?v=1650014952787",
        "id" => 6,
        "name" => "Backpack",
        "price" => 39.99,
        "description" => "A trendy backpack for everyday use."
    ),
    array(
        "image" => "https://bizweb.dktcdn.net/100/302/614/products/z3313605423268-6f79767fc973ed7ab4ad4e227fb418c0.jpg?v=1650014952787",
        "id" => 6,
        "name" => "Backpack",
        "price" => 39.99,
        "description" => "A trendy backpack for everyday use."
    ),
    array(
        "image" => "https://bizweb.dktcdn.net/100/302/614/products/z3313605423268-6f79767fc973ed7ab4ad4e227fb418c0.jpg?v=1650014952787",
        "id" => 6,
        "name" => "Backpack",
        "price" => 39.99,
        "description" => "A trendy backpack for everyday use."
    ),
    array(
        "image" => "https://bizweb.dktcdn.net/100/302/614/products/z3313605423268-6f79767fc973ed7ab4ad4e227fb418c0.jpg?v=1650014952787",
        "id" => 6,
        "name" => "Backpack",
        "price" => 39.99,
        "description" => "A trendy backpack for everyday use."
    ),
    array(
        "image" => "https://bizweb.dktcdn.net/100/302/614/products/z3313605423268-6f79767fc973ed7ab4ad4e227fb418c0.jpg?v=1650014952787",
        "id" => 6,
        "name" => "Backpack",
        "price" => 39.99,
        "description" => "A trendy backpack for everyday use."
    ),
    array(
        "image" => "https://bizweb.dktcdn.net/100/302/614/products/z3313605423268-6f79767fc973ed7ab4ad4e227fb418c0.jpg?v=1650014952787",
        "id" => 6,
        "name" => "Backpack",
        "price" => 39.99,
        "description" => "A trendy backpack for everyday use."
    ),
    array(
        "image" => "https://bizweb.dktcdn.net/100/302/614/products/z3313605423268-6f79767fc973ed7ab4ad4e227fb418c0.jpg?v=1650014952787",
        "id" => 6,
        "name" => "Backpack",
        "price" => 39.99,
        "description" => "A trendy backpack for everyday use."
    ),
    array(
        "image" => "https://bizweb.dktcdn.net/100/302/614/products/z3313605423268-6f79767fc973ed7ab4ad4e227fb418c0.jpg?v=1650014952787",
        "id" => 6,
        "name" => "Backpack",
        "price" => 39.99,
        "description" => "A trendy backpack for everyday use."
    ),
);

$itemsPerPage = 6;
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
$totalPages = ceil(count($products) / $itemsPerPage);
$start = max(1, $currentPage - 2);
$end = min($totalPages, $currentPage + 2);

$currentPageItems = array_slice($products, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);

foreach ($currentPageItems as $product): ?>
    <div class="product">
        <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
        <h2><?php echo $product['name']; ?></h2>
        <p><?php echo $product['description']; ?></p>
        <span><?php echo $product['price']; ?></span>
    </div>
<?php endforeach; ?>

</div>

<div class="pagination">
    <?php if ($currentPage > 1): ?>
        <a href="?page=<?php echo $currentPage - 1; ?>">Previous</a>
    <?php endif; ?>
    
    <?php for ($i = $start; $i <= $end; $i++): ?>
        <?php if ($i > 0 && $i <= $totalPages): ?>
            <?php if ($i == $currentPage): ?>
                <span class="active"><?php echo $i; ?></span>
            <?php else: ?>
                <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
            <?php endif; ?>
        <?php endif; ?>
    <?php endfor; ?>
    
    <?php if ($currentPage < $totalPages): ?>
        <a href="?page=<?php echo $currentPage + 1; ?>">Next</a>
    <?php endif; ?>
</div>

</body>
</html>
