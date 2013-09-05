<?php if ($this->_var['brand_list']): ?>

<h1 class="mod2tit" style=" position:relative;background:url(themes/black_watch/images/cateBg.gif); height:27px; color:#FFF">品牌专卖<a href="brand.php" class="more"><font style="color:#FFF">全部品牌</font></a></h1>

<div class="mod1 mod2 blank brandboxs1">
	<span class="lb"></span><span class="rb"></span>

    
	<div class="brandsL clearfix">
		 <?php $_from = $this->_var['brand_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand_0_92217400_1378380621');$this->_foreach['brand_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['brand_foreach']['total'] > 0):
    foreach ($_from AS $this->_var['brand_0_92217400_1378380621']):
        $this->_foreach['brand_foreach']['iteration']++;
?>
    <?php if (($this->_foreach['brand_foreach']['iteration'] - 1) <= 8): ?>
      <?php if ($this->_var['brand_0_92217400_1378380621']['brand_logo']): ?>
			<a href="<?php echo $this->_var['brand_0_92217400_1378380621']['url']; ?>"><img src="data/brandlogo/<?php echo $this->_var['brand_0_92217400_1378380621']['brand_logo']; ?>" alt="<?php echo htmlspecialchars($this->_var['brand_0_92217400_1378380621']['brand_name']); ?> (<?php echo $this->_var['brand_0_92217400_1378380621']['goods_num']; ?>)" /></a>
            
      <?php else: ?>
        <a href="<?php echo $this->_var['brand_0_92217400_1378380621']['url']; ?>" class="brandtxt"><?php echo htmlspecialchars($this->_var['brand_0_92217400_1378380621']['brand_name']); ?> <?php if ($this->_var['brand_0_92217400_1378380621']['goods_num']): ?>(<?php echo $this->_var['brand_0_92217400_1378380621']['goods_num']; ?>)<?php endif; ?></a>
      <?php endif; ?>
    <?php endif; ?>
   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		 
	</div>
    
    
</div>
<?php endif; ?>

<!--<div class="brandboxs blank">
	 
</div>
-->
