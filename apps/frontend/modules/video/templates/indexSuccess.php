<h1>Current Videos</h1>

<h2><a href="<?php echo url_for('video/new'); ?>">Upload New Video</a></h2>

<ul>
	<li>Click on the video ID number to view the video details</li>
	<li>Click on the video file name to view the full size video</li>
</ul>

<hr />

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>First name</th>
      <th>Last name</th>
      <th>Email</th>
      <th>Display name</th>
      <th>File</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Videos as $Video): ?>
    <tr>
      <td><a href="<?php echo url_for('video/show?id='.$Video->getId()) ?>"><?php echo $Video->getId() ?></a></td>
      <td><?php echo $Video->getFirstName() ?></td>
      <td><?php echo $Video->getLastName() ?></td>
      <td><?php echo $Video->getEmail() ?></td>
      <td><?php echo $Video->getDisplayName() ?></td>
      <td><a href='<?php echo url_for('video/view?id='.$Video->getId()) ?>'><?php echo $Video->getFile() ?></a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

