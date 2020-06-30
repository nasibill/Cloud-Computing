<?php
    $name = $_GET['name'];
    $mimes = array
    (
        'jpg' => 'image/jpg',
        'jpeg' => 'image/jpg',
        'gif' => 'image/gif',
        'png' => 'image/png'
    );
    $ext = strtolower(end(explode('.', $name)));
    $file = '/var/www/html/images/'.$name;
    header('content-type: '. $mimes[$ext]);
    header('content-disposition: inline; filename="'.$name.'";');
    readfile($file);
?>
