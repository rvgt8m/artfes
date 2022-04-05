<?
#==========================  ����  ==========================
#   ������   : Ver. : ������ : ����
# 2002.06.06 : 1.00 : ��  Į : ����
#============================================================
# Name      : make_password()
# Version   : 1.10
# System    : �桼�����������ƥ�
# Subsystem : ���ѥ⥸�塼��
# Abstract  : �ѥ���ɤ��������롣
# input     : ̵��
# output    : �ѥ����ʸ����
# Copyright TES-WEB studio.
#============================================================
function make_rand_str ($element_str, $length) {
	srand((double)microtime() * 54234853);
	$resalt_str = '';
	for($i=0;$i<$length;$i++){
		$resalt_str.=substr($element_str,(rand()%(strlen($element_str))),1);
	}
	return $resalt_str;
}
function make_password ($mod) {
	$element_str  =  'abcdefghijklmnopqrstuvwxyz';
	$element_str  .=  'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$element_str  .=  '0123456789';
	$pass_length  =  8;
	if($mod=='c'){
		$element_str  .=  '___';
		$pass_length  =  16;
	}
	$password  =  make_rand_str ($element_str, $pass_length);
   return $password;
}

function password2Hash($password)
{
	if (strlen($password) > 0) {
		return hash('sha256', $password);
	}
}
?>
