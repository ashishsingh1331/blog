
<?php
if (AuthComponent::user()):
    // The user is logged in, show the logout link
    echo $this->Html->link('Log out', array('controller' => 'users', 'action' => 'logout'));
else:
    // The user is not logged in, show login link
    echo $this->Html->link('Log in', array('controller' => 'users', 'action' => 'login'));
endif;
?>
<h1><?php echo h($post['Post']['title']); ?></h1>
<p><small>Created: <?php echo $post['Post']['created']; ?></small></p>
<p><?php echo h($post['Post']['body']); ?></p>
<p><?php echo $post['Post']['file'];
?></p>

