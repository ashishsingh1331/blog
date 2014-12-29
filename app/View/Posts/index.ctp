
<h1>Blog posts</h1>
<?php 
if (AuthComponent::user()):
  // The user is logged in, show the logout link
  echo $this->Html->link('Log out', array('controller' => 'users', 'action' => 'logout'));
else:
  // The user is not logged in, show login link
  echo $this->Html->link('Log in', array('controller' => 'users', 'action' => 'login'));
endif;
 ?>

<div>
    <?php
//     debug($posts);
    echo $this->Html->link(
            'Add Post', array('controller' => 'posts', 'action' => 'add')
    );
    ?>
</div>

<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Action</th>
        <th>Submitted by</th>
        <th>Created</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($posts as $post): ?>
        <tr>
            <td><?php echo $post['Post']['id']; ?></td>
            <td>
                <?php echo $this->Html->link($post['Post']['title'], array('controller' => 'posts', 'action' => 'view', $post['Post']['id']));
                ?>
            </td>
            <td>
                <?php
                echo $this->Form->postLink(
                        'Delete', array('action' => 'delete', $post['Post']['id']), array('confirm' => 'Are you sure?')
                );
                ?>
                <?php
                echo $this->Html->link(
                        'Edit', array('action' => 'edit', $post['Post']['id'])
                );
                ?>
            </td>
            <td><?php echo $post['UserJoin']['username']; ?></td>
            <td><?php echo $post['Post']['created']; ?></td>
        </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
</table>