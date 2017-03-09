function validate_dietPlan() {
	
	var nveg = parseInt(document.getElementById("nveg").value);
	var fish=parseInt(document.getElementById("fish").value);
	var chicken=parseInt(document.getElementById("chicken").value);
	var beef = parseInt(document.getElementById("beef").value);
	var mutton = parseInt(document.getElementById("mutton").value);
	var lamb = parseInt(document.getElementById("lamb").value);
	var pork = parseInt(document.getElementById("pork").value);
	var tot=fish+chicken+beef+mutton+lamb+pork;

	
	if(diet_form.diet_plan.value == 1){
		if (document.diet_form.bas.value == 0) {
			alert("Please choose your Category");
        	bas.focus();
        	return false;
		}
	}
	if(diet_form.diet_plan.value == 2){
		if (document.diet_form.veg.value == 0) {
			alert("Please choose your Category");
        	veg.focus();
        	return false;
		}
		if (document.diet_form.meal.value == 0) {
			alert("Please choose your type of Meal");
        	meal.focus();
        	return false;
		}
		if (document.diet_form.bf.value == 0) {
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
		if (document.diet_form.nveg.value == 0) {
			alert("Please choose no.of meals per week");
        	nveg.focus();
        	return false;
		}
		if(nveg != tot){
			alert("number of non veg meals should be equal");
			return false;
		}
		if ( fish > 4 ) {
			alert("For Ideal diet plan fish meat is suggested only 4 times a week");
			return false;
		}
		if ((document.diet_form.milk.value == "1") || (document.diet_form.milk.value == "5") || (document.diet_form.milk.value == "6")) {
			alert("Your choice for Milk is not suggested for Ideal diet plan...choose from optons 2,3,4");
        	
        	return false;
		}
		if (document.diet_form.milk.value == 0) {
			alert("Please choose type of Milk");
        	milk.focus();
        	return false;
		}
		
		if (document.diet_form.oil.value == 0) {
			alert("Please choose type of Oil ");
        	oil.focus();
        	return false;
		}
		
	}
	return true;
}