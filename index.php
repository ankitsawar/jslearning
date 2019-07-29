<!DOCTYPE html>
<html>
<head>
	<title>javascript learning</title>
	<script >
		function myFunction() {
					document.getElementById('demo1').innerHTML = 'my own paragraph';
		}
	</script>
</head>
<body>
<h2>my javascript</h2>
<p id="demo">the content is going to change</p>
<button type="button" onclick='document.getElementById("demo").innerHTML = "javascript"'>clickme</button>
<p id="abcd">styles will be changed</p>
<button type="button" onclick='document.getElementByid("abcd").style.fontSize = "35px"'>button  </button>

<p id="display">display will be hidden</p>
<button type="button" onclick="document.getElementById('display').style.display = 'none' ">display</button>

<p id="mie">hgfhfjekdkfokjj</p>
<button type="button" onclick="document.getElementById('mie').innerHTML = 'this will be displayed' ">click</button>

<h2>what is javascript???</h2>
<p>this is above block</p>
<p id="myinline" style="display: none;">abcd</p>
<button type="button" onclick="document.getElementById('myinline').style.display = 'block' ">clickable</button>


<p id="javascr"></p>
<script>
	document.getElementById('javascr').innerHTML = 'hello world'
</script>

<h1>higher priority tag</h1>
<p id="demo1">my paragraph which is going to change after click</p>
<button type="button" onclick="myFunction()">tryit</button>


<p id="abcdef">fontsize is going to change</p>
<button type="button" onclick="myFunc()">function</button>

<script>
	function myFunc() {
		document.getElementById('abcdef').style.fontSize = '40px';
	}
</script>

<script src="js/myfile1.js"></script>
<p id="demo_new">abcdefgihoijrfeiopghkffl</p>
<button type="button" onclick="myfunc()">button</button>

</body>
</html>