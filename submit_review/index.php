<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Food Compiler</title>

<link href="../css/bootstrap.css" rel="stylesheet">
<link href="../css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="../css/owl.carousel.css">
<link href="../css/style.css" rel="stylesheet">

</head>

<body onload="loadCategories()">
<header> 

<nav class="navbar navbar-default navbar_bg navbar-fixed-top">
  <div class="container">
     
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#" style="padding-top:0.9em;"><strong>Food&nbsp;Compiler</strong></a>
    </div>

     
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="http://foodcompiler.wordpress.com" target="_blank">Blogs <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="../submit_review/index.php" target="_blank">Upload Review <span class="sr-only">(current)</span></a></li>
		<li class="active"><a href="https://foodcompiler.wordpress.com/about/" target="_blank">Know me <span class="sr-only">(current)</span></a></li>
      </ul>
    </div> 
  </div> 
</nav>
   
</header> 
 
 <div class="details_section">
 <div class="container">
 <div class="row">
	<div class="addreviev_section">
    <h2 class="text-center text-uppercase" style="margin-bottom:30px;">Upload Review</h2>
	    <form class="form-horizontal" action="php/submitReview.php" method="post">
          <div class="form-group">
            <label class="col-sm-4 control-label text-left">Location *</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" placeholder="CP, Punjabi Bagh, etc." name="location" id="location" required>
              <div id="locationResults"></div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label text-left">Restaurant Name *</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" placeholder="Restaurant Name" name="restaurant" id="restaurant" required>
              <div id="restaurantResults"></div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label text-left">Name of Dish *</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" placeholder="Name of Dish" name="dish_name" id="dish_name" required>
              <div id="dishNameResults"></div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label text-left">Rating *</label>
            <div class="col-sm-8">
              <? include ('php/populateRatings.php') ?>
            </div>
          </div>
          <br>
          <p>(Remaining fields are optional but Sharing is Caring)</p>
          <br>
          <div class="form-group">
            <label class="col-sm-4 control-label text-left">Type</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" placeholder="Veg, Chicken, Mutton, etc." name="type" id="type">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label text-left">Category</label>
            <div class="col-sm-8">
              <select name="category" id="categoryResults" class="form-control" style="margin-right:15px;"></select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label text-left">Presentation</label>
            <div class="col-sm-8">
              <? include ('php/populatePresentationRatings.php') ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label text-left">Price</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" placeholder="Price (as on menu)" name="price" id="price">
            </div>
          </div>
          <div class="text-center"><input type="submit" value=" Submit " name="submit" class="btn btns btn-block text-uppercase"/></div>
        </form>
  </div>
</div>
</div>
</div>
 


<footer class="footer_sec">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
            	<p class="pull-left">Copyright © 2016 aaa. all rights reserved.</p>
                <ul class="social_links pull-right no_margin">
                	<li><a href="#" class="text-center"><i class="fa fa-facebook"></i> <span></span></a></li>
                    <li><a href="#" class="text-center"><i class="fa fa-twitter"></i> <span></span></a></li>
                    <li><a href="#" class="text-center"><i class="fa fa-google-plus"></i> <span></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="js/util.js"></script>

</body>
</html>
<!--<script> 
$('.navbar_bg').affix({
		offset: {
		top: 100,
		bottom: function () {
		return (this.bottom = $('.footer_sec').outerHeight(true))
		}
	}
}) ;
</script> -->
 
