<?php
//声明文件的类型 HTML数据类型
header('Content-tpye: image/png');
//文件的相关描述
header('Content-Dispossition: attachment; filename="canvas.png"');
//文件的内容
echo base64_decode($_POST['data']);
?>