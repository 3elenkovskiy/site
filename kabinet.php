<?php
require_once('templates/top.php');
if($_SESSION['user_id']){
	
?>
<H2>Кабинет</H2>
	 <form>
  <div class="form-group">
    <label for="name">Text</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="name">
  </div>
  <div class="form-group">
    <label for="exampleInputBody">Body</label>
    
<textarea name="body" id="exampleInputBody" class="form-control" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" id="exampleInputFile">
    <p class="help-block">Example block-level help text here.</p>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
<?php
}
require_once('templates/buttom.php');
?>

