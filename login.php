<?php
    $dir = '/var/www/html/images/';
    $file_display = array('jpg', 'jpeg', 'png', 'gif','JPG');
    if (file_exists($dir) == false) 
    {


	echo getcwd();
	echo "hello";
        echo 'Directory "', $dir, '" not found!';
    } 
    else 
    {

        $dir_contents = scandir($dir);
        foreach ($dir_contents as $file) 
        {
            $file_type = strtolower(end(explode('.', $file)));
            if ($file !== '.' && $file !== '..' && in_array($file_type, $file_display) == true)     
            {
                $name = basename($file);
	
                echo "<img src='img.php?name={$name}' width='100' height = '100' style='border:0px;margin:10px;float:left' />";
            }
        }
    }
?>
