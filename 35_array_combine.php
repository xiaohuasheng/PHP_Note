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
    5、自定义规则排序
        usort() uasort() uksort()
    6、多维数组的排序
        array_multisort()
二、拆分、合并、分解、接合的数组函数
    1.array_slice()
    2.array_splice(), 删除
    3.array_combine()
        合并两个等长的数组，一个数组为键名，一个为值
三、数组与数据结构的函数
四、其他
*/
$a1 = array("os", "server", "db", "lang");
$a2 = array("linux", "apache", "mysql", "php");
echo '<pre>';
print_r(array_combine($a1, $a2));
print_r(array_combine($a2, $a1));
echo '</pre>';
?>
