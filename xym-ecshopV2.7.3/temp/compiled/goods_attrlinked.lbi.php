<?php $_from = $this->_var['attribute_linked']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'linked');$this->_foreach['links'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['links']['total'] > 0):
    foreach ($_from AS $this->_var['linked']):
        $this->_foreach['links']['iteration']++;
?>
<?php if ($this->_var['linked']['goods']): ?>
<div class="mod1 mod2 blank" id="attribute<?php echo $this->_foreach['links']['iteration']; ?>">
	<span class="lt"></span><span class="lb"></span><span class="rt"></span><span class="rb"></span>
	<h1 class="mod2tit"><?php echo sub_str($this->_var['linked']['title'],11); ?></h1>
	<div class="mod2con">
	<?php $_from = $this->_var['linked']['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'linked_goods_data');if (count($_from)):
    foreach ($_from AS $this->_var['linked_goods_data']):
?>
  <ul class="attribute">
      <li class="clearfix">
      <a href="<?php echo $this->_var['linked_goods_data']['url']; ?>" target="_blank" class="fl"><img src="<?php echo $this->_var['linked_goods_data']['goods_thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['linked_goods_data']['name']); ?>" align="left" /></a>
			<p class="fl" style="width:110px;"><a href="<?php echo $this->_var['linked_goods_data']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['goods']['linked_goods_data_name']); ?>" ><?php echo htmlspecialchars($this->_var['linked_goods_data']['short_name']); ?></a><br />
      <?php echo $this->_var['lang']['shop_price']; ?><b class="f1"><?php echo $this->_var['linked_goods_data']['shop_price']; ?></b></p>
      </li>
  </ul>
  
 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
 </div>
</div> 
<script type="text/javascript">divheight("attribute<?php echo $this->_foreach['links']['iteration']; ?>");</script>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>