<!DOCTYPE html>
<html lang="en">
<head>
  <title>Live Clock</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/my_styles.css">
  
  <!-- jQuery library -->

<script src="js/jquery-3.3.1.min.js"></script>
 <!-- Latest compiled JavaScript -->
<script src="js/bootstrap.min.js"></script> 


<link href="/dashboard/images/favicon.png" rel="icon" type="image/png" />
<style type="text/css">
	body,html{
		width: 100%;
		height: 100%;
	}
	.content{
		width: 100%;
		height: inherit;
		background-color: lightblue;
	}
</style>

		<script type="text/javascript">

			
			
		
			function timer() {
			var clockDisplay = document.getElementById('clock');

			var time = new Date();

			var hour = time.getHours().toString();
			var minute = time.getMinutes().toString();
			var sec = time.getSeconds().toString();
				
			console.log(sec);

			var clockStrng = hour +':'+ minute + ':' + sec;

			clockDisplay.textContent = clockStrng;

			}
			

			setInterval(timer, 1000);

			

			
		</script>
</head>
<body>

	<div class="content d-flex align-items-center text-center">
		
		<h1 id="clock" class="display-3 mx-auto">Welcome to vicSystems</h1>PM


	</div>




 

</body>
</html>