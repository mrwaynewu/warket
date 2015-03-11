<?php echo $this->fetch('pageheader.htm'); ?>
<div class="tab-div">
  <!-- tab bar -->
  <?php echo $this->fetch('flashplay_tab.htm'); ?>
  <!-- body -->


<!--=========== Main Banner picture manager ============-->
<div class="tab-body" style="">
<table border="0" cellspacing="0" cellpadding="0" width="100%" style="border:1px solid #999; padding:0px;background-color:#fff;
-webkit-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);">
  <tr>
    <td style="padding:0px 10px;background-color:#4997ef;">
      <a href="." style="text-decoration:none;" onclick="if(document.getElementById('main_banner_table').style.display == 'none'){document.getElementById('main_banner_table').style.display = 'table';document.getElementById('main_banner_indication').innerHTML = '-';}else{document.getElementById('main_banner_table').style.display = 'none';document.getElementById('main_banner_indication').innerHTML = '+';}return false;">
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <tr>
            <td>


              <table>
                <tr>
                  <td style="">
                    <font style="font-size:1.2em;color:#fff;" id="main_banner_indication">-</font>
                  </td>
                  <td id="main_banner_td"><font style="font-size:1.2em;color:#fff;"> Main Banner</font></td>
                </tr>
              </table>
              
              
            </td>
          </tr>
      </table>
      </a>
    </td>
  </tr>
  <tr>
  <td id="main_banner_table" style="width:100%;">

        <table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;padding:10px;">
          <tr>
            <td>
          <div style="padding:0px 10px;">
          <div class="list-div list-div-ad" id="listDiv">
          <table cellspacing='1' cellpadding='3' id='list-table' style="width:100%;">
            <tr>
			<th width="50px">预览</th>
              <th width="400px"><?php echo $this->_var['lang']['schp_imgsrc']; ?></th>
            <th><?php echo $this->_var['lang']['schp_imgurl']; ?></th>
              <th><?php echo $this->_var['lang']['schp_imgdesc']; ?></th>
              <th><?php echo $this->_var['lang']['schp_sort']; ?></th>
              <th>价格</th>
            <th width="70px"><?php echo $this->_var['lang']['handler']; ?></th>
            </tr>
            <?php $_from = $this->_var['main_banner_db']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
            <tr>
              <td><img src="<?php echo $this->_var['item']['src']; ?>" style="width:50px;"></td>
              <td><a href="<?php echo $this->_var['item']['src']; ?>" target="_blank"><?php echo $this->_var['item']['src']; ?></a></td>
            <td align="left"><a href="<?php echo $this->_var['item']['url']; ?>" target="_blank"><?php echo $this->_var['item']['url']; ?></a></td>
              <td align="left"><?php echo $this->_var['item']['text']; ?></td>
              <td align="left"><?php echo $this->_var['item']['sort']; ?></td>
              <td align="left"><?php echo $this->_var['item']['price']; ?></td>
            <td align="center">
                <a href="flashplay.php?act=edit&id=<?php echo $this->_var['key']; ?>&type=main&position=main&banner_width=450&banner_height=250" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
                <a href="flashplay.php?act=del&id=<?php echo $this->_var['key']; ?>&type=main&position=main&banner_width=450&banner_height=250" onclick="return check_del();" title="<?php echo $this->_var['lang']['trash_img']; ?>"><img src="images/icon_drop.gif" width="16" height="16" border="0" /></a>
              </td>
            </tr>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </table>
          <table cellspacing="0">
            <tr>
              <td>
                <input name="add" type="submit" id="btnSubmit" value="<?php echo $this->_var['action_link_special']['text']; ?>" onclick="location.href='<?php echo $this->_var['action_link_special']['href']; ?>&type=main&position=main&banner_width=450&banner_height=250';" class="button"/>
              </td>
            </tr>
          </table>
          </div>
          </div>
        </td>
        </tr>
        </table>


</td>
</tr>
</table>
</div>

<!--=========== End of Main Banner picture manager ============-->


<!--=========== Vege Banner picture manager ============-->

