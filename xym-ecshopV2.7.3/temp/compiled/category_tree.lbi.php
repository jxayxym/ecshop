<h1 class="mod2tit" style="background:url(themes/black_watch/images/cateBg.gif); height:27px; line-height:27px;"><a href="catalog.php"><font  style="color:#FFF; font-size:14px;"><?php echo $this->_var['lang']['all_category']; ?></font></a></h1>
<div class="mod1 mod2 blank" id="historybox" style="background:#f2f2f2">
	<span class="lb"></span><span class="rb"></span>
<div class="cagegoryCon clearfix">
<?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
 <dl>
 <dt><a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a></dt>
 <?php if ($this->_var['cat']['cat_id']): ?>
 <dd class="clearfix">
 <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['childs'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['childs']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['childs']['iteration']++;
?>
     <p onMouseOver="this.className='itemsbg'" onMouseOut="this.className=''"><a href="<?php echo $this->_var['child']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['child']['name']); ?>" class="txtdot"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a></p>
 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
 </dd>
 <?php endif; ?>
 </dl>
 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
<div class="blank"></div>
</div>