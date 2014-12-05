<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="http://cdn.staticfile.org/normalize/2.1.3/normalize.min.css">
	<link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css'); ?>">

	<script src="<?php $this->options->themeUrl('js/jquery-2.1.1.min.js'); ?>"type="text/javascript"></script>
	<script src="<?php $this->options->themeUrl('js/nprogress.min.js'); ?>"type="text/javascript"></script>
	<script src="<?php $this->options->themeUrl('js/skin.js'); ?>"type="text/javascript"></script>
	<script src="<?php $this->options->themeUrl('js/jquery.githubRepoWidget.min.js'); ?>"type="text/javascript"></script>
	<script src="<?php $this->options->themeUrl('js/instantclick.min.js'); ?>" data-no-instant></script>
	<script data-no-instant>InstantClick.init();</script>
    <!--[if lt IE 9]>
    <script src="http://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="http://cdn.staticfile.org/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header("generator=&"); ?>
</head>
<body>
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->
<script type="text/javascript">NProgress.inc(0.1);</script>
<div class="x-goto-top">
	<div class="x-arrow"></div>
	<div class="x-stick"></div>
</div>
<div id="wrap">
	<header id="header">
		<div class="container">
			<div class="avatar"></div>
			<div class="text-center">
				<p class="description"><?php $this->options->description() ?></p>
			</div>
			<div class="nav">
				<ul>
					<!-- 导航开始 -->
					<li><a<?php if($this->is('index')): ?> class="current"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a></li>
					<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
					<?php while($pages->next()): ?>
					<li><a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
					<?php endwhile; ?>
				</ul>
			</div>
			<div class="divider">
				<i class="heart icon"></i>
			</div>
		</div>
	</header><!-- end #header -->
	<script type="text/javascript">NProgress.inc(0.2);</script>
	<div id="body">
		<script type="text/javascript">NProgress.inc(0.25);</script>
		<div class="container">
			<div class="row">

    
    