<div class="tab-body" style="">
<table border="0" cellspacing="0" cellpadding="0" width="100%" style="border:1px solid #999; padding:0px;background-color:#fff;
-webkit-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);">
  <tr>
    <td style="padding:0px 10px;background-color:#4997ef;">
      <a href="." style="text-decoration:none;" onclick="if(document.getElementById('vege_banner_table').style.display == 'none'){document.getElementById('vege_banner_table').style.display = 'table';document.getElementById('vege_banner_indication').innerHTML = '-';}else{document.getElementById('vege_banner_table').style.display = 'none';document.getElementById('vege_banner_indication').innerHTML = '+';}return false;">
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <tr>
            <td>


              <table>
                <tr>
                  <td style="">
                    <font style="font-size:1.2em;color:#fff;" id="vege_banner_indication">-</font>
                  </td>
                  <td id="vege_banner_td"><font style="font-size:1.2em;color:#fff;"> Vege Banner</font></td>
                </tr>
              </table>
              
              
            </td>
          </tr>
      </table>
      </a>
    </td>
  </tr>
  <tr>
  <td id="vege_banner_table" style="width:100%;">
  
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
  
    <!--============================================================================================================== vege main banner ====================================-->
  	<tr>
		<td>
			<table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;padding:10px;">
			  <tr>
				<td>
				
				<table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;padding:10px;-webkit-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);">
			  <tr>
				<td>
				
			  <div style="padding:0px 10px;">
			  <font style="font-weight:bold;">Main banner</font>
			  <div class="list-div list-div-ad" id="listDiv">
			  <table cellspacing='1' cellpadding='3' id='list-table' style="width:100%;">
				<tr>
				<th width="50px">预览</th>
				  <th width="400px"><?php echo $this->_var['lang']['schp_imgsrc']; ?></th>
				<th><?php echo $this->_var['lang']['schp_imgurl']; ?></th>
				  <th><?php echo $this->_var['lang']['schp_imgdesc']; ?></th>
				  <th><?php echo $this->_var['lang']['schp_sort']; ?></th>
				  <th>价格</th>
				<th width="70px"><?php echo $this->_var['lang']['handler']; ?></th>
				</tr>
				<?php $_from = $this->_var['vege_banner_db']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
				<?php if ($this->_var['item']['position'] == "main"): ?>
				<tr>
				<td><img src="<?php echo $this->_var['item']['src']; ?>" style="width:50px;"></td>
				  <td><a href="<?php echo $this->_var['item']['src']; ?>" target="_blank"><?php echo $this->_var['item']['src']; ?></a></td>
				<td align="left"><a href="<?php echo $this->_var['item']['url']; ?>" target="_blank"><?php echo $this->_var['item']['url']; ?></a></td>
				  <td align="left"><?php echo $this->_var['item']['text']; ?></td>
				  <td align="left"><?php echo $this->_var['item']['sort']; ?></td>
				  <td align="left"><?php echo $this->_var['item']['price']; ?></td>				  
				<td align="center">
					<a href="flashplay.php?act=edit&id=<?php echo $this->_var['key']; ?>&type=vege&position=main&banner_width=105&banner_height=85" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
					<a href="flashplay.php?act=del&id=<?php echo $this->_var['key']; ?>&type=vege&position=main&banner_width=105&banner_height=85" onclick="return check_del();" title="<?php echo $this->_var['lang']['trash_img']; ?>"><img src="images/icon_drop.gif" width="16" height="16" border="0" /></a>
				  </td>
				</tr>
				<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			  </table>
			  <table cellspacing="0">
				<tr>
				  <td>
					<input name="add" type="submit" id="btnSubmit" value="<?php echo $this->_var['action_link_special']['text']; ?>" onclick="location.href='<?php echo $this->_var['action_link_special']['href']; ?>&type=vege&position=main&banner_width=105&banner_height=85';" class="button"/>				 
				 </td>
				</tr>
			  </table>
			  </div>
			  </div>
			  
			  </td>
			</tr>
			</table>
			  
			</td>
			</tr>
			</table>
		</td>
	</tr>
	<tr height="6">
		<td>
		</td>
	</tr>
  
  
  <!--=================================================================================================================== end of vege main banner ====================================-->
  
  
  
  
  
  <!--=============================================================================================================================== vege top banner ====================================-->
	<tr>
		<td>
			<table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;padding:10px;">
			  <tr>
				<td>
				
				<table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;padding:10px;-webkit-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);">
			  <tr>
				<td>
				
			  <div style="padding:0px 10px;">
			  <font style="font-weight:bold;">Top banner</font>
			  <div class="list-div list-div-ad" id="listDiv">
			  <table cellspacing='1' cellpadding='3' id='list-table' style="width:100%;">
				<tr>
				<th width="50px">预览</th>
				  <th width="400px"><?php echo $this->_var['lang']['schp_imgsrc']; ?></th>
				<th><?php echo $this->_var['lang']['schp_imgurl']; ?></th>
				  <th><?php echo $this->_var['lang']['schp_imgdesc']; ?></th>
				  <th><?php echo $this->_var['lang']['schp_sort']; ?></th>
				  <th>价格</th>
				<th width="70px"><?php echo $this->_var['lang']['handler']; ?></th>
				</tr>
				<?php $this->assign('vege_banner_top','0'); ?>
				<?php $_from = $this->_var['vege_banner_db']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
				<?php if ($this->_var['item']['position'] == "top"): ?>
				<?php $this->assign('vege_banner_top','1'); ?>
				<tr>
				<td><img src="<?php echo $this->_var['item']['src']; ?>" style="width:50px;"></td>
				  <td><a href="<?php echo $this->_var['item']['src']; ?>" target="_blank"><?php echo $this->_var['item']['src']; ?></a></td>
				<td align="left"><a href="<?php echo $this->_var['item']['url']; ?>" target="_blank"><?php echo $this->_var['item']['url']; ?></a></td>
				  <td align="left"><?php echo $this->_var['item']['text']; ?></td>
				  <td align="left"><?php echo $this->_var['item']['sort']; ?></td>
				  <td align="left"><?php echo $this->_var['item']['price']; ?></td>
				<td align="center">
					<a href="flashplay.php?act=edit&id=<?php echo $this->_var['key']; ?>&type=vege&position=top&banner_width=620&banner_height=39" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
					<a href="flashplay.php?act=del&id=<?php echo $this->_var['key']; ?>&type=vege&position=top&banner_width=620&banner_height=39" onclick="return check_del();" title="<?php echo $this->_var['lang']['trash_img']; ?>"><img src="images/icon_drop.gif" width="16" height="16" border="0" /></a>
				  </td>
				</tr>
				<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			  </table>
			  <?php if ($this->_var['vege_banner_top'] == "0"): ?>
			  <table cellspacing="0">
				<tr>
				  <td>
					<input name="add" type="submit" id="btnSubmit" value="<?php echo $this->_var['action_link_special']['text']; ?>" onclick="location.href='<?php echo $this->_var['action_link_special']['href']; ?>&type=vege&position=top&banner_width=620&banner_height=39';" class="button"/>				 
				 </td>
				</tr>
			  </table>
			  <?php endif; ?>
			  </div>
			  </div>
			  
			  </td>
			</tr>
			</table>
			  
			</td>
			</tr>
			</table>
		</td>
	</tr>
	<tr height="6">
		<td>
		</td>
	</tr>
	
  <!--===================================================================================================================== end of vege top banner ====================================-->
	
  <!--=========================================================================================================================== vege bottom banner ====================================-->
	
	<tr>
		<td>
			<table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;padding:10px;">
			  <tr>
				<td>
				
				<table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;padding:10px;-webkit-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);">
			  <tr>
				<td>
				
			  <div style="padding:0px 10px;">
			  <font style="font-weight:bold;">Bottom banner</font>
			  <div class="list-div list-div-ad" id="listDiv">
			  <table cellspacing='1' cellpadding='3' id='list-table' style="width:100%;">
				<tr>
				<th width="50px">预览</th>
				  <th width="400px"><?php echo $this->_var['lang']['schp_imgsrc']; ?></th>
				<th><?php echo $this->_var['lang']['schp_imgurl']; ?></th>
				  <th><?php echo $this->_var['lang']['schp_imgdesc']; ?></th>
				  <th><?php echo $this->_var['lang']['schp_sort']; ?></th>
				  <th>价格</th>
				<th width="70px"><?php echo $this->_var['lang']['handler']; ?></th>
				</tr>
				<?php $this->assign('vege_banner_bottom','0'); ?>
				<?php $_from = $this->_var['vege_banner_db']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
				<?php if ($this->_var['item']['position'] == "bottom"): ?>
				<?php $this->assign('vege_banner_bottom','1'); ?>
				<tr>
				<td><img src="<?php echo $this->_var['item']['src']; ?>" style="width:50px;"></td>
				  <td><a href="<?php echo $this->_var['item']['src']; ?>" target="_blank"><?php echo $this->_var['item']['src']; ?></a></td>
				<td align="left"><a href="<?php echo $this->_var['item']['url']; ?>" target="_blank"><?php echo $this->_var['item']['url']; ?></a></td>
				  <td align="left"><?php echo $this->_var['item']['text']; ?></td>
				  <td align="left"><?php echo $this->_var['item']['sort']; ?></td>
				  <td align="left"><?php echo $this->_var['item']['price']; ?></td>
				<td align="center">
					<a href="flashplay.php?act=edit&id=<?php echo $this->_var['key']; ?>&type=vege&position=bottom&banner_width=1000&banner_height=50" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
					<a href="flashplay.php?act=del&id=<?php echo $this->_var['key']; ?>&type=vege&position=bottom&banner_width=1000&banner_height=50" onclick="return check_del();" title="<?php echo $this->_var['lang']['trash_img']; ?>"><img src="images/icon_drop.gif" width="16" height="16" border="0" /></a>
				  </td>
				</tr>
				<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			  </table>
			  <?php if ($this->_var['vege_banner_bottom'] == "0"): ?>
			  <table cellspacing="0">
				<tr>
				  <td>
					<input name="add" type="submit" id="btnSubmit" value="<?php echo $this->_var['action_link_special']['text']; ?>" onclick="location.href='<?php echo $this->_var['action_link_special']['href']; ?>&type=vege&position=bottom&banner_width=1000&banner_height=50';" class="button"/>				 
				 </td>
				</tr>
			  </table>
			  <?php endif; ?>
			  </div>
			  </div>
			  
			  </td>
			</tr>
			</table>
			  
			</td>
			</tr>
			</table>
		</td>
	</tr>
	<tr height="6">
		<td>
		</td>
	</tr>
	
	<!--========================================================================================================================= end of vege bottom banner ====================================-->
	
	
	<!--================================================================================================================================== vege left banner ====================================-->
	
	<tr>
		<td>
			<table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;padding:10px;">
			  <tr>
				<td>
				
				<table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;padding:10px;-webkit-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);">
			  <tr>
				<td>
				
			  <div style="padding:0px 10px;">
			  <font style="font-weight:bold;">Left banner</font>
			  <div class="list-div list-div-ad" id="listDiv">
			  <table cellspacing='1' cellpadding='3' id='list-table' style="width:100%;">
				<tr>
				<th width="50px">预览</th>
				  <th width="400px"><?php echo $this->_var['lang']['schp_imgsrc']; ?></th>
				<th><?php echo $this->_var['lang']['schp_imgurl']; ?></th>
				  <th><?php echo $this->_var['lang']['schp_imgdesc']; ?></th>
				  <th><?php echo $this->_var['lang']['schp_sort']; ?></th>
				  <th>价格</th>
				<th width="70px"><?php echo $this->_var['lang']['handler']; ?></th>
				</tr>
				<?php $this->assign('vege_banner_left','0'); ?>
				<?php $_from = $this->_var['vege_banner_db']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
				<?php if ($this->_var['item']['position'] == "left"): ?>
				<?php $this->assign('vege_banner_left','1'); ?>
				<tr>
				<td><img src="<?php echo $this->_var['item']['src']; ?>" style="width:50px;"></td>
				  <td><a href="<?php echo $this->_var['item']['src']; ?>" target="_blank"><?php echo $this->_var['item']['src']; ?></a></td>
				<td align="left"><a href="<?php echo $this->_var['item']['url']; ?>" target="_blank"><?php echo $this->_var['item']['url']; ?></a></td>
				  <td align="left"><?php echo $this->_var['item']['text']; ?></td>
				  <td align="left"><?php echo $this->_var['item']['sort']; ?></td>
				  <td align="left"><?php echo $this->_var['item']['price']; ?></td>
				<td align="center">
					<a href="flashplay.php?act=edit&id=<?php echo $this->_var['key']; ?>&type=vege&position=left&banner_width=192&banner_height=310" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
					<a href="flashplay.php?act=del&id=<?php echo $this->_var['key']; ?>&type=vege&position=left&banner_width=192&banner_height=310" onclick="return check_del();" title="<?php echo $this->_var['lang']['trash_img']; ?>"><img src="images/icon_drop.gif" width="16" height="16" border="0" /></a>
				  </td>
				</tr>
				<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			  </table>
			  <?php if ($this->_var['vege_banner_left'] == "0"): ?>
			  <table cellspacing="0">
				<tr>
				  <td>
					<input name="add" type="submit" id="btnSubmit" value="<?php echo $this->_var['action_link_special']['text']; ?>" onclick="location.href='<?php echo $this->_var['action_link_special']['href']; ?>&type=vege&position=left&banner_width=192&banner_height=310';" class="button"/>				 
				 </td>
				</tr>
			  </table>
			  <?php endif; ?>
			  </div>
			  </div>
			  
			  </td>
			</tr>
			</table>
			  
			</td>
			</tr>
			</table>
		</td>
	</tr>
	<tr height="6">
		<td>
		</td>
	</tr>
	
	
	<!--=========================================================================================================================== end of vege left banner ====================================-->
	
	<!--================================================================================================================================= vege right banner ====================================-->
	
	<tr>
		<td>
			<table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;padding:10px;">
			  <tr>
				<td>
				
				<table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;padding:10px;-webkit-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);">
			  <tr>
				<td>
				
			  <div style="padding:0px 10px;">
			  <font style="font-weight:bold;">Right banner</font>
			  <div class="list-div list-div-ad" id="listDiv">
			  <table cellspacing='1' cellpadding='3' id='list-table' style="width:100%;">
				<tr>
				<th width="50px">预览</th>
				  <th width="400px"><?php echo $this->_var['lang']['schp_imgsrc']; ?></th>
				<th><?php echo $this->_var['lang']['schp_imgurl']; ?></th>
				  <th><?php echo $this->_var['lang']['schp_imgdesc']; ?></th>
				  <th><?php echo $this->_var['lang']['schp_sort']; ?></th>
				  <th>价格</th>
				<th width="70px"><?php echo $this->_var['lang']['handler']; ?></th>
				</tr>
				<?php $this->assign('vege_banner_right','0'); ?>
				<?php $_from = $this->_var['vege_banner_db']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
				<?php if ($this->_var['item']['position'] == "right"): ?>
				<?php $this->assign('vege_banner_right','1'); ?>
				<tr>
				<td><img src="<?php echo $this->_var['item']['src']; ?>" style="width:50px;"></td>
				  <td><a href="<?php echo $this->_var['item']['src']; ?>" target="_blank"><?php echo $this->_var['item']['src']; ?></a></td>
				<td align="left"><a href="<?php echo $this->_var['item']['url']; ?>" target="_blank"><?php echo $this->_var['item']['url']; ?></a></td>
				  <td align="left"><?php echo $this->_var['item']['text']; ?></td>
				  <td align="left"><?php echo $this->_var['item']['sort']; ?></td>
				  <td align="left"><?php echo $this->_var['item']['price']; ?></td>
				<td align="center">
					<a href="flashplay.php?act=edit&id=<?php echo $this->_var['key']; ?>&type=vege&position=right&banner_width=192&banner_height=310" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
					<a href="flashplay.php?act=del&id=<?php echo $this->_var['key']; ?>&type=vege&position=right&banner_width=192&banner_height=310" onclick="return check_del();" title="<?php echo $this->_var['lang']['trash_img']; ?>"><img src="images/icon_drop.gif" width="16" height="16" border="0" /></a>
				  </td>
				</tr>
				<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			  </table>
			  <?php if ($this->_var['vege_banner_right'] == "0"): ?>
			  <table cellspacing="0">
				<tr>
				  <td>
					<input name="add" type="submit" id="btnSubmit" value="<?php echo $this->_var['action_link_special']['text']; ?>" onclick="location.href='<?php echo $this->_var['action_link_special']['href']; ?>&type=vege&position=right&banner_width=192&banner_height=310';" class="button"/>				 
				 </td>
				</tr>
			  </table>
			  <?php endif; ?>
			  </div>
			  </div>
			  
			  </td>
			</tr>
			</table>
			  
			</td>
			</tr>
			</table>
		</td>
	</tr>
	<tr height="6">
		<td>
		</td>
	</tr>
	
	<!--============================================================================================================================= end of vege right banner ====================================-->
	
