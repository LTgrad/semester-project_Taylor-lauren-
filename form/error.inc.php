<style type="text/css">

* {
margin: 0;
padding: 0;
border: 0;
}

header {
  background-color: green;
  padding: 20px;
  text-align: center;
}

header ul li {
  display: inline;
  padding: 40px;
  font-family: sans-serif;
}

nav a {
  text-decoration: none;
  color: white;
}

Footer {
  background-color: green;
  padding: 20px;
  text-align: center;
  font-family: sans-serif;
  color: white;
  margin: 5px auto;
}
</style>
  <header>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Music</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
    </nav>
  </header>
  <body>
    <div class="container">
			<h1>Missing fields</h1>
				<p>Sorry, you have not completed all of the required fields.</p>
				<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
		<?php
	for($i=0; $i<count($this->missing_required_fields); $i++){
		echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
	}
?>
</ul>

<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
		</div>
<footer>
	<p>website by wala</p>
</footer>
