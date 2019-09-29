#!/usr/bin/env php
<?php

function cnscode_to_hex ($cns_code)
{
	$pass = cnscode_find_group_and_point($cns_code);
	if ($pass['cns_group'] === false) {
		return false;
	}

	$cns_group = $pass['cns_group'];
	$cns_point = $pass['cns_point'];

	$cns_code_hex = cnspart_to_hex($cns_group, $cns_point);

	return $cns_code_hex;
}

function cnscode_to_dec ($cns_code)
{
	$pass = cnscode_find_group_and_point($cns_code);
	if ($pass['cns_group'] === false) {
		return false;
	}

	$cns_group = $pass['cns_group'];
	$cns_point = $pass['cns_point'];

	$cns_code_dec = cnspart_to_dec($cns_group, $cns_point);

	return $cns_code_dec;
}

function cnspart_to_hex ($cns_group, $cns_point)
{
	$cns_group_hex = cnsgroup_dec_to_hex($cns_group); // 1

	$cns_code_hex = '' . $cns_group_hex . $cns_point; // 15678

	return $cns_code_hex;
}

function cnspart_to_dec ($cns_group, $cns_point)
{
	$cns_code_hex = cnspart_to_hex($cns_group, $cns_point);

	$cns_code_dec = hexdec($cns_code_hex);

	return $cns_code_dec;
}

function cnsgroup_dec_to_hex ($cns_group)
{
	$cns_group_hex = dechex(intval($cns_group));

	return $cns_group_hex;
}

function cnscode_find_group_and_point ($cns_code)
{
	$data = array();
	$data['cns_group'] = false;
	$data['cns_point'] = false;

	$temp = explode('-', $cns_code, 2);
	$size = count($temp);

	if ($size < 2) {
		return $data;
	}

	$data['cns_group'] = $temp[0];
	$data['cns_point'] = $temp[1];

	return $data;

}

function __main__ ()
{
	//https://www.cns11643.gov.tw/pageView.jsp?ID=9#encode1
	//http://code.web.idv.hk/cns11643/cns11643.php?i=1
	//http://idv.sinica.edu.tw/bear/charcodes/Section10.htm
	//https://zh.wikipedia.org/zh-tw/%E4%B8%AD%E6%96%87%E6%A8%99%E6%BA%96%E4%BA%A4%E6%8F%9B%E7%A2%BC
	echo cnsgroup_dec_to_hex('1'); // 1
	echo PHP_EOL;
	echo cnsgroup_dec_to_hex('11'); // b
	echo PHP_EOL;
	echo cnsgroup_dec_to_hex('19'); // 13
	echo PHP_EOL;


	echo PHP_EOL;


	var_dump(cnscode_find_group_and_point('1-5678'));
	var_dump(cnscode_find_group_and_point('15678'));
	echo PHP_EOL;


	echo PHP_EOL;


	echo cnspart_to_hex('1', '5678'); // 15678
	echo PHP_EOL;
	echo cnspart_to_dec('1', '5678'); // 87672
	echo PHP_EOL;


	echo PHP_EOL;


	//https://www.cns11643.gov.tw/search.jsp?ID=5
	//https://www.cns11643.gov.tw/wordView.jsp?ID=87672
	echo cnscode_to_hex('1-5678'); // 15678
	echo PHP_EOL;
	echo cnscode_to_dec('1-5678'); // 87672
	echo PHP_EOL;


	echo PHP_EOL;


	//https://www.cns11643.gov.tw/search.jsp?ID=5&cPage=11&SN=0000&SN2=ffff
	//https://www.cns11643.gov.tw/wordView.jsp?ID=729377
	echo cnscode_to_hex('11-2121'); // b2121
	echo PHP_EOL;
	echo cnscode_to_dec('11-2121'); // 729377
	echo PHP_EOL;


	echo PHP_EOL;

	//https://www.cns11643.gov.tw/search.jsp?ID=5&cPage=19&SN=0000&SN2=ffff
	//https://www.cns11643.gov.tw/wordView.jsp?ID=1253665
	echo cnscode_to_hex('19-2121'); // 132121
	echo PHP_EOL;
	echo cnscode_to_dec('19-2121'); // 1253665
	echo PHP_EOL;

}

__main__();
