<?php

// ����
$to = "vegant111@gmail.com";
 
// ���M��
$from = "From: �]�Óc�|�p��<tes-sev@sv361.xserver.jp>";
 
// ���[���^�C�g��
$subject = "���[�����M�e�X�g�@";
 
// ���[���{��
$body = <<< EOM
���[���{��
 
�����ꕶ��
�@�A�B
���`��
 
�e�L�X�g�e�L�X�g�e�L�X�g�e�L�X�g�e�L�X�g�e�L�X�g�e�L�X�g
�e�L�X�g�e�L�X�g�e�L�X�g�e�L�X�g�e�L�X�g�e�L�X�g�e�L�X�g
�e�L�X�g�e�L�X�g�e�L�X�g�e�L�X�g�e�L�X�g�e�L�X�g�e�L�X�g
�e�L�X�g�e�L�X�g�e�L�X�g�e�L�X�g�e�L�X�g�e�L�X�g�e�L�X�g
EOM;
 
// ���[�����M
mail($to, $subject, $body, $from);
?>