<form action="<?php echo base_url()."user/create" ?>" method="post">
  <div class="row">
    <div class="large-12 columns">
      <label>Username
        <input type="text" placeholder="large-12.columns" name="user"/>
      </label>
   </div>
   <div class="large-12 columns">
      <label>password
        <input type="text" placeholder="large-12.columns" name="password"/>
      </label>
    </div>
    <div class="large-4 columns">
      <a href="#" onClick="form.submit()" class="button postfix">Create</a>
    </div>
  </div>
</form>
