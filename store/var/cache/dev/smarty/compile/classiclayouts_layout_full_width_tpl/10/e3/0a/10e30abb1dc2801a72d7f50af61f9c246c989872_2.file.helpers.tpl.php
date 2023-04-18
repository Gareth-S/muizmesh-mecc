<?php
/* Smarty version 4.2.1, created on 2023-03-31 10:26:31
  from '/home/sexthera/public_html/muizenmesh.co.za/store/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64269937da8a96_20809595',
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
function content_64269937da8a96_20809595 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/home/sexthera/public_html/muizenmesh.co.za/store/var/cache/dev/smarty/compile/classiclayouts_layout_full_width_tpl/10/e3/0a/10e30abb1dc2801a72d7f50af61f9c246c989872_2.file.helpers.tpl.php',
    'uid' => '10e30abb1dc2801a72d7f50af61f9c246c989872',
    'call_name' => 'smarty_template_function_renderLogo_73915554464269937d9faa6_86217942',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_73915554464269937d9faa6_86217942 */
if (!function_exists('smarty_template_function_renderLogo_73915554464269937d9faa6_86217942')) {
function smarty_template_function_renderLogo_73915554464269937d9faa6_86217942(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_renderLogo_73915554464269937d9faa6_86217942 */
}
