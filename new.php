<!DOCTYPE html>
<html>
<head>
	<title></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <style>
    .simple1 {
      color: blue;
      font-style: italic;
      
    }

    .basic1 {
      font-size: 30px;
    }


  </style>
<script>
  $(document).ready(function(){

  	// $("button").click(function(){
  	// 	$("p").hide("1000", function(){
  	// 		alert("paragraph is hidden");

  	// 	});
  	// });


      // $("button").click(function(){
      //   $("p").hide(1000);
      //   alert("paragraph is hidden");
      // });


   // $("button").click(function(){
   //  $("p").css("color", "red").slideUp(2000).slideDown(2000);

   // });

   $("#text").click(function(){
    alert("text:" + $("#test").text());

   });

   $("#html").click(function(){
    alert("html:" + $("#test").html());
   });


   $("button").click(function(){
    alert("value:" + $("#test").val());
   });


   $("button").click(function() {
    alert($("#test").attr("href"));
   });


   $("#p1").click(function() {
    $("#test1").text("hello world!");
   });

   $("#p2").click(function() {
    $("#test2").html("hii <b>abcd</b> hello");
   });

   $("#p3").click(function(){
    $("#test3").val("gundu");
   });


   $("#p1").click(function() {
    $("#test1").text(function(i, origTest) {
      return origTest + "HelloWorld";
    });

   });


   $("#p2").click(function() {
    $("#test2").html(function(i, origTest) {
      return origTest + "this is <b>bold</b> text";
    })
   });


   $("#p2").click(function() {
    $("#test").attr("href", "www.local.com");
   });


/*jQuery add elements*/



  $("#p1").click(function(){
    $("p").append("hello");
  });

   $("#p2").click(function(){
   $("p").prepend("hi");
  });



      function appendText(){

        var text1 = "<p>hii</P>"; 
        var text2 = $("<p></p>").text("hello");
        var text3 = document.createElement("p");
        text3.innerHTML = "text";
        $("body").append(text1, text2, text3);
      
    }

$("#btn1").click(function(){
   $("img").before("before");
 });

$("#btn2").click(function(){
  $("img").after("after");
});





$("#btn").click(function(){
  $("div").remove();
});

$("#btn").click(function(){
  $("div").empty();
});


$("#btn").click(function() {
  $("p").remove(".test");
});

$("#btn").click(function() {
  $("p").remove(".test, .demo, .hello");
});

$("#btn").click(function(){
  $("p, h5").addClass("simple1 basic1");
});


$("#btn").click(function(){
  $("p,h5").toggleClass("simple1 basic1");
});


$("#btn").click(function(){
  alert("background-color:" + $("p").css("background-color"));

});



$("#btn").click(function(){
   $("p").css("background-color", "yellow");

});



$("#btn").click(function(){
   $("p").css({"background-color":"yellow", "font-size": "30px"});

});



  






 


	}); 


  function afterText(){
  var text1 = "i";
  var text2 = $("<i></i>").text("am");
  var text3 = document.createElement("b");
  text3.innerHTML = "bad";
  $("img").after(text1, text2, text3);
}   
  </script>

</head>
<body>
      <button>button</button>
      <p>welcome to my new page</p>


      <p id="test">some <b>random</b> text</p>
      <button id="text">show text</button>
      <button id="html">show html</button>

      
      name: <input type="text" name="value" value="gundu" id="test"><br>

      <a href="https://localhost.com" id="test">mywebsite</a>
      <button>value</button>

      <p id="test1">first paragraph</p><br>
      <p id="test2">second paragraph</p><br>
      <input type="text" name="set" id="test3" value="micky"><br>

      <button id="p1">text</button>
      <button id="p2">html</button>
      <button id="p3">value</button>

      <p id="test1">this <b>is</b> bold</p>
      <p id="test2">this is <b>another</b> bolds</p>

      <button id="p1">old/new</button>
      <button id="p2">old/new</button>


<P>abcd</P>
<button onclick="appendText()">append</button>


<img src="image/new.jpg" alt="friends" height="100px" width="100px">
<button id="btn1">before</button>
<button id="btn2">after</button>

<button onclick="afterText()">aftertext</button>


<div style="background-color: pink; width: 200px; height: 200px; text-align: center;">
  <p class="test">hii</p>
  <p class="demo">hello</p>
  <p class="hello">hey</p>
  <P>hiiiiiii</P>
</div>

<button id="btn">remove&empty</button>



  <h5>this is my first time adding a class</h5>
  <p style="background-color: pink">adding and removing</p>
 <p style="background-color: blue">adding and removing</p>
<button id="btn">add/remove</button>




</body>
</html>