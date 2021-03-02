	
	function addnum(n1){
		var no1=parseFloat(n1);
		var no2=no1 * 8;
		total.btn2.value=no2;
		totalnum();
	}
	
	 function addnum1(n2){
		var no3=parseFloat(n2);
		var no4=no3 * 10.50;
		total.btn5.value=no4;
		totalnum();
	}
	
	function addnum2(n3){
		var no5=parseFloat(n3);
		var no6=no5 * 11.50;
		total.btn10.value=no6;
		totalnum();
	}
	
	function addnum3(n4){
		var no7=parseFloat(n4);
		var no8=no7 * 12.50;
		total.btn13.value=no8;
		totalnum();
	}
	
	function addnum4(n5){
		var no9=parseFloat(n5);
		var no10=no9 * 9;
		total.btn16.value=no10;
		totalnum();
	}
	
	function totalnum(){
		var first = parseFloat(total.btn2.value);
		var second = parseFloat(total.btn5.value);
		var third = parseFloat(total.btn10.value);
		var fourth = parseFloat(total.btn13.value);
		var fifth = parseFloat(total.btn16.value);
		var price = parseFloat(first + second + third + fourth + fifth);
		total.btn7.value=price; 
		total.btn20.value=total.btn7.value;
	}
	