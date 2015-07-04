<?php
  $this->benchmark->mark('start');
?>
<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >

<head>
  <meta charset="utf-8">
  <!-- If you delete this meta tag World War Z will become a reality -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Foundation 5</title>

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
        <li>Blog</li>
        <li>Reference</li>
      </ul>
    </div>
  </div>

  <div class="row">
    <div class="large-9 columns">
      <h3>Yet Another Welcome Post</h3>
      <h6 class="subheader">2nd of July 2015 by <a href="#">Arman</a></h6>
						<p class="blog-content">I’ve been doing ABAP programming ever since I graduated from college and it was my first language that I learned which has been used on my entire 9 years career in software development. Through the years, I was deployed to several projects ranging from Manufacturing, Pharmaceuticals to Retail learning both the functional and technical aspecs of SAP. As the time goes by, I learned to reuse my codes, optimize programs, and develop best practices that later save me huge amout of time in developing new requirements. This library of knowledge I’d like to share to everyone specially those who are starting on ABAP development, so they can save time and write good code at the same time.<br />I hope this website will help you in the future on your development.</p>
            <blockquote><pre>REPORT ztest MESSAGE-ID zmm_ap.<br /><br />START-OF-SELECTION.<br />WRITE: 'Hello World'.<br /><br />DATA:
  BEGIN OF gt_data OCCURS 0,
    doc     TYPE c LENGTH 10,
    idoc    TYPE edidc-docnum,
    mat     TYPE mara-matnr,
    type    TYPE c LENGTH 2,
    copy    TYPE n LENGTH 3,
    doc_new TYPE c LENGTH 10,
    idoc_new TYPE edidc-docnum,
    mat_new  TYPE mara-matnr,
    msg     TYPE c LENGTH 200,
    status  TYPE c LENGTH 4,
    idx     TYPE sy-tabix,
    bapiret TYPE STANDARD TABLE OF bapiret2,
  END OF gt_data.</pre></blockquote>
    </div>
  </div>

  <div class="row" >
    <div class="large-12 columns">
      <p><?php
            $this->benchmark->mark('end');
            echo $this->benchmark->elapsed_time('start','end');
            ?></p>

    </div>
  </div>

  <script src="<?php echo base_url();?>js/vendor/jquery.js"></script>
  <script src="<?php echo base_url();?>js/foundation.min.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>
</html>
