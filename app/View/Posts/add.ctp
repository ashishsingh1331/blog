<?php
if (AuthComponent::user()):
    // The user is logged in, show the logout link
    echo $this->Html->link('Log out', array('controller' => 'users', 'action' => 'logout'));
else:
    // The user is not logged in, show login link
    echo $this->Html->link('Log in', array('controller' => 'users', 'action' => 'login'));
endif;
?>
<h1>Add Post</h1>
<?php
echo $this->Form->create('Post', array('type' => 'file'));
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->input('file', array('type' => 'file'));
echo $this->Form->end('Save Post');
?>