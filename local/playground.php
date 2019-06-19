<?php 
include 'model/ActionModel.php';
?>
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Sticky Footer Navbar Template · Bootstrap</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sticky-footer-navbar/">
<link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
  tinymce.init({
    selector: '#mytextarea'
  });
</script>
<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
    .bd-placeholder-img-lg {
        font-size: 3.5rem;
        }
    }

    body {
      background : #e9edf5;
    }
    </style>
    <link href="sticky-footer-navbar.css" rel="stylesheet">
  </head>
  <body class="d-flex flex-column h-100">

  <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="index.php">Главная </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="insertitems.php">Добавить товар <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="playground.php">Наполнить базу <span class="sr-only">(current)</span></a>
        </li>
    </div>
  </nav>
</header>


<div class="container">
<br><br>
  <div class="row">
    <div class="col-sm-4">

    <br><br>
<h3>Навигация</h3><hr>


<?php 

echo $timestamp = time() . ' '; 
function convertDateTime($unixTime) {
  $dt = new DateTime("@$unixTime");
  return $dt->format('Y-m-d H:i:s');
}

$dateVarName = convertDateTime($timestamp);

echo $dateVarName;

?>
    
    
  
</div>
<div class="col-sm-8">

<?php
$set = new Client_clean();

//$array = $set->get_products();

//$array = $set->Get_product_to_category();

//$array = $set->Get_products_imagesy();

$array = $set->Get_category();

echo '<pre>';
print_r($array);
echo '</pre>';

// foreach($array['data'] as $key => $val) {
// $set->Set_category(
//   $val['category_id'],
//   $val['category_image'],
//   $val['category_parent_id'],
//   $val['category_publish'],
//   $val['category_template'],
//   $val['ordering'],
//   $val['category_add_date'],
//   $val['products_page'],
//   $val['products_row'],
//   $val['access'],
//   $val['name_en-GB'],
//   $val['alias_en-GB'],
//   $val['short_description_en-GB'],
//   $val['description_en-GB'],
//   $val['meta_title_en-GB'],
//   $val['meta_description_en-GB'],
//   $val['meta_keyword_en-GB'],
//   $val['name_ru-RU'],
//   $val['alias_ru-RU'],
//   $val['short_description_ru-RU'],
//   $val['description_ru-RU'],
//   $val['meta_title_ru-RU'],
//   $val['meta_description_ru-RU'],
//   $val['meta_keyword_ru-RU'],
//   $val['category_id']
// );
// }


// foreach($array['data'] as $key => $val) {
// $set->Set_products_img($val['image_id'], $val['product_id'], $val['image_name'], $val['name'], $val['ordering']);
// }


// foreach($array['data'] as $key => $val) {

//   $url = 'http://vce-o-printere.ru/components/com_jshopping/files/img_products/' . $val['image_name'];
//   $path = 'C:/vhosts/img/' . $val['image_name'];
//   file_put_contents($path, file_get_contents($url));

//   $url = 'http://vce-o-printere.ru/components/com_jshopping/files/img_products/' . $val['image_thumb'];
//   $path = 'C:/vhosts/img/' . $val['image_thumb'];
//   file_put_contents($path, file_get_contents($url));

//   $url = 'http://vce-o-printere.ru/components/com_jshopping/files/img_products/' . $val['image_full'];
//   $path = 'C:/vhosts/img/' . $val['image_full'];
//   file_put_contents($path, file_get_contents($url));


// }


// foreach($array['data'] as $key => $val) {
// $set->Set_product_to_category($val['product_id'], $val['category_id'], $val['product_ordering']);
// }

// foreach($array['data'] as $key => $val) {

// $set->Setter($val['product_id'], 
// $val['parent_id'], 
// $val['product_ean'], 
// $val['product_quantity'], 
// $val['unlimited'], 
// $val['product_availability'], 
// $val['product_date_added'], 
// $val['date_modify'], 
// $val['product_publish'], 
// $val['product_tax_id'], 
// $val['currency_id'], 
// $val['product_template'], 
// $val['product_url'], 
// $val['product_old_price'], 
// $val['product_buy_price'],
// $val['product_price'],
// $val['min_price'],
// $val['different_prices'],
// $val['product_weight'],
// $val['product_name_image'],
// $val['product_manufacturer_id'],
// $val['product_is_add_price'],
// $val['add_price_unit_id'],
// $val['average_rating'],
// $val['reviews_count'],
// $val['delivery_times_id'],
// $val['hits'],
// $val['weight_volume_units'],
// $val['basic_price_unit_id'],
// $val['label_id'],
// $val['vendor_id'],
// $val['access'],
// $val['name_en-GB'],
// $val['alias_en-GB'], 
// $val['short_description_en-GB'],
// $val['description_en-GB'],
// $val['meta_title_en-GB'],
// $val['meta_description_en-GB'],
// $val['meta_keyword_en-GB'],
// $val['name_ru-RU'],
// $val['alias_ru-RU'],
// $val['short_description_ru-RU'], 
// $val['description_ru-RU'],
// $val['meta_title_ru-RU'],
// $val['meta_keyword_ru-RU'],
// $val['meta_description_ru-RU'],
// $val['product_bonus_add'],
// $val['product_bonus_sub'],
// $val['ballance'], 
// $val['ext_id']
// );

// }

?>



</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="/docs/4.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>