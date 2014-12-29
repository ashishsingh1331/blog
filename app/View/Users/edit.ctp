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
<div class="users form">
    <?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Edit User'); ?></legend>
        <?php
        echo $this->Form->input('username');
        echo $this->Form->input('password');
        echo $this->Form->input('role', array(
            'options' => array('admin' => 'Admin', 'author' => 'Author')
        ));
        ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>