<h1>Videoss List</h1>

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
    <?php foreach ($Videoss as $Videos): ?>
    <tr>
      <td><a href="<?php echo url_for('video/show?id='.$Videos->getId()) ?>"><?php echo $Videos->getId() ?></a></td>
      <td><?php echo $Videos->getFirstName() ?></td>
      <td><?php echo $Videos->getLastName() ?></td>
      <td><?php echo $Videos->getEmail() ?></td>
      <td><?php echo $Videos->getDisplayName() ?></td>
      <td><?php echo $Videos->getFile() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('video/new') ?>">New</a>
