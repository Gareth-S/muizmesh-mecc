<?php
/* Smarty version 4.2.1, created on 2023-03-31 10:13:27
  from '/home/sexthera/public_html/muizenmesh.co.za/store/modules/paypal/views/templates/admin/_partials/roundingSettings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6426962740cf12_17583743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2f33b65725e24e4aa7d805d397cd4f469f69804' => 
    array (
      0 => '/home/sexthera/public_html/muizenmesh.co.za/store/modules/paypal/views/templates/admin/_partials/roundingSettings.tpl',
      1 => 1678782956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6426962740cf12_17583743 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('variant', (($tmp = $_smarty_tpl->tpl_vars['variant']->value ?? null)===null||$tmp==='' ? 'normal' ?? null : $tmp));?>

<ul>
  <li>
    <?php if ($_smarty_tpl->tpl_vars['variant']->value == 'help') {?><p class='h4'><?php }?>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Round mode: "Round up away from zero, when it is half way there (recommended) "','mod'=>'paypal'),$_smarty_tpl ) );?>

    <?php if ($_smarty_tpl->tpl_vars['variant']->value == 'help') {?></p><?php }?>
  </li>
  <li>
    <?php if ($_smarty_tpl->tpl_vars['variant']->value == 'help') {?><p class='h4'><?php }?>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Round type: "Round on each item"','mod'=>'paypal'),$_smarty_tpl ) );?>

    <?php if ($_smarty_tpl->tpl_vars['variant']->value == 'help') {?></p><?php }?>
  </li>
  <li>
    <?php if ($_smarty_tpl->tpl_vars['variant']->value == 'help') {?><p class='h4'><?php }?>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Number of decimals','d'=>'Admin.Shopparameters.Feature'),$_smarty_tpl ) );?>
: "2"
    <?php if ($_smarty_tpl->tpl_vars['variant']->value == 'help') {?>
      <p>
      <button class="btn btn-default" data-show-rounding-alert>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check requirements','mod'=>'paypal'),$_smarty_tpl ) );?>

      </button>
      </p>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['variant']->value == 'help') {?></p><?php }?>
  </li>
</ul>

<?php if ($_smarty_tpl->tpl_vars['variant']->value != 'help') {?>
</br>
  <button class="btn btn-default" data-update-rounding-settings>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Change rounding settings automatically','mod'=>'paypal'),$_smarty_tpl ) );?>

  </button>
<?php }?>

<?php }
}
