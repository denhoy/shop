<?php
/*файл для шаблона карточки товара*/
$header_config = [
    'title' => 'Карточка товара',
    'page-style' => 'product.css'
];

include('parts/header.php');

$template = [
    'img' => '',
    'name' => '',
    'price' => '',
    'description' => ''
];
// echo $_GET['id'];
if( !empty( $_GET['id'])){
    
$sql_products = "SELECT * FROM products WHERE id = {$_GET['id']}";
$result_products = mysqli_query($link, $sql_products);
$template = mysqli_fetch_assoc($result_products);
}else{
    //в случае если не передан get-парамаетр с id, делается редирект на catalog.php
    header('Location: /catalog.php');
}
?>
<div class = 'product'>
    <div class = 'product-photo' style = "background-image: url(<?=$template['img']?>)"></div>
    <h1 class = "product-h1"><?=$template['name']?></h1>
    <div class = "product-price">Цена: <?=$template['price']?> рупь</div>
    <div class = "product-description">Описание: <?=$template['description']?></div>
    <div class = "product-add-to-card">Добавить в корзину</div>
</div>

<?php 
$footer_config = [
    'page-js' => 'product.js',
];

include('parts/footer.php');

?>