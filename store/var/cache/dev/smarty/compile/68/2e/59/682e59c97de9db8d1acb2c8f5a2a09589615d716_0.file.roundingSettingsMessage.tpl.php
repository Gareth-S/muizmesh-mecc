<?php
/* Smarty version 4.2.1, created on 2023-03-31 10:13:27
  from '/home/sexthera/public_html/muizenmesh.co.za/store/modules/paypal/views/templates/admin/_partials/messages/roundingSettingsMessage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_642696273ccd28_09107666',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '682e59c97de9db8d1acb2c8f5a2a09589615d716' => 
    array (
      0 => '/home/sexthera/public_html/muizenmesh.co.za/store/modules/paypal/views/templates/admin/_partials/messages/roundingSettingsMessage.tpl',
      1 => 1678782956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../_partials/roundingSettings.tpl' => 1,
  ),
),false)) {
function content_642696273ccd28_09107666 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('variant', (($tmp = $_smarty_tpl->tpl_vars['variant']->value ?? null)===null||$tmp==='' ? 'normal' ?? null : $tmp));?>

<div class="alert alert-warning <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('hidden'=>$_smarty_tpl->tpl_vars['variant']->value == 'hidden') ));?>
" data-rounding-alert>
  <button type="button" class="close" data-dismiss="alert">×</button>
    <div>
      <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your rounding settings are not fully compatible with PayPal requirements. In order to avoid some of the transactions to fail, please change the PrestaShop rounding mode in [a @href1@] Preferences > General[/a] to:','mod'=>'paypal'),$_smarty_tpl ) );
$_prefixVariable6 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPreferences',true);
$_prefixVariable7 = ob_get_clean();
ob_start();
echo 'target="blank"';
$_prefixVariable8 = ob_get_clean();
echo smarty_modifier_paypalreplace($_prefixVariable6,array('@href1@'=>$_prefixVariable7,'@target@'=>$_prefixVariable8));?>

    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:../../_partials/roundingSettings.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
<?php }
}
