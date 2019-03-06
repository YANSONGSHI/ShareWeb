<?php
@mysql_connect('localhost', 'root', 'root');

if (!mysql_select_db('shared')){
    echo "未连接成功";
}
mysql_query("set names 'utf8'");

function _print($list){
    echo '<pre>';
    var_dump($list);
    echo '</pre>';
    
}



?>