<?php
  $user_msg           = $this->form->msg_get('user_create','user');
  $user_msg_type      = $this->form->msg_get_type('user_create','user');
  $user_msg_css_class = $this->form->msg_get_css_class('user_create','user');
?>
<div class="large-9 pull-3 columns">
  <form action="<?php echo base_url()."user/login" ?>" method="post">
    <div class="row">
      <div class="large-6 columns">
        <label <?php echo $user_msg_css_class; ?>>Username
          <input type="text" placeholder="user@email.com" name="user" <?php echo $user_msg_css_class; ?> />
        </label>
        <?php if($user_msg_type == 'E'): ?>
          <small class="error") ><?php echo $user_msg; ?></small>
        <?php endif; ?>
     </div>
     <div class="large-6 columns">
        <label <?php echo $user_msg_css_class ?>>Password
          <input type="password" placeholder="password" name="password" <?php echo $user_msg_css_class; ?> />
        </label>
      </div>
      <div class="large-9 pull-3 columns">
        <input type="submit" class="button" value="Login" />
      </div>
    </div>
  </form>
</div>
