<?php
/**
 * PHP ����mongo 
*/
//����mongoʵ��
$db  = new Mongo("192.168.6.59:30000");

//ѡ��db �ͱ�
$obj_deal = $db->selectDB('deal')->selectCollection('aloplan');

//ִ�в�ѯ
$result = $obj_deal->findOne(array('_id'=>'1330682845955_12_82ec6c30644f11e18670f5cbf99cfb3c95529900685509'));
echo '<pre/>';
var_dump($result);
exit;

