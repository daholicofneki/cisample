<?php 
// File ini ada di application/views/edit.php 
;?>
<h1>Add Post</h1>
 
<form action="" method="POST">
  <input type="text" name="title" value="<?php echo $post->title;?>" />
  <textarea name="body"><?php echo $post->body;?></textarea>
 
  <button type="submit">Simpan</button>
</form>