<html>

<body onload="loadCategories()">
    
	<select id="categorySelector">
	</select>
	
	<div id="filterDiv" >
	</div>
	
	<button onclick="myFunction()">Click me</button>
	
	<div id="chart-div" style="width: 100%; height: 500px;">
		<div id="LoadingImage" style="width: 1024px; height: 500px; display:table-cell; vertical-align:middle; text-align:center">
			<p>Something cool is coming..</p>
			<img src="images/ajax-loader.gif" />
		</div>
	</div>
	<h3>* Charts are sorted by Price: Low to High</h3>
<br/>
<br/>

	<div>
		<a href="../submit_review/index.php" target="_blank">Review form</a></div>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript" src="js/googlechart.js"></script>
	<script type="text/javascript" src="js/util.js"></script>
</body>

</html>