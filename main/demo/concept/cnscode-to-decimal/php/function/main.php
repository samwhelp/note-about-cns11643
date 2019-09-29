#!/usr/bin/env php
<?php

require_once(__DIR__ . '/lib/cnscode.php');

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