</table>
		
		
		
		
		

</td>
</tr>
</table>
</div>

<!--=========== End of vege Banner picture manager ============-->






























<!--=========== fruit Banner picture manager ============-->

<div class="tab-body" style="">
<table border="0" cellspacing="0" cellpadding="0" width="100%" style="border:1px solid #999; padding:0px;background-color:#fff;
-webkit-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);">
  <tr>
    <td style="padding:0px 10px;background-color:#4997ef;">
      <a href="." style="text-decoration:none;" onclick="if(document.getElementById('fruit_banner_table').style.display == 'none'){document.getElementById('fruit_banner_table').style.display = 'table';document.getElementById('fruit_banner_indication').innerHTML = '-';}else{document.getElementById('fruit_banner_table').style.display = 'none';document.getElementById('fruit_banner_indication').innerHTML = '+';}return false;">
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <tr>
            <td>


              <table>
                <tr>
                  <td style="">
                    <font style="font-size:1.2em;color:#fff;" id="fruit_banner_indication">-</font>
                  </td>
                  <td id="fruit_banner_td"><font style="font-size:1.2em;color:#fff;"> Fruit Banner</font></td>
                </tr>
              </table>
              
              
            </td>
          </tr>
      </table>
      </a>
    </td>
  </tr>
  <tr>
  <td id="fruit_banner_table" style="width:100%;">
  
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
  
    <!--============================================================================================================== fruit main banner ====================================-->
  	<tr>
		<td>
			<table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;padding:10px;">
			  <tr>
				<td>
				
				<table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;padding:10px;-webkit-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);">
			  <tr>
				<td>
				
			  <div style="padding:0px 10px;">
			  <font style="font-weight:bold;">Main banner</font>
			  <div class="list-div list-div-ad" id="listDiv">
			  <table cellspacing='1' cellpadding='3' id='list-table' style="width:100%;">
				<tr>
				<th width="50px">预览</th>
				  <th width="400px"><?php echo $this->_var['lang']['schp_imgsrc']; ?></th>
				<th><?php echo $this->_var['lang']['schp_imgurl']; ?></th>
				  <th><?php echo $this->_var['lang']['schp_imgdesc']; ?></th>
				  <th><?php echo $this->_var['lang']['schp_sort']; ?></th>
				  <th>价格</th>
				<th width="70px"><?php echo $this->_var['lang']['handler']; ?></th>
				</tr>
				<?php $_from = $this->_var['fruit_banner_db']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
				<?php if ($this->_var['item']['position'] == "main"): ?>
				<tr>
				<td><img src="<?php echo $this->_var['item']['src']; ?>" style="width:50px;"></td>
				  <td><a href="<?php echo $this->_var['item']['src']; ?>" target="_blank"><?php echo $this->_var['item']['src']; ?></a></td>
				<td align="left"><a href="<?php echo $this->_var['item']['url']; ?>" target="_blank"><?php echo $this->_var['item']['url']; ?></a></td>
				  <td align="left"><?php echo $this->_var['item']['text']; ?></td>
				  <td align="left"><?php echo $this->_var['item']['sort']; ?></td>
				  <td align="left"><?php echo $this->_var['item']['price']; ?></td>				  
				<td align="center">
					<a href="flashplay.php?act=edit&id=<?php echo $this->_var['key']; ?>&type=fruit&position=main&banner_width=105&banner_height=85" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
					<a href="flashplay.php?act=del&id=<?php echo $this->_var['key']; ?>&type=fruit&position=main&banner_width=105&banner_height=85" onclick="return check_del();" title="<?php echo $this->_var['lang']['trash_img']; ?>"><img src="images/icon_drop.gif" width="16" height="16" border="0" /></a>
				  </td>
				</tr>
				<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			  </table>
			  <table cellspacing="0">
				<tr>
				  <td>
					<input name="add" type="submit" id="btnSubmit" value="<?php echo $this->_var['action_link_special']['text']; ?>" onclick="location.href='<?php echo $this->_var['action_link_special']['href']; ?>&type=fruit&position=main&banner_width=105&banner_height=85';" class="button"/>				 
				 </td>
				</tr>
			  </table>
			  </div>
			  </div>
			  
			  </td>
			</tr>
			</table>
			  
			</td>
			</tr>
			</table>
		</td>
	</tr>
	<tr height="6">
		<td>
		</td>
	</tr>
  
  
  <!--=================================================================================================================== end of fruit main banner ====================================-->
  
  
  
  
  
  <!--=============================================================================================================================== fruit top banner ====================================-->
	<tr>
		<td>
			<table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;padding:10px;">
			  <tr>
				<td>
				
				<table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;padding:10px;-webkit-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);">
			  <tr>
				<td>
				
			  <div style="padding:0px 10px;">
			  <font style="font-weight:bold;">Top banner</font>
			  <div class="list-div list-div-ad" id="listDiv">
			  <table cellspacing='1' cellpadding='3' id='list-table' style="width:100%;">
				<tr>
				<th width="50px">预览</th>
				  <th width="400px"><?php echo $this->_var['lang']['schp_imgsrc']; ?></th>
				<th><?php echo $this->_var['lang']['schp_imgurl']; ?></th>
				  <th><?php echo $this->_var['lang']['schp_imgdesc']; ?></th>
				  <th><?php echo $this->_var['lang']['schp_sort']; ?></th>
				  <th>价格</th>
				<th width="70px"><?php echo $this->_var['lang']['handler']; ?></th>
				</tr>
				<?php $this->assign('fruit_banner_top','0'); ?>
				<?php $_from = $this->_var['fruit_banner_db']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
				<?php if ($this->_var['item']['position'] == "top"): ?>
				<?php $this->assign('fruit_banner_top','1'); ?>
				<tr>
				<td><img src="<?php echo $this->_var['item']['src']; ?>" style="width:50px;"></td>
				  <td><a href="<?php echo $this->_var['item']['src']; ?>" target="_blank"><?php echo $this->_var['item']['src']; ?></a></td>
				<td align="left"><a href="<?php echo $this->_var['item']['url']; ?>" target="_blank"><?php echo $this->_var['item']['url']; ?></a></td>
				  <td align="left"><?php echo $this->_var['item']['text']; ?></td>
				  <td align="left"><?php echo $this->_var['item']['sort']; ?></td>
				  <td align="left"><?php echo $this->_var['item']['price']; ?></td>
				<td align="center">
					<a href="flashplay.php?act=edit&id=<?php echo $this->_var['key']; ?>&type=fruit&position=top&banner_width=620&banner_height=39" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
					<a href="flashplay.php?act=del&id=<?php echo $this->_var['key']; ?>&type=fruit&position=top&banner_width=620&banner_height=39" onclick="return check_del();" title="<?php echo $this->_var['lang']['trash_img']; ?>"><img src="images/icon_drop.gif" width="16" height="16" border="0" /></a>
				  </td>
				</tr>
				<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			  </table>
			  <?php if ($this->_var['fruit_banner_top'] == "0"): ?>
			  <table cellspacing="0">
				<tr>
				  <td>
					<input name="add" type="submit" id="btnSubmit" value="<?php echo $this->_var['action_link_special']['text']; ?>" onclick="location.href='<?php echo $this->_var['action_link_special']['href']; ?>&type=fruit&position=top&banner_width=620&banner_height=39';" class="button"/>				 
				 </td>
				</tr>
			  </table>
			  <?php endif; ?>
			  </div>
			  </div>
			  
			  </td>
			</tr>
			</table>
			  
			</td>
			</tr>
			</table>
		</td>
	</tr>
	<tr height="6">
		<td>
		</td>
	</tr>
	
  <!--===================================================================================================================== end of fruit top banner ====================================-->
	
  <!--=========================================================================================================================== fruit bottom banner ====================================-->
	
	<tr>
		<td>
			<table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;padding:10px;">
			  <tr>
				<td>
				
				<table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;padding:10px;-webkit-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);">
			  <tr>
				<td>
				
			  <div style="padding:0px 10px;">
			  <font style="font-weight:bold;">Bottom banner</font>
			  <div class="list-div list-div-ad" id="listDiv">
			  <table cellspacing='1' cellpadding='3' id='list-table' style="width:100%;">
				<tr>
				<th width="50px">预览</th>
				  <th width="400px"><?php echo $this->_var['lang']['schp_imgsrc']; ?></th>
				<th><?php echo $this->_var['lang']['schp_imgurl']; ?></th>
				  <th><?php echo $this->_var['lang']['schp_imgdesc']; ?></th>
				  <th><?php echo $this->_var['lang']['schp_sort']; ?></th>
				  <th>价格</th>
				<th width="70px"><?php echo $this->_var['lang']['handler']; ?></th>
				</tr>
				<?php $this->assign('fruit_banner_bottom','0'); ?>
				<?php $_from = $this->_var['fruit_banner_db']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
				<?php if ($this->_var['item']['position'] == "bottom"): ?>
				<?php $this->assign('fruit_banner_bottom','1'); ?>
				<tr>
				<td><img src="<?php echo $this->_var['item']['src']; ?>" style="width:50px;"></td>
				  <td><a href="<?php echo $this->_var['item']['src']; ?>" target="_blank"><?php echo $this->_var['item']['src']; ?></a></td>
				<td align="left"><a href="<?php echo $this->_var['item']['url']; ?>" target="_blank"><?php echo $this->_var['item']['url']; ?></a></td>
				  <td align="left"><?php echo $this->_var['item']['text']; ?></td>
				  <td align="left"><?php echo $this->_var['item']['sort']; ?></td>
				  <td align="left"><?php echo $this->_var['item']['price']; ?></td>
				<td align="center">
					<a href="flashplay.php?act=edit&id=<?php echo $this->_var['key']; ?>&type=fruit&position=bottom&banner_width=1000&banner_height=50" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
					<a href="flashplay.php?act=del&id=<?php echo $this->_var['key']; ?>&type=fruit&position=bottom&banner_width=1000&banner_height=50" onclick="return check_del();" title="<?php echo $this->_var['lang']['trash_img']; ?>"><img src="images/icon_drop.gif" width="16" height="16" border="0" /></a>
				  </td>
				</tr>
				<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			  </table>
			  <?php if ($this->_var['fruit_banner_bottom'] == "0"): ?>
			  <table cellspacing="0">
				<tr>
				  <td>
					<input name="add" type="submit" id="btnSubmit" value="<?php echo $this->_var['action_link_special']['text']; ?>" onclick="location.href='<?php echo $this->_var['action_link_special']['href']; ?>&type=fruit&position=bottom&banner_width=1000&banner_height=50';" class="button"/>				 
				 </td>
				</tr>
			  </table>
			  <?php endif; ?>
			  </div>
			  </div>
			  
			  </td>
			</tr>
			</table>
			  
			</td>
			</tr>
			</table>
		</td>
	</tr>
	<tr height="6">
		<td>
		</td>
	</tr>
	
	<!--========================================================================================================================= end of fruit bottom banner ====================================-->
	
	
	<!--================================================================================================================================== fruit left banner ====================================-->
	
	<tr>
		<td>
			<table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;padding:10px;">
			  <tr>
				<td>
				
				<table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;padding:10px;-webkit-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);">
			  <tr>
				<td>
				
			  <div style="padding:0px 10px;">
			  <font style="font-weight:bold;">Left banner</font>
			  <div class="list-div list-div-ad" id="listDiv">
			  <table cellspacing='1' cellpadding='3' id='list-table' style="width:100%;">
				<tr>
				<th width="50px">预览</th>
				  <th width="400px"><?php echo $this->_var['lang']['schp_imgsrc']; ?></th>
				<th><?php echo $this->_var['lang']['schp_imgurl']; ?></th>
				  <th><?php echo $this->_var['lang']['schp_imgdesc']; ?></th>
				  <th><?php echo $this->_var['lang']['schp_sort']; ?></th>
				  <th>价格</th>
				<th width="70px"><?php echo $this->_var['lang']['handler']; ?></th>
				</tr>
				<?php $this->assign('fruit_banner_left','0'); ?>
				<?php $_from = $this->_var['fruit_banner_db']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
				<?php if ($this->_var['item']['position'] == "left"): ?>
				<?php $this->assign('fruit_banner_left','1'); ?>
				<tr>
				<td><img src="<?php echo $this->_var['item']['src']; ?>" style="width:50px;"></td>
				  <td><a href="<?php echo $this->_var['item']['src']; ?>" target="_blank"><?php echo $this->_var['item']['src']; ?></a></td>
				<td align="left"><a href="<?php echo $this->_var['item']['url']; ?>" target="_blank"><?php echo $this->_var['item']['url']; ?></a></td>
				  <td align="left"><?php echo $this->_var['item']['text']; ?></td>
				  <td align="left"><?php echo $this->_var['item']['sort']; ?></td>
				  <td align="left"><?php echo $this->_var['item']['price']; ?></td>
				<td align="center">
					<a href="flashplay.php?act=edit&id=<?php echo $this->_var['key']; ?>&type=fruit&position=left&banner_width=192&banner_height=310" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
					<a href="flashplay.php?act=del&id=<?php echo $this->_var['key']; ?>&type=fruit&position=left&banner_width=192&banner_height=310" onclick="return check_del();" title="<?php echo $this->_var['lang']['trash_img']; ?>"><img src="images/icon_drop.gif" width="16" height="16" border="0" /></a>
				  </td>
				</tr>
				<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			  </table>
			  <?php if ($this->_var['fruit_banner_left'] == "0"): ?>
			  <table cellspacing="0">
				<tr>
				  <td>
					<input name="add" type="submit" id="btnSubmit" value="<?php echo $this->_var['action_link_special']['text']; ?>" onclick="location.href='<?php echo $this->_var['action_link_special']['href']; ?>&type=fruit&position=left&banner_width=192&banner_height=310';" class="button"/>				 
				 </td>
				</tr>
			  </table>
			  <?php endif; ?>
			  </div>
			  </div>
			  
			  </td>
			</tr>
			</table>
			  
			</td>
			</tr>
			</table>
		</td>
	</tr>
	<tr height="6">
		<td>
		</td>
	</tr>
	
	
	<!--=========================================================================================================================== end of fruit left banner ====================================-->
	
	<!--================================================================================================================================= fruit right banner ====================================-->
	
	<tr>
		<td>
			<table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;padding:10px;">
			  <tr>
				<td>
				
				<table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;padding:10px;-webkit-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);">
			  <tr>
				<td>
				
			  <div style="padding:0px 10px;">
			  <font style="font-weight:bold;">Right banner</font>
			  <div class="list-div list-div-ad" id="listDiv">
			  <table cellspacing='1' cellpadding='3' id='list-table' style="width:100%;">
				<tr>
				<th width="50px">预览</th>
				  <th width="400px"><?php echo $this->_var['lang']['schp_imgsrc']; ?></th>
				<th><?php echo $this->_var['lang']['schp_imgurl']; ?></th>
				  <th><?php echo $this->_var['lang']['schp_imgdesc']; ?></th>
				  <th><?php echo $this->_var['lang']['schp_sort']; ?></th>
				  <th>价格</th>
				<th width="70px"><?php echo $this->_var['lang']['handler']; ?></th>
				</tr>
				<?php $this->assign('fruit_banner_right','0'); ?>
				<?php $_from = $this->_var['fruit_banner_db']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
				<?php if ($this->_var['item']['position'] == "right"): ?>
				<?php $this->assign('fruit_banner_right','1'); ?>
				<tr>
				<td><img src="<?php echo $this->_var['item']['src']; ?>" style="width:50px;"></td>
				  <td><a href="<?php echo $this->_var['item']['src']; ?>" target="_blank"><?php echo $this->_var['item']['src']; ?></a></td>
				<td align="left"><a href="<?php echo $this->_var['item']['url']; ?>" target="_blank"><?php echo $this->_var['item']['url']; ?></a></td>
				  <td align="left"><?php echo $this->_var['item']['text']; ?></td>
				  <td align="left"><?php echo $this->_var['item']['sort']; ?></td>
				  <td align="left"><?php echo $this->_var['item']['price']; ?></td>
				<td align="center">
					<a href="flashplay.php?act=edit&id=<?php echo $this->_var['key']; ?>&type=fruit&position=right&banner_width=192&banner_height=310" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
					<a href="flashplay.php?act=del&id=<?php echo $this->_var['key']; ?>&type=fruit&position=right&banner_width=192&banner_height=310" onclick="return check_del();" title="<?php echo $this->_var['lang']['trash_img']; ?>"><img src="images/icon_drop.gif" width="16" height="16" border="0" /></a>
				  </td>
				</tr>
				<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			  </table>
			  <?php if ($this->_var['fruit_banner_right'] == "0"): ?>
			  <table cellspacing="0">
				<tr>
				  <td>
					<input name="add" type="submit" id="btnSubmit" value="<?php echo $this->_var['action_link_special']['text']; ?>" onclick="location.href='<?php echo $this->_var['action_link_special']['href']; ?>&type=fruit&position=right&banner_width=192&banner_height=310';" class="button"/>				 
				 </td>
				</tr>
			  </table>
			  <?php endif; ?>
			  </div>
			  </div>
			  
			  </td>
			</tr>
			</table>
			  
			</td>
			</tr>
			</table>
		</td>
	</tr>
	<tr height="6">
		<td>
		</td>
	</tr>
	
	<!--============================================================================================================================= end of fruit right banner ====================================-->
	
