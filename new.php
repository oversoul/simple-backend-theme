<?php require 'header.php' ?>
<form action="#" method="POST">
	<div class="header">
		<div class="pull-left">
			<a href="#" class="btn red" id="option"><i class="fa fa-plus"></i> Add Option</a>
			<select name="folder">
				<option value="/">/</option>
				<option value="/posts">/posts</option>
			</select>
			<input type="text" name="path" placeholder="Path">
		</div>
		<div class="pull-right">
			<a href="#"><i class="fa fa-user"></i>Administrator</a>
			<a href="#" class="red"><i class="fa fa-eye"></i>Visit Website</a>
		</div>
	</div>

	<div class="editor">
		<div class="form-item" id="title">
			<input type="text" placeholder="Page name">
			<button type="submit" class="green"><i class="fa fa-save"></i>  Save Page</button>
		</div>
		<div id="more"></div>
		<textarea name="content" placeholder="Content"></textarea>
	</div>
</form>


<?php require 'footer.php' ?>