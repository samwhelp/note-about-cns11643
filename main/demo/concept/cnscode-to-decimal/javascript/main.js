#!/usr/bin/env node


// 以「真」為例：
// http://jicheng.tw/hanzi/search?c=%E7%9C%9F&e=char
// https://www.cns11643.gov.tw/wordView.jsp?ID=87672
let cns_code = '1-5678';
let cns_group = '1';
let cns_point = '5678';


let cns_group_hex = parseInt(cns_group, 10).toString(16);
//console.log(cns_group_hex); // 1

let cns_code_hex = '' + cns_group_hex + cns_point;
//console.log(cns_code_hex); // 15678

let cns_code_dec = parseInt(cns_code_hex, 16);
console.log(cns_code_dec); // 87672