</table>
		

</td>
</tr>
</table>
</div>

<!--=========== End of fruit Banner picture manager ============-->












































<!--=========== meat Banner picture manager ============-->

<div class="tab-body" style="">
<table border="0" cellspacing="0" cellpadding="0" width="100%" style="border:1px solid #999; padding:0px;background-color:#fff;
-webkit-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);">
  <tr>
    <td style="padding:0px 10px;background-color:#4997ef;">
      <a href="." style="text-decoration:none;" onclick="if(document.getElementById('meat_banner_table').style.display == 'none'){document.getElementById('meat_banner_table').style.display = 'table';document.getElementById('meat_banner_indication').innerHTML = '-';}else{document.getElementById('meat_banner_table').style.display = 'none';document.getElementById('meat_banner_indication').innerHTML = '+';}return false;">
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <tr>
            <td>


              <table>
                <tr>
                  <td style="">
                    <font style="font-size:1.2em;color:#fff;" id="meat_banner_indication">-</font>
                  </td>
                  <td id="meat_banner_td"><font style="font-size:1.2em;color:#fff;"> Meat Banner</font></td>
                </tr>
              </table>
              
              
            </td>
          </tr>
      </table>
      </a>
    </td>
  </tr>
  <tr>
  <td id="meat_banner_table" style="width:100%;">
  
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
  
    <!--============================================================================================================== meat main banner ====================================-->
  	<tr>
		<td>
			<table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;padding:10px;">
			  <tr>
				<td>
				
				<table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;padding:10px;-webkit-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);">
			  <tr>
				<td>
				
			  <div style="padding:0px 10px;">
			  <font style="font-weight:bold;">Main banner</font>
			  <div class="list-div list-div-ad" id="listDiv">
			  <table cellspacing='1' cellpadding='3' id='list-table' style="width:100%;">
				<tr>
				<th width="50px">预览</th>
				  <th width="400px"><?php echo $this->_var['lang']['schp_imgsrc']; ?></th>
				<th><?php echo $this->_var['lang']['schp_imgurl']; ?></th>
				  <th><?php echo $this->_var['lang']['schp_imgdesc']; ?></th>
				  <th><?php echo $this->_var['lang']['schp_sort']; ?></th>
				  <th>价格</th>
				<th width="70px"><?php echo $this->_var['lang']['handler']; ?></th>
				</tr>
				<?php $_from = $this->_var['meat_banner_db']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
				<?php if ($this->_var['item']['position'] == "main"): ?>
				<tr>
				<td><img src="<?php echo $this->_var['item']['src']; ?>" style="width:50px;"></td>
				  <td><a href="<?php echo $this->_var['item']['src']; ?>" target="_blank"><?php echo $this->_var['item']['src']; ?></a></td>
				<td align="left"><a href="<?php echo $this->_var['item']['url']; ?>" target="_blank"><?php echo $this->_var['item']['url']; ?></a></td>
				  <td align="left"><?php echo $this->_var['item']['text']; ?></td>
				  <td align="left"><?php echo $this->_var['item']['sort']; ?></td>
				  <td align="left"><?php echo $this->_var['item']['price']; ?></td>				  
				<td align="center">
					<a href="flashplay.php?act=edit&id=<?php echo $this->_var['key']; ?>&type=meat&position=main&banner_width=105&banner_height=85" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
					<a href="flashplay.php?act=del&id=<?php echo $this->_var['key']; ?>&type=meat&position=main&banner_width=105&banner_height=85" onclick="return check_del();" title="<?php echo $this->_var['lang']['trash_img']; ?>"><img src="images/icon_drop.gif" width="16" height="16" border="0" /></a>
				  </td>
				</tr>
				<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			  </table>
			  <table cellspacing="0">
				<tr>
				  <td>
					<input name="add" type="submit" id="btnSubmit" value="<?php echo $this->_var['action_link_special']['text']; ?>" onclick="location.href='<?php echo $this->_var['action_link_special']['href']; ?>&type=meat&position=main&banner_width=105&banner_height=85';" class="button"/>				 
				 </td>
				</tr>
			  </table>
			  </div>
			  </div>
			  
			  </td>
			</tr>
			</table>
			  
			</td>
			</tr>
			</table>
		</td>
	</tr>
	<tr height="6">
		<td>
		</td>
	</tr>
  
  
  <!--=================================================================================================================== end of meat main banner ====================================-->
  
  
  
  
  
  <!--=============================================================================================================================== meat top banner ====================================-->
	<tr>
		<td>
			<table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;padding:10px;">
			  <tr>
				<td>
				
				<table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;padding:10px;-webkit-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);">
			  <tr>
				<td>
				
			  <div style="padding:0px 10px;">
			  <font style="font-weight:bold;">Top banner</font>
			  <div class="list-div list-div-ad" id="listDiv">
			  <table cellspacing='1' cellpadding='3' id='list-table' style="width:100%;">
				<tr>
				<th width="50px">预览</th>
				  <th width="400px"><?php echo $this->_var['lang']['schp_imgsrc']; ?></th>
				<th><?php echo $this->_var['lang']['schp_imgurl']; ?></th>
				  <th><?php echo $this->_var['lang']['schp_imgdesc']; ?></th>
				  <th><?php echo $this->_var['lang']['schp_sort']; ?></th>
				  <th>价格</th>
				<th width="70px"><?php echo $this->_var['lang']['handler']; ?></th>
				</tr>
				<?php $this->assign('meat_banner_top','0'); ?>
				<?php $_from = $this->_var['meat_banner_db']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
				<?php if ($this->_var['item']['position'] == "top"): ?>
				<?php $this->assign('meat_banner_top','1'); ?>
				<tr>
				<td><img src="<?php echo $this->_var['item']['src']; ?>" style="width:50px;"></td>
				  <td><a href="<?php echo $this->_var['item']['src']; ?>" target="_blank"><?php echo $this->_var['item']['src']; ?></a></td>
				<td align="left"><a href="<?php echo $this->_var['item']['url']; ?>" target="_blank"><?php echo $this->_var['item']['url']; ?></a></td>
				  <td align="left"><?php echo $this->_var['item']['text']; ?></td>
				  <td align="left"><?php echo $this->_var['item']['sort']; ?></td>
				  <td align="left"><?php echo $this->_var['item']['price']; ?></td>
				<td align="center">
					<a href="flashplay.php?act=edit&id=<?php echo $this->_var['key']; ?>&type=meat&position=top&banner_width=620&banner_height=39" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
					<a href="flashplay.php?act=del&id=<?php echo $this->_var['key']; ?>&type=meat&position=top&banner_width=620&banner_height=39" onclick="return check_del();" title="<?php echo $this->_var['lang']['trash_img']; ?>"><img src="images/icon_drop.gif" width="16" height="16" border="0" /></a>
				  </td>
				</tr>
				<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			  </table>
			  <?php if ($this->_var['meat_banner_top'] == "0"): ?>
			  <table cellspacing="0">
				<tr>
				  <td>
					<input name="add" type="submit" id="btnSubmit" value="<?php echo $this->_var['action_link_special']['text']; ?>" onclick="location.href='<?php echo $this->_var['action_link_special']['href']; ?>&type=meat&position=top&banner_width=620&banner_height=39';" class="button"/>				 
				 </td>
				</tr>
			  </table>
			  <?php endif; ?>
			  </div>
			  </div>
			  
			  </td>
			</tr>
			</table>
			  
			</td>
			</tr>
			</table>
		</td>
	</tr>
	<tr height="6">
		<td>
		</td>
	</tr>
	
  <!--===================================================================================================================== end of meat top banner ====================================-->
	
  <!--=========================================================================================================================== meat bottom banner ====================================-->
	
	<tr>
		<td>
			<table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;padding:10px;">
			  <tr>
				<td>
				
				<table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;padding:10px;-webkit-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);">
			  <tr>
				<td>
				
			  <div style="padding:0px 10px;">
			  <font style="font-weight:bold;">Bottom banner</font>
			  <div class="list-div list-div-ad" id="listDiv">
			  <table cellspacing='1' cellpadding='3' id='list-table' style="width:100%;">
				<tr>
				<th width="50px">预览</th>
				  <th width="400px"><?php echo $this->_var['lang']['schp_imgsrc']; ?></th>
				<th><?php echo $this->_var['lang']['schp_imgurl']; ?></th>
				  <th><?php echo $this->_var['lang']['schp_imgdesc']; ?></th>
				  <th><?php echo $this->_var['lang']['schp_sort']; ?></th>
				  <th>价格</th>
				<th width="70px"><?php echo $this->_var['lang']['handler']; ?></th>
				</tr>
				<?php $this->assign('meat_banner_bottom','0'); ?>
				<?php $_from = $this->_var['meat_banner_db']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
				<?php if ($this->_var['item']['position'] == "bottom"): ?>
				<?php $this->assign('meat_banner_bottom','1'); ?>
				<tr>
				<td><img src="<?php echo $this->_var['item']['src']; ?>" style="width:50px;"></td>
				  <td><a href="<?php echo $this->_var['item']['src']; ?>" target="_blank"><?php echo $this->_var['item']['src']; ?></a></td>
				<td align="left"><a href="<?php echo $this->_var['item']['url']; ?>" target="_blank"><?php echo $this->_var['item']['url']; ?></a></td>
				  <td align="left"><?php echo $this->_var['item']['text']; ?></td>
				  <td align="left"><?php echo $this->_var['item']['sort']; ?></td>
				  <td align="left"><?php echo $this->_var['item']['price']; ?></td>
				<td align="center">
					<a href="flashplay.php?act=edit&id=<?php echo $this->_var['key']; ?>&type=meat&position=bottom&banner_width=1000&banner_height=50" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
					<a href="flashplay.php?act=del&id=<?php echo $this->_var['key']; ?>&type=meat&position=bottom&banner_width=1000&banner_height=50" onclick="return check_del();" title="<?php echo $this->_var['lang']['trash_img']; ?>"><img src="images/icon_drop.gif" width="16" height="16" border="0" /></a>
				  </td>
				</tr>
				<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			  </table>
			  <?php if ($this->_var['meat_banner_bottom'] == "0"): ?>
			  <table cellspacing="0">
				<tr>
				  <td>
					<input name="add" type="submit" id="btnSubmit" value="<?php echo $this->_var['action_link_special']['text']; ?>" onclick="location.href='<?php echo $this->_var['action_link_special']['href']; ?>&type=meat&position=bottom&banner_width=1000&banner_height=50';" class="button"/>				 
				 </td>
				</tr>
			  </table>
			  <?php endif; ?>
			  </div>
			  </div>
			  
			  </td>
			</tr>
			</table>
			  
			</td>
			</tr>
			</table>
		</td>
	</tr>
	<tr height="6">
		<td>
		</td>
	</tr>
	
	<!--========================================================================================================================= end of meat bottom banner ====================================-->
	
	
	<!--================================================================================================================================== meat left banner ====================================-->
	
	<tr>
		<td>
			<table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;padding:10px;">
			  <tr>
				<td>
				
				<table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;padding:10px;-webkit-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);">
			  <tr>
				<td>
				
			  <div style="padding:0px 10px;">
			  <font style="font-weight:bold;">Left banner</font>
			  <div class="list-div list-div-ad" id="listDiv">
			  <table cellspacing='1' cellpadding='3' id='list-table' style="width:100%;">
				<tr>
				<th width="50px">预览</th>
				  <th width="400px"><?php echo $this->_var['lang']['schp_imgsrc']; ?></th>
				<th><?php echo $this->_var['lang']['schp_imgurl']; ?></th>
				  <th><?php echo $this->_var['lang']['schp_imgdesc']; ?></th>
				  <th><?php echo $this->_var['lang']['schp_sort']; ?></th>
				  <th>价格</th>
				<th width="70px"><?php echo $this->_var['lang']['handler']; ?></th>
				</tr>
				<?php $this->assign('meat_banner_left','0'); ?>
				<?php $_from = $this->_var['meat_banner_db']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
				<?php if ($this->_var['item']['position'] == "left"): ?>
				<?php $this->assign('meat_banner_left','1'); ?>
				<tr>
				<td><img src="<?php echo $this->_var['item']['src']; ?>" style="width:50px;"></td>
				  <td><a href="<?php echo $this->_var['item']['src']; ?>" target="_blank"><?php echo $this->_var['item']['src']; ?></a></td>
				<td align="left"><a href="<?php echo $this->_var['item']['url']; ?>" target="_blank"><?php echo $this->_var['item']['url']; ?></a></td>
				  <td align="left"><?php echo $this->_var['item']['text']; ?></td>
				  <td align="left"><?php echo $this->_var['item']['sort']; ?></td>
				  <td align="left"><?php echo $this->_var['item']['price']; ?></td>
				<td align="center">
					<a href="flashplay.php?act=edit&id=<?php echo $this->_var['key']; ?>&type=meat&position=left&banner_width=192&banner_height=310" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
					<a href="flashplay.php?act=del&id=<?php echo $this->_var['key']; ?>&type=meat&position=left&banner_width=192&banner_height=310" onclick="return check_del();" title="<?php echo $this->_var['lang']['trash_img']; ?>"><img src="images/icon_drop.gif" width="16" height="16" border="0" /></a>
				  </td>
				</tr>
				<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			  </table>
			  <?php if ($this->_var['meat_banner_left'] == "0"): ?>
			  <table cellspacing="0">
				<tr>
				  <td>
					<input name="add" type="submit" id="btnSubmit" value="<?php echo $this->_var['action_link_special']['text']; ?>" onclick="location.href='<?php echo $this->_var['action_link_special']['href']; ?>&type=meat&position=left&banner_width=192&banner_height=310';" class="button"/>				 
				 </td>
				</tr>
			  </table>
			  <?php endif; ?>
			  </div>
			  </div>
			  
			  </td>
			</tr>
			</table>
			  
			</td>
			</tr>
			</table>
		</td>
	</tr>
	<tr height="6">
		<td>
		</td>
	</tr>
	
	
	<!--=========================================================================================================================== end of meat left banner ====================================-->
	
	<!--================================================================================================================================= meat right banner ====================================-->
	
	<tr>
		<td>
			<table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;padding:10px;">
			  <tr>
				<td>
				
				<table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;padding:10px;-webkit-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);">
			  <tr>
				<td>
				
			  <div style="padding:0px 10px;">
			  <font style="font-weight:bold;">Right banner</font>
			  <div class="list-div list-div-ad" id="listDiv">
			  <table cellspacing='1' cellpadding='3' id='list-table' style="width:100%;">
				<tr>
				<th width="50px">预览</th>
				  <th width="400px"><?php echo $this->_var['lang']['schp_imgsrc']; ?></th>
				<th><?php echo $this->_var['lang']['schp_imgurl']; ?></th>
				  <th><?php echo $this->_var['lang']['schp_imgdesc']; ?></th>
				  <th><?php echo $this->_var['lang']['schp_sort']; ?></th>
				  <th>价格</th>
				<th width="70px"><?php echo $this->_var['lang']['handler']; ?></th>
				</tr>
				<?php $this->assign('meat_banner_right','0'); ?>
				<?php $_from = $this->_var['meat_banner_db']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
				<?php if ($this->_var['item']['position'] == "right"): ?>
				<?php $this->assign('meat_banner_right','1'); ?>
				<tr>
				<td><img src="<?php echo $this->_var['item']['src']; ?>" style="width:50px;"></td>
				  <td><a href="<?php echo $this->_var['item']['src']; ?>" target="_blank"><?php echo $this->_var['item']['src']; ?></a></td>
				<td align="left"><a href="<?php echo $this->_var['item']['url']; ?>" target="_blank"><?php echo $this->_var['item']['url']; ?></a></td>
				  <td align="left"><?php echo $this->_var['item']['text']; ?></td>
				  <td align="left"><?php echo $this->_var['item']['sort']; ?></td>
				  <td align="left"><?php echo $this->_var['item']['price']; ?></td>
				<td align="center">
					<a href="flashplay.php?act=edit&id=<?php echo $this->_var['key']; ?>&type=meat&position=right&banner_width=192&banner_height=310" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
					<a href="flashplay.php?act=del&id=<?php echo $this->_var['key']; ?>&type=meat&position=right&banner_width=192&banner_height=310" onclick="return check_del();" title="<?php echo $this->_var['lang']['trash_img']; ?>"><img src="images/icon_drop.gif" width="16" height="16" border="0" /></a>
				  </td>
				</tr>
				<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			  </table>
			  <?php if ($this->_var['meat_banner_right'] == "0"): ?>
			  <table cellspacing="0">
				<tr>
				  <td>
					<input name="add" type="submit" id="btnSubmit" value="<?php echo $this->_var['action_link_special']['text']; ?>" onclick="location.href='<?php echo $this->_var['action_link_special']['href']; ?>&type=meat&position=right&banner_width=192&banner_height=310';" class="button"/>				 
				 </td>
				</tr>
			  </table>
			  <?php endif; ?>
			  </div>
			  </div>
			  
			  </td>
			</tr>
			</table>
			  
			</td>
			</tr>
			</table>
		</td>
	</tr>
	<tr height="6">
		<td>
		</td>
	</tr>
	
	<!--============================================================================================================================= end of meat right banner ====================================-->
	
