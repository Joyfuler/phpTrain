<?php
  
    $score = array(75, 85, 93, 87, 92);
    $length = count($score); // 배열 안의 인덱스의 값을 구한다.
    $sum = 0;

    for ($i=0; $i<$length; $i++){
        $sum += $score[$i];
    }

    $avg = $sum / $length;

    echo "합계:".$sum."<br>";
    echo "평균:".$avg;

?>