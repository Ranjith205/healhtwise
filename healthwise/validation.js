function validate_dietPlan() {
	
	if (document.diet_form.meal.value == "") {
		alert("Please choose your type of Meal");
    	meal.focus();
    	return false;
	}
	if (document.diet_form.bf.value == "") {
		alert("Please choose what do you eat in breakfast?");
    	bf.focus();
    	return false;
	}
	if (document.diet_form.grains.value == 0) {
		alert("Please choose what grains do you eat in lunch and dinner?");
    	grains.focus();
    	return false;
	}
	if (document.diet_form.rice.value == 0) {
		alert("Please choose your type of Rice");
    	rice.focus();
    	return false;
	}
	if ((document.diet_form.milk.value == "1") || (document.diet_form.milk.value == "5") || (document.diet_form.milk.value == "6")) {
		alert("Your choice for Milk is not suggested for Ideal diet plan...choose from optons 2,3,4");
    	document.diet_form.milk.focus();
    	return false;
	}
	if (document.diet_form.milk.value == 0) {
		alert("Please choose type of Milk");
    	milk.focus();
    	return false;
	}
	
	if (document.diet_form.oil_combo.value == 0) {
		alert("Please choose type of Oil ");
    	oil_combo.focus();
    	return false;
	}
	var nveg = parseInt(document.getElementById("nveg").value);
	var fish=parseInt(document.getElementById("fish").value);
	var chicken=parseInt(document.getElementById("chicken").value);
	var beef = parseInt(document.getElementById("beef").value);
	var mutton = parseInt(document.getElementById("mutton").value);
	var lamb = parseInt(document.getElementById("lamb").value);
	var pork = parseInt(document.getElementById("pork").value);
	var tot=fish+chicken+beef+mutton+lamb+pork;
	if (nveg == 0) {
		alert(nveg);
		alert("Please choose no.of meals per week");
    	document.diet_form.nveg.focus();
    	return false;
	}
	if(nveg != tot){
		alert("Total of individual non veg meals should be equal to Non veg meals/week");
		return false;
	}
	
		
	return true;
}