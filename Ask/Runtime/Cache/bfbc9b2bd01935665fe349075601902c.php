<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
	 <form method='post' action="__URL__/index">
	 	<table cellpadding=2 cellspacing=2>
	 		<tr>
               <td >用户名：</td>
               <td ><input type="text" name="name" ></td>
            	</tr>
            <tr>
               <td >密码：</td>
               <td ><input type="text" name="pwd" ></td>
            	</tr>
            <tr>
            <td><input type="submit" class="button" value="登陆"> <input type="reset" class="button" value="清 空"></td>
            </tr>
               
</body>
</html>