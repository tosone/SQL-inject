<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Tosone的微博客</title>
    <? include('_include/head.php'); ?>
    <script type="text/javascript" src="/javascripts/base64.min.js"></script>
    <link rel="stylesheet" href="/stylesheets/editor.css" />
</head>
<body class="container">
	<?
		include("_include/menu.php");
		$sqlite3db = new SQLite3('db.db');
		$codes = array('intro' => "", 'code' => "", 'tags' => "");
		if(isset($_GET["id"])) {
			$codes = $sqlite3db->querySingle('select * from code where id="'. $_GET["id"] .'"', true);
		}
	?>
	<div class="container editor_con">
		<div class="form_group clearfix">
			<div class="descri">
				<label for="intro">介绍</label>
			</div>
			<div class="con_input">
				<textarea id="intro" placeholder="介绍"><?=$codes["intro"]?></textarea>
			</div>
		</div>
		<div class="form_group clearfix">
			<div class="descri">
				<label for="code">代码</label>
			</div>
			<div class="con_input">
				<textarea id="code" placeholder="代码" style="height: 530px;font-size: 12px;line-height: 1.5;"><?=base64_decode($codes["code"])?></textarea>
			</div>
		</div>
		<div class="form_group clearfix">
			<div class="descri">
				<label for="tags">标签</label>
			</div>
			<div class="con_input">
				<input type="text" id="tags" placeholder="多个标签请以英文分号分隔" value="<?=$codes["tags"]?>" />
			</div>
		</div>
		<div class="form_group">
			<button id="submit">提交</button>
		</div>
	</div>
	<? include("_include/bottom.php"); ?>
	<script>
		$("#search").click(function(){
			var url = window.location.protocol + "//" + window.location.host + "/searchKeyWords.php";
			window.location.href = url + "?keywords=" + $("#search_input").val();
		});
		$("#search_input").keypress(function (e) {
		    var e = e || event, keycode = e.which || e.keyCode;
		    if (keycode == 13) {
		    	var url = window.location.protocol + "//" + window.location.host + "/searchKeyWords.php";
				window.location.href = url + "?keywords=" + $("#search_input").val();
		    }
		});
		$("#submit").click(function(){
			var intro = $("#intro").val();
			var code = Base64.encode($("#code").val());
			var tags = $("#tags").val();
			if(intro == "" || code == ""){
				layer.open({
					type: 0,
				    title: '失败',
				    content: '介绍或者代码不能为空！',
				    shadeClose: true
				});
			} else {
				$.post("/action/action.php", {<?=isset($_GET["id"])?("type: ". $_GET["id"] .","):""?> intro: $("#intro").val(), code: Base64.encode($("#code").val()), tags: $("#tags").val()}, function(data){
					if(data.code == 500) {
						layer.open({
							type: 0,
						    title: '失败',
						    content: '添加或者修改失败！',
						    shadeClose: true
						});
					}
					if(data.code == 200) window.location.href = "index.php";
				}, 'json');
			}
		})
	</script>
</body>
</html>
