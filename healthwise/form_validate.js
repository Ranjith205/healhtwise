function validateForm() {
    
   
    var gen= document.input_form.gen;
    var female_qn = input_form.female_qn;
    var qn = input_form.qn;
    var ft=input_form.ft;
    var inc=input_form.inc;
    var wt= input_form.wt;
    var num=/^[0-9\b]+$/;
    var exer = document.input_form.exercise;
    var occ = document.input_form.occupation;
    var veg = document.getElementsByName("veg");
   
    if (veg.value == 0) {
        alert("Please choose Veg or Non Veg");
        veg.focus();
        return false;
    }
    if (document.input_form.ad.value == 'child') {
    	if (parseInt(input_form.yrs) > 18) {
    		alert("Child should be less than 18 years of age");
    		return false;
    	}
    }
    if(gen.value == 0) {
        alert("Please choose Male or Female");
        gen.focus();
        return false;
    }

	if(!ft.value.match(num)){
		alert("Please enter Feet in numbers");
		ft.focus();
		return false;
	}
	if(!inc.value.match(num)){
		alert("Please enter Inches in numbers");
		inc.focus();
		return false;
	}
	if(!wt.value.match(num)){
		alert("Please enter Weight in numbers");
		wt.focus();
		return false;
	}

	if(exer.value == 0) {
        alert("Please choose your Activity Level in Exercise");
        exer.focus();
        return false;
     }
    if(occ.value == 0) {
        alert("Please choose your Activity Level in Occupation");
        occ.focus();
        return false;
    }
    return true;
}