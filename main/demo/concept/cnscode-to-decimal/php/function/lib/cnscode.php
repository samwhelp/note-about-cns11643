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
