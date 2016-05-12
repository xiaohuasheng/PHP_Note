<?php
/*
数组函数
一、数组的排序函数
    sort()
    rsort()
    usort()
    asort()
    arsort()
    uasort()
    ksort()
    krsort()
    uksort()
    natsort()
    1、简单的数组排序
二、拆分、合并、分解、接合的数组函数
三、数组与数据结构的函数
四、其他
*/
$data = array(5,8,1,7,2);
sort($data);
echo '<pre>';
print_r($data);
echo '</pre>';
rsort($data);
echo '<pre>';
print_r($data);
echo '</pre>';
?>
