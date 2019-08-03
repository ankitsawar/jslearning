<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.baby {
			border:1px solid #c20202;
			width: 300px;
			height: 300px;
		}
		.queen {
			width: 200px;
			height: 200px;
			border:1px solid #222;
			/*padding: 150px 150px;*/
		}
		.baby.no-border {
			border:0;
		}

		.baby.no-border1 {
			border: 1px solid #000;
		}
	</style>

</head>
<body>
	<div class="baby">
		<!-- onclick="callme(this)" -->
		<div class="queen">
			<button class="submit"  data-attr="no-border">Submit</button>
		</div>
	</div>
	<!-- <div class="baby">
		<div class="queen">
			<button class="submit" onclick="callme(this)" data-attr="no-border1">Submit</button>
		</div>
	</div>
	<div class="baby">
		<div class="queen">
			<button class="submit" onclick="callme(this)" data-attr="no-border2">Submit</button>
		</div>
	</div> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			// $(".baby").find("div").addClass("queen");
			// $(".submit").click(function(){
			// 	$(".baby").addClass("no-border");
			// })
			// $(".submit").click(function(){
			// 	$(".baby").first().addClass("no-border");
			// 	$(".baby").last().addClass("no-border1");
			// 	$(this).parent().parent().append('<div class="baby"><div class="queen"><button class="Submit" onclick="callme(this)">Submit</button></div></div>');

			// })
			

		})

		// $("body").delegate("click", ".submit", function() {
		// 	console.log("enter")
		// 		$(this).parent().parent().append('<div class="baby"><div class="queen"><button class="Submit" >Submit</button></div></div>');
		// 	});

		$( document ).delegate( ".submit", "click", function() {
  // $( this ).after( "<p>Another paragraph!</p>" );
  $(this).parent().parent().append('<div class="baby"><div class="queen"><button class="submit" >Submit</button></div></div>');
});

		function callme(dis) {
			var  attr = $(dis).attr("data-attr");
			console.log(attr);
				$(dis).parent().parent().addClass(attr);
				
				// $(dis).parent().parent().append('<div class="baby"><div class="queen"><button class="Submit" onclick="callme(this)">Submit</button></div></div>');
			}
		
	</script>
</body>
</html>