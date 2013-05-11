<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $Videos->getId() ?></td>
    </tr>
    <tr>
      <th>First name:</th>
      <td><?php echo $Videos->getFirstName() ?></td>
    </tr>
    <tr>
      <th>Last name:</th>
      <td><?php echo $Videos->getLastName() ?></td>
    </tr>
    <tr>
      <th>Email:</th>
      <td><?php echo $Videos->getEmail() ?></td>
    </tr>
    <tr>
      <th>Display name:</th>
      <td><?php echo $Videos->getDisplayName() ?></td>
    </tr>
    <tr>
      <th>File:</th>
      <td><?php echo $Videos->getFile() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('video/edit?id='.$Videos->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('video/index') ?>">List</a>
