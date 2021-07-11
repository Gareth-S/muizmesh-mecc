<?php
/**
 * When enabled, Zenphoto users will be appear not to be logged-in when viewing gallery pages.
 *
 * @author Stephen Billard (sbillard)
 * @package plugins
 * @subpackage show-not-logged-in
 */
$plugin_is_filter = 1001 | FEATURE_PLUGIN;
$plugin_description = sprintf(gettext("Treats users as not logged in for gallery pages."), DATA_FOLDER);
$plugin_author = "Stephen Billard (sbillard)";
$plugin_category = gettext('Development');

if (!OFFSET_PATH) {
	zp_register_filter('guest_login_attempt', 'show_not_loggedin::adminLoginAttempt');
	zp_register_filter('login_redirect_link', 'show_not_loggedin::loginRedirect');
	show_not_loggedin::hideAdmin();
}

class show_not_loggedin {

	static function hideAdmin() {
		global $_zp_loggedin, $_zp_current_admin_obj, $_showNotLoggedin_real_auth;
		if (!OFFSET_PATH && is_object($_zp_current_admin_obj)) {
			$_showNotLoggedin_real_auth = $_zp_current_admin_obj;
			if (isset($_SESSION)) {
				unset($_SESSION['zpcms_auth_user']);
			}
			if (isset($_COOKIE)) {
				unset($_COOKIE['zpcms_auth_user']);
			}
			$_zp_current_admin_obj = $_zp_loggedin = NULL;
		}
	}

	static function adminLoginAttempt($success, $user, $pass, $athority) {
		if ($athority == 'zp_admin_auth' && $success) {
			redirectURL(FULLWEBPATH . '/' . ZENFOLDER . '/admin.php');
		}
		return $success;
	}

	static function loginRedirect($link) {
		global $_showNotLoggedin_real_auth;
		if (is_object($_showNotLoggedin_real_auth)) {
			$link = WEBPATH . '/' . ZENFOLDER . '/admin.php';
			?>
			<div class="error">
				<?php echo gettext('show_not_logged-in is active.'); ?>
			</div>
			<?php
		}
		return $link;
	}

}
?>