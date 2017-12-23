
<form method="post" action="<?=$_SERVER['PHP_SELF']?>" class="frm">
<p>
<select name="operation" class="input">
	<option value="add">Addition
	</option>
	<option value="sub">Subtraction
	</option>
	<option value="mult">Multiplication
	</option>
	<option value="div">Division
	</option>
	<option value="multable">Multiplication Table
	</option>
	<option value="divnum">Divisble numbers in between
	</option>
</select>
<input type="text" name="start" class="input"/>
<br/>
<input type="text" name="end" class="input"/>
</p>
<p>For Division table only</p>
<p>
<input type="text" name="factor" class="input"/>
<br/>
<input type="submit" name="find" value="Find" class="btn"/>
<input type="reset" value="reset" class="btn"/>
</p>
</form>
