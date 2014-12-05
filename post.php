<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div id="post" role="main">
    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
        <h2 class="post-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
        <ul class="post-meta">
            <li itemprop="author" itemscope itemtype="http://schema.org/Person"><?php _e('作者: '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>
            <li><?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('F j, Y'); ?></time></li>
            <li><?php _e('分类: '); ?><?php $this->category(','); ?></li>
        </ul>
        <div class="post-content" itemprop="articleBody">
            <?php $this->content(); ?>
        </div>
        <!-- <p itemprop="keywords" class="tags"><?php _e('标签: '); ?><?php $this->tags(', ', true, 'none'); ?></p> -->
		<div class="tags">
			<div class="dkeywords">
			   <div itemprop="keywords" class="keywords"><?php _e('标签: '); ?><?php $this->tags(', ', true, 'none'); ?></div>
			</div>
			<div class="dshareds">
				<div class="post-share">
					<ul class="post-shareul clearfix">
						<li class="post-shareli">
							<a href="http://service.weibo.com/share/share.php?title=<?php $this->title() ?>&url=<?php $this->permalink() ?>" class="post-sharea psa-weibo" target="_blank" rel="nofollow" title="分享到新浪微博">新浪微博</a>
						</li>
						<li class="post-shareli">
							<a href="http://v.t.qq.com/share/share.php?title=<?php $this->title() ?>&url=<?php $this->permalink() ?>&site=<?php $this->options->siteUrl(); ?>" class="post-sharea psa-qqweibo" target="_blank" rel="nofollow" title="分享到腾讯微博">腾讯微博</a>
						</li>
						<li class="post-shareli">
							<a href="http://www.douban.com/recommend/?url=<?php $this->permalink() ?>&title=<?php $this->title() ?>" class="post-sharea psa-douban" target="_blank" rel="nofollow" title="分享到豆瓣">豆瓣网</a>
						</li>
						<li class="post-shareli">
							<a href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=<?php $this->permalink() ?>&title=<?php $this->title() ?>" class="post-sharea psa-qzone" target="_blank" rel="nofollow" title="分享到QQ空间">QQ空间</a>
						</li>
						<li class="post-shareli">
							<a href="http://share.renren.com/share/buttonshare?link=<?php $this->permalink() ?>&title=<?php $this->title() ?>" class="post-sharea psa-renren" target="_blank" rel="nofollow" title="分享到人人网">人人网</a>
						</li>
						<li class="post-shareli">
							<a href="http://twitter.com/share?url=<?php $this->permalink() ?>&text=<?php $this->title() ?>" class="post-sharea psa-twitter" target="_blank" rel="nofollow" title="分享到Twitter">Twitter</a>
						</li>
					</ul>
				</div>
			</div>
		<div>
    </article>
	<div class="post-near">
		<nav>
			<span class="prev"><?php $this->theNext(); ?></span>
			<span class="next"><?php $this->thePrev(); ?></span>
		</nav>
	</div>
    <?php $this->need('comments.php'); ?>
</div><!-- end #post-->
<?php $this->need('footer.php'); ?>
