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

<?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,common.js,utils.js')); ?>
<script type="text/javascript" src="themes/black_watch/js/action.js"></script>
<script language="javascript">
function remove(id, url)
{
  if (document.getCookie("compareItems") != null)
  {
    var obj = document.getCookie("compareItems").parseJSON();
    delete obj[id];
    var date = new Date();
    date.setTime(date.getTime() + 99999999);
    document.setCookie("compareItems", obj.toJSONString());
  }
}
</script>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<?php echo $this->fetch('library/ur_here.lbi'); ?>

<div class="block blank">
<div class="mod1" id="activity">
	<span class="lt"></span><span class="lb"></span><span class="rt"></span><span class="rb"></span>
	<h1 class="mod1tit"><?php echo $this->_var['lang']['favourable']; ?></h1>
	<div class="mod1con">
	<?php $_from = $this->_var['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
  <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#e2e2e2" class="blank">
    <tr>
      <th bgcolor="#ffffff"><?php echo $this->_var['lang']['label_act_name']; ?></th>
      <td colspan="3" bgcolor="#ffffff"><?php echo $this->_var['val']['act_name']; ?></td>
    </tr>
    <tr>
      <th bgcolor="#ffffff"><?php echo $this->_var['lang']['label_start_time']; ?></th>
      <td width="200" bgcolor="#ffffff"><?php echo $this->_var['val']['start_time']; ?></td>
      <th bgcolor="#ffffff"><?php echo $this->_var['lang']['label_max_amount']; ?></th>
      <td bgcolor="#ffffff">
        <?php if ($this->_var['val']['max_amount'] > 0): ?>
        <?php echo $this->_var['val']['max_amount']; ?>
        <?php else: ?>
        <?php echo $this->_var['lang']['nolimit']; ?>
        <?php endif; ?>
      </td>
    </tr>
    <tr>
      <th bgcolor="#ffffff"><?php echo $this->_var['lang']['label_end_time']; ?></th>
      <td bgcolor="#ffffff"><?php echo $this->_var['val']['end_time']; ?></td>
      <th bgcolor="#ffffff"><?php echo $this->_var['lang']['label_min_amount']; ?></th>
      <td width="200" bgcolor="#ffffff"><?php echo $this->_var['val']['min_amount']; ?></td>
    </tr>
    <tr>
      <th bgcolor="#ffffff"><?php echo $this->_var['lang']['label_act_range']; ?></th>
      <td bgcolor="#ffffff">
        <?php echo $this->_var['val']['act_range']; ?>：<br />
        <?php if ($this->_var['val']['act_range'] != $this->_var['lang']['far_all']): ?>
        
        <?php $_from = $this->_var['val']['act_range_ext']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ext');if (count($_from)):
    foreach ($_from AS $this->_var['ext']):
?>
        <a href="<?php echo $this->_var['val']['program']; ?><?php echo $this->_var['ext']['id']; ?>" taget="_blank"><u><?php echo $this->_var['ext']['name']; ?></u></a>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php endif; ?>
      </td>
      <th bgcolor="#ffffff"><?php echo $this->_var['lang']['label_user_rank']; ?></th>
      <td bgcolor="#ffffff">
        <?php $_from = $this->_var['val']['user_rank']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'user');if (count($_from)):
    foreach ($_from AS $this->_var['user']):
?>
        <?php echo $this->_var['user']; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </td>
    </tr>
    <tr>
      <th bgcolor="#ffffff"><?php echo $this->_var['lang']['label_act_type']; ?></th>
      <td colspan="3" bgcolor="#ffffff">
        <?php echo $this->_var['val']['act_type']; ?><?php if ($this->_var['val']['act_type'] != $this->_var['lang']['fat_goods']): ?><?php echo $this->_var['val']['act_type_ext']; ?><?php endif; ?>
      </td>
    </tr>
    <?php if ($this->_var['val']['gift']): ?>
    <tr>
      <td colspan="4" bgcolor="#ffffff">
      <?php $_from = $this->_var['val']['gift']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
      <table border="0" style="float:left;">
        <tr>
          <td align="center"><a href="goods.php?id=<?php echo $this->_var['goods']['id']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo $this->_var['goods']['name']; ?>" /></a></td>
        </tr>
        <tr>
          <td align="center"><a href="goods.php?id=<?php echo $this->_var['goods']['id']; ?>" class="f6"><?php echo $this->_var['goods']['name']; ?></a></td>
        </tr>
        <tr>
          <td align="center">
            <?php if ($this->_var['goods']['price'] > 0): ?>
            <?php echo $this->_var['goods']['price']; ?><?php echo $this->_var['lang']['unit_yuan']; ?>
            <?php else: ?>
            <?php echo $this->_var['lang']['for_free']; ?>
            <?php endif; ?>
          </td>
        </tr>
      </table>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </td>
    </tr>
    <?php endif; ?>
  </table>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
 </div>
</div>
<script type="text/javascript">divheight("activity");</script>
</div>

<?php echo $this->fetch('library/help.lbi'); ?>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
