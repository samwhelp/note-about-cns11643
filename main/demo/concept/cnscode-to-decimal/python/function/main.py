#!/usr/bin/env python3

from cnscode import *

def main ():
	## https://www.cns11643.gov.tw/pageView.jsp?ID=9#encode1
	## http://code.web.idv.hk/cns11643/cns11643.php?i=1
	## http://idv.sinica.edu.tw/bear/charcodes/Section10.htm
	## https://zh.wikipedia.org/zh-tw/%E4%B8%AD%E6%96%87%E6%A8%99%E6%BA%96%E4%BA%A4%E6%8F%9B%E7%A2%BC
	print(cnsgroup_dec_to_hex('1')) ## 1
	print(cnsgroup_dec_to_hex('11')) ## b
	print(cnsgroup_dec_to_hex('19')) ## 13


	print()


	print(cnscode_find_group_and_point('1-5678'))
	print(cnscode_find_group_and_point('15678'))


	print()


	print(cnspart_to_hex('1', '5678')) ## 15678
	print(cnspart_to_dec('1', '5678')) ## 87672


	print()


	## https://www.cns11643.gov.tw/search.jsp?ID=5
	## https://www.cns11643.gov.tw/wordView.jsp?ID=87672
	print(cnscode_to_hex('1-5678')) ## 15678
	print(cnscode_to_dec('1-5678')) ## 87672


	print()


	## https://www.cns11643.gov.tw/search.jsp?ID=5&cPage=11&SN=0000&SN2=ffff
	## https://www.cns11643.gov.tw/wordView.jsp?ID=729377
	print(cnscode_to_hex('11-2121')) ## b2121
	print(cnscode_to_dec('11-2121')) ## 729377


	print()


	## https://www.cns11643.gov.tw/search.jsp?ID=5&cPage=19&SN=0000&SN2=ffff
	## https://www.cns11643.gov.tw/wordView.jsp?ID=1253665
	print(cnscode_to_hex('19-2121')) ## 132121
	print(cnscode_to_dec('19-2121')) ## 1253665




if __name__ == '__main__':
	main()
