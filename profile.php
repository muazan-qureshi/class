<?php include('main.php');

foreach ($object->pro() as $aa) {
	
}

?>

<table>
	<tr>
		<th>
			Name
		</th>
		<td>
			<?php echo $aa['name']?>
		</td>
	</tr>
	<tr>
		<th>
			Email
		</th>
		<td>
			<?php echo $aa['email']?>
		</td>
	</tr>
	<tr>
		<th>
			Profile
		</th>
		<td>
			<?php echo $aa['phone']?>
		</td>
	</tr>
	<tr>
		<th>
			Sports Name
		</th>
		<td>
			<?php echo $aa['sport_name']?>
		</td>
	</tr>
</table>