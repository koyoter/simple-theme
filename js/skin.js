$(function(){
	// 转到评论
	$('#feedback').click(function(){ 
		$('html, body').animate(
			{scrollTop: $("#comments").offset().top}
		);
	});

	// 返回顶部
	$("div.x-goto-top").hide();
	$("div.x-goto-top").click(function(){
		$('html, body').animate(
			{scrollTop: 0}
		);
	});

	// 显示返回顶部按钮
	if($(window).scrollTop() > 100){
		$("div.x-goto-top").stop().animate(
				{'bottom' : '70px', 'opacity': 'show'}, 550);
	}
	$(window).scroll(function(){  
		if($(window).scrollTop() > 100){
			$("div.x-goto-top").stop().animate(
				{'bottom' : '70px', 'opacity': 'show'}, 550);
		}else{
			$("div.x-goto-top").stop().animate(
				{'bottom' : '-70px', 'opacity': 'hide'}, 550);
		}  
	});

	// ------------------------ 上下文章 ------------------------ 
	var prevlink = $('#post .post-near > nav span.prev a').attr('href');
	if(!prevlink){
		$('#post .post-near > nav span.prev').hide();
	}
	var nextlink = $('#post .post-near > nav span.next a').attr('href');
	if(!nextlink){
		$('#post .post-near > nav span.next').hide();
	}
	$('#post .post-near > nav span.prev').click(function(){
		window.location.href = prevlink;
	});
	$('#post .post-near > nav span.next').click(function(){
		window.location.href = nextlink;
	});
});