<?php
//�����ļ������� HTML��������
header('Content-tpye: image/png');
//�ļ����������
header('Content-Dispossition: attachment; filename="canvas.png"');
//�ļ�������
echo base64_decode($_POST['data']);
?>