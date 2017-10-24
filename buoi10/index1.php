<?php
$a = 5;
$b = 4;
$c = 3;
if (($a + $b <= $c)||($b+$c<=$a)||($c+$a <=$b))
{
    echo "day khong phai la hinh tam giac";
}
else{
    if($a==$b&&$b==$c)
    {
        echo "day la tam giac dieu";
    }
    else {
        echo "Day la tam giac";
    }
    
}

?>