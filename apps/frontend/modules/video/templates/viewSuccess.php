<h1><?php echo $Videos->getDisplayName(); ?></h1>

<hr />

<nav>
	<ul>
		<li><a href='<?php echo '/video/show?id='.$Videos->getId(); ?>'>View Video Details</a></li>
		<li><a href='<?php echo '/video/edit?id='.$Videos->getId(); ?>'>Edit Video</a></li>
		<li><a href='/video/index'>View All Videos</a></li>
		<li><a href='<?php echo '/video/new' ?>'>Add New Video</a></li>
	</ul>
</nav>

<hr />

<div class="flowplayer">
	<video>
		<source type="video/mp4" src='<?php echo "/uploads/videos/" . $Videos->getFile(); ?>'>
	</video>
</div>
