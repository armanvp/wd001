<div class="large-9 pull-3 columns">
  <form action="<?php echo base_url()."user/create" ?>" method="post">
    <div class="row">
      <div class="large-6 columns">
        <label>Username
          <input type="text" placeholder="user@email.com" name="user"/>
        </label>
     </div>
     <div class="large-6 columns">
        <label>Password
          <input type="password" placeholder="password" name="password"/>
        </label>
      </div>
      <div class="large-4 columns">
        <input type="submit" />
      </div>
    </div>
  </form>
</div>
