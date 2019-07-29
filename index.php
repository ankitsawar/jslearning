<!DOCTYPE html>
<html>
<head>
	<title>javascript learning</title>
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

</body>
</html>