
<?php if ($this->_var['hot_goods']): ?>
<h1 class="mod1tit" style="border-bottom:2px solid #000;padding-left:0;height: 26px;line-height:26px;background:none;">
		 <img src="themes/black_watch/images/hot_03.jpg" alt="<?php echo $this->_var['lang']['hot_goods']; ?>" />
		 <div class="more clearfix best" id="itemBest">
		  <?php if ($this->_var['cat_rec'] [ 3 ]): ?>
      <h2><a href="javascript:void(0)" onclick="change_tab_style('itemBest', 'h2', this);get_cat_recommend(3, 0);"><?php echo $this->_var['lang']['all_goods']; ?></a> |</h2>
      <?php $_from = $this->_var['cat_rec']['3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'rec_data');if (count($_from)):
    foreach ($_from AS $this->_var['rec_data']):
?>
      <h2 class="h2bg">
			<a href="javascript:void(0)" onclick="change_tab_style('itemBest', 'h2', this);get_cat_recommend(3, <?php echo $this->_var['rec_data']['cat_id']; ?>)"><?php echo $this->_var['rec_data']['cat_name']; ?></a> |
			</h2>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php endif; ?>
		  <h2 class="fl"><a href="search.php?intro=hot">更多</a></h2>
		 </div>
		</h1>
<?php if ($this->_var['cat_rec_sign'] != 1): ?>
	 <div class="blank" >
		<div class="recommendContent entry-content"  id="show_hot_area" style="background:#fff;" >
		<?php endif; ?>
		 <?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
			<div class="goodsbox" >
				<div class="imgbox"><a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" /></a></div>
			 <a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['short_style_name']; ?></a><br />
              <font class="goodspice market"><?php echo $this->_var['goods']['market_price']; ?></font>
			 <?php if ($this->_var['goods']['promote_price'] != ""): ?>
			 <b class="f1"><?php echo $this->_var['goods']['promote_price']; ?></b><br />
			 <?php else: ?>
			 <b class="f1"><?php echo $this->_var['goods']['shop_price']; ?></b><br />
			 <?php endif; ?>

			</div>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		<?php if ($this->_var['cat_rec_sign'] != 1): ?>
		</div>

   </div>
<?php endif; ?>
<?php endif; ?>