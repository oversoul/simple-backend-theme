<?php require "header.php"; ?>
<div class="header">
	<a href="/new.php" class="btn red"><i class="fa fa-plus"></i> Add Post</a>
	<div class="pull-right">
		<a href="#"><i class="fa fa-user"></i>Administrator</a>
		<a href="#" class="red"><i class="fa fa-eye"></i>Visit Website</a>
	</div>
</div>
<div class="uploader">
	<form action="/uploader" class="dropzone"></form>
	<div class="list">
		
	</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>
<?php require "footer.php"; ?>