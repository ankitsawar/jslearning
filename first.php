<!DOCTYPE html>
<html>
<head>
	<title></title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
           

           <style type="text/css">
           	#flip {
           		padding: 5px;
           		background-color: yellow;
           		text-align: center;
           	}
           </style>

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


// tuesday's jquery learning 

		$("p").dblclick(function() {
           $(this).hide();
		});


		$("p").mouseenter(function() {
			alert("mouse is pointed");
		});


		$("p").mouseleave(function() {
			alert("mouse leavinng");
		});


			$("p").mousedown(function() {
				alert("mouse down pointed");
			});


		$("p").mouseup(function() {
			alert("mouseup function");
		});


		$("p").hover(function(){
			$("p").css("background-color", "yellow");
		}, function(){
			$("p").css("background-color", "blue");
		});


		$("input").focus(function() {
			$(this).css("background-color", "pink");
		});


		$("p").on({
			mouseenter: function() {
				$(this).css("color", "pink");
			},

			mouseleave: function() {
				$(this).css("color", "pink");
			},

			click: function() {
				$(this).css("color", "pink");
			}

		});

		$("#hide").click(function() {
			$("p").hide(1000);
		});
		$("#show").click(function() {
           $("p").show();
		});


		$("button").click(function() {
			$("p").toggle();

		});



		$("button").click(function() {
			$("#div1").fadeIn();
			$("#div2").fadeIn("slow");
			$("#div3").fadeIn(3000);

		});



		$("button").click(function() {
			$("#div1").fadeOut();
			$("#div2").fadeOut("slow");
			$("#div3").fadeOut(3000);

		});


		$("button").click(function() {
			$("#div1").fadeToggle();
			$("#div2").fadeToggle("slow");
			$("#div3").fadeToggle(4000);
		});


		$("button").click(function() {
			$("#div1").fadeTo("slow",0.25);
			$("#div2").fadeTo("fast",0.5);
			$("#div3").fadeTo(3000,0.75);
		});


		$("#flip").click(function() {
			$("#panel").slideDown("slow");

		});



		$("#flip").click(function() {
			$("#panel").slideUp("slow");
		});


		$("#flip").click(function() {
			$("#panel").slideToggle ("slow");
		})





		});



           
	</script>

</head>
<body>

<!-- 
<P>first para</P> -->
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


 name: <input type="text" name="name"><br>
 password: <input type="text" name="password">

<p>depends o clicking the button show hide will work</p>
<button id="show">show</button>	
<div id="div1" style="/*height: 30px; width: 50px; background-color: red;*/ display: none;">
	<p>gfhdksujdsl</p>
</div><br>
<div id="div2" style="height: 30px; width: 50px; background-color: blue; display: none;">
	
</div><br>
<div id="div3" style="height: 30px; width: 50px; background-color: green; display: none;">
	
</div>
 
 <button id="hide">hide</button>


<div id="div1" style="/*height: 30px; width: 50px; background-color: red;*/">
	<p>gfhdksujdsl</p>
</div><br>
<div id="div2" style="height: 30px; width: 50px; background-color: blue;">
	
</div><br>
<div id="div3" style="height: 30px; width: 50px; background-color: green;">
	
</div>


<div id="flip">
	click  to slide down
</div>

<div id="panel" style="display: none; padding-top: 50px; background-color: pink; text-align: center;">
	hello
</div>


<div id="flip">
	click  to slide Up
</div>

<div id="panel" style="padding-top: 50px; background-color: pink; text-align: center;">
	hello
</div>








</body>
</html>