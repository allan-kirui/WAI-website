<?php


echo ' <input type="text" name="filetitle" placeholder="Title of Image..."><br>
<input type="text" name="fileauthor" '.(isset($_SESSION['username'])&&isset($_SESSION['user_id'])? 'value='.$_SESSION['username'].'':'placeholder="Author Name..."').'><br>
<input type="text" name="watermark" placeholder="Watermark text..."><br>
<p '.(!isset($_SESSION['user_id'])||$_SESSION['user_id']==='notuser'?'hidden = "hidden"':"").'>Status of image:
    <input type="radio" name="radio" value="private"><label for="private">Private</label>
    <input type="radio" name="radio" value="public"><label for="public">Public</label>
<p><br> 
Select image to upload:
<input type="file" name="fileToUpload" id="fileToUpload">
<button type="submit"  name="submit">Upload Image</button>
<br>';
?>

