<!doctype html>
<html><head>
<meta charset="utf-8">
<title>Template</title>

<!-- == Main Includes =========================================================== -->
<?php require Config::get('PATH_TEMPLATES') . 'includes.php'; ?>
<!-- ============================================================================ -->

</head>
<body>

<header>



</header>

        <!-- navigation -->
        <nav>
			<ul class="navigation">
				<li>
					<a href="<?php echo Config::get('URL'); ?>index/index">Index</a>
				</li>
				<li>
					<a href="<?php echo Config::get('URL'); ?>profile/index">Profiles</a>
				</li>
				<?php if (Session::userIsLoggedIn()) { ?>
				<!-- users -->
				<li>
					<a href="<?php echo Config::get('URL'); ?>dashboard/index">Dashboard</a>
				</li>
				<li>
					<a href="<?php echo Config::get('URL'); ?>note/index">My Notes</a>
				</li>
				<?php } else { ?>
				<!-- non-users -->
				<li>
					<a href="<?php echo Config::get('URL'); ?>login/index">Login</a>
				</li>
				<li>
					<a href="<?php echo Config::get('URL'); ?>register/index">Register</a>
				</li>
				<?php } ?>
			</ul>		
		</nav>

        <?php if (Session::userIsLoggedIn()) { ?>
		<nav>
			<ul class="navigation right">
				<li>
					<a href="<?php echo Config::get('URL'); ?>user/index">My Account</a>
				</li>
				<li>
					<a href="<?php echo Config::get('URL'); ?>user/changeUserRole">Change account type</a>
				</li>
				<li>
					<a href="<?php echo Config::get('URL'); ?>user/editAvatar">Edit your avatar</a>
				</li>
				<li>
					<a href="<?php echo Config::get('URL'); ?>user/editusername">Edit my username</a>
				</li>
				<li>
					<a href="<?php echo Config::get('URL'); ?>user/edituseremail">Edit my email</a>
				</li>
				<li>
					<a href="<?php echo Config::get('URL'); ?>user/changePassword">Change Password</a>
				</li>
				<li>
					<a href="<?php echo Config::get('URL'); ?>login/logout">Logout</a>
				</li>
				<?php if (Session::get("user_account_type") == 7) { ?>
				<li>
					<a href="<?php echo Config::get('URL'); ?>admin/">Admin</a>
				</li>
				<?php } ?>
			</ul>
		</nav>
		<?php } ?>