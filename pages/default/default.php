<div class="card">
<h1>Upload an image</h1>
	<div class="centerarea">
		<form id="imageupload" action="./?page=upload" method="post" enctype="multipart/form-data">
			<input type="hidden" value="1" name="upload">
		    <input accept="image/*" type="file" name="fileToUpload" id="fileToUpload" onchange="loadFile(event)"><br><br>
		    <img class="preview" id="output"/>
		    <!--<input style="display: inline-block" type="submit" value="Upload Image" name="submit">-->
		</form>
		<a href="#"><img id="uploadbutton" class="upload" src="img/upload.png" onclick="document.getElementById('imageupload').submit();"></a>
	</div>
</div>