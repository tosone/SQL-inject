<script type="text/javascript">
	$(".tag").click(function(){
		var url = window.location.protocol + "//" + window.location.host + "/searchTag.php";
		window.location.href = url + "?tag=" + $(this).data("tag");
	});
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
	$(".delete_btn").click(function(){
		var $this = $(this);			
		$.get("/action/delete.php", {id: $(this).data("id")}, function(data){
			if(data.code == 500) {
				alert("删除失败！");
			} else if(data.code == 200) {
				$this.parent().slideUp();
				alert("删除成功！");
			}
		},'json');
	});
	$(".editor_btn").click(function(){
		window.location.href = window.location.protocol + "//" + window.location.host + "/editor.php?id=" + $(this).data("id");
	});
	$(".content_btn").click(function(){
		window.location.href = window.location.protocol + "//" + window.location.host + "/content.php?id=" + $(this).data("id");
	});
</script>