

<h1>Users</h1>

<?php
echo $this->Html->link(
        'Add User ', array('controller' => 'Users', 'action' => 'add')
);
?>
<?php 
if (AuthComponent::user()):
  // The user is logged in, show the logout link
  echo $this->Html->link('Log out', array('controller' => 'users', 'action' => 'logout'));
echo $this->Html->link('posts', array('controller' => 'posts', 'action' => 'index'));
else:
  // The user is not logged in, show login link
  echo $this->Html->link('Log in', array('controller' => 'users', 'action' => 'login'));
endif;
 ?>
<table>
    <tr>
        <th>Id</th>
        <th>username</th>

        <th>Action</th>
        <th>Created</th>
    </tr>

    <!-- Here is where we loop through our $users array, printing out User info -->

    <?php foreach ($users as $User): ?>
        <tr>
            <td><?php echo $User['User']['id']; ?></td>
            <td>
                <?php echo $this->Html->link($User['User']['username'], array('controller' => 'Users', 'action' => 'view', $User['User']['id']));
                ?>
            </td>
            <td>
                <?php echo $this->Html->link('Delete', array('action' => 'delete', $User['User']['id']), null, 'Are you sure?' );?>
                <?php
                echo $this->Html->link(
                        'Edit', array('action' => 'edit', $User['User']['id'])
                );
                ?>
            </td>
            <td><?php echo $User['User']['created']; ?></td>
        </tr>
    <?php endforeach; ?>
    <?php unset($User); ?>
</table>