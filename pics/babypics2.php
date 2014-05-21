<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Web Developer - Austin, Texas</title>

<meta name="description" content="Austin, Texas Website Developer"> 
<meta name="keywords" content="PHP Programmer, Help, Web Design, E-commerce, Networking, Security, Software, ATX">
<meta name="Author" content="Craig Steelman S. Texas Computer Consultant">
<title> Austin, TX Software Developer - CraigSteelman.com</title>
<link href="/inc/main.css" rel="stylesheet" type="text/css" />


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

<script type="text/javascript" src="/js/fadeslideshow.js">

/***********************************************
* Ultimate Fade In Slideshow v2.0- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
http://www.dynamicdrive.com/dynamicindex14/fadeinslideshow.htm

***********************************************/

</script>

<script type="text/javascript">

var mygallery=new fadeSlideShow({
	wrapperid: "fadeshow1", //ID of blank DIV on page to house Slideshow
	dimensions: [500, 500], //width/height of gallery in pixels. Should reflect dimensions of largest image
	imagearray: [
		["/pics/craig_baby/baby1-snorkle.jpg", "", "", "Craig Baby Pics 1"],
		["/pics/craig_baby/baby2-soccer.jpg", "Craig Baby Pics 2"],
		["/pics/craig_baby/baby3.-skijpg.jpg"],
		["/pics/craig_baby/baby4-skates.jpg"],		
		["/pics/craig_baby/baby5-fishing.jpg", "", "", "What a beautiful scene with everything changing colors."] //<--no trailing comma after very last image element!
	],
	displaymode: {type:'auto', pause:4500, cycles:0, wraparound:false},
	persist: false, //remember last viewed slide and recall within same session?
	fadeduration: 500, //transition duration (milliseconds)
	descreveal: "ondemand",
	togglerid: ""
})




</script>





<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-24914834-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<style type="text/css">
body {
	background-color: #F2EEED;
}
.style1 {font-weight: bold}
</style>
</head>

<body>

<div id="wrapper">


<div id="header"><img src="../images/header.jpg" alt="logo" /> 
<div id="top_nav"> <?php include_once('../inc/top-nav.html')?>  </div>
<div id="top_nav2">
  <?php include_once('../inc/top-nav2.html')?>
</div>
</div>



<div id="main_content">


<h2>Photos</h2>

<div id="fadeshow1"></div>

<br />




</div>



<div id="footer"> <?php include_once('../inc/footer.html')?></div>

<!-- END of Wrapper --></div>



</body>
</html>
