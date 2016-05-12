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
        sort() rsort()
    2、根据键名对数组排序
        ksort() krsort()
    3、根据值排序，并保留原有键，asort() arsort()
    4、按自然数排序
        natsort() 
        natcasesort() 不区分大小写
二、拆分、合并、分解、接合的数组函数
三、数组与数据结构的函数
四、其他
*/
$data = array("file1.txt","File5.txt","file9.txt","file11.txt","file22.txt");
sort($data);
echo '<pre>';
print_r($data);
echo '</pre>';
natsort($data);
echo '<pre>';
print_r($data);
echo '</pre>';
natcasesort($data);
echo '<pre>';
print_r($data);
echo '</pre>';
?>
