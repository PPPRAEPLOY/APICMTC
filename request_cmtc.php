<?php

    

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'http://it.cmtc.ac.th/web_service/test5_nga/test5.json');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 


    $exec = curl_exec($curl);
    curl_close($curl);

	//print_r (json_decode($exec));
	$data = json_decode($exec);

	foreach ($data as $key => $value)
	{
		echo 'ชื่อสินค้า: '.$value->title;
		echo '<br>';
		echo 'อัพเดทเมื่อเวลา: '.$value->updated;
		echo '<br>';
		echo 'จำนวนสินค้าทั้งหมด: '.$value->totalItems;
		echo '<br>';
		echo 'รหัสสินค้าเริ่มต้น: '.$value->startIndex;
		echo '<br>';
		echo 'จำนวนสินค้าในแต่ละหน้า: '.$value->itemsPerPage;
		echo '<hr>';
	
		
	}


    //var_dump(json_decode($exec));
?>