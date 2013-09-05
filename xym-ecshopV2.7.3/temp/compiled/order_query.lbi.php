<?php if (empty ( $this->_var['order_query'] )): ?>
<script>var invalid_order_sn = "<?php echo $this->_var['lang']['invalid_order_sn']; ?>"</script>
<div class="mod1 mod2 blank" id="orderQuery">
	<span class="lt"></span><span class="lb"></span><span class="rt"></span><span class="rb"></span>
	<h1 class="mod2tit"><?php echo $this->_var['lang']['order_query']; ?></h1>
		<div class="mod2con">
	 <form name="ecsOrderQuery">
    <input type="text" name="order_sn" class="InputBorder blank" size="25"  /><br />
    <input type="button" value="<?php echo $this->_var['lang']['query_order']; ?>" class="bnt_number6 blank" onclick="orderQuery();" />
  </form>
  <div id="ECS_ORDER_QUERY" style="margin-bottom:9px;">
      <?php else: ?>
      <?php if ($this->_var['order_query']['user_id']): ?>
			<b><?php echo $this->_var['lang']['order_number']; ?>：</b><a href="user.php?act=order_detail&order_id=<?php echo $this->_var['order_query']['order_id']; ?>"><?php echo $this->_var['order_query']['order_sn']; ?></a><br>
				<?php else: ?>
			<b><?php echo $this->_var['lang']['order_number']; ?>：</b><?php echo $this->_var['order_query']['order_sn']; ?><br>
				<?php endif; ?>
			<b><?php echo $this->_var['lang']['order_status']; ?>：</b><font class="f1"><?php echo $this->_var['order_query']['order_status']; ?></font><br>
				<?php if ($this->_var['order_query']['invoice_no']): ?>
			<b><?php echo $this->_var['lang']['consignment']; ?>：</b><?php echo $this->_var['order_query']['invoice_no']; ?><br>
				<?php endif; ?>
				<?php if ($this->_var['order_query']['shipping_date']): ?>
			<b><?php echo $this->_var['lang']['shipping_date']; ?>：</b> <?php echo $this->_var['order_query']['shipping_date']; ?><br>
				<?php endif; ?>
				
			 <?php endif; ?>
	  </div>
		
	</div>
</div>
