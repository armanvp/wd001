<?php
  $this->benchmark->mark('start');
  $this->load->helper('url');
?>
<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >

<head>
  <meta charset="utf-8">
  <!-- If you delete this meta tag World War Z will become a reality -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ABAP Src</title>

  <!-- If you are using the CSS version, only link these 2 files, you may add app.css to use for your overrides if you like -->
  <link rel="stylesheet" href="<?php echo base_url();?>css/normalize.css">
  <link rel="stylesheet" href="<?php echo base_url();?>css/foundation.css">
  <link rel="stylesheet" href="<?php echo base_url();?>css/app.css">

  <!-- If you are using the gem version, you need this only -->
  <link rel="stylesheet" href="<?php echo base_url();?>css/app.css">

  <script src="<?php echo base_url();?>js/vendor/modernizr.js"></script>

</head>
<body>

  <!-- body content here -->
  <div class="row">
    <div class="large-12 columns">
      <h1>ABAP Source </h1>
      <h6 class="subheader">Making ABAP development fast as possible</h6>
    </div>

    <div class="large-12 columns">
      <ul class="breadcrumbs">
        <li><a href="<?php echo base_url(); ?>">Home</a></li>
        <li><a href="<?php echo base_url().'page/view/blog'; ?>">Blog</a></li>
      </ul>
    </div>
  </div>

  <div class="row">
    <div class="large-3 columns">
      <h5>Recent Posts</h5>
      <ul class="side-nav">
        <?php foreach($blog_recent as $blog_item): ?>
        <li><a href="<?php echo base_url().'page/view/blog/'.$blog_item['id']; ?>"><?php echo $blog_item['title']; ?></a></li>
        <?php endforeach ?>
      </ul>
    </div>

  <?php
    $this->load->view($content);
  ?>

  </div>

  <div class="row" >
    <div class="large-12 columns">
      <p><small>2015 ABAP Src. All rights reserved. <?php
            $this->benchmark->mark('end');
            echo $this->benchmark->elapsed_time('start','end');
            ?></small>
      </p>
    </div>
  </div>

  <script src="<?php echo base_url();?>js/vendor/jquery.js"></script>
  <script src="<?php echo base_url();?>js/foundation.min.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>
</html>
