<div class ="large-9 push-3 columns">
  <?php foreach($blog as $blog_item): ?>
      <!--// Main Content -->
      <div class="large-9 columns">
        <h3><?php echo $blog_item['title']; ?></h3>
        <h6 class="subheader"><?php echo date(DATE_COOKIE,mysql_to_unix($blog_item['date'])); ?> by <a href="#"><?php echo $blog_item['author']; ?></a></h6>
        <p class="blog-content"><?php echo $blog_item['content']; ?></p>
      </div>
  <?php endforeach ?>
</div>
