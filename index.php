<?php
/**
 * 一套简洁的Theme,作者好懒
 * 
 * @package Simple Theme 
 * @author Koyoter
 * @version 1.1
 * @link http://acoder.me
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<div id="index" role="main">
	<?php while($this->next()): ?>
        <article  itemscope itemtype="http://schema.org/BlogPosting">
			<div class="post">
				<div class="post-info">
					<span itemprop="datePublished"><?php $this->date('F j, Y'); ?></span>
					<span class="comments"><a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></span>
				</div>
				<a href="<?php $this->permalink() ?>"><h4 class="post-title" itemprop="headline"><?php $this->title() ?></h4>
				</a>
				<div class="post-content" itemprop="description">
					<p><?php $this->excerpt(300, '...'); ?></p>
				</div>
				<a href="<?php $this->permalink() ?>" class="cr">Continue Reading...</a>
			</div>
        </article>
	<?php endwhile; ?>

    <?php $this->pageNav('&laquo;', '&raquo;'); ?>
	<?php $this->need('links.php'); ?>
</div><!-- end #main-->

<?php $this->need('footer.php'); ?>
