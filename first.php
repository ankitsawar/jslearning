<!DOCTYPE html>
<html>
<head>
	<title></title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


			<script>
		$(document).ready(function() {
			$('p').click(function() {
				$(this).hide();
			});

			   $("button").click(function(){
              	$('#test').hide();

              });

			   $("button").click(function(){
			   		$(".demo").hide();
			   });

			   $("button").click(function() {
			   	$("*").hide();

			   });

			   $("button").click(function() {
			   	$("p.demo").hide();
			   });

			   $("button").click(function() {
			   		$("p:first").hide();
			   })

			   $("button").click(function() {
			   		$("ul li:first").hide();
			   });

			   $("button").click(function() {
			   		$("[href]").hide();
			   });


			   $("button").click(function(){
			   		$("a[target= '_blank']").hide();
			   });


			   $("button").click(function() {
			   	$("a[target!= '_blank']").hide();
			   })


			   $("button").click(function() {

			   		$("ul li:first-child").hide();

			   });




		});



           
	</script>

</head>
<body>


<P>first para</P>
<P>second para</P>
<p>third para</p>

<h1>hide through id</h1>
<p id="test">it will be hided</p>
<button>hide</button>

<h2 class="demo">through class hiding the object</h2>
<p class="demo">this will be hided</p>
<button>click me</button>


<p>list1</p>
<ul>
	<li>a</li>
	<li>b</li>
	<li>c</li>
</ul>

<ul>
	<li>1</li>
	<li>2</li>
	<li>3</li>
</ul>

<button>clickking</button>

<p>this will not be delted</p>
<p>this will also be kept</p>
<a href="abcd">this will be deleted</a><br>
<a href="#">this too deleted</a><br>
<button>hrefdelted</button><br>

<a href="/nextpage" target="_blank">will open in next page</a><br>
<a href="#" target="_self">will be opened in the same page</a><br>
<button>target</button>

</body>
</html>