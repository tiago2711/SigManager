<?php
try {
	$token = (array_key_exists('token', $_REQUEST)&& $_REQUEST['token'] == 'ls.rodrigues@outlook.com') ? true : false;
	if(!$token){
		throw new Exception('Invalid Token');
	}
	$codigo = array_key_exists ('notificationCode', $_REQUEST) ? $_REQUEST['notificationCode'] : '';
	if(empty($codigo))
		throw new Exception('Erro ao ler notificationCode');
	$query = 'https://ws.pagseguro.uol.com.br/v3/transactions/notifications/'.$codigo.append.'?email=rs.rodriges@outlook.com&token=BB5D775017E2424B8EC423CA036F2421';
	$resp = file_get_contents($query);
	echo $resp;
}catch(Exception $e){
	
	die($e->getMessage());
}