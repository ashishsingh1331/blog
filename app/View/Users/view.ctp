<?php
if (AuthComponent::user()):
    // The user is logged in, show the logout link
//    print_r(AuthComponent::user('role'));
    echo $this->Html->link('Log out', array('controller' => 'users', 'action' => 'logout'));
echo $this->Html->link('posts', array('controller' => 'posts', 'action' => 'index'));
    
else:
    // The user is not logged in, show login link
    echo $this->Html->link('Log in', array('controller' => 'users', 'action' => 'login'));
endif;
?>

<h1><?php
//debug($user);

echo h($user['User']['id']);
?></h1>
<p><small>Created: <?php echo $user['User']['created']; ?></small></p>
<p><?php echo h($user['User']['username']); ?></p>


