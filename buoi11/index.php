
<?php
$dem=count($arr1);
$arr1 = ['PHP','ISO','NodeJS','Androi','Cuichui'];
for($i=1;$i<$dem;$i++){
    echo $arr1[$i];
    echo '<br>';
}
$arr = ['PHP','ISO','NodeJS','Androi','Cuichui'];
for($i=1;$i<=count($arr);$i++){
    echo $arr[$i];
    echo '<br>';
}
echo $arr[2];
$tong = 0;
for($i = 1; $i<=10; $i++){
    if($i%2==0)
    $tong += $i;
}
echo $tong .'<br>';
//dùng vòng lặp for in ra hình *
$star = '';
for($i = 1;$i<=6;$i++){
    echo $star .= "*";
    echo "<br>";
}
?>
