<?php

	function data($url){
		return json_decode(file_get_contents($url), TRUE);
	}

	if (isset($_GET['page'])) {
		$page = $_GET['page'].".php";
		if ($page == "indonesia.php") {
			$api = "https://api.kawalcorona.com/indonesia/provinsi";
		}
		elseif ($page = "dunia.php"){
			$api = "https://api.kawalcorona.com/";
		}
	}
	else{
		header("Location: index.php?page=indonesia");
	}

	$data = data($api);
	$dataDunia = data("https://api.kawalcorona.com/");
	$dataIndo = data("https://api.kawalcorona.com/indonesia");
	$dataPositifDunia = data("https://api.kawalcorona.com/positif");
	$dataSembuhDunia = data("https://api.kawalcorona.com/sembuh");
	$dataMeninggalDunia = data("https://api.kawalcorona.com/meninggal");

 ?>
