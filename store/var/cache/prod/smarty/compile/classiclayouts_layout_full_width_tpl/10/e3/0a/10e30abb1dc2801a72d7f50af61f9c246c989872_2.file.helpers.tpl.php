<?php
/* Smarty version 4.2.1, created on 2023-03-30 14:09:21
  from '/home/sexthera/public_html/muizenmesh.co.za/store/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64257bf1829342_21682292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10e30abb1dc2801a72d7f50af61f9c246c989872' => 
    array (
      0 => '/home/sexthera/public_html/muizenmesh.co.za/store/themes/classic/templates/_partials/helpers.tpl',
      1 => 1671890850,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64257bf1829342_21682292 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/home/sexthera/public_html/muizenmesh.co.za/store/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/10/e3/0a/10e30abb1dc2801a72d7f50af61f9c246c989872_2.file.helpers.tpl.php',
    'uid' => '10e30abb1dc2801a72d7f50af61f9c246c989872',
    'call_name' => 'smarty_template_function_renderLogo_106214139964257bf181fed4_53715145',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_106214139964257bf181fed4_53715145 */
if (!function_exists('smarty_template_function_renderLogo_106214139964257bf181fed4_53715145')) {
function smarty_template_function_renderLogo_106214139964257bf181fed4_53715145(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_106214139964257bf181fed4_53715145 */
}
