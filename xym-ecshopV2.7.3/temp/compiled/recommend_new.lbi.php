<?php if ($this->_var['new_goods']): ?>
<?php if ($this->_var['cat_rec_sign'] != 1): ?>
	  <h1 class="mod1tit">
	  <img src="themes/black_watch/images/new_61.jpg" alt="<?php echo $this->_var['lang']['new_goods']; ?>" />
		</h1>
		<div class="fl" style="width:728px;height:216px;">
		<img src="themes/black_watch/images/BANNER1.jpg" alt="天梭" />
		</div>
		<div class="fr">
		<img src="themes/black_watch/images/pic1.jpg" alt="天梭" />
		</div>
	 <div class="mod1 blank" style="clear:right;">
		<div class="recommendContent entry-content"  id="show_new_area" >
		<?php endif; ?>
		 <?php $_from = $this->_var['new_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_78736500_1378388578');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_78736500_1378388578']):
?>
			<div class="goodsbox">
				<div class="imgbox"><a href="<?php echo $this->_var['goods_0_78736500_1378388578']['url']; ?>"><img src="<?php echo $this->_var['goods_0_78736500_1378388578']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_78736500_1378388578']['name']); ?>" /></a></div>
			 <a href="<?php echo $this->_var['goods_0_78736500_1378388578']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_78736500_1378388578']['name']); ?>"><?php echo $this->_var['goods_0_78736500_1378388578']['short_style_name']; ?></a><br />
            <font class="goodspice market"><?php echo $this->_var['goods_0_78736500_1378388578']['market_price']; ?></font>
			 <?php if ($this->_var['goods_0_78736500_1378388578']['promote_price'] != ""): ?>
			 <b class="f1"><?php echo $this->_var['goods_0_78736500_1378388578']['promote_price']; ?></b><br />
			 <?php else: ?>
			 <b class="f1"><?php echo $this->_var['goods_0_78736500_1378388578']['shop_price']; ?></b><br />
			 <?php endif; ?>

			</div>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		<?php if ($this->_var['cat_rec_sign'] != 1): ?>
		</div>

   </div>
<?php endif; ?>
<?php endif; ?>