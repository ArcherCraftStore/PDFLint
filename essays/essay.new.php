<!DOCTYPE HTML>
<html>
<head>
<title>New Essay</title>
<script src="http://tinymce.cachefly.net/4.1/tinymce.min.js"></script>

<script src="/tinymce.min.js"></script>
<script>
function PDFLintSave(element_id, html, body) {
        // Do some custom HTML cleanup
        html = html.replace(/a/g,'b');

        return html;
}
        tinymce.init(
{
selector:'textarea', 
save_callback: "PDFLintSave",
content_css : "essaycontent.css",
plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
         "save table contextmenu directionality emoticons template paste textcolor"
   ],
toolbar1 : "newdocument bold italic underline strikethrough alignleft aligncenter alignright alignjustify styleselect" ,
toolbar2 : "formatselect fontselect fontsizeselect cut copy paste bullist numlist outdent indent blockquote undo redo removeformat subscript superscript save"
});
</script>
<link rel="stylesheet" type="text/css" href="essay.new.css">
</head>
<body>
<form method ="POST" action="createproc.php">
<label for="title">Title</label>
<input type="text" name="title">
<label for="author">Author</label>
<input type="text" name="author">
<label for="body">Title</label>
<textarea name="body"></textarea>
<input type="submit" value="Submit">
</form>
</body>
</html>