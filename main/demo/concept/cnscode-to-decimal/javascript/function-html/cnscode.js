

function cnscode_to_hex (cns_code)
{
	let pass = cnscode_find_group_and_point(cns_code);
	if (pass['cns_group'] === false) {
		return false;
	}

	let cns_group = pass['cns_group'];
	let cns_point = pass['cns_point'];

	let cns_code_hex = cnspart_to_hex(cns_group, cns_point);

	return cns_code_hex;
}

function cnscode_to_dec (cns_code)
{
	let pass = cnscode_find_group_and_point(cns_code);
	if (pass['cns_group'] === false) {
		return false;
	}

	let cns_group = pass['cns_group'];
	let cns_point = pass['cns_point'];

	let cns_code_dec = cnspart_to_dec(cns_group, cns_point);

	return cns_code_dec;
}

function cnspart_to_hex (cns_group, cns_point)
{
	let cns_group_hex = cnsgroup_dec_to_hex(cns_group);

	let cns_code_hex = '' + cns_group_hex + cns_point;

	return cns_code_hex;
}

function cnspart_to_dec (cns_group, cns_point)
{
	let cns_code_hex = cnspart_to_hex(cns_group, cns_point);

	let cns_code_dec = parseInt(cns_code_hex, 16);

	return cns_code_dec;
}

function cnsgroup_dec_to_hex (cns_group)
{
	let cns_group_hex = parseInt(cns_group, 10).toString(16);

	return cns_group_hex;
}

function cnscode_find_group_and_point (cns_code)
{
	let data = [];
	data['cns_group'] = false;
	data['cns_point'] = false;

	//https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/split
	let temp = cns_code.split('-', 2);
	let size = temp.length;

	if (size < 2) {
		return data;
	}

	data['cns_group'] = temp[0];
	data['cns_point'] = temp[1];

	return data;

}
