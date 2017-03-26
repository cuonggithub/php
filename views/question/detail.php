
<div>
	<a href="./index.php?controller=question&action=index">問題一覧</a>
	&nbsp;&nbsp;
	<a href="./index.php?controller=question&action=new">新規問題</a>
	<table class="list">
		<tr>
			<th>No.</th>
			<td><?php echo $record->id; ?></td>
		</tr>
		<tr>
			<th>名前</th>
			<td><?php echo $record->name; ?></td>
		</tr>
		<tr>
			<th>メール</th>
			<td><?php echo $record->email; ?></td>
		</tr>
		<tr>
			<th>性別</th>
			<td><?php echo $record->gender; ?></td>
		</tr>
		<tr>
			<th>タイトル</th>
			<td><?php echo $record->title; ?></td>
		</tr>
		<tr>
			<th>内容</th>
			<td><?php echo $record->content; ?></td>
		</tr>
	</table>
</div>