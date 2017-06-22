<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="__PUBLIC__/form.css">
</head>
<body>
	<form action="<?php echo U('handle');?>" method="post">
		<input type="text" name="use">
		<input type="password" name="pwd">
		<input type="submit">
	</form>
<?php echo ($data); ?>
<?php echo mt_rand(1,5);?>

	<!-- <?php if(is_array($with)): foreach($with as $k=>$v): echo ($v["id"]); ?>
		<?php echo (date('y-m-d H:i',$v["time"])); endforeach; endif; ?>> -->
</body>
</html>