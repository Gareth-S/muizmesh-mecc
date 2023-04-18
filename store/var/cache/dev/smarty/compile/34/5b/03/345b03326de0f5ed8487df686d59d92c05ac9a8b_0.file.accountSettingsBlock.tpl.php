<?php
/* Smarty version 4.2.1, created on 2023-03-31 10:13:24
  from '/home/sexthera/public_html/muizenmesh.co.za/store/modules/paypal/views/templates/admin/_partials/accountSettingsBlock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6426962486b2f0_18098236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '345b03326de0f5ed8487df686d59d92c05ac9a8b' => 
    array (
      0 => '/home/sexthera/public_html/muizenmesh.co.za/store/modules/paypal/views/templates/admin/_partials/accountSettingsBlock.tpl',
      1 => 1678782956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./mbCredentialsForm.tpl' => 2,
    'file:./ecCredentialFields.tpl' => 2,
  ),
),false)) {
function content_6426962486b2f0_18098236 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div>

    <?php if ((isset($_smarty_tpl->tpl_vars['method']->value)) && $_smarty_tpl->tpl_vars['method']->value == 'PPP' || ($_smarty_tpl->tpl_vars['method']->value == 'EC' && ((isset($_smarty_tpl->tpl_vars['country_iso']->value)) && in_array($_smarty_tpl->tpl_vars['country_iso']->value,array('IN','JP')) == false))) {?>
        <p class="h3">
            <?php if ((isset($_smarty_tpl->tpl_vars['accountConfigured']->value)) && $_smarty_tpl->tpl_vars['accountConfigured']->value) {?><i class="icon-check text-success"></i><?php }?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PayPal Account','mod'=>'paypal'),$_smarty_tpl ) );?>

            <?php if ((isset($_smarty_tpl->tpl_vars['accountConfigured']->value)) && $_smarty_tpl->tpl_vars['accountConfigured']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'connected','mod'=>'paypal'),$_smarty_tpl ) );
}?>
        </p>
        <?php if ((isset($_smarty_tpl->tpl_vars['accountConfigured']->value)) == false || $_smarty_tpl->tpl_vars['accountConfigured']->value == false) {?>
          <p>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In order to activate the module, you must connect your existing PayPal account or create a new one.','mod'=>'paypal'),$_smarty_tpl ) );?>

          </p>
        <?php }?>

    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['accountConfigured']->value)) && $_smarty_tpl->tpl_vars['accountConfigured']->value) {?>

        <?php if ((isset($_smarty_tpl->tpl_vars['method']->value)) && $_smarty_tpl->tpl_vars['method']->value == 'MB') {?>
            <?php $_smarty_tpl->_subTemplateRender('file:./mbCredentialsForm.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>

        <?php if ((isset($_smarty_tpl->tpl_vars['country_iso']->value)) && in_array($_smarty_tpl->tpl_vars['country_iso']->value,array('IN','JP'))) {?>
          <div class="modal-body">
            <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'API Credentials','mod'=>'paypal'),$_smarty_tpl ) );?>
</h4>
            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In order to accept PayPal payments, please fill in your API REST credentials.','mod'=>'paypal'),$_smarty_tpl ) );?>
</p>
            <ul>
              <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Access','mod'=>'paypal'),$_smarty_tpl ) );?>
 <a target="_blank" href="https://developer.paypal.com/developer/applications/"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'https://developer.paypal.com/developer/applications/','mod'=>'paypal'),$_smarty_tpl ) );?>
</a></li>
              <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in or Create a business account','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
              <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create a « REST API apps »','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
              <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click « Show » below « Secret: »','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
              <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Copy/paste your « Client ID » and « Secret » below for each environment','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
            </ul>
            <hr/>

            <input type="hidden" name="id_shop" value="<?php if ((isset($_smarty_tpl->tpl_vars['idShop']->value))) {
echo $_smarty_tpl->tpl_vars['idShop']->value;
}?>"/>
            <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'API Credentials for','mod'=>'paypal'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
</h4>
              <?php $_smarty_tpl->_subTemplateRender('file:./ecCredentialFields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          </div>
        <?php }?>

        <?php if ((isset($_smarty_tpl->tpl_vars['method']->value)) && $_smarty_tpl->tpl_vars['method']->value == 'PPP' || ($_smarty_tpl->tpl_vars['method']->value == 'EC' && ((isset($_smarty_tpl->tpl_vars['country_iso']->value)) && in_array($_smarty_tpl->tpl_vars['country_iso']->value,array('IN','JP')) == false))) {?>
            <span class="btn btn-default pp__mt-5" id="logoutAccount">
              <i class="icon-signout"></i>
				      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Logout','mod'=>'paypal'),$_smarty_tpl ) );?>

            </span>
        <?php }?>
    <?php } else { ?>
        <?php if ((isset($_smarty_tpl->tpl_vars['method']->value)) && $_smarty_tpl->tpl_vars['method']->value == 'MB') {?>
            <?php $_smarty_tpl->_subTemplateRender('file:./mbCredentialsForm.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <?php } elseif ((isset($_smarty_tpl->tpl_vars['country_iso']->value)) && in_array($_smarty_tpl->tpl_vars['country_iso']->value,array('IN','JP'))) {?>
          <div class="modal-body">
            <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'API Credentials','mod'=>'paypal'),$_smarty_tpl ) );?>
</h4>
            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In order to accept PayPal payments, please fill in your API REST credentials.','mod'=>'paypal'),$_smarty_tpl ) );?>
</p>
            <ul>
              <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Access','mod'=>'paypal'),$_smarty_tpl ) );?>
 <a target="_blank" href="https://developer.paypal.com/developer/applications/"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'https://developer.paypal.com/developer/applications/','mod'=>'paypal'),$_smarty_tpl ) );?>
</a></li>
              <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in or Create a business account','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
              <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create a « REST API apps »','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
              <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click « Show » below « Secret: »','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
              <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Copy/paste your « Client ID » and « Secret » below for each environment','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
            </ul>
            <hr/>

            <input type="hidden" name="id_shop" value="<?php if ((isset($_smarty_tpl->tpl_vars['idShop']->value))) {
echo $_smarty_tpl->tpl_vars['idShop']->value;
}?>"/>
            <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'API Credentials for','mod'=>'paypal'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
</h4>
              <?php $_smarty_tpl->_subTemplateRender('file:./ecCredentialFields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

          </div>
        <?php } elseif ((isset($_smarty_tpl->tpl_vars['method']->value)) && in_array($_smarty_tpl->tpl_vars['method']->value,array('EC'))) {?>
          <a href="<?php echo addslashes($_smarty_tpl->tpl_vars['urlOnboarding']->value);?>
"
            target="_blank"
            data-paypal-button
            data-paypal-onboard-complete="onboardCallback"
            class="btn btn-default spinner-button"
          >
            <i class="icon-signin"></i>
            <div class="spinner pp__mr-1"></div>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Connect or create PayPal account','mod'=>'paypal'),$_smarty_tpl ) );?>

          </a>

          <?php echo '<script'; ?>
 src="<?php echo addslashes($_smarty_tpl->tpl_vars['paypalOnboardingLib']->value);?>
"><?php echo '</script'; ?>
>
        <?php } elseif ((isset($_smarty_tpl->tpl_vars['SignUpLinkButton']->value))) {?>
            <?php echo $_smarty_tpl->tpl_vars['SignUpLinkButton']->value->render();?>
         <?php }?>
    <?php }?>
</div>

<?php if ((isset($_smarty_tpl->tpl_vars['isPuiAvailable']->value)) && $_smarty_tpl->tpl_vars['isPuiAvailable']->value == false) {?>
  <div class="alert alert-warning pp__mt-3">
      <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you don\'t see Pay Upon Invoice payment method at your checkout page, please request it to PayPal by using this [a @href1@]link[/a]','mod'=>'paypal'),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
ob_start();
echo 'target="blank"';
$_prefixVariable2 = ob_get_clean();
echo smarty_modifier_paypalreplace($_prefixVariable1,array('@href1@'=>'https://www.paypal.com/bizsignup/entry?country.x=DE&product=payment_methods&capabilities=PAY_UPON_INVOICE','@target@'=>$_prefixVariable2));?>

  </div>
<?php }
}
}
