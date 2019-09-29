#!/usr/bin/env python3


## 以「真」為例：
# http://jicheng.tw/hanzi/search?c=%E7%9C%9F&e=char
# https://www.cns11643.gov.tw/wordView.jsp?ID=87672
cns_code = '1-5678';
cns_group = '1';
cns_point = '5678';


cns_group_hex = hex(int(cns_group)).split('x')[-1]
#print(cns_group_hex) ## 1

cns_code_hex = '' + cns_group_hex + cns_point
#print(cns_code_hex)  ## 15678


cns_code_dec = int('0x' + cns_code_hex, 16)
print(cns_code_dec)  ## 87672
