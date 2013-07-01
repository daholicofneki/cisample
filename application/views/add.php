<?php 
// File ini ada di application/views/add.php 
;?>
<h1>Add Post</h1>
 
<form action="" method="POST" id="postForm">
  <input type="text" name="title" />
  <textarea name="body"></textarea>
  <button type="submit">Simpan</button>
</form
 
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="http://jquery.bassistance.de/validate/jquery.validate.js"></script>
<script type="text/javascript">
  <?php
    // Cek Form validation menggunakan http://jquery.bassistance.de/validate/demo/
    // validate signup form on keyup and submit
    ?>
  $(document).ready(function(){
    $("#postForm").validate({
      rules: {
        title: "required",
        body: "required",
      },
      messages: {
        title: "Please enter your title",
        body: "Please enter your body"  
      }
    });
  });
</script>