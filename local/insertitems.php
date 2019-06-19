<?php 

include 'model/AddItem.php'; 

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

    
<div class="list-group">
  <button type="button" class="list-group-item list-group-item-action">Товары</button>
  <button type="button" class="list-group-item list-group-item-action">Категории</button>
  <button type="button" class="list-group-item list-group-item-action">Картинки</button>
  <button type="button" class="list-group-item list-group-item-action">Категории товаров</button>
</div>


<?php 
// echo $timestamp = time() . ' '; 
// function convertDateTime($unixTime) {
//   $dt = new DateTime("@$unixTime");
//   return $dt->format('Y-m-d H:i:s');
// }

// $dateVarName = convertDateTime($timestamp);
// echo $dateVarName;
?>
    
    
  
</div>
<div class="col-sm-8">
    

<?php


// class input {

//   public $sites = array('printer-parts.com', 'site.com', 'printer.com');

//   public $timestamp; 
//   public $name;
//   public $translit;
//   public $short_description;
//   public $description;
//   public $meta_title;
//   public $meta_description;
//   public $meta_keywords;
//   public $method;
//   public $price;
//   public $amount;
//   public $category;
//   public $img;
//   public $product_template;

//   public $filetmpname;
//   public $filetype;
//   public $filename;

//   public function __construct ($timestamp, $name, $translit, $short_description, $description, $meta_title, $meta_description, $meta_keywords, $method, $price, $amount, $category, $img, $product_template, $filetmpname, $filetype, $filename) {
//     $this->timestamp = $timestamp;
//     $this->name = $name;
//     $this->translit = $translit;
//     $this->short_description = $short_description;
//     $this->description = $description;
//     $this->meta_title = $meta_title;
//     $this->meta_description = $meta_description;
//     $this->meta_keywords = $meta_keywords;
//     $this->method = $method;
//     $this->price = $price;
//     $this->amount = $amount;
//     $this->category = $category;
//     $this->img = $img;
//     $this->product_template = $product_template;

//     $this->filetmpname = $filetmpname;
//     $this->filetype = $filetype;
//     $this->filename = $filename;
//   }

//   public function mainAction () {

//   foreach($this->sites as $site) {
//   $url = $site . "/administrator/api/server.php?name=" . urlencode($this->name) . "&translit=" . urlencode($this->translit) . "&short_description=" . urlencode($this->short_description) . "&description=" . urlencode($this->description) . "&meta_title=" . urlencode($this->meta_title) . "&meta_description=" . urlencode($this->meta_description) . "&meta_keywords=" . urlencode($this->meta_keywords) . "&price=" . urlencode($this->price) . "&amount=" . urlencode($this->amount) . "&category=" . urlencode($this->category) . "&img=" . urlencode($this->img) . "&product_template=" . urlencode($this->product_template) . "&method=" . urlencode($this->method);
//   $client = curl_init($url);
//   curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
//   $response = curl_exec($client);
//   $result = json_decode(json_encode($response), True);
//   $array = json_decode($result,true); 
//   print_r($array['data']);
//     }
//   }

//   public function uploader() {


//   $ch = curl_init();
//   $cfile = new CURLFile($this->filetmpname, $this->filetype, $this->filename);

//   $data = array(
//       "myimage"=>$cfile,
//       "timestamp"=>$this->timestamp,
//       "name"=>$this->name,
//       "translit"=>$this->translit,
//       "short_description"=>$this->short_description,
//       "description"=>$this->description,
//       "meta_title"=>$this->meta_title,
//       "meta_description"=>$this->meta_description,
//       "meta_keywords"=>$this->meta_keywords,
//       "method" => $this->method,
//       "price"=>$this->price,
//       "category"=>$this->category,
//       "product_template"=>$this->product_template,
//       //"token"=>$token
//   );

//   foreach($this->sites as $site) {
//     curl_setopt($ch, CURLOPT_URL, $site . "/administrator/api/server.php");
//     curl_setopt($ch, CURLOPT_POST, true);
//     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  
//     $response = curl_exec($ch);
//     $result = json_decode(json_encode($response), True);
//     $array = json_decode($result,true); 
//     print_r($array['data']);
//   }

//   }
// }




if(isset($_POST['submit']))	{

$timestamp = time();   
$name = $_POST['name'];
$translit = $_POST['translit'];
$short_description = $_POST['short_description'];
$description = $_POST['description'];
$meta_title = $_POST['meta_title'];
$meta_description = $_POST['meta_description'];
$meta_keywords = $_POST['meta_keywords'];
$method = $_POST['method'];
$price = $_POST['price'];
$amount = $_POST['amount'];
$category = $_POST['category'];
$product_template = $_POST['product_template'];

$filetmpname = $_FILES['image']['tmp_name']; 
$filetype = $_FILES['image']['type']; 
$filename = $_FILES['image']['name'];

$img = '0';



$set = new input($timestamp, $name, $translit, $short_description, $description, $meta_title, $meta_description, $meta_keywords, $method, $price, $amount, $category, $img, $product_template, $filetmpname, $filetype, $filename);
$set->uploader();

}
?>



<br><br>
<h3>Добавить товар</h3><hr>


<form action="" method="post" enctype="multipart/form-data">
<div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4">Название</label>
      <input type="text" class="form-control" name="name" id="" placeholder="">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Translit</label>
      <input type="text" class="form-control" name="translit" id="" placeholder="">
    </div>
  </div>

  <div class="form-group">
    <label for="inputAddress2">Короткое описание</label>
    <input type="text" class="form-control" name="short_description" id="" placeholder="">
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Описание</label>
    <textarea class="form-control" id="mytextarea" name="description" rows="15"></textarea>
    <!-- <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="5"></textarea> -->
  </div>

  <div class="form-group">
    <label for="inputAddress2">Мета заголовок</label>
    <input type="text" class="form-control" name="meta_title" id="" placeholder="">
  </div>

  <div class="form-group">
    <label for="inputAddress2">Мета описание</label>
    <input type="text" class="form-control" name="meta_description" id="" placeholder="">
  </div>

  <div class="form-group">
    <label for="inputAddress2">Мета ключивые слова</label>
    <input type="text" class="form-control" name="meta_keywords" id="" placeholder="">
  </div>

  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4">Цена</label>
      <input type="text" class="form-control" name="price" id="" placeholder="">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Колличество</label>
      <input type="text" class="form-control" name="amount" id="" placeholder="">
    </div>
    </div>

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputState">Категория</label>
      <select id="inputState" name="category" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label for="exampleFormControlFile1">Картинка</label>
    <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
  </div>

  <input type="hidden" name="method" value="insertitemandfile">
  <input type="hidden" name="product_template" value="default">
  <!-- <input type="hidden" name="img" value="testing.jpg"> -->

  <button type="submit" name="submit" class="btn btn-primary">Отправить</button>
</form>

<br><br>


<?php

if(isset($_POST['submit'])) {
  echo '<pre>';
  print_r($_POST);
  echo '<br>';
  print_r($_FILES);
  echo '</pre>';
}

?>




</div>
  </div>
</div>


<!-- <footer class="footer mt-auto py-3">
  <div class="container">
  <br><br><br>
    <span class="text-muted"></span>
  </div>
</footer> -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="/docs/4.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>