<?php
    include('config/app.php');
    include('fct/request.php');
    include('fct/item.php');


    $intitule = post ('intitule');
    $items = getItems();
    $items[uniqid()] = [
        'checked'=>false,
        'intitule'=>$intitule
    ];
    saveItems($items);

    //Traitement de nouvel item
    header('Location:index.php');