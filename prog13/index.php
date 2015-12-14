<!DOCTYPE html>
<html>
<head>
	<title>CRUD Program</title>
	<script type="text/javascript">
	function read(){
		var fname = document.getElementById("filename").value;
		var content = document.getElementById("content").value;
		rxhr= new XMLHttpRequest();
		rxhr.onreadystatechange= function(){
			if(rxhr.status == 200 && rxhr.readyState == 4){
				document.getElementById("res").innerHTML = rxhr.responseText;
			}
		}
		rxhr.open("GET","http://localhost/web2final/prog13/file/"+fname,true);
		rxhr.send();
	}
	function create(){
		var fname = document.getElementById("filename").value;
		var content = document.getElementById("content").value;
		cxhr= new XMLHttpRequest();
		cxhr.onreadystatechange= function(){
			if(cxhr.status == 200 && cxhr.readyState == 4){
				document.getElementById("res").innerHTML = cxhr.responseText;
			}
		}
		
		//cxhr.open("POST","http://localhost/web2final/prog13/server.php",true);
		cxhr.open("POST","http://localhost/web2final/prog13/file/"+fname,true);
		cxhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		cxhr.send("content="+content+"&filename="+fname);
		//cxhr.send("content=abc&filename=rahul");
	}
	function update(){
		var fname = document.getElementById("filename").value;
		var content = document.getElementById("content").value;
		uxhr= new XMLHttpRequest();
		uxhr.onreadystatechange= function(){
			if(uxhr.status == 200 && uxhr.readyState == 4){
				document.getElementById("res").innerHTML = uxhr.responseText;
			}
		}
		//uxhr.open("PUT","http://localhost/web2final/prog13/file/ffff",true);
		cxhr.open("POST","http://localhost/web2final/prog13/file/"+fname,true);
		cxhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		cxhr.send("content="+content+"&filename="+fname);
		//uxhr.send("content=hello&filename=ffff");
	}
	</script>
</head>
<body>
<center>
Filename:<input type="text" id="filename"><br>
Content:<input type="text" id="content"><br>
<input type="button" value="read" onclick="read()"><br>
<input type="button" value="create" onclick="create()"><br>
<input type="button" value="update" onclick="create()"><br>
<div id="res" ></div>
</center>
</body>
</html>