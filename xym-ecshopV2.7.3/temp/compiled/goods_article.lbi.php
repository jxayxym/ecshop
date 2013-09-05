<?php if ($this->_var['goods_article_list']): ?>
<div class="mod1 mod2" id="articlesList">
	<span class="lt"></span><span class="lb"></span><span class="rt"></span><span class="rb"></span>
	<h1 class="mod2tit"><?php echo $this->_var['lang']['article_releate']; ?></h1>
	<div class="mod2con">
	<?php $_from = $this->_var['goods_article_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');if (count($_from)):
    foreach ($_from AS $this->_var['article']):
?>
   <a href="<?php echo $this->_var['article']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['article']['title']); ?>" class="txtdot"><?php echo sub_str($this->_var['article']['short_title'],15); ?></a><br />
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>
</div>
<script type="text/javascript">divheight("articlesList");</script>
<?php endif; ?>
<div class="blank"></div>