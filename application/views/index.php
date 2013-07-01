<?php 
// File ini ada di application/views/index.php 
;?>
<h1>Post</h1>
 
<?php if ($posts):?>
  <?php foreach($posts as $post):?>
    <h1><?php echo $post->title;?></h1>
    <p><?php echo $post->body;?></p>
    <a href="/post/edit/<?php echo $post->id;?>">Edit</a>
    <a href="/post/delete/<?php echo $post->id;?>">Delete</a>
  <?php endforeach;?>
<?php else:?>
  Belum ada post
<?php endif;?>