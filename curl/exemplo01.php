<?php
	
	$cep = "31330370";

	$url = "https://viacep.com.br/ws/$cep/json/";

	$ch = curl_init($url);

	# as primeira definicoes cURL
	#curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	#curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

	# as segundas definicoes  cURL
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_PORT, 443);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

	$response = curl_exec($ch);

	if(curl_errno($ch)){
    echo 'Curl error: ' . curl_error($ch);
}

	curl_close($ch);

	$data = json_decode($response, true);

	print_r($data);
?>

