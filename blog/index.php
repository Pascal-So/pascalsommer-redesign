<?php
	
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(E_ALL);

include("sqlConfig.php");
$sql = new mysqli($sql_host, $sql_username, $sql_password, "pascalsommer_ch");

$res = $sql->query("select count(*) as count from posts");
$count = intval($res->fetch_assoc()["count"]);

?>

<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">

	<title>
		Pascal Sommer
	</title>

	<link rel="stylesheet" type="text/css" href="../base.css">
	<link rel="stylesheet" type="text/css" href="content.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="blog.js"></script>
	<script src="comment.js"></script>

	
</head>
<body>
<header>
	<div id="titleBar">
		<h1>Pascal Sommer</h1>
		<h3>Photography</h3>
	</div>
	<nav>
		<a href="#work">WORK</a>
		<a href="#about">ABOUT ME</a>
		<a href="#blog">BLOG</a>
	</nav>
</header>


<section id="blog">
	<div class="nr_posts hidden"><?php echo $count ?></div>
	<div class="temp hidden"></div>
	<div class="posts">
		<div class="post">
			<h3 class="post_title">title VERY LONG</h3>
			<h5 >9th january 2914</h5>
			<img class="blog_img" src="../img/bg.jpg">

			<h5 class='comments_toggle'>no comments yet</h5>
			<div class="comments_block">
				<div class="post_id hidden">1</div>
				<div class="comments">				
					<div class="comment">
						<h5 class="comment_date">5th march 1354</h5>
						<h4 class="comment_name">Name</h4>
						
						<p class="comment_text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vel metus massa. Sed at enim luctus risus ornare tempus. Aenean vehicula, ex a aliquam pulvinar, urna erat efficitur neque, eget placerat purus massa nec odio. Donec ac nisl ut sapien ullamcorper mollis ac fermentum leo. Integer a mauris eget nisl consectetur rutrum. In mollis dapibus viverra. Sed tincidunt euismod nisi, quis molestie velit pretium aliquam. Nullam mollis nibh sit amet turpis mollis ultricies. Praesent et mauris at arcu hendrerit faucibus et et nunc. Donec id elit sodales, blandit lectus sed, interdum dui.</p>
					</div>
					<div class="comment">
						<h5 class="comment_date">5th march 1354</h5>
						<h4 class="comment_name">Name</h4>
						
						<p class="comment_text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vel metus massa. Sed at enim luctus risus ornare tempus. Aenean vehicula, ex a aliquam pulvinar, urna erat efficitur neque, eget placerat purus massa nec odio. Donec ac nisl ut sapien ullamcorper mollis ac fermentum leo. Integer a mauris eget nisl consectetur rutrum. In mollis dapibus viverra. Sed tincidunt euismod nisi, quis molestie velit pretium aliquam. Nullam mollis nibh sit amet turpis mollis ultricies. Praesent et mauris at arcu hendrerit faucibus et et nunc. Donec id elit sodales, blandit lectus sed, interdum dui.</p>
					</div>
				</div>
				<form class="comment_new comment">
					<h4 class="comment_name">New comment</h4>
					<input type="text" placeholder="Name" class="comment_input comment_input_name text_input"><br>
					<textarea class="comment_input comment_input_text text_input" placeholder="Message"></textarea><br>
					<input type="button" value="SEND" class="comment_send comment_input">
				</form>
			</div>
		</div>
	</div>
	
	<h3 class="hidden">Loading pictures...</h3>
	<input type="button" class="more_button" value="SHOW OLDER CONTENT">
</section>


<footer>
	<div id="copyrightInfo">
		<p>Copyright</p>
		<h4>PASCAL SOMMER 2016</h4>
	</div>
</footer>

</body>
</html>