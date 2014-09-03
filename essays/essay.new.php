<!DOCTYPE HTML>

<html>
<head>
<title>New Essay</title>
<meta content='width=device-width, initial-scale=1.0, user-scalable=no' name='viewport'>
<script src="jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/smoothness/jquery-ui.css" />
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
<script src="http://tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/> 
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css"/>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="tinymce/js/tinymce/tinymce.min.js"></script>
<script src="tinymce/js/tinymce/jquery.tinymce.min.js"></script>
<script >
function PDFLintSave(element_id, html, body) {
        // Do some custom HTML cleanup
        html = html.replace(/a/g,'b');

        return html;
}
$(function(){
        tinymce.init(
{
selector:'textarea#newtext', 
save_callback: "PDFLintSave",
content_css : "essaycontent.css",
plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
         "save table contextmenu directionality emoticons template paste textcolor"
   ],
toolbar1 : "newdocument bold italic underline strikethrough alignleft aligncenter alignright alignjustify styleselect" ,
toolbar2 : "formatselect fontselect fontsizeselect cut copy paste bullist numlist outdent indent blockquote undo redo removeformat subscript superscript save",
toolbar3 : "insertdatetime forecolor backcolor",
});

tinymce.init({selector:'textarea#edittext',
save_callback: "PDFLintSave",
content_css : "essaycontent.css",
plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
         "save table contextmenu directionality emoticons template paste textcolor"
   ],
toolbar1 : "newdocument bold italic underline strikethrough alignleft aligncenter alignright alignjustify styleselect" ,
toolbar2 : "formatselect fontselect fontsizeselect cut copy paste bullist numlist outdent indent blockquote undo redo removeformat subscript superscript save",
toolbar3 : "insertdatetime forecolor backcolor",
});

});
</script>
<?php 
if(isset($_GET["file"])){
 echo file_get_contents($_GET["file"]);
}else{
 echo "No file Specified";
}
?>
<link rel="stylesheet" type="text/css" href="essay.new.css">
</head>
<body>
<div class="container">
<nav class="nav navbar-default navbar-fixed-top" role="navigation">
<ul class="nav nav-tabs " role="tablist">
<li class="active"><a href="#new">New</a></li>

<li><a href="#edit">Edit</a></li>
</ul>
</nav>
<div class="container-fluid">
<div id="new">
<form method ="POST" action="createproc.php">

<label for="title">Title</label>
<input type="text" name="title">
<label for="author">Author</label>
<input type="text" name="author">
<label for="body">Title</label>
<textarea name="body" id="newtext"></textarea>
<input type="submit" value="Submit">
</form>
</div>
<div id="edit">
<form method ="POST" action="createproc.php">

<label for="title">Title</label>
<input type="text" name="title">
<label for="author">Author</label>
<input type="text" name="author">
<label for="body">Title</label>
<textarea name="body" id="edittext">

</textarea>
<input type="submit" value="Submit">
</form>
</div>
</div>
</div>
</body>
</html>