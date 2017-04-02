	
<div>
	<a href="./index.php?controller=calendar&action=index">日付一覧</a>
	&nbsp;&nbsp;
	<a href="./index.php?controller=calendar&action=newC">新規日付</a>
	<table class="list">
		<tr>
			<th>No.</th>
			<td><?php echo $record->id; ?></td>
		</tr>
		<tr>
			<th>日付</th>
			<td><?php echo date("Y/m/d", strtotime($record->inputDate)); ?></td>
		</tr>
		<tr>
			<th>日付1</th>
			<td><?php echo date("Y/m/d", strtotime($record->inputDate1)); ?></td>
		</tr>
	</table>
</div>
