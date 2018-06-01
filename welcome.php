<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;

}
li a:active {
    background-color: #4CAF50;
}
</style>
<title>Welcome to Webpedia</title>
</head>
<body style="background-color: grey">
	<nav>
	<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="html.html">HTML</a></li>
  <li><a href="css.html">CSS</a></li>
  <li><a href="php.html">PHP</a></li>
  <li><a href="javascript.html">JAVASCRIPT</a></li>
  <li style="float:right"><a class="active" href="logout.php">Logout</a></li>
</ul>
</nav>
<section>
  <img class="mySlides" src="2.jpg"
  style="width:100%">
  <img class="mySlides" src="3.jpg"
  style="width:100%">
  <img class="mySlides" src="4.jpg"
  style="width:100%">
</section>
<section class="w3-container w3-center w3-content" style="max-width:600px">
  <h2 style="text-align:center" class="w3-wide"><pre>                                               Welcome to Webopedia</pre></h2>
  <p class="w3-opacity"><i><pre>                                                    Develop a passion for learning. If you do, you will never cease to grow.</pre></i></p>
</section>
<script>

var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 3000);
}
</script>

</body>
</html>