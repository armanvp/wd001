
  <?php
    $blog_count = count($blog) - 1;
    foreach($blog as $key => $blog_item): ?>
      <!--// Main Content -->
      <div class="row">
      <!--//<div class="large-9 columns<?php //if($blog_count == $key){ echo " end"; } ?>">//-->
        <h3><?php echo $blog_item['title']; ?></h3>
        <h6 class="subheader"><?php echo date(DATE_COOKIE,mysql_to_unix($blog_item['date'])); ?> by <a href="#"><?php echo $blog_item['author']; ?></a></h6>
        <p class="blog-content"><?php echo $blog_item['content']; ?></p>
      <!--//</div>//-->
      </div>
  <?php endforeach ?>
