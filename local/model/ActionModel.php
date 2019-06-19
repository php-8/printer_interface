<?php

include 'model/AppModel.php';

class Client_clean extends AppModel {

    public function __construct() {
        parent::__construct();
    }

    public function Get_products_imagesy() {
        $url = "vce-o-printere.ru/administrator/api/receiver.php?method=get_products_images";
        $client = curl_init($url);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);
        $result = json_decode(json_encode($response), True);
        $this->array = json_decode($result,true);  
        return $this->array;
    }

    public function Get_product_to_category() {
        $url = "vce-o-printere.ru/administrator/api/receiver.php?method=get_product_to_category";
        $client = curl_init($url);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);
        $result = json_decode(json_encode($response), True);
        $this->array = json_decode($result,true);  
        return $this->array;
    }

    public function Get_category() {
        $url = "vce-o-printere.ru/administrator/api/receiver.php?method=get_category";
        $client = curl_init($url);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);
        $result = json_decode(json_encode($response), True);
        $this->array = json_decode($result,true);  
        return $this->array;
    }

    public function Getter() {
        $url = "vce-o-printere.ru/administrator/api/receiver.php?method=get_products";
        $client = curl_init($url);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);
        $result = json_decode(json_encode($response), True);
        $this->array = json_decode($result,true);  
        return $this->array;
    }


    public function Set_category($category_category_id, $category_category_image, $category_category_parent_id, $category_category_publish, $category_category_template, $category_ordering, $category_category_add_date, $category_products_page, $category_products_row, $category_access, $category_name_en_GB, $category_alias_en_GB, $category_short_description_en_GB, $category_description_en_GB, $category_meta_title_en_GB, $category_meta_description_en_GB, $category_meta_keyword_en_GB, $category_name_ru_RU, $category_alias_ru_RU, $category_short_description_ru_RU, $category_description_ru_RU, $category_meta_title_ru_RU, $category_meta_description_ru_RU, $category_meta_keyword_ru_RU) {
        $c = curl_init();
        $category_data = array(
        "category_id" => $category_category_id,
        "category_image" => $category_category_image,
        "category_parent_id" => $category_category_parent_id,
        "category_publish" => $category_category_publish,
        "category_template" => $category_category_template,
        "ordering" => $category_ordering,
        "category_add_date" => $category_category_add_date,
        "products_page" => $category_products_page,
        "products_row" => $category_products_row,
        "access" => $category_access,
        "name_en-GB" => $category_name_en_GB,
        "alias_en-GB" => $category_alias_en_GB,
        "short_description_en-GB" => $category_short_description_en_GB,
        "description_en-GB" => $category_description_en_GB,
        "meta_title_en-GB" => $category_meta_title_en_GB,
        "meta_description_en-GB" => $category_meta_description_en_GB,
        "meta_keyword_en-GB" => $category_meta_keyword_en_GB,
        "name_ru-RU" => $category_name_ru_RU,
        "alias_ru-RU" => $category_alias_ru_RU,
        "short_description_ru-RU" => $category_short_description_ru_RU,
        "description_ru-RU" => $category_description_ru_RU,
        "meta_title_ru-RU" => $category_meta_title_ru_RU,
        "meta_description_ru-RU" => $category_meta_description_ru_RU,
        "meta_keyword_ru-RU" => $category_meta_keyword_ru_RU,
        "sync_id" => $category_category_id,	
        "method" =>"set_category",
        );
        curl_setopt($c, CURLOPT_URL, "http://printer-almaty.kz/administrator/api/receiver.php");
        curl_setopt($c, CURLOPT_POST, true);
        curl_setopt($c, CURLOPT_POSTFIELDS, $category_data);
        $response = curl_exec($c);
        $result = json_decode(json_encode($response), True);
        $array = json_decode($result,true); 
    }


    public function Set_products_img($img_image_id, $img_product_id, $img_image_name, $img_name, $img_ordering) {
        !isset($img_image_id) || !empty($img_image_id) ? $img_image_id = $img_image_id : $img_image_id = '0';
        !isset($img_product_id) || !empty($img_product_id) ? $img_product_id = $img_product_id : $img_product_id = '0';
        !isset($img_image_name) || !empty($img_image_name) ? $img_image_name = $img_image_name : $img_image_name = '0';
        !isset($img_name) || !empty($img_name) ? $img_name = $img_name : $img_name = '0';
        !isset($img_ordering) || !empty($img_ordering) ? $img_ordering = $img_ordering : $img_ordering = '0';
        $c = curl_init();
        $category_data = array(
            "img_image_id"=>$img_image_id, 
            "img_product_id"=>$img_product_id,
            "img_image_name"=>$img_image_name, 
            "img_name"=>$img_name,
            "img_ordering"=>$img_ordering, 
            "method" =>"set_products_img",
        );
        curl_setopt($c, CURLOPT_URL, "http://printer-almaty.kz/administrator/api/receiver.php");
        curl_setopt($c, CURLOPT_POST, true);
        curl_setopt($c, CURLOPT_POSTFIELDS, $category_data);
        $response = curl_exec($c);
        $result = json_decode(json_encode($response), True);
        $array = json_decode($result,true); 
    }

    public function Set_product_to_category($category_product_id, $category_category_id, $category_product_ordering) {
        !isset($category_product_id) || !empty($category_product_id) ? $category_product_id = $category_product_id : $category_product_id = '0';
        !isset($category_category_id) || !empty($category_category_id) ? $category_category_id = $category_category_id : $category_category_id = '0';
        !isset($category_product_ordering) || !empty($category_product_ordering) ? $category_product_ordering = $category_product_ordering : $category_product_ordering = '0';
        $c = curl_init();
        $category_data = array(
            "category_product_id"=>$category_product_id, 
            "category_category_id"=>$category_category_id,
            "category_product_ordering"=>$category_product_ordering, 
            "method" =>"set_product_to_category",
        );
        curl_setopt($c, CURLOPT_URL, "http://printer-almaty.kz/administrator/api/receiver.php");
        curl_setopt($c, CURLOPT_POST, true);
        curl_setopt($c, CURLOPT_POSTFIELDS, $category_data);
        $response = curl_exec($c);
        $result = json_decode(json_encode($response), True);
        $array = json_decode($result,true); 
    }


    public function Setter($product_id, $parent_id, $product_ean, $product_quantity, $unlimited, $product_availability, $product_date_added, $date_modify, $product_publish, $product_tax_id, $currency_id, 
    $product_template,  $product_url, $product_old_price, $product_buy_price, $product_price, $min_price, $different_prices, $product_weight, $product_name_image, $product_manufacturer_id, $product_is_add_price,  
    $add_price_unit_id, $average_rating, $reviews_count, $delivery_times_id, $hits, $weight_volume_units, $basic_price_unit_id,  $label_id, $vendor_id, $access, $name_en_GB, $alias_en_GB, 
    $short_description_en_GB, $description_en_GB, $meta_title_en_GB, $meta_description_en_GB, $meta_keyword_en_GB, $name_ru_RU, $alias_ru_RU, $short_description_ru_RU, $description_ru_RU, 
    $meta_title_ru_RU, $meta_keyword_ru_RU, $meta_description_ru_RU, $product_bonus_add, $product_bonus_sub, $ballance, $ext_id) {

        !isset($product_id) || !empty($product_id) ? $product_id = $product_id : $product_id = '0';
        !isset($parent_id) || !empty($parent_id) ? $parent_id = $parent_id : $parent_id = '0';
        !isset($product_ean) || !empty($product_ean) ? $product_ean = $product_ean : $product_ean = '0';
        !isset($product_quantity) || !empty($product_quantity) ? $product_quantity = $product_quantity : $product_quantity = '0';
        !isset($unlimited) || !empty($unlimited) ? $unlimited = $unlimited : $unlimited = '0';
        !isset($product_availability) || !empty($product_availability) ? $product_availability = $product_availability : $product_availability = '0';
        !isset($product_date_added) || !empty($product_date_added) ? $product_date_added = $product_date_added : $product_date_added = '0';
        !isset($date_modify) || !empty($date_modify) ? $date_modify = $date_modify : $date_modify = '0';
        !isset($product_publish) || !empty($product_publish) ? $product_publish = $product_publish : $product_publish = '0';
        !isset($product_tax_id) || !empty($product_tax_id) ? $product_tax_id = $product_tax_id : $product_tax_id = '0';
        !isset($currency_id) || !empty($currency_id) ? $currency_id = $currency_id : $currency_id = '0';
        !isset($product_template) || !empty($product_template) ? $product_template = $product_template : $product_template = '0';
        !isset($product_url) || !empty($product_url) ? $product_url = $product_url : $product_url = '0';
        !isset($product_old_price) || !empty($product_old_price) ? $product_old_price = $product_old_price : $product_old_price = '0';
        !isset($product_buy_price) || !empty($product_buy_price) ? $product_buy_price = $product_buy_price : $product_buy_price = '0';
        !isset($product_price) || !empty($product_price) ? $product_price = $product_price : $product_price = '0';
        !isset($min_price) || !empty($min_price) ? $min_price = $min_price : $min_price = '0';
        !isset($different_prices) || !empty($different_prices) ? $different_prices = $different_prices : $different_prices = '0';
        !isset($product_weight) || !empty($product_weight) ? $product_weight = $product_weight : $product_weight = '0';
        !isset($product_name_image) || !empty($product_name_image) ? $product_name_image = $product_name_image : $product_name_image = '0';
        !isset($product_manufacturer_id) || !empty($product_manufacturer_id) ? $product_manufacturer_id = $product_manufacturer_id : $product_manufacturer_id = '0';
        !isset($product_is_add_price) || !empty($product_is_add_price) ? $product_is_add_price = $product_is_add_price : $product_is_add_price = '0';
        !isset($add_price_unit_id) || !empty($add_price_unit_id) ? $add_price_unit_id = $add_price_unit_id : $add_price_unit_id = '0';
        !isset($average_rating) || !empty($average_rating) ? $average_rating = $average_rating : $average_rating = '0';
        !isset($reviews_count) || !empty($reviews_count) ? $reviews_count = $reviews_count : $reviews_count = '0';
        !isset($delivery_times_id) || !empty($delivery_times_id) ? $delivery_times_id = $delivery_times_id : $delivery_times_id = '0';
        !isset($hits) || !empty($hits) ? $hits = $hits : $hits = '0';
        !isset($weight_volume_units) || !empty($weight_volume_units) ? $weight_volume_units = $weight_volume_units : $weight_volume_units = '0';
        !isset($basic_price_unit_id) || !empty($basic_price_unit_id) ? $basic_price_unit_id = $basic_price_unit_id : $basic_price_unit_id = '0';
        !isset($label_id) || !empty($label_id) ? $label_id = $label_id : $label_id = '0';
        !isset($vendor_id) || !empty($vendor_id) ? $vendor_id = $vendor_id : $vendor_id = '0';
        !isset($access) || !empty($access) ? $access = $access : $access = '0';
        !isset($name_en_GB) || !empty($name_en_GB) ? $name_en_GB = $name_en_GB : $name_en_GB = '0';
        !isset($alias_en_GB) || !empty($alias_en_GB) ? $alias_en_GB = $alias_en_GB : $alias_en_GB = '0';
        !isset($short_description_en_GB) || !empty($short_description_en_GB) ? $short_description_en_GB = $short_description_en_GB : $short_description_en_GB = '0';
        !isset($description_en_GB) || !empty($description_en_GB) ? $description_en_GB = $description_en_GB : $description_en_GB = '0';
        !isset($meta_title_en_GB) || !empty($meta_title_en_GB) ? $meta_title_en_GB = $meta_title_en_GB : $meta_title_en_GB = '0';
        !isset($meta_description_en_GB) || !empty($meta_description_en_GB) ? $meta_description_en_GB = $meta_description_en_GB : $meta_description_en_GB = '0';
        !isset($meta_keyword_en_GB) || !empty($meta_keyword_en_GB) ? $meta_keyword_en_GB = $meta_keyword_en_GB : $meta_keyword_en_GB = '0';
        !isset($name_ru_RU) || !empty($name_ru_RU) ? $name_ru_RU = $name_ru_RU : $name_ru_RU = '0';
        !isset($alias_ru_RU) || !empty($alias_ru_RU) ? $alias_ru_RU = $alias_ru_RU : $alias_ru_RU = '0';
        !isset($short_description_ru_RU) || !empty($short_description_ru_RU) ? $short_description_ru_RU = $short_description_ru_RU : $short_description_ru_RU = '0';
        !isset($description_ru_RU) || !empty($description_ru_RU) ? $description_ru_RU = $description_ru_RU : $description_ru_RU = '0';
        !isset($meta_title_ru_RU) || !empty($meta_title_ru_RU) ? $meta_title_ru_RU = $meta_title_ru_RU : $meta_title_ru_RU = '0';
        !isset($meta_keyword_ru_RU) || !empty($meta_keyword_ru_RU) ? $meta_keyword_ru_RU = $meta_keyword_ru_RU : $meta_keyword_ru_RU = '0';
        !isset($meta_description_ru_RU) || !empty($meta_description_ru_RU) ? $meta_description_ru_RU = $meta_description_ru_RU : $meta_description_ru_RU = '0';
        !isset($product_bonus_add) || !empty($product_bonus_add) ? $product_bonus_add = $product_bonus_add : $product_bonus_add = '0';
        !isset($product_bonus_sub) || !empty($product_bonus_sub) ? $product_bonus_sub = $product_bonus_sub : $product_bonus_sub = '0';
        !isset($ballance) || !empty($ballance) ? $ballance = $ballance : $ballance = '0';
        !isset($ext_id) || !empty($ext_id) ? $ext_id = $ext_id : $ext_id = '0';
        $ch = curl_init();
        //$cfile = new CURLFile($this->filetmpname, $this->filetype, $this->filename);
        $data = array(
            "product_id"=>$product_id, 
            "parent_id"=>$parent_id,
            "product_ean"=>$product_ean, 
            "product_quantity"=>$product_quantity, 
            "unlimited"=>$unlimited, 
            "product_availability"=>$product_availability, 
            "product_date_added"=>$product_date_added, 
            "date_modify"=>$date_modify, 
            "product_publish"=>$product_publish, 
            "product_tax_id"=>$product_tax_id,
            "currency_id"=>$currency_id,
            "product_template"=>$product_template,  
            "product_url"=>$product_url,
            "product_old_price"=>$product_old_price,
            "product_buy_price"=>$product_buy_price,
            "product_price"=>$product_price, 
            "min_price"=>$min_price,
            "different_prices"=>$different_prices,
            "product_weight"=>$product_weight, 
            "product_name_image"=>$product_name_image, 
            "product_manufacturer_id"=>$product_manufacturer_id, 
            "product_is_add_price"=>$product_is_add_price,
            "add_price_unit_id"=>$add_price_unit_id,
            "average_rating"=>$average_rating, 
            "reviews_count"=>$reviews_count,
            "delivery_times_id"=>$delivery_times_id, 
            "hits"=>$hits, 
            "weight_volume_units"=>$weight_volume_units,
            "basic_price_unit_id"=>$basic_price_unit_id,
            "label_id"=>$label_id,
            "vendor_id"=> $vendor_id, 
            "access"=>$access, 
            "name_en_GB"=>$name_en_GB,
            "alias_en_GB"=>$alias_en_GB,
            "short_description_en_GB"=>$short_description_en_GB,
            "description_en_GB"=>$description_en_GB,
            "meta_title_en_GB"=>$meta_title_en_GB,
            "meta_description_en_GB"=>$meta_description_en_GB,
            "meta_keyword_en_GB"=>$meta_keyword_en_GB,
            "name_ru_RU"=>$name_ru_RU, 
            "alias_ru_RU"=>$alias_ru_RU, 
            "short_description_ru_RU"=>$short_description_ru_RU, 
            "description_ru_RU"=>$description_ru_RU, 
            "meta_title_ru_RU"=>$meta_title_ru_RU, 
            "meta_keyword_ru_RU"=>$meta_keyword_ru_RU, 
            "meta_description_ru_RU"=>$meta_description_ru_RU,
            "product_bonus_add"=>$product_bonus_add,
            "product_bonus_sub"=>$product_bonus_sub,
            "ballance"=>$ballance,
            "ext_id"=>$ext_id,
            "method" =>"set_products",
        );
        
          curl_setopt($ch, CURLOPT_URL, "http://printer-almaty.kz/administrator/api/receiver.php");
          curl_setopt($ch, CURLOPT_POST, true);
          curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        
          $response = curl_exec($ch);
          $result = json_decode(json_encode($response), True);
          $array = json_decode($result,true); 
    }
  
}

?>







