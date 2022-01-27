<?php 
	$m = date('m', time());

	if($m == '01'){ $bulan = 'Januari';
	} else if($m == '02'){ $bulan = 'Februari';
	} else if($m == '03'){ $bulan = 'Maret';
	} else if($m == '04'){ $bulan = 'April';
	} else if($m == '05'){ $bulan = 'Mei';
	} else if($m == '06'){ $bulan = 'Juni';
	} else if($m == '07'){ $bulan = 'Juli';
	} else if($m == '08'){ $bulan = 'Agustus';
	} else if($m == '09'){ $bulan = 'September';
	} else if($m == '10'){ $bulan = 'Oktober';
	} else if($m == '11'){ $bulan = 'November';
	} else if($m == '12'){ $bulan = 'Desember';
	}

	$day = date('l', time());
	if($day == 'Sunday'){ $hari = 'Minggu';
	} else if($day == 'Monday'){ $hari = 'Senin';
	} else if($day == 'Tuesday'){ $hari = 'Selasa';
	} else if($day == 'Wednesday'){ $hari = 'Rabu';
	} else if($day == 'Thursday'){ $hari = 'Kamis';
	} else if($day == 'Friday'){ $hari = 'Jumat';
	} else if($day == 'Saturday'){ $hari = 'Sabtu';
	} 

	echo 'Hari ' . $hari . ' Tanggal ' . date('d', time()) . ' Bulan ' .  $bulan . ' Tahun ' . date('Y', time());
?>
