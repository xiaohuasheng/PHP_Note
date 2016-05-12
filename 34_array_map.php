<?php
/*
三、使用回调函数处理数组的函数
    1、array_walk($arr, "function", "====")
        数组中每个成员应用用户函数
    2、array_map("function", $array):将回调函数作用到给定数组的单元上

*/
/*
$lamp = array("os"=>"linux", "wb"=>"apache", "db"=>"mysql", "la"=>"language");
$arr = array_map("myfun", $lamp);
function myfun($n)
{
    return "++".$n;
}
*/
$lamp = array("os"=>"linux", "wb"=>"apache", "db"=>"mysql", "la"=>"php");
$lp = array("os"=>"windows", "wb"=>"apache", "db"=>"oracle", "la"=>"php");
$arr = array_map("myfun", $lamp, $lp);
function myfun($n, $t)
{
    if($n==$t)
    {
        return "same";
    }
    else
    {
        return "different";
    }
}
echo '<pre>';
print_r($arr);
echo '</pre>';

?>
