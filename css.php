<html>
<head>
<script
src="https://ajax.googleapis.com/ajax/libs/jquery
/3.6.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
$("button").click(function(){
alert("Background color = " +
$("p").css("background-color"));
});
});
</script>
</head>
<body>
<h2>This is a heading</h2>
<p style="background-color:#ff0000">This is a
paragraph.</p>
<p style="background-color:#00ff00">This is a
paragraph.</p>
<p style="background-color:#0000ff">This is a
paragraph.</p>
<button>Return background-color of p</button>
</body>
</html>

