<?php
include_once 'config.php';

?>

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
	<script type="text/javascript" src="js/jquery.js"></script>
    
	<style>
	.ui-page {
    background: transparent url(images/green_bg.png) repeat !important;
	background-repeat:no-repeat !important;
   background-size:100% 100%!important;
	}
</style>
</head>
<body>
<div data-role="page" id="full-videos" data-theme="c">
    <header data-role="header">
	<div id="logo">
     </div>
    </header>
     <a href="videos.php" data-icon="arrow-l"  data-role="button">Go back</a>
    <section data-role="content">
	<h2><?php echo $row['name'] ?></h2>
	
<?php
$video_id=$_GET['vid'];
$sql="select * from gts_hdflvvideoshare where vid=".$video_id;
$rs=mysql_query($sql);
if(mysql_num_rows($rs)>0)
{
$row=mysql_fetch_array($rs);

$url=$row['file'];
if (strpos($url,'watch?v') != false) {
    
$url='http://'.str_replace("watch?v=",'embed/',$url);

echo '<iframe class="youtube-player" type="text/html" width="100%" height="400" style="max-width:100%;" src="'.$url .'" frameborder="0"></iframe>';
 }
 
 else if(strpos($url,'.mp4') != false)
 {
 ?>
 <video id=home_video class="video-js vjs-default-skin" controls preload=none height=400 width=100%
            poster="<?php echo $row['image'] ?>">
          <source src="<?php echo $row['file'];?>" type='video/mp4'/>
          <source src="<?php echo $row['file'];?>" type='video/webm'/>
          <track kind=captions src="/video-js/captions.vtt" srclang=en label=English />
        </video>
<script>var homePlayer=_V_("home_video");</script>
		<?php
 		
}
else if(strpos($url,'.mov') != false)
{ ?>

<p align="center"><b><font size="5">This format is not supported</font></b></p>
<?php }
}
?>
</section>
       
    <footer data-role="footer" data-position="fixed">
        <div data-role="navbar">
		<ul>
			<li><a rel="external" href="index.php" data-icon="icon-home icon-white" >Home</a></li>
			<li><a rel="external" href="videos.php" data-icon="icon-film icon-white" data-theme="c" class="ui-btn-active">Videos</a></li>
			<li><a rel="external" href="books.php"  data-icon="icon-book icon-white">Books</a></li>
			<li><a rel="external"  href="live.html" data-icon="icon-facetime-video icon-white">Live</a></li>
		</ul>
		</div>
    </footer>
    </div>
	</body>
</html>