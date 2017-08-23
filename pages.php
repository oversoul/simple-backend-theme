<?php require "header.php"; ?>
<div class="header">
	<a href="#" class="btn red"><i class="fa fa-plus"></i> Add Page</a>
	<div class="pull-right">
		<a href="#"><i class="fa fa-user"></i>Administrator</a>
		<a href="#" class="red"><i class="fa fa-eye"></i>Visit Website</a>
	</div>
</div>

<form action="#" class="search">
	<em>Pages</em>
	<div class="pull-right">
		<i class="fa fa-search"></i>
		<input class="pull-right" type="search" id="search" placeholder="Search...">
	</div>
</form>


<table>
	<?php for ($i=0; $i < 20; $i++) { ?> 
		<tr>
			<td class="details">
				<i class="fa fa-circle-o"></i> First Page <?php echo $i; ?>
				<span>/home</span>
			</td>
			<td class="tags">
			</td>
			<td class="actions">
				<a href="#"><i class="fa fa-pencil"></i></a>
				<a href="#"><i class="fa fa-times"></i></a>
			</td>
		</tr>
	<?php } ?>
</table>

<?php require "footer.php"; ?>