
<p>日付一覧:</p>

<a href="index.php?controller=calendar&action=newC">新規日付</a>

<table class="list">
<tr>
	<th>No.</th>
	<th>日付</th>
	<th>日付1</th>
</tr>
<?php
	if(!empty($calendars)){
		foreach($calendars as $calendar){ 
?>
		<tr>
			<td><a href="./index.php?controller=calendar&action=detail&id=<?php echo $calendar->id; ?>"><?php echo $calendar->id; ?></a></td>
			<td><?php echo date("Y/m/d", strtotime($calendar->inputDate)); ?></td>
			<td><?php echo date("Y/m/d", strtotime($calendar->inputDate1)); ?></td>
		</tr>
<?php
		}
	}
?>
	
	
</table>
