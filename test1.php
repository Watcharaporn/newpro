<html>
<head>
<script type="text/javascript">
  function openWin()
  {
    myWindow=window.open('','','width=1200,height=690');
    myWindow.document.write("<p>This is 'myWindow'</p>");
    myWindow.focus();
    myWindow.print(); //DOES NOT WORK
  }
</script>
</head>
<body>

<input type="button" value="Open window" onclick="openWin()" />

</body>
</html>
