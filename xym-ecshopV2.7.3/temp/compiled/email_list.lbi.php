<div class="mod1 mod2 blank email1">
	<span class="lt"></span><span class="lb"></span><span class="rt"></span><span class="rb"></span>

	<div class="mod2con" style=" background:url(themes/black_watch/images/emailbg2.jpg) no-repeat right center;" >
	<h1 style="line-height:35px; text-indent:3px; font-weight:normal">Email订阅最新特惠信息:</h1>
	<input type="text" id="user_email" class="InputBorder" style="margin-bottom:9px;" size="25"/><br />
  <input type="button" value="<?php echo $this->_var['lang']['email_list_ok']; ?>" class="bnt_number2" onclick="add_email_list();" />
  <input type="button"  value="<?php echo $this->_var['lang']['email_list_cancel']; ?>" class="bnt_number2" onclick="cancel_email_list();" />
	</div>
</div>
<script type="text/javascript">
var email = document.getElementById('user_email');
function add_email_list()
{
  if (check_email())
  {
    Ajax.call('user.php?act=email_list&job=add&email=' + email.value, '', rep_add_email_list, 'GET', 'TEXT');
  }
}
function rep_add_email_list(text)
{
  alert(text);
}
function cancel_email_list()
{
  if (check_email())
  {
    Ajax.call('user.php?act=email_list&job=del&email=' + email.value, '', rep_cancel_email_list, 'GET', 'TEXT');
  }
}
function rep_cancel_email_list(text)
{
  alert(text);
}
function check_email()
{
  if (Utils.isEmail(email.value))
  {
    return true;
  }
  else
  {
    alert('<?php echo $this->_var['lang']['email_invalid']; ?>');
    return false;
  }
}
</script>
