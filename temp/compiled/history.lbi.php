<div class="box_shadow" id='history_div'>
 <div class="box_padding">

<table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
<tr>
<td style="padding:2px;">
<table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
<tr>
<td width="40">
  <img width="40" src="themes/test1/images/history-icon.png">
</td>  
<td style="texy-align:left;"> 
  <span class="h3_title"><?php echo $this->_var['lang']['view_history']; ?></span>
</td>
</tr>
</table>
</td>
</tr> 
<tr height="1"><td><table border="0" cellpadding="0" cellspacing="0" style="border-top:1px solid #cecece;height:1px;width: 100%;"><tr><td></td></tr></table></td></tr> 

<tr height="10"><td></td></tr>
<tr>
<td>  
  <div class="boxCenterList clearfix" id='history_list'>
    <?php 
$k = array (
  'name' => 'history',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
  </div>
</td>
</tr>
</table>  
 </div>
</div>
<div class="blank5"></div>
<script type="text/javascript">
if (document.getElementById('history_list').innerHTML.replace(/\s/g,'').length<1)
{
    document.getElementById('history_div').style.display='none';
}
else
{
    document.getElementById('history_div').style.display='block';
}
function clear_history()
{
Ajax.call('user.php', 'act=clear_history',clear_history_Response, 'GET', 'TEXT',1,1);
}
function clear_history_Response(res)
{
document.getElementById('history_list').innerHTML = '<div style="padding:20px;"><?php echo $this->_var['lang']['no_history']; ?></div>';
}
</script>