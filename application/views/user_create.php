<div class="large-9 pull-3 columns">
  <form action="<?php echo base_url()."user/create" ?>" method="post">
    <div class="row">
      <div class="large-6 columns">
        <label <?php echo $this->session->css_class; ?>>Username
          <input type="text" placeholder="user@email.com" name="user" <?php echo $this->session->css_class; ?> />
        </label>
        <?php if(isset($this->form->msg_get('user_create','user'))): ?>
          <small class="error") ><?php echo $this->form->msg_get('user_create','user'); ?></small>
        <?php endif; ?>
     </div>
     <div class="large-6 columns">
        <label <?php echo $this->session->css_class; ?>>Password
          <input type="password" placeholder="password" name="password" <?php echo $this->session->css_class; ?> />
        </label>
      </div>
      <div class="large-9 pull-3 columns">
        <input type="submit" class="button" value="Create" />
      </div>
    </div>
  </form>
</div>
