

<div>

<a href="./index.php?controller=question&action=index">問題一覧</a>

	<form action="./index.php?controller=question&action=newQ" method="post">
		<br />
		<table class="tbNew">
			<tr>
				<th>名前</th>
				<td><input type="text" value="<?php echo $name; ?>" name="name"/><span class="error"><?php echo $nameError; ?></span></td>
			</tr>
			<tr>
				<th>メール</th>
				<td><input type="text" value="<?php echo $email; ?>" name="email"/><span class="error"><?php echo $emailError; ?></span></td>
			</tr>
			<tr>
				<th>性別</th>
				<td>
					<input type="radio" value="男" name="gender" id="genderFemale" <?php if($gender == '男') echo 'checked="checked"'; ?> />
					<label for="genderFemale">男</label>
					<input type="radio" value="女" name="gender" id="genderMale" <?php if($gender == '女') echo 'checked="checked"'; ?> />
					<label for="genderMale">女</label>
					<span class="error"><?php echo $genderError; ?></span>
				</td>
			</tr>
			<tr>
				<th>タイトル</th>
				<td><input type="text" name="title" id="title"/></td>
			</tr>
			<tr>
				<th>内容</th>
				<td><textarea rows="5" cols="40" name="content" id="content"> </textarea></td>
			</tr>
		</table>
		<br />
		<input type="submit" value="新規登録"/>
	</form>
</div>
