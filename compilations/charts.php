<html>

<head>

</head>

<body onload="loadCategories()">
    <div id="categories">
	</div>
	
	<div id="filterDiv" >
		<h1>Filters</h1>
		<form>
			<input type="radio" id="nonveg" name="type" value="nonveg" onchange="typeChanged()" checked>Non Veg<br>
			<input type="radio" id="veg" name="type" value="veg" onchange="typeChanged()">Veg<br>
		</form>
	</div>
	<div id="chart-div" style="width: 1024px; height: 500px;">
		<div id="LoadingImage" style="width: 1024px; height: 500px; display:table-cell; vertical-align:middle; text-align:center">
			<p>Something cool is coming..</p>
			<img src="ajax-loader.gif" />
		</div>
	</div>
<br/>
<br/>

	<div>
		<a href="../submit_review/index.php" target="_blank">Click here</a> to share your review. Your review will displayed in the charts, along with your identity.
	</div>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript" src="googlechart.js"></script>
	<script type="text/javascript" src="util.js"></script>
</body>

</html>