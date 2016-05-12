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

二、拆分、合并、分解、接合的数组函数
三、数组与数据结构的函数
四、其他
*/
$lamp = array("linux", "apache", "mysql", "php");
usort($lamp, "sortByLen");

function sortByLen($one, $two)
{
    if(strlen($one) == strlen($two))
    {
        return 0;
    }
    else
    {
        return (strlen($one)>strlen($two)) ? 1 : -1;
    }
}
echo '<pre>';
print_r($lamp);
echo '</pre>';
?>
