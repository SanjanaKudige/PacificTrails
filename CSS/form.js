function validate()

{
	alert("All * Marked Fields are not filled");
	var firstname=document.getElementById("firstname").value;
	var lastname=document.getElementById("lastname").value;
	var email=document.getElementById("email").value;
	var phone=document.getElementById("phone").value;
	var comments=document.getElementById("comments").value;
	
	if(firstname=="" && lastname=="" && email=="" && phone=="" && comments=="")
	{
		alert("All * Marked Fields are not filled");
		return false;
	}
	else{
		document.getElementById("formreservation").submit();
	}



}	
<script type="text/javascript">
	function  fun()
	{
	var epattern="(.)+@(.)+\.(.)+";
	var Name=document.getElementById("Name").value;
	var Email=document.getElementById("Email").value;
	var Address=document.getElementById("Address").value;
	var City=document.getElementById("City").value;
	var State=document.getElementById("State").value;
	var zip=document.getElementById("Zip").value;
	var Credit_card=document.getElementById("Credit_card").value;
	var Month=document.getElementById("Month").value;
	var Year=document.getElementById("Year").value;
	if(Name==""||!(Name.match([a-zA-Z]+)))
	{
		alert('Please Enter Name');
		return false;
	}
	else if(Email==""||!(Email.match(epattern)))
	{
		alert('Please Enter valid email');
		return false;
	}
	else if(Address==""||!Address.match([a-z A-Z 0-9]+))
	{
		alert('Please Enter Experience');
		return false;
	}
	else if(City==""||!City.match([a-z A-Z]+))
	{
		alert('Please enter City')
		return false;
	}
	else if(State==""||!State.match([a-z A-Z]+))
	{
		alert('Please enter State')
		return false;
	}
	else if(zip==""||!zip.match([0-9]{5}+))
	{
		alert('Please enter City')
		return false;
	}
	else if(Credit_card==""||!Credit_card.match("[0-9]{16}+"))
	{
		alert('Please enter valid Credit card number')
		return false;
	}
	else if(Month==""||!Month.match((0[1-9]|1[012])))
	{
		alert('Please enter Expiry Month')
		return false;
	}
	else if(Year==""||!Year.match([0-9]{4}+))
	{
		alert('Please enter Expiry Year')
		return false;
	}
	return true;
	}
	</script>