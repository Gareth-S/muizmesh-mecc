<?php
/* Smarty version 4.2.1, created on 2023-03-31 11:29:47
  from 'module:pscontactinfopscontactinf' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6426a80bb677a8_59712019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '628089b29e2c5fb69de1c5694b088f988b830ba7' => 
    array (
      0 => 'module:pscontactinfopscontactinf',
      1 => 1671890850,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6426a80bb677a8_59712019 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/sexthera/public_html/muizenmesh.co.za/store/vendor/smarty/smarty/libs/plugins/function.mailto.php','function'=>'smarty_function_mailto',),));
?>
<!-- begin /home/sexthera/public_html/muizenmesh.co.za/store/themes/classic/modules/ps_contactinfo/ps_contactinfo-rich.tpl -->
<div class="contact-rich">
  <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Store information','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4>
  <div class="block">
    <div class="icon"><i class="material-icons">&#xE55F;</i></div>
    <div class="data"><?php echo $_smarty_tpl->tpl_vars['contact_infos']->value['address']['formatted'];?>
</div>
  </div>
  <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
    <hr/>
    <div class="block">
      <div class="icon"><i class="material-icons">&#xE0CD;</i></div>
      <div class="data">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Call us:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
<br/>
        <a href="tel:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['contact_infos']->value['phone'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['contact_infos']->value['phone'], ENT_QUOTES, 'UTF-8');?>
</a>
       </div>
    </div>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['fax']) {?>
    <hr/>
    <div class="block">
      <div class="icon"><i class="material-icons">&#xE0DF;</i></div>
      <div class="data">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fax:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
<br/>
        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['contact_infos']->value['fax'], ENT_QUOTES, 'UTF-8');?>

      </div>
    </div>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['email'] && $_smarty_tpl->tpl_vars['display_email']->value) {?>
    <hr/>
    <div class="block">
      <div class="icon"><i class="material-icons">&#xE158;</i></div>
      <div class="data email">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email us:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
<br/>
      </div>
      <?php echo smarty_function_mailto(array('address'=>$_smarty_tpl->tpl_vars['contact_infos']->value['email'],'encode'=>"javascript"),$_smarty_tpl);?>

    </div>
  <?php }?>
</div>
<!-- end /home/sexthera/public_html/muizenmesh.co.za/store/themes/classic/modules/ps_contactinfo/ps_contactinfo-rich.tpl --><?php }
}
