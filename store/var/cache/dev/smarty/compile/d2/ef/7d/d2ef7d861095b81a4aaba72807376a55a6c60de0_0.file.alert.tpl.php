<?php
/* Smarty version 4.2.1, created on 2023-03-31 10:13:24
  from '/home/sexthera/public_html/muizenmesh.co.za/store/modules/paypal/views/templates/admin/_partials/alert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64269624aeac91_92542667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2ef7d861095b81a4aaba72807376a55a6c60de0' => 
    array (
      0 => '/home/sexthera/public_html/muizenmesh.co.za/store/modules/paypal/views/templates/admin/_partials/alert.tpl',
      1 => 1678782956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64269624aeac91_92542667 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 <?php if ((isset($_smarty_tpl->tpl_vars['widthByContent']->value)) && $_smarty_tpl->tpl_vars['widthByContent']->value) {?>d-inline-block<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['class']->value)) && $_smarty_tpl->tpl_vars['class']->value) {?> <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
 <?php }?>">
    <?php if ((isset($_smarty_tpl->tpl_vars['btnClose']->value)) && $_smarty_tpl->tpl_vars['btnClose']->value) {?>
        <button type="button" class="close" data-dismiss="alert">×</button>
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

</div>
<?php }
}
