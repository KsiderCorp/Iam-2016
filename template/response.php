<?php
/*
Template Name: Яндекс сервер
*/
get_header(); 

$secret_key = 'ZfkRvknqJVKY1tNHoqnxzEkX'; // секретное слово, которое мы получили в предыдущем шаге.
 
// возможно некоторые из нижеперечисленных параметров вам пригодятся
// $_POST['operation_id'] - номер операция
// $_POST['amount'] - количество денег, которые поступят на счет получателя
// $_POST['withdraw_amount'] - количество денег, которые будут списаны со счета покупателя
// $_POST['datetime'] - тут понятно, дата и время оплаты
// $_POST['sender'] - если оплата производится через Яндекс Деньги, то этот параметр содержит номер кошелька покупателя
// $_POST['label'] - лейбл, который мы указывали в форме оплаты
// $_POST['email'] - email покупателя (доступен только при использовании https://)
 
$sha1 = sha1( $_POST['notification_type'] . '&'. $_POST['operation_id']. '&' . $_POST['amount'] . '&643&' . $_POST['datetime'] . '&'. $_POST['sender'] . '&' . $_POST['codepro'] . '&' . $secret_key. '&' . $_POST['label'] );
 
if ($sha1 != $_POST['sha1_hash'] ) {
	
$postid = $_POST['label'];
$meta_key = 'paidresp';
$meta_value = 'mistake';
$curdate = date('H:i:s');
update_post_meta( $postid, $meta_key, $meta_value ); 
    
   $commentdata = array(
	'comment_post_ID'      => $postid,
	'comment_author'       => 'Админ',
	'comment_content'      => 'Не вышло :( Время: '.$curdate,
    'comment_approved' => 1, 
    );   
wp_new_comment( $commentdata );  
    
	exit();
}
 
$postid = $_POST['label'];
$meta_key = 'paidresp';
$meta_value = 'paid';

update_post_meta( $postid, $meta_key, $meta_value );

   $commentdata = array(
	'comment_post_ID'      => $postid,
	'comment_author'       => 'Админ',
	'comment_content'      => 'Оплачено! ID '.$_POST['operation_id'].', Сумма '.$_POST['amount'].', Время перевода: '.$_POST['datetime'],
    'comment_approved' => 1, 
    );   
wp_new_comment( $commentdata );  
 
exit();

get_footer();  ?>

