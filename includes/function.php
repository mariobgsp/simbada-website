<?php
// Function
function calcQi($ind,$si,$li){
    for($i=0;$i<11;++$i){
        $indMinusLi = $ind[$i]-$li[$i];
        $siMinusLi = $si[$i]-$li[$i];
        $qi[]=($indMinusLi/$siMinusLi)*100;
    };
    return $qi;
};

function calcWqi($wi,$qi){
    $sum = 0;
    for($x=0;$x<11;++$x){
        $wiTimesQi = $wi[$x]*$qi[$x];
        $sum = $sum + $wiTimesQi;
    };
    return $sum;
};

function qualityDeterminer($wqi){
    switch($wqi){
        case ($wqi<25):
            $quality='Sangat Baik';
            break;
        case ($wqi<50):
            $quality='Baik';
            break;
        case ($wqi<75):
            $quality='Buruk';
            break;
        case ($wqi<100):
            $quality='Sangat Buruk';
            break;
        default:
            $quality='Tidak Aman untuk Diminum';
            break;
    };
    return $quality;
};
?>