</table>

</td>
</tr>
</table>
</div>

<!--=========== End of meat Banner picture manager ============-->
































































<!--=========== wok Banner picture manager ============-->

<div class="tab-body" style="">
<table border="0" cellspacing="0" cellpadding="0" width="100%" style="border:1px solid #999; padding:0px;background-color:#fff;
-webkit-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);">
  <tr>
    <td style="padding:0px 10px;background-color:#4997ef;">
      <a href="." style="text-decoration:none;" onclick="if(document.getElementById('wok_banner_table').style.display == 'none'){document.getElementById('wok_banner_table').style.display = 'table';document.getElementById('wok_banner_indication').innerHTML = '-';}else{document.getElementById('wok_banner_table').style.display = 'none';document.getElementById('wok_banner_indication').innerHTML = '+';}return false;">
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <tr>
            <td>


              <table>
                <tr>
                  <td style="">
                    <font style="font-size:1.2em;color:#fff;" id="wok_banner_indication">-</font>
                  </td>
                  <td id="wok_banner_td"><font style="font-size:1.2em;color:#fff;"> Wok Banner</font></td>
                </tr>
              </table>
              
              
            </td>
          </tr>
      </table>
      </a>
    </td>
  </tr>
  <tr>
  <td id="wok_banner_table" style="width:100%;">
  
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
  
    <!--============================================================================================================== wok main banner ====================================-->
  	<tr>
		<td>
			<table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;padding:10px;">
			  <tr>
				<td>
				
				<table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;padding:10px;-webkit-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);">
			  <tr>
				<td>
				
			  <div style="padding:0px 10px;">
			  <font style="font-weight:bold;">Main banner</font>
			  <div class="list-div list-div-ad" id="listDiv">
			  <table cellspacing='1' cellpadding='3' id='list-table' style="width:100%;">
				<tr>
				<th width="50px">预览</th>
				  <th width="400px"><?php echo $this->_var['lang']['schp_imgsrc']; ?></th>
				<th><?php echo $this->_var['lang']['schp_imgurl']; ?></th>
				  <th><?php echo $this->_var['lang']['schp_imgdesc']; ?></th>
				  <th><?php echo $this->_var['lang']['schp_sort']; ?></th>
				  <th>价格</th>
				<th width="70px"><?php echo $this->_var['lang']['handler']; ?></th>
				</tr>
				<?php $_from = $this->_var['wok_banner_db']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
				<?php if ($this->_var['item']['position'] == "main"): ?>
				<tr>
				<td><img src="<?php echo $this->_var['item']['src']; ?>" style="width:50px;"></td>
				  <td><a href="<?php echo $this->_var['item']['src']; ?>" target="_blank"><?php echo $this->_var['item']['src']; ?></a></td>
				<td align="left"><a href="<?php echo $this->_var['item']['url']; ?>" target="_blank"><?php echo $this->_var['item']['url']; ?></a></td>
				  <td align="left"><?php echo $this->_var['item']['text']; ?></td>
				  <td align="left"><?php echo $this->_var['item']['sort']; ?></td>
				  <td align="left"><?php echo $this->_var['item']['price']; ?></td>				  
				<td align="center">
					<a href="flashplay.php?act=edit&id=<?php echo $this->_var['key']; ?>&type=wok&position=main&banner_width=105&banner_height=85" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
					<a href="flashplay.php?act=del&id=<?php echo $this->_var['key']; ?>&type=wok&position=main&banner_width=105&banner_height=85" onclick="return check_del();" title="<?php echo $this->_var['lang']['trash_img']; ?>"><img src="images/icon_drop.gif" width="16" height="16" border="0" /></a>
				  </td>
				</tr>
				<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			  </table>
			  <table cellspacing="0">
				<tr>
				  <td>
					<input name="add" type="submit" id="btnSubmit" value="<?php echo $this->_var['action_link_special']['text']; ?>" onclick="location.href='<?php echo $this->_var['action_link_special']['href']; ?>&type=wok&position=main&banner_width=105&banner_height=85';" class="button"/>				 
				 </td>
				</tr>
			  </table>
			  </div>
			  </div>
			  
			  </td>
			</tr>
			</table>
			  
			</td>
			</tr>
			</table>
		</td>
	</tr>
	<tr height="6">
		<td>
		</td>
	</tr>
  
  
  <!--=================================================================================================================== end of wok main banner ====================================-->
  
  
  
  
  
  <!--=============================================================================================================================== wok top banner ====================================-->
	<tr>
		<td>
			<table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;padding:10px;">
			  <tr>
				<td>
				
				<table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;padding:10px;-webkit-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);">
			  <tr>
				<td>
				
			  <div style="padding:0px 10px;">
			  <font style="font-weight:bold;">Top banner</font>
			  <div class="list-div list-div-ad" id="listDiv">
			  <table cellspacing='1' cellpadding='3' id='list-table' style="width:100%;">
				<tr>
				<th width="50px">预览</th>
				  <th width="400px"><?php echo $this->_var['lang']['schp_imgsrc']; ?></th>
				<th><?php echo $this->_var['lang']['schp_imgurl']; ?></th>
				  <th><?php echo $this->_var['lang']['schp_imgdesc']; ?></th>
				  <th><?php echo $this->_var['lang']['schp_sort']; ?></th>
				  <th>价格</th>
				<th width="70px"><?php echo $this->_var['lang']['handler']; ?></th>
				</tr>
				<?php $this->assign('wok_banner_top','0'); ?>
				<?php $_from = $this->_var['wok_banner_db']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
				<?php if ($this->_var['item']['position'] == "top"): ?>
				<?php $this->assign('wok_banner_top','1'); ?>
				<tr>
				<td><img src="<?php echo $this->_var['item']['src']; ?>" style="width:50px;"></td>
				  <td><a href="<?php echo $this->_var['item']['src']; ?>" target="_blank"><?php echo $this->_var['item']['src']; ?></a></td>
				<td align="left"><a href="<?php echo $this->_var['item']['url']; ?>" target="_blank"><?php echo $this->_var['item']['url']; ?></a></td>
				  <td align="left"><?php echo $this->_var['item']['text']; ?></td>
				  <td align="left"><?php echo $this->_var['item']['sort']; ?></td>
				  <td align="left"><?php echo $this->_var['item']['price']; ?></td>
				<td align="center">
					<a href="flashplay.php?act=edit&id=<?php echo $this->_var['key']; ?>&type=wok&position=top&banner_width=620&banner_height=39" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
					<a href="flashplay.php?act=del&id=<?php echo $this->_var['key']; ?>&type=wok&position=top&banner_width=620&banner_height=39" onclick="return check_del();" title="<?php echo $this->_var['lang']['trash_img']; ?>"><img src="images/icon_drop.gif" width="16" height="16" border="0" /></a>
				  </td>
				</tr>
				<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			  </table>
			  <?php if ($this->_var['wok_banner_top'] == "0"): ?>
			  <table cellspacing="0">
				<tr>
				  <td>
					<input name="add" type="submit" id="btnSubmit" value="<?php echo $this->_var['action_link_special']['text']; ?>" onclick="location.href='<?php echo $this->_var['action_link_special']['href']; ?>&type=wok&position=top&banner_width=620&banner_height=39';" class="button"/>				 
				 </td>
				</tr>
			  </table>
			  <?php endif; ?>
			  </div>
			  </div>
			  
			  </td>
			</tr>
			</table>
			  
			</td>
			</tr>
			</table>
		</td>
	</tr>
	<tr height="6">
		<td>
		</td>
	</tr>
	
  <!--===================================================================================================================== end of wok top banner ====================================-->
	
  <!--=========================================================================================================================== wok bottom banner ====================================-->
	
	<tr>
		<td>
			<table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;padding:10px;">
			  <tr>
				<td>
				
				<table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;padding:10px;-webkit-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);">
			  <tr>
				<td>
				
			  <div style="padding:0px 10px;">
			  <font style="font-weight:bold;">Bottom banner</font>
			  <div class="list-div list-div-ad" id="listDiv">
			  <table cellspacing='1' cellpadding='3' id='list-table' style="width:100%;">
				<tr>
				<th width="50px">预览</th>
				  <th width="400px"><?php echo $this->_var['lang']['schp_imgsrc']; ?></th>
				<th><?php echo $this->_var['lang']['schp_imgurl']; ?></th>
				  <th><?php echo $this->_var['lang']['schp_imgdesc']; ?></th>
				  <th><?php echo $this->_var['lang']['schp_sort']; ?></th>
				  <th>价格</th>
				<th width="70px"><?php echo $this->_var['lang']['handler']; ?></th>
				</tr>
				<?php $this->assign('wok_banner_bottom','0'); ?>
				<?php $_from = $this->_var['wok_banner_db']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
				<?php if ($this->_var['item']['position'] == "bottom"): ?>
				<?php $this->assign('wok_banner_bottom','1'); ?>
				<tr>
				<td><img src="<?php echo $this->_var['item']['src']; ?>" style="width:50px;"></td>
				  <td><a href="<?php echo $this->_var['item']['src']; ?>" target="_blank"><?php echo $this->_var['item']['src']; ?></a></td>
				<td align="left"><a href="<?php echo $this->_var['item']['url']; ?>" target="_blank"><?php echo $this->_var['item']['url']; ?></a></td>
				  <td align="left"><?php echo $this->_var['item']['text']; ?></td>
				  <td align="left"><?php echo $this->_var['item']['sort']; ?></td>
				  <td align="left"><?php echo $this->_var['item']['price']; ?></td>
				<td align="center">
					<a href="flashplay.php?act=edit&id=<?php echo $this->_var['key']; ?>&type=wok&position=bottom&banner_width=1000&banner_height=50" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
					<a href="flashplay.php?act=del&id=<?php echo $this->_var['key']; ?>&type=wok&position=bottom&banner_width=1000&banner_height=50" onclick="return check_del();" title="<?php echo $this->_var['lang']['trash_img']; ?>"><img src="images/icon_drop.gif" width="16" height="16" border="0" /></a>
				  </td>
				</tr>
				<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			  </table>
			  <?php if ($this->_var['wok_banner_bottom'] == "0"): ?>
			  <table cellspacing="0">
				<tr>
				  <td>
					<input name="add" type="submit" id="btnSubmit" value="<?php echo $this->_var['action_link_special']['text']; ?>" onclick="location.href='<?php echo $this->_var['action_link_special']['href']; ?>&type=wok&position=bottom&banner_width=1000&banner_height=50';" class="button"/>				 
				 </td>
				</tr>
			  </table>
			  <?php endif; ?>
			  </div>
			  </div>
			  
			  </td>
			</tr>
			</table>
			  
			</td>
			</tr>
			</table>
		</td>
	</tr>
	<tr height="6">
		<td>
		</td>
	</tr>
	
	<!--========================================================================================================================= end of wok bottom banner ====================================-->
	
	
	<!--================================================================================================================================== wok left banner ====================================-->
	
	<tr>
		<td>
			<table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;padding:10px;">
			  <tr>
				<td>
				
				<table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;padding:10px;-webkit-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);">
			  <tr>
				<td>
				
			  <div style="padding:0px 10px;">
			  <font style="font-weight:bold;">Left banner</font>
			  <div class="list-div list-div-ad" id="listDiv">
			  <table cellspacing='1' cellpadding='3' id='list-table' style="width:100%;">
				<tr>
				<th width="50px">预览</th>
				  <th width="400px"><?php echo $this->_var['lang']['schp_imgsrc']; ?></th>
				<th><?php echo $this->_var['lang']['schp_imgurl']; ?></th>
				  <th><?php echo $this->_var['lang']['schp_imgdesc']; ?></th>
				  <th><?php echo $this->_var['lang']['schp_sort']; ?></th>
				  <th>价格</th>
				<th width="70px"><?php echo $this->_var['lang']['handler']; ?></th>
				</tr>
				<?php $this->assign('wok_banner_left','0'); ?>
				<?php $_from = $this->_var['wok_banner_db']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
				<?php if ($this->_var['item']['position'] == "left"): ?>
				<?php $this->assign('wok_banner_left','1'); ?>
				<tr>
				<td><img src="<?php echo $this->_var['item']['src']; ?>" style="width:50px;"></td>
				  <td><a href="<?php echo $this->_var['item']['src']; ?>" target="_blank"><?php echo $this->_var['item']['src']; ?></a></td>
				<td align="left"><a href="<?php echo $this->_var['item']['url']; ?>" target="_blank"><?php echo $this->_var['item']['url']; ?></a></td>
				  <td align="left"><?php echo $this->_var['item']['text']; ?></td>
				  <td align="left"><?php echo $this->_var['item']['sort']; ?></td>
				  <td align="left"><?php echo $this->_var['item']['price']; ?></td>
				<td align="center">
					<a href="flashplay.php?act=edit&id=<?php echo $this->_var['key']; ?>&type=wok&position=left&banner_width=192&banner_height=310" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
					<a href="flashplay.php?act=del&id=<?php echo $this->_var['key']; ?>&type=wok&position=left&banner_width=192&banner_height=310" onclick="return check_del();" title="<?php echo $this->_var['lang']['trash_img']; ?>"><img src="images/icon_drop.gif" width="16" height="16" border="0" /></a>
				  </td>
				</tr>
				<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			  </table>
			  <?php if ($this->_var['wok_banner_left'] == "0"): ?>
			  <table cellspacing="0">
				<tr>
				  <td>
					<input name="add" type="submit" id="btnSubmit" value="<?php echo $this->_var['action_link_special']['text']; ?>" onclick="location.href='<?php echo $this->_var['action_link_special']['href']; ?>&type=wok&position=left&banner_width=192&banner_height=310';" class="button"/>				 
				 </td>
				</tr>
			  </table>
			  <?php endif; ?>
			  </div>
			  </div>
			  
			  </td>
			</tr>
			</table>
			  
			</td>
			</tr>
			</table>
		</td>
	</tr>
	<tr height="6">
		<td>
		</td>
	</tr>
	
	
	<!--=========================================================================================================================== end of wok left banner ====================================-->
	
	<!--================================================================================================================================= wok right banner ====================================-->
	
	<tr>
		<td>
			<table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;padding:10px;">
			  <tr>
				<td>
				
				<table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;padding:10px;-webkit-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);">
			  <tr>
				<td>
				
			  <div style="padding:0px 10px;">
			  <font style="font-weight:bold;">Right banner</font>
			  <div class="list-div list-div-ad" id="listDiv">
			  <table cellspacing='1' cellpadding='3' id='list-table' style="width:100%;">
				<tr>
				<th width="50px">预览</th>
				  <th width="400px"><?php echo $this->_var['lang']['schp_imgsrc']; ?></th>
				<th><?php echo $this->_var['lang']['schp_imgurl']; ?></th>
				  <th><?php echo $this->_var['lang']['schp_imgdesc']; ?></th>
				  <th><?php echo $this->_var['lang']['schp_sort']; ?></th>
				  <th>价格</th>
				<th width="70px"><?php echo $this->_var['lang']['handler']; ?></th>
				</tr>
				<?php $this->assign('wok_banner_right','0'); ?>
				<?php $_from = $this->_var['wok_banner_db']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
				<?php if ($this->_var['item']['position'] == "right"): ?>
				<?php $this->assign('wok_banner_right','1'); ?>
				<tr>
				<td><img src="<?php echo $this->_var['item']['src']; ?>" style="width:50px;"></td>
				  <td><a href="<?php echo $this->_var['item']['src']; ?>" target="_blank"><?php echo $this->_var['item']['src']; ?></a></td>
				<td align="left"><a href="<?php echo $this->_var['item']['url']; ?>" target="_blank"><?php echo $this->_var['item']['url']; ?></a></td>
				  <td align="left"><?php echo $this->_var['item']['text']; ?></td>
				  <td align="left"><?php echo $this->_var['item']['sort']; ?></td>
				  <td align="left"><?php echo $this->_var['item']['price']; ?></td>
				<td align="center">
					<a href="flashplay.php?act=edit&id=<?php echo $this->_var['key']; ?>&type=wok&position=right&banner_width=192&banner_height=310" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
					<a href="flashplay.php?act=del&id=<?php echo $this->_var['key']; ?>&type=wok&position=right&banner_width=192&banner_height=310" onclick="return check_del();" title="<?php echo $this->_var['lang']['trash_img']; ?>"><img src="images/icon_drop.gif" width="16" height="16" border="0" /></a>
				  </td>
				</tr>
				<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			  </table>
			  <?php if ($this->_var['wok_banner_right'] == "0"): ?>
			  <table cellspacing="0">
				<tr>
				  <td>
					<input name="add" type="submit" id="btnSubmit" value="<?php echo $this->_var['action_link_special']['text']; ?>" onclick="location.href='<?php echo $this->_var['action_link_special']['href']; ?>&type=wok&position=right&banner_width=192&banner_height=310';" class="button"/>				 
				 </td>
				</tr>
			  </table>
			  <?php endif; ?>
			  </div>
			  </div>
			  
			  </td>
			</tr>
			</table>
			  
			</td>
			</tr>
			</table>
		</td>
	</tr>
	<tr height="6">
		<td>
		</td>
	</tr>
	
	<!--============================================================================================================================= end of wok right banner ====================================-->
	
