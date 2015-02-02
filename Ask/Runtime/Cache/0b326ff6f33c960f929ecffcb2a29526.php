<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>答题赢积分</title>
<script type="text/javascript">
	 function check()
	 {
  		node=frm.vote;
  		flag=false;
	 	 for(i=0;i<node.length;i++)
		 {
			 if(node[i].checked)
		   {
			   	flag=true;
			 }
		 }
		if(!flag)
		{
			alert("您还没有答完!")
			return false;
		}
	}
</script>
</head>
<body>
<h2>答题赢积分</h2>

	<form method='post' action="__URL__/process">
	<table width="450" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#CCCCCC">
	
	<?php $__FOR_START_17550__=0;$__FOR_END_17550__=$num;for($i=$__FOR_START_17550__;$i < $__FOR_END_17550__;$i+=1){ ?><tr><td height="30" align="left" bgcolor="#F0F000"><?php echo ($i+1); ?>题目：<?php echo ($da[$i]['title']); ?></td>       	
            </tr>
         <tr><td align="left" height="30" bgcolor="#FFFFFF">A:
            <input type="radio" class='radio' name="<?php echo 'vote'.$i ?>" value="1"> 
         	</td></tr>
		 <tr><td height="30" bgcolor="#FFFFFF">B: 
		 	<input type="radio" class='radio' name="<?php echo 'vote'.$i ?>" value="2">
		 	</td></tr>
		 <tr><td height="30" bgcolor="#FFFFFF">C: 
		  	<input type="radio" class='radio' name="<?php echo 'vote'.$i ?>" value="3">
		  	</td></tr>
		 <tr><td height="30" bgcolor="#FFFFFF">D: 
		  	<input type="radio" class='radio' name="<?php echo 'vote'.$i ?>" value="4">
		  	</td></tr><?php } ?>
	
	     <tr><td><input type="submit" class="button" value="提 交" onClick="javascript:return check()">
		     <input type="reset" class="button" value="清 空"></td>
     	 </tr>
    </table>
	</form>
	

</body>
</html>