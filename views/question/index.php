
<p>問題一覧:</p>

<a href="index.php?controller=question&action=new">新規問題</a>

<table class="list">
<tr>
	<th>No.</th>
	<th>名前</th>
	<th>メール</th>
	<th>性別</th>
	<th>タイトル</th>
	<th>内容</th>
</tr>
<?php
	if(!empty($questions)){
		foreach($questions as $question){ 
?>
		<tr>
			<td><a href="./index.php?controller=question&action=detail&id=<?php echo $question->id; ?>"><?php echo $question->id; ?></a></td>
			<td><?php echo $question->name; ?></td>
			<td><?php echo $question->email; ?></td>
			<td><?php echo $question->gender; ?></td>
			<td><?php echo $question->title; ?></td>
			<td><?php echo $question->content; ?></td>
		</tr>
<?php
		}
	}
?>
	
	
</table>
