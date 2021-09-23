
function showUser(fname,lnasc,lsexo){
			if(fname=="")  {
			  document.getElementById("txtHint").innerHTML="<b>Usuário não encontrado</b>";
			  return;
			  } 
			if (window.XMLHttpRequest)  { //Condição para encontrar o servidor
			     xmlhttp = new XMLHttpRequest();
			  } 

			  xmlhttp.onreadystatechange=function() 
			  {
			  if (xmlhttp.readyState==4 && xmlhttp.status==200){
			    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
			    }
			  }
			xmlhttp.open("GET","../controle/insereAluno.php?fname="+fname+"&lnasc="+lnasc+"&lsexo="+lsexo,true);
			xmlhttp.send();

			if(txtHint=true){
				alert("Cadastrado com sucesso")
				location.href= '../visao/listarAlunos.php';
			}
			}

			// buscar

			function showUserBuscar(fname){
			if(fname=="")  {
			  document.getElementById("txtHint").innerHTML="<b>Usuário não encontrado</b>";
			  return;
			  } 
			if (window.XMLHttpRequest)  { //Condição para encontrar o servidor
			     xmlhttp = new XMLHttpRequest();
			  } 

			  xmlhttp.onreadystatechange=function() 
			  {
			  if (xmlhttp.readyState==4 && xmlhttp.status==200){
			    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
			    }
			  }
			xmlhttp.open("GET","../controle/buscarAlunos.php?fname="+fname,true);
			xmlhttp.send();
			}
		//showUser - End


		//alterar

		function showUserAlterar(fname,lnasc,lsexo,lid){
			if(fname=="")  {
			  document.getElementById("txtHint").innerHTML="<b>Usuário não encontrado</b>";
			  return;
			  } 
			if (window.XMLHttpRequest)  { //Condição para encontrar o servidor
			     xmlhttp = new XMLHttpRequest();
			  } 

			  xmlhttp.onreadystatechange=function() 
			  {
			  if (xmlhttp.readyState==4 && xmlhttp.status==200){
			    if(xmlhttp.responseText !== false){
			    	alert("Usuário Alterado");
			    	location.href = '../visao/listarAlunos.php';
			    }else{
			    	alert('Usuário não Cadastrado');
			    }
			    }
			  }
			xmlhttp.open("GET","../controle/alterarAlunos.php?fname="+fname+"&lnasc="+lnasc+"&lsexo="+lsexo+"&lid="+lid,true);
			xmlhttp.send();

			}

			function logout(host){

				var r = confirm("Deseja sair do Sistema?");
				if(r == true) {
					window.location.href = "http://"+host+"/aulaSenac/controle/logout.php"
				}
			}