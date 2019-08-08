<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form>
		<div>
			<input type="email" name="email" id="email">
			<p class="email_msg"></p>
			<button type="button" onclick="checkEmail();">Submit</button>
		</div>
	</form>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script>
		function checkEmail() {
			var email = $("#email").val();

			$.ajax({
				url : 'check-email-ajax.php',
				method: 'post',
				data: {
					email : email
				},
				dataType: 'json',
				success: function (response) {
					if(response.message == "isMember") {
						$(".email_msg").text("We have sent you a email please check");
					} else {
						$(".email_msg").text("This email is not registred with us please register your self");
					}
				},
				error: function () {
					alert("Somethig went wrong");
				}
			});
		}
	</script>
</body>
</html>