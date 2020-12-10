<?php

$height = 100;

if ($height < 150){
    echo "150cm　未満の方はご乗車できません。";
}else if ($height >= 200){
    echo"200cm以上の方はご乗車出来ません。";
}
else{
    echo "ご乗車になれます。";
}