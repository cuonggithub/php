
<p>Question List</p>
<table class="list">
<tr>
	<th>Id</th>
	<th>Name</th>
	<th>Email</th>
	<th>Gender</th>
	<th>Title</th>
	<th>Content</th>
</tr>
<?php
	foreach($questions as $question){ ?>
		<tr>
			<td><?php echo $question->id; ?></td>
			<td><?php echo $question->name; ?></td>
			<td><?php echo $question->email; ?></td>
			<td><?php echo $question->gender; ?></td>
			<td><?php echo $question->title; ?></td>
			<td><?php echo $question->content; ?></td>
		</tr>
<?php
	}
?>
</table>
