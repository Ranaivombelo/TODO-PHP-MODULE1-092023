<?php

include('fct/item.php');
include('fct/request.php');
include('config/app.php');

$items = getItems();
$id = get('item');


unset($item[$id]);
saveItems($items);

header('Location:index.php');