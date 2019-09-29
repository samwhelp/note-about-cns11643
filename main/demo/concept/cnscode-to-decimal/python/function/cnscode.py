

def cnscode_to_hex (cns_code):
	data = cnscode_find_group_and_point(cns_code)
	if (data['cns_group'] == False):
		return false

	cns_group = data['cns_group']
	cns_point = data['cns_point']

	cns_code_hex = cnspart_to_hex(cns_group, cns_point)

	return cns_code_hex


def cnscode_to_dec (cns_code):
	data = cnscode_find_group_and_point(cns_code)
	if (data['cns_group'] == False):
		return false

	cns_group = data['cns_group']
	cns_point = data['cns_point']

	cns_code_dec = cnspart_to_dec(cns_group, cns_point)

	return cns_code_dec


def cnspart_to_hex (cns_group, cns_point):
	cns_group_hex = cnsgroup_dec_to_hex(cns_group)

	cns_code_hex = '' + cns_group_hex + cns_point

	return cns_code_hex


def cnspart_to_dec (cns_group, cns_point):
	cns_code_hex = cnspart_to_hex(cns_group, cns_point)

	cns_code_dec = int('0x' + cns_code_hex, 16)

	return cns_code_dec


def cnsgroup_dec_to_hex (cns_group):
	cns_group_hex = hex(int(cns_group)).split('x')[-1]

	return cns_group_hex


def cnscode_find_group_and_point (cns_code):
	data = {
		'cns_group': False,
		'cns_point': False
	}

	## https://docs.python.org/3/library/stdtypes.html#str.split
	temp = cns_code.split('-', 2)

	## https://docs.python.org/3/library/functions.html#len
	size = len(temp)

	if (size < 2):
		return data

	data['cns_group'] = temp[0]
	data['cns_point'] = temp[1]

	return data
