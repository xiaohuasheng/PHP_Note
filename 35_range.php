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
    4.array_merge()，求并
    5.array_intersect()，求交
    6.array_diff(),求差

三、数组与数据结构的函数
    1.模拟栈
        array_push(), array_pop()
    2.队列
        array_unshift()
        array_shift()
        unset()
四、其他
    array_rand()
    shuffle()
    array_sum()
    range()
*/
//$arr = range(0,10,2);
$arr = range('a','z',8);
echo '<pre>';
print_r($arr);
echo '</pre>'
?>
