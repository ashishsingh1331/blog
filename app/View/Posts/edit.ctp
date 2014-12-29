<?php
if (AuthComponent::user()):
    // The user is logged in, show the logout link
    echo $this->Html->link('Log out', array('controller' => 'users', 'action' => 'logout'));
else:
    // The user is not logged in, show login link
    echo $this->Html->link('Log in', array('controller' => 'users', 'action' => 'login'));
endif;
?>
<h1>Edit Post</h1>
<?php
echo $this->Form->create('Post');
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Save Post');
?>