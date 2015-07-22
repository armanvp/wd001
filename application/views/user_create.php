<div class="large-9 pull-3 columns">
  <form action="<?php echo base_url()."user/create" ?>" method="post">
    <div class="row">
      <div class="large-6 columns">
        <label>Username
          <input type="text" placeholder="user@email.com" name="user" class="error" />
        </label>
        <?php if(isset($this->session->form['user']['message']): ?>
          <small class="error") ><?php echo $this->session->form['user']['message']; ?></small>
        <?php endif; ?>
     </div>
     <div class="large-6 columns">
        <label>Password
          <input type="password" placeholder="password" name="password" class="error" />
        </label>
      </div>
      <div class="large-9 pull-3 columns">
        <input type="submit" class="button" value="Create" />
      </div>
    </div>
  </form>
</div>
