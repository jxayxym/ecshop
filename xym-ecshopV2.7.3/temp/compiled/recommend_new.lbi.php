<?php if ($this->_var['new_goods']): ?>
<?php if ($this->_var['cat_rec_sign'] != 1): ?>
	 <div class="mod1 blank">
	  <span class="lt"></span><span class="lb"></span><span class="rt"></span><span class="rb"></span>
      
	  <h1 class="mod1tit">
		 <?php echo $this->_var['lang']['new_goods']; ?>
		 <div class="more clearfix best" id="itemNew">
		  <?php if ($this->_var['cat_rec'] [ 2 ]): ?>
      <h2><a href="javascript:void(0)" onclick="change_tab_style('itemNew', 'h2', this);get_cat_recommend(2, 0);"><?php echo $this->_var['lang']['all_goods']; ?></a> |</h2>
      <?php $_from = $this->_var['cat_rec']['2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'rec_data_0_30356500_1378369333');if (count($_from)):
    foreach ($_from AS $this->_var['rec_data_0_30356500_1378369333']):
?>
      <h2 class="h2bg">
			<a href="javascript:void(0)" onclick="change_tab_style('itemNew', 'h2', this);get_cat_recommend(2, <?php echo $this->_var['rec_data_0_30356500_1378369333']['cat_id']; ?>)"><?php echo $this->_var['rec_data_0_30356500_1378369333']['cat_name']; ?></a> |
			</h2>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php endif; ?>
		  <a href="search.php?intro=new">更多</a>
		 </div>
		</h1>

		<div class="recommendContent entry-content"  id="show_new_area" >
		<?php endif; ?>
		 <?php $_from = $this->_var['new_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_30367100_1378369333');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_30367100_1378369333']):
?>
			<div class="goodsbox">
				<div class="imgbox"><a href="<?php echo $this->_var['goods_0_30367100_1378369333']['url']; ?>"><img src="<?php echo $this->_var['goods_0_30367100_1378369333']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_30367100_1378369333']['name']); ?>" /></a></div>
			 <a href="<?php echo $this->_var['goods_0_30367100_1378369333']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_30367100_1378369333']['name']); ?>"><?php echo $this->_var['goods_0_30367100_1378369333']['short_style_name']; ?></a><br />
            <font class="goodspice market"><?php echo $this->_var['goods_0_30367100_1378369333']['market_price']; ?></font>
			 <?php if ($this->_var['goods_0_30367100_1378369333']['promote_price'] != ""): ?>
			 <b class="f1"><?php echo $this->_var['goods_0_30367100_1378369333']['promote_price']; ?></b><br />
			 <?php else: ?>
			 <b class="f1"><?php echo $this->_var['goods_0_30367100_1378369333']['shop_price']; ?></b><br />
			 <?php endif; ?>

			</div>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		<?php if ($this->_var['cat_rec_sign'] != 1): ?>
		</div>

   </div>
<?php endif; ?>
<?php endif; ?>