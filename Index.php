<?php
    $fd = fopen('Text.txt','r');
    
    while ($str = fgets($fd)) { 
        $regexp = '/\b([1-9]|[1]?[0-9][0-9]|[2][0-4][0-9]|25[0-5])\.([1]?[0-9]?[0-9]|[2][0-4][0-9]|25[0-5])\.([1]?[0-9]?[0-9]|[2][0-4][0-9]|25[0-5])\.([1]?[0-9]?[0-9]|[2][0-4][0-9]|25[0-5])\b/';
        preg_match_all($regexp, $str, $arr);

        foreach($arr[0] as $adress){
            if($adress != 0){
                echo "Найден верный ip-адрес: $adress";
            } else {
                echo 'Верный ip-адрес не найден';
            }
        }       
    }

    fclose($fd);
?>