</table>
		

</td>
</tr>
</table>
</div>

<!--=========== End of wok Banner picture manager ============-->





<!--=========== re_men_shai_dan Banner picture manager ============-->
<div class="tab-body" style="">
<table border="0" cellspacing="0" cellpadding="0" width="100%" style="border:1px solid #999; padding:0px;background-color:#fff;
-webkit-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);">
  <tr>
    <td style="padding:0px 10px;background-color:#4997ef;">
      <a href="." style="text-decoration:none;" onclick="if(document.getElementById('re_men_shai_dan_banner_table').style.display == 'none'){document.getElementById('re_men_shai_dan_banner_table').style.display = 'table';document.getElementById('re_men_shai_dan_banner_indication').innerHTML = '-';}else{document.getElementById('re_men_shai_dan_banner_table').style.display = 'none';document.getElementById('re_men_shai_dan_banner_indication').innerHTML = '+';}return false;">
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <tr>
            <td>


              <table>
                <tr>
                  <td style="">
                    <font style="font-size:1.2em;color:#fff;" id="re_men_shai_dan_banner_indication">-</font>
                  </td>
                  <td id="re_men_shai_dan_banner_td"><font style="font-size:1.2em;color:#fff;"> 热门晒单</font></td>
                </tr>
              </table>
              
              
            </td>
          </tr>
      </table>
      </a>
    </td>
  </tr>
  <tr>
  <td id="re_men_shai_dan_banner_table" style="width:100%;">

        <table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;padding:10px;">
          <tr>
            <td>
          <div style="padding:0px 10px;">
          <div class="list-div list-div-ad" id="listDiv">
          <table cellspacing='1' cellpadding='3' id='list-table' style="width:100%;">
            <tr>
			<th width="50px">预览</th>
              <th width="400px"><?php echo $this->_var['lang']['schp_imgsrc']; ?></th>
            <th><?php echo $this->_var['lang']['schp_imgurl']; ?></th>
			<th>图片标题</th>
              <th><?php echo $this->_var['lang']['schp_imgdesc']; ?></th>
              <th><?php echo $this->_var['lang']['schp_sort']; ?></th>
              <th>价格</th>
            <th width="70px"><?php echo $this->_var['lang']['handler']; ?></th>
            </tr>
            <?php $_from = $this->_var['re_men_shai_dan_banner_db']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
            <tr>
              <td><img src="<?php echo $this->_var['item']['src']; ?>" style="width:50px;"></td>
              <td><a href="<?php echo $this->_var['item']['src']; ?>" target="_blank"><?php echo $this->_var['item']['src']; ?></a></td>
            <td align="left"><a href="<?php echo $this->_var['item']['url']; ?>" target="_blank"><?php echo $this->_var['item']['url']; ?></a></td>
              <td align="left"><?php echo $this->_var['item']['title']; ?></td>
			  <td align="left"><?php echo $this->_var['item']['text']; ?></td>
              <td align="left"><?php echo $this->_var['item']['sort']; ?></td>
              <td align="left"><?php echo $this->_var['item']['price']; ?></td>
            <td align="center">
                <a href="flashplay.php?act=edit&id=<?php echo $this->_var['key']; ?>&type=re_men_shai_dan&position=re_men_shai_dan&banner_width=50&banner_height=50&show_title_field=1" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
                <a href="flashplay.php?act=del&id=<?php echo $this->_var['key']; ?>&type=re_men_shai_dan&position=re_men_shai_dan&banner_width=50&banner_height=50&show_title_field=1" onclick="return check_del();" title="<?php echo $this->_var['lang']['trash_img']; ?>"><img src="images/icon_drop.gif" width="16" height="16" border="0" /></a>
              </td>
            </tr>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </table>
          <table cellspacing="0">
            <tr>
              <td>
                <input name="add" type="submit" id="btnSubmit" value="<?php echo $this->_var['action_link_special']['text']; ?>" onclick="location.href='<?php echo $this->_var['action_link_special']['href']; ?>&type=re_men_shai_dan&position=re_men_shai_dan&banner_width=450&banner_height=250&show_title_field=1';" class="button"/>
              </td>
            </tr>
          </table>
          </div>
          </div>
        </td>
        </tr>
        </table>


