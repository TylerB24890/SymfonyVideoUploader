<h1>Edit <?php echo $Videos->getDisplayName(); ?></h1>

<hr />

<nav>
	<ul>
		<li><a href='<?php echo '/video/show?id='.$Videos->getId(); ?>'>View Video Details</a></li>
		<li><a href='<?php echo '/video/view?id='.$Videos->getId(); ?>'>View Full Size Video</a></li>
		<li><a href='/video/index'>View All Videos</a></li>
		<li><a href='<?php echo '/video/new' ?>'>Add New Video</a></li>
	</ul>
</nav>

<hr />

<?php include_partial('form', array('form' => $form)) ?>
