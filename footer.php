<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
</div><!-- end #body -->

<footer id="footer" role="contentinfo">
	<div class="footer-inner">
		<p><?php $this->options->description(); ?></p>
        <p>&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.All Right Reserved.
		<?php _e('Powered by <a href="http://www.typecho.org" target="_blank">Typecho</a>'); ?> & <?php _e('<a href="http://lixianhua.com" target="_blank">绛木子</a>'); ?>
			<?php if ($this->options->siteIcp): ?>
			<br/><a href="http://www.miitbeian.gov.cn/" target="blank"><?php $this->options->siteIcp(); ?></a>
			<?php endif; ?>
			<?php if($this->options->siteStat):?><?php $this->options->siteStat();?><?php endif;?>
		</p>
    </div>
</footer><!-- end #footer -->
</div>
<div id="scroll">
	<a href="#" class="scroll-up"><i class="fa fa-chevron-up"></i></a>
	<?php if ($this->is('post')) :?>
	<a href="#comments" data-scroll="1"><i class="fa fa-comment-o"></i></a>
	<?php endif;?>
</div>
<script src="<?php $this->options->themeUrl('js/jquery.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/common.js'); ?>"></script>
<?php if ($this->is('post')) :?>
<script src="<?php $this->options->themeUrl('js/highlight.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/qrcode.js'); ?>"></script>
<script>
$(function(){
	$(window).load(function(){
	     $('pre code,.comment-content pre').each(function(i, block) {
			hljs.highlightBlock(block);
		  });
	});
	setImgCenter();
	var qrcode = new QRCode(document.getElementById("qrcode-img"), {
        width : 96,//设置宽高
        height : 96
    });
	qrcode.makeCode("<?php $this->permalink();?>");
	
});
</script>
<?php endif;?>
<?php $this->footer(); ?>
</body>
</html>
