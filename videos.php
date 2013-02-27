<?php include_once 'config.php'; ?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>Peceli Fijian Methodist Church of America</title>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0b3/jquery.mobile-1.0b3.min.css">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<link rel="stylesheet" href="css/jquery.mobile.pagination.css">
	<link rel="stylesheet" type="text/css" href="css/global.css">
	<link rel="stylesheet" type="text/css" href="fonts/stylesheet.css">
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
    <script src="js/jquery.mobile.pagination.js"></script>
    <!-- JavaScript HTML requirements -->
    <script src="http://code.jquery.com/jquery-1.6.3.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.0b3/jquery.mobile-1.0b3.min.js"></script>
    <link rel=stylesheet href="http://vjs.zencdn.net/3.2/video-js.css" type="text/css">
    <script src="http://vjs.zencdn.net/3.2/video.js"></script>	
	<style>
	.ui-page {
    background: transparent url(images/green_bg.png) repeat !important;
	background-repeat:no-repeat !important;
   background-size:100% 100%!important;
	}
</style>
</head>
<body>
<div data-role="page" id="videos">
    <header data-role="header">
	<div id="logo">
   </div>
    </header>
     
    <section data-role="content">
	<h2>Videos</h2>
	
	<?php
	$sql="select * from gts_hdflvvideoshare where featured='ON' order by vid desc";
	$rs=mysql_query($sql);
	if(mysql_num_rows($rs)>0)
	{
	 echo '<ul data-role="listview">';
	while($row=mysql_fetch_array($rs))
	{
	/*echo '<pre>';
	print_r($row);
	echo '</pre>';*/
	
	
	?>
			<li><a  href="video.php?vid=<?php echo $row['vid'] ?>">
							<img src="<?php echo $row['image'] ?>" />
				<h3><?php echo $row['name'] ?></h3>
				</a></li>
				
		<?php
		
		}}?>
			</ul>
        </section>
       
    <footer data-role="footer" data-position="fixed">
        <div data-role="navbar">
		<ul>
			<li><a rel="external" href="index.php" data-icon="icon-home icon-white" >Home</a></li>
			<li><a rel="external" href="videos.php" data-icon="icon-film icon-white" data-theme="c" class="ui-btn-active">Videos</a></li>
			<li><a rel="external" href="books.html" data-icon="icon-book icon-white">Books</a></li>
			<li><a rel="external" href="live.html" data-icon="icon-facetime-video icon-white">Live</a></li>
		</ul>
		</div>
    </footer>
    </div>
	</body>
	</html>