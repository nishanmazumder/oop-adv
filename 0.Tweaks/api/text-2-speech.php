<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Text to Speech</title>
</head>

<body>
	<h1>Text to Speech</h1>

	<?php

	$curl = curl_init();

	curl_setopt_array($curl, [
		CURLOPT_URL => "https://voicerss-text-to-speech.p.rapidapi.com/?key=da0d46a1a9a447bab56c952163271381",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "src=Hi%2C%20i%20am%20Nishan%20from%20Bangladesh&hl=en-us&r=0&c=mp3&f=8khz_8bit_mono",
		CURLOPT_HTTPHEADER => [
			"X-RapidAPI-Host: voicerss-text-to-speech.p.rapidapi.com",
			"X-RapidAPI-Key: 80531ca488msh1a3d1955bdce4b3p17eca1jsn89e4ed2eed8b",
			"content-type: application/x-www-form-urlencoded"
		],
	]);

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);

	if ($err) {
		echo "cURL Error #:" . $err;
	} else {
		echo $response;
	}

	?>


</body>

</html>