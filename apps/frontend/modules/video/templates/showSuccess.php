<h1><?php echo $Videos->getDisplayName(); ?></h1>

<hr />

<nav>
	<ul>
		<li><a href='<?php echo '/video/view?id='.$Videos->getId(); ?>'>View Full Size Video</a></li>
		<li><a href='<?php echo '/video/edit?id='.$Videos->getId(); ?>'>Edit Video</a></li>
		<li><a href='/video/index'>View All Videos</a></li>
		<li><a href='<?php echo '/video/new' ?>'>Add New Video</a></li>
	</ul>
</nav>

<hr />

<table>
	<tbody>
		<tr>
			<th>First name:</th>
			<td><?php echo $Videos->getFirstName() ?></td>
		</tr>
		<tr>
			<th>Last name:</th>
			<td><?php echo $Videos->getLastName() ?></td>
		</tr>
		<tr>
			<th>Email Address: </th>
			<td>
				<a href='mailto:<?php echo $Videos->getEmail() ?>'><?php echo $Videos->getEmail(); ?></a>
			</td>
		</tr>
		<tr>
			<th><?php echo $Videos->getDisplayName(); ?>:<br />
			<b><a href='<?php echo '/video/view?id='.$Videos->getId(); ?>'>View in Full Size</a></b></th>
			<td class="flowplayer">
				<video>
					<source type="video/mp4" src='<?php echo "/uploads/videos/" . $Videos->getFile(); ?>'>
				</video>
			</td>
		</tr>
	</tbody>
</table>

