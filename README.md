# Printer Database

Метод добавления товаров и обновления баз данных.

## Короткое описание

Задача реализуется через выгрузку записей из базы данных vse-o-printere по средствам curl. Для этого используются функции get_products(), Get_products_img(), Get_product_to_category(), Get_category() находящиеся в классе local/model/ActionModel.php который необходимо установить локально. Что бы распечатать массив, на сайте vce-o-printere.ru должны быть размещены файлы из папки server и установлено соединение с базой данных. В файле playground.php (локально) можно посмотреть результат выполнения функций. Что бы отправить массив в базу необходимо вызвать setter(), Set_products_img(), Set_product_to_category(), Set_category() эти функции отправляют массив при помощи curl методом $_POST в базу данных получателя в файл receiver.php размещенный на сервере, метод определяется в массиве ("method" =>"set_category") и принимается на receiver.php. Таким образом наполняется база данных.

### Пошаговая инструкция

Скачайте репозиторий https://github.com/php-8/printer_interface.git в нем находятся 3 папки client/api, local, server/api

Файлы из папки server/api необходимо разместить на сайте vce-o-printere.ru по адресу /public_html/administrator/api

```
connection.php, server.php
```

Файлы из папки client/api необходимо разместить на принимающем сайте по адресу /public_html/administrator/api

```
connection.php, receiver.php
```

Содержимое каталога local разместите локально (должен быть установлен XAMPP), откройте файл playground.php, вызовите функции. 
```
index.php, insertitems.php, playground.php
```
