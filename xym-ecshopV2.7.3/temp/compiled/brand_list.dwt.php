<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,global.js,compare.js')); ?>
<script type="text/javascript" src="themes/black_watch/js/action.js"></script>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<?php echo $this->fetch('library/ur_here.lbi'); ?>

<div class="block clearfix">

	<div class="goodsTitle blank"><?php echo $this->_var['lang']['all_brand']; ?></div>
	<div class="all_brand">
	 <?php $_from = $this->_var['brand_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand_data');$this->_foreach['brand_list_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['brand_list_foreach']['total'] > 0):
    foreach ($_from AS $this->_var['brand_data']):
        $this->_foreach['brand_list_foreach']['iteration']++;
?>
		  <div class="goodsbox clearfix">
			<h4 class="clearfix tr"><span class="fl"><a href="<?php echo $this->_var['brand_data']['url']; ?>"><?php echo $this->_var['brand_data']['brand_name']; ?></a></span>(<?php echo $this->_var['brand_data']['goods_num']; ?>)</h4>
			<?php if ($this->_var['brand_data']['brand_logo']): ?>
       <div class="imgbox"><a href="<?php echo $this->_var['brand_data']['url']; ?>"><img src="data/brandlogo/<?php echo $this->_var['brand_data']['brand_logo']; ?>" alt="<?php echo htmlspecialchars($this->_var['brand_data']['brand_name']); ?> (<?php echo $this->_var['brand_data']['goods_num']; ?>)" /></a></div>
			<?php endif; ?>
			 <p title="<?php echo $this->_var['brand_data']['brand_desc']; ?>" class="word"><?php echo $this->_var['brand_data']['brand_desc']; ?></p> 
			</div>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
	</div>

</div>


<?php echo $this->fetch('library/help.lbi'); ?>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
