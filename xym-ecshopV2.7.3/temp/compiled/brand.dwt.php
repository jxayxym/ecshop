<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strice//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
	<div id="pageLeft" class="fl">
	
	  <?php echo $this->fetch('library/category_tree.lbi'); ?>
		<?php echo $this->fetch('library/promotion_info.lbi'); ?>
		<?php echo $this->fetch('library/top10.lbi'); ?>
		<?php echo $this->fetch('library/history.lbi'); ?>
	
	</div>
	<div id="pageRight" class="fr">
	
	<div class="mod1 blank" id="brandInfo">
	<span class="lt"></span><span class="lb"></span><span class="rt"></span><span class="rb"></span>
	<h1 class="mod1tit"><?php echo $this->_var['brand']['brand_name']; ?></h1>
		<div class="mod1con clearfix" id="brandInfo1">
				 <div class="fl brandsLogo">
          <?php if ($this->_var['brand']['brand_logo']): ?>
            <img src="data/brandlogo/<?php echo $this->_var['brand']['brand_logo']; ?>" />
          <?php endif; ?>
          </div>
         <div class="fl brand_desc">
          <?php echo nl2br($this->_var['brand']['brand_desc']); ?><br />
            <?php if ($this->_var['brand']['site_url']): ?>
            <?php echo $this->_var['lang']['official_site']; ?> <a href="<?php echo $this->_var['brand']['site_url']; ?>" target="_blank" ><?php echo $this->_var['brand']['site_url']; ?></a><br />
            <?php endif; ?>
            <?php echo $this->_var['lang']['brand_category']; ?><br />
              <?php $_from = $this->_var['brand_cat_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
            <a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['cat_name']); ?> <?php if ($this->_var['cat']['goods_count']): ?>(<?php echo $this->_var['cat']['goods_count']; ?>)<?php endif; ?></a>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </div> 
	  </div>
		<script type="text/javascript">divheight("brandInfo1");</script>
	</div>	
   <script type="text/javascript">divheight("brandInfo");</script>
		<?php echo $this->fetch('library/goods_list.lbi'); ?>
    <?php echo $this->fetch('library/pages.lbi'); ?>
	</div>

	
</div>


<?php echo $this->fetch('library/help.lbi'); ?>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
