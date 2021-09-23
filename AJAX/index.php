<html>
<head>
<script type="text/javascript">
function showUser(str){ // str pega o valor do form
if(str=="0")  { 
  document.getElementById("txtHint").innerHTML="Nao teve"; //Nao teve
  return;
  } 
if (window.XMLHttpRequest)  { 
     xmlhttp = new XMLHttpRequest();
  } 

  xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200){
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getuser.php?q="+str,true);
xmlhttp.send();
}
</script>
</head>
<body>

<form>
<select name="users" onchange="showUser(this.value)">
<option value="0">Selecione uma Pessoa:</option>
<option value="4">Prático</option>
<option value="2">Mario</option>
<option value="3">Naldo</option>
</select>
</form>
<br />
<div id="txtHint"><b>Escolha alguem que a lista aparece.</b></div>

</body>
</html>