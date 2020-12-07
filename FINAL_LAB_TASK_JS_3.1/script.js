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