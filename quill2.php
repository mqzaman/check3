<?
//-------------------------------------------------------------------------//
//初期設定
//-------------------------------------------------------------------------//
$strvalue=$_POST['quilltxt'];
$strvalue1=str_replace('contenteditable="true"','contenteditable="false"',$_POST['quilltxt']);
$strvalue1=str_replace('<input type="text" data-formula="e=mc^2" data-link="https://qsysbd.com" data-video="Embed URL">','',$strvalue);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Full Editor - Quill Rich Text Editor 4th</title>
  <meta charset="utf-8">

<link rel="stylesheet" href="css/quill.snow.css" />


<style>
  body > #standalone-container {
    margin: 50px auto;
    max-width: 720px;
  }
  #editor-container {
    height: 350px;
  }
</style>

<script type="text/javascript">
	function execPurchase() {
			document.quillfrm.quilltxt.value=document.getElementById("editor-container").innerHTML;
			document.quillfrm.submit();
			return true;
	}
	
</script>
</head>
<body>
<table>
<tr>
<td>
<?=$strvalue1?>
</td>
</tr>
</table>

  
<div id="standalone-container">
  <div id="toolbar-container">
    <span class="ql-formats">
      <select class="ql-font"></select>
      <select class="ql-size"></select>
    </span>
    <span class="ql-formats">
      <button class="ql-bold"></button>
      <button class="ql-italic"></button>
      <button class="ql-underline"></button>
      
    </span>
    <span class="ql-formats">
      <select class="ql-color"></select>
      <select class="ql-background"></select>
    </span>
    <span class="ql-formats">
      <button class="ql-script" value="sub"></button>
      <button class="ql-script" value="super"></button>
    </span>
    <span class="ql-formats">
      <button class="ql-header" value="1"></button>
      <button class="ql-header" value="2"></button>
      <button class="ql-blockquote"></button>
      <button class="ql-code-block"></button>
    </span>
    <span class="ql-formats">
      <button class="ql-list" value="ordered"></button>
      <button class="ql-list" value="bullet"></button>
      <button class="ql-indent" value="-1"></button>
      <button class="ql-indent" value="+1"></button>
    </span>
    <span class="ql-formats">
      <button class="ql-direction" value="rtl"></button>
      <select class="ql-align"></select>
    </span>
    <span class="ql-formats">
      <button class="ql-image"></button>
    </span>
    
  </div>
  <div id="editor-container"></div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/katex.min.js"></script>
<script src="js/highlight.min.js"></script>  
<script src="js/quill.min.js"></script>

<script>
  var quill = new Quill('#editor-container', {
    modules: {
      syntax: true,
      toolbar: '#toolbar-container'
    },
    placeholder: 'Compose an epic...',
    theme: 'snow'
  });
  quill.clipboard.dangerouslyPasteHTML('<?=$strvalue?>');
</script>


<FORM ACTION="https://qsysbd.com/labs/check/quill2.php" METHOD="POST" NAME="quillfrm">
<INPUT type="hidden" name="quilltxt" id="quilltxt" value="">
<input type="button" value=" Save " onClick="execPurchase()">
</FORM>
</body>
</html>