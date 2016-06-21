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
					           <li class="active"><a href="#" target="_blank">Know me <span class="sr-only">(current)</span></a></li>
                  </ul>
               </div>
            </div>
         </nav>
      </header>
      <div class="" style="background:#fff; padding: 7.5% 0 5% 0; width: 100%;">
         <div class="container">
            <div class="row">
               <div style="padding:5px 0px;">
                  <div class="row">
                     <form class="form-inline" style="padding-left:15px;">
                        <div class="form-group">
                           <select id="categorySelector" class="form-control" style="margin-right:15px;">
                           </select>
                        </div>
						<div id="filterDiv" class="form-group" >
                        </div>
                        <button onclick="getInputFromUI()" type="button" class="btn btns" style="margin-left:15px;">Show Chart</button>
                     </form>
                  </div>
                  <hr>
                  <div id="chart-div" class="row" style="margin-top:30px;">
                     <div id="LoadingImage" style="width: 1024px; height: 500px; display:table-cell; vertical-align:middle; text-align:center">
                        <p>Something cool is coming..</p>
                        <img src="images/ajax-loader.gif" />
                     </div>
                  </div>
                  <div class="row" style="margin-top:30px;">
                     <p class="text_brown"><small>Note: Charts are sorted by Price: Low to High</small></p>
                  </div>
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
   </body>
   
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="js/googlechart.js"></script>
    <script type="text/javascript" src="js/util.js"></script>
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
</script>-->