<?php
    require_once 'config.php';

    $sql = 'SELECT * FROM `films`';
    $result = $conn->query($sql);
    $answer = '{"films": [';


    foreach ($result as $row) {
        $i = $row['ID'];
        $t = $row['NAME'];
        $desc = $row['DISCRIPTION'];
        $dir = $row['DIRECTOR'];
        $y = $row['YEAR'];
        $answer .= sprintf('{"id: %d, "name": "%s", "desc":"%s", "director": "%s", "year": %d},',
            $i,$t,$desc,$dir,$y);
    }

    $answer = rtrim($answer, ',');
    $answer .= ']}';
    echo $answer;
    
?>