

<div>

<a href="./index.php?controller=calendar&action=index">日付一覧</a>

	<form action="./index.php?controller=calendar&action=newC" method="post">
		<br />
		<table class="tbNew">
			<tr>
				<th>日付</th>
				<td><input type="text" value="<?php echo $inputDate; ?>" id="datepicker"/>
				<input type="hidden" value="<?php echo $inputDate; ?>" name="inputdate" id="inputdate"/>
				</td>
			</tr>
			<tr>
				<th>日付1</th>
				<td>
				<input type="text" id="dhtmlXCalendar">
				<input type="hidden" name="inputdate1" id="inputdate1">
				</td>
			</tr>
		</table>
		<br />
		<input type="submit" value="新規登録"/>
	</form>
</div>


