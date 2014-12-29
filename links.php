<?php
function Links_output() {
	$links = array(
		// 如果添加新连接则直接按下面示例添加:
		//array('百度','http://www.baidu.com',"百度官网"),
		array('百度','http://www.baidu.com',"百度官网"),
		array('谷歌','http://www.google.com',"谷歌官网"),
		array('问路','http://www.wen.lu',"翻墙用的"),
		array('百度','http://www.baidu.com',"百度官网"),
		array('谷歌','http://www.google.com',"谷歌官网"),
		array('问路','http://www.wen.lu',"翻墙用的"),
		array('百度','http://www.baidu.com',"百度官网"),
		array('谷歌','http://www.google.com',"谷歌官网"),
		array('问路','http://www.wen.lu',"翻墙用的"),
		array('百度','http://www.baidu.com',"百度官网"),
		array('谷歌','http://www.google.com',"谷歌官网"),
		array('问路','http://www.wen.lu',"翻墙用的"),
	);
	if(count($links) > 0){
		echo '<h1 class="subhead">
            友情链接
        </h1><div class="links"><ul>';
		for( $row=0; $row < count($links); $row++ ) {
			echo '<li>';
				echo '<a href="'. $links[$row][1] .'" title="'.  $links[$row][2] .'"  target="_blank">'. $links[$row][0] .'</a>';
			echo '</li>';
		}
		echo '</ul></div>';
	}
}

Links_output();
?>