$('#btn_reg').click(function(event)
{
	event.preventDefault();
	registration("../php/login_reg.php");
});
function registration(path)
{
	let login=$('#login').val();
	let pass=$('#pass').val();
	let name=$('#name').val();

	if(login.length<5)
		alert("короткий логин!");
	else if (pass.length<5)
		alert("короткий пароль!");
	else if (name.length==0)
		alert("введите имя!");
	else
	{
	$.ajax
	({
		type:"POST",
		url:path,
		data:({login:login,pass:pass,name:name}),
		success:function(msg)
		{
			if(msg==1)
				alert("YRA!!!");
			else
				alert(":(");
		}
	});
	}
}
$('#btn_auth').click(function(event)
{
	event.preventDefault();
	authentification("../php/login_auth.php");
});
function authentification(path)
{
	let login=$('#login').val();
	let pass=$('#pass').val();

	if(login.length==0)
		alert("логин!");
	else if (pass.length==0)
		alert("пароль!");
	else
	{
	$.ajax
	({
		type:"POST",
		url:path,
		data:({login:login,pass:pass}),
		success:function(msg)
		{
			if(msg==2)
				{
					$(location).attr('href','../index1.php');
					//window.location.href = '../index1.php';
				}
			else
				alert("нет такого юзера!");
		}
	});
	}
}