</td>
</tr>
</table>
</div>

<!--=========== End of re_men_shai_dan Banner picture manager ============-->


<!--=========== re_men_huo_dong Banner picture manager ============-->
<div class="tab-body" style="">
<table border="0" cellspacing="0" cellpadding="0" width="100%" style="border:1px solid #999; padding:0px;background-color:#fff;
-webkit-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);">
  <tr>
    <td style="padding:0px 10px;background-color:#4997ef;">
      <a href="." style="text-decoration:none;" onclick="if(document.getElementById('re_men_huo_dong_banner_table').style.display == 'none'){document.getElementById('re_men_huo_dong_banner_table').style.display = 'table';document.getElementById('re_men_huo_dong_banner_indication').innerHTML = '-';}else{document.getElementById('re_men_huo_dong_banner_table').style.display = 'none';document.getElementById('re_men_huo_dong_banner_indication').innerHTML = '+';}return false;">
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <tr>
            <td>


              <table>
                <tr>
                  <td style="">
                    <font style="font-size:1.2em;color:#fff;" id="re_men_huo_dong_banner_indication">-</font>
                  </td>
                  <td id="re_men_huo_dong_banner_td"><font style="font-size:1.2em;color:#fff;"> 热门活动</font></td>
                </tr>
              </table>
              
              
            </td>
          </tr>
      </table>
      </a>
    </td>
  </tr>
  <tr>
  <td id="re_men_huo_dong_banner_table" style="width:100%;">

        <table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;padding:10px;">
          <tr>
            <td>
          <div style="padding:0px 10px;">
          <div class="list-div list-div-ad" id="listDiv">
          <table cellspacing='1' cellpadding='3' id='list-table' style="width:100%;">
            <tr>
			<th width="50px">预览</th>
              <th width="400px"><?php echo $this->_var['lang']['schp_imgsrc']; ?></th>
            <th><?php echo $this->_var['lang']['schp_imgurl']; ?></th>
			<th>图片标题</th>
              <th><?php echo $this->_var['lang']['schp_imgdesc']; ?></th>
              <th><?php echo $this->_var['lang']['schp_sort']; ?></th>
              <th>价格</th>
            <th width="70px"><?php echo $this->_var['lang']['handler']; ?></th>
            </tr>
            <?php $_from = $this->_var['re_men_huo_dong_banner_db']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
            <tr>
              <td><img src="<?php echo $this->_var['item']['src']; ?>" style="width:50px;"></td>
              <td><a href="<?php echo $this->_var['item']['src']; ?>" target="_blank"><?php echo $this->_var['item']['src']; ?></a></td>
            <td align="left"><a href="<?php echo $this->_var['item']['url']; ?>" target="_blank"><?php echo $this->_var['item']['url']; ?></a></td>
              <td align="left"><?php echo $this->_var['item']['title']; ?></td>
			  <td align="left"><?php echo $this->_var['item']['text']; ?></td>
              <td align="left"><?php echo $this->_var['item']['sort']; ?></td>
              <td align="left"><?php echo $this->_var['item']['price']; ?></td>
            <td align="center">
                <a href="flashplay.php?act=edit&id=<?php echo $this->_var['key']; ?>&type=re_men_huo_dong&position=re_men_huo_dong&banner_width=50&banner_height=50&show_title_field=1" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
                <a href="flashplay.php?act=del&id=<?php echo $this->_var['key']; ?>&type=re_men_huo_dong&position=re_men_huo_dong&banner_width=50&banner_height=50&show_title_field=1" onclick="return check_del();" title="<?php echo $this->_var['lang']['trash_img']; ?>"><img src="images/icon_drop.gif" width="16" height="16" border="0" /></a>
              </td>
            </tr>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </table>
          <table cellspacing="0">
            <tr>
              <td>
                <input name="add" type="submit" id="btnSubmit" value="<?php echo $this->_var['action_link_special']['text']; ?>" onclick="location.href='<?php echo $this->_var['action_link_special']['href']; ?>&type=re_men_huo_dong&position=re_men_huo_dong&banner_width=450&banner_height=250&show_title_field=1';" class="button"/>
              </td>
            </tr>
          </table>
          </div>
          </div>
        </td>
        </tr>
        </table>


