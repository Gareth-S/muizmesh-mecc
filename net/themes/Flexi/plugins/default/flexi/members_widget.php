<?php
/**
 * Open Source Social Network
 *
 * @package   Open Source Social Network
 * @author    Open Social Website Core Team <info@softlab24.com>
 * @copyright 2014-2018 SOFTLAB24 LIMITED
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */

$count = 12;
if(isset($params['count'])){
	$count = $params['count'];
}
$users = new OssnUser;
$attr = array(
	'keyword' => false,
	'order_by' => 'guid DESC',
	'limit' => $count,
	'page_limit' => 12,
	'offset' => 1
);
$users = $users->searchUsers($attr);
	 
foreach($users as $user) { ?>
	<a title="<?php echo $user->first_name . ' ' . $user->last_name; ?>"
	class="com-members-memberlist-item"
	href="<?php echo ossn_site_url() . 'u/' . $user->username; ?>">
	<img class="user-img" src="<?php echo $user->iconURL()->small;?>"></a>
<?php
}