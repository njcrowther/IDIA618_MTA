<!DOCTYPE html>
<html>
<head>
	<title>Parking Registration</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script>
		function process(){
			var fname=document.getElementById('fname').value;
			var lname=document.getElementById('lname').value;
			var lplate=document.getElementById('lplate').value;
			var carType=document.getElementById('carType').value;

			var dataString='fname=' + fname + '&lname=' + lname + '&lplate=' + lplate + '&carType=' + carType;

			$.ajax({
				type:"post",
				url:"process.php",
				data:dataString,
				cache:false,
				success: function(html){
					$('#msg').html(html);
				}

			});
			return false;
		}
	</script>
</head>
<body>

	<!-- Using the attached, intentionally wrong HTML form (in a zip), create a page called process.php that thanks the user and then displays the information entered. Only turn in the process.php page and note what is wrong with the HTML form.


action = "process.php"-->

<h1>Week 7 Forms - Nathan Crowther</h1>
<h2>Note that I turned in my HTML as well since I modified the html in order to use AJAX</h2>
<form >

  First name:<br>
  <input id="fname" type="text" name="firstname"><br>
  Last name:<br>
  <input id="lname" type="text" name="lastname"><br><br>
   License Plate:<br>
  <input id="lplate" type="text" name="licenseplate"><br><br>

<select id="carType" name = 'cars'>


	<option value="Jeep">Jeep</option>
	<option value="Ford">Ford</option>
	<option value="Honda">Honda</option>
	<option value="Toyota">Toyota</option>

</select>

<input type="submit" value="Submit" onclick="return process()">


</form>

<p id="msg"></p>

</body>
</html>
