<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>题库管理</title>
	<style type="text/css">
	*{ padding: 0; margin: 0;font-size:16px; font-family: "微软雅黑"} 
	div{ padding: 3px 20px;} 
	body{ background: #fff; color: #333;}
	h2{font-size:36px}
	input,textarea {border:1px solid silver;padding:5px;width:350px}
	input{height:32px}
	input.button,input.submit{width:68px; margin:2px 5px;letter-spacing:4px;font-size:16px; font-weight:bold;border:1px solid silver; text-align:center; background-color:#F0F0FF;cursor:pointer}
	</style>
    </head>
    <body>
        <div class="main">
            <h2>增加题目：</h2>
            <form method='post' action="__URL__/insert">
                <table cellpadding=2 cellspacing=2>
                    <tr>
                        <td >题目ID：</td>
                        <td ><input type="text" name="title_id" ></td>
                    </tr>
                    <tr>
                        <td >题目：</td>
                        <td><textarea name="title" rows="5" cols="25"></textarea></td>
                    </tr>
                    <tr>
                        <td >A答案：</td>
                        <td><textarea name="answer_A" rows="5" cols="25"></textarea></td>
                    </tr>
                    <tr>
                        <td >B答案：</td>
                        <td><textarea name="answer_B" rows="5" cols="25"></textarea></td>
                    </tr>
                    <tr>
                        <td >C答案：</td>
                        <td><textarea name="answer_C" rows="5" cols="25"></textarea></td>
                    </tr>
                    <tr>
                        <td >D答案：</td>
                        <td><textarea name="answer_D" rows="5" cols="25"></textarea></td>
                    </tr>
                    <tr>
                        <td >正确答案：</td>
                        <td ><input type="text" name="answer_r" ></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" class="button" value="提 交"> <input type="reset" class="button" value="清 空"></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>