</td>
</tr>
</table>
</div>

<!--=========== End of re_men_huo_dong Banner picture manager ============-->















</div>
<script language="JavaScript">
<!--
onload = function()
{
    // 开始检查订单
    startCheckOrder();
}
function check_del()
{
  if (confirm('<?php echo $this->_var['lang']['trash_img_confirm']; ?>'))
  {
    return true;
  }
  else
  {
    return false;
  }
}

/**
 * 安装Flash样式模板
 */
function setupFlashTpl(tpl, obj)
{
    window.current_tpl_obj = obj;
    if (confirm(setupConfirm))
    {
        Ajax.call('flashplay.php?is_ajax=1&act=install', 'flashtpl=' + tpl, setupFlashTplResponse, 'GET', 'JSON');
    }
}

function setupFlashTplResponse(result)
{
    if (result.message.length > 0)
    {
        alert(result.message);
    }

    if (result.error == 0)
    {
        var tmp_obj = window.current_tpl_obj.parentNode.parentNode.previousSibling;
        while (tmp_obj.nodeName.toLowerCase() != 'tr')
        {
            tmp_obj = tmp_obj.previousSibling;
        }
        tmp_obj = tmp_obj.getElementsByTagName('center');
        tmp_obj[0].appendChild(document.getElementById('current_theme'));
    }
    
}
//-->
</script>

<?php echo $this->fetch('pagefooter.htm'); ?>