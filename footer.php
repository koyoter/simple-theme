<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

			</div><!-- end .row -->
		</div>
	</div><!-- end #body -->
</div><!-- end #wrap -->
<script type="text/javascript">NProgress.inc(0.8);</script>
<footer id="footer" role="contentinfo">
	<div class="container">
	&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>
    <?php _e('由 <a href="http://www.typecho.org">Typecho</a> 强力驱动'); ?>.
	</div>
</footer><!-- end #footer -->

<?php $this->footer(); ?>
<script type="text/javascript">NProgress.done();</script>
</body>
</html>
