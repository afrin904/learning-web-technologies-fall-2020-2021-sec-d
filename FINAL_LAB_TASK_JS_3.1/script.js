"use strict"


//alert('test');
//console.log('testing...');

//document.write('this is JS example');

//document.getElementById('head').innerHTML = 'this is js example';
//obj.innerHTML = "test";


//let student = ['alamin', '123', 'CS'];

function f1(){
	let data= document.getElementById('name').value;

	if(data == ''){
		document.getElementById('head').innerHTML = 'Null Submission ';		
	}
	else if(data.length <2){
		document.getElementById('head').innerHTML = 'Length is too Short';	
	}

	else if (data >=0 && data <=9){
		document.getElementById('head').innerHTML = 'error';
	}
	
	else if(data >='a' && data <='z' || data>='A' && data <='Z' || data == '.' || data == '-'){
		document.getElementById('head').innerHTML = data;
     }
    
    else{
		document.getElementById('head').innerHTML = 'error';
	}
	

}


function f2(){
	let data= document.getElementById('email').value;

	if(data == ''){
		document.getElementById('head').innerHTML = 'Null Submission ';		
	}
	else if(data.length <3 ){
		document.getElementById('head').innerHTML = 'Invalid Email';	
	}
	else if( data.includes("@gmail.com")){
		document.getElementById('head').innerHTML = data;
     }
      else{
		document.getElementById('head').innerHTML = 'Invalide Email!';
	}

}

function f3(){

 let m = document.getElementById('m');
 let f = document.getElementById('f');
 let o = document.getElementById('o');

     if(m.checked ==true ){
		document.getElementById('head').innerHTML = m.value;		
	}
    else if(f.checked ==true){
		document.getElementById('head').innerHTML = f.value;		
	}
	
     else{
		document.getElementById('head').innerHTML = o.value;
	}

}

function f4(){

 let dd = document.getElementById('dd').value;
 let mm = document.getElementById('mm').value;
 let yy = document.getElementById('yy').value;

    if(dd == '' || mm == '' || yy == ''){
		document.getElementById('1').innerHTML = 'Null Submission ';		
	}
	else if(dd >= 0 && dd <=31 || mm >=1 && mm <=12 || yy >=1900 && yy <= 2016 ){
		document.getElementById('1').innerHTML = dd ;
		document.getElementById('2').innerHTML ="/";	
		document.getElementById('3').innerHTML = mm ;
		document.getElementById('4').innerHTML ="/";	
		document.getElementById('5').innerHTML = yy ;	
	}
	
      else{
		document.getElementById('1').innerHTML = 'Invalid Date!';
	}

}

function f5(){

 let s = document.getElementById('s');
 let h= document.getElementById('h');
 let b = document.getElementById('b');


 if (s.checked==true) {
 	document.getElementById('1').innerHTML = s.value;		
 }
 if(h.checked==true){
 	document.getElementById('2').innerHTML = h.value;
 }
 if(b.checked==true){
 	document.getElementById('3').innerHTML = b.value;
 }
 else{
 	return false;
 }

}


function f6(){



}


function f7(){


	
}