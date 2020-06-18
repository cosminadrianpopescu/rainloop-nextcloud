<?php script('rainloop', 'admin') ?>

<div class="section">
	<form id="mail-rainloop-admin-form" action="#" method="post">
		<input type="hidden" name="requesttoken" value="<?php echo $_['requesttoken'] ?>" id="requesttoken">
		<input type="hidden" name="appname" value="rainloop">

		<fieldset class="personalblock">
			<h2><?php echo($l->t('RainLoop Webmail')); ?></h2>
			<br />
			<p>
				<div style="display: flex;">
					<input type="radio" id="rainloop-noautologin" name="rainloop-autologin" value="0" <?php if (!$_['rainloop-autologin']&&!$_['rainloop-autologin-with-email']): ?>checked="checked"<?php endif; ?> />
					<label style="margin: auto 5px;" for="rainloop-noautologin">
						<?php echo($l->t('Users will login manually, or define credentials in their personal settings for automatic logins.')); ?>
					</label>
				</div>
				<div style="display: flex;">
					<input type="radio" id="rainloop-autologin" name="rainloop-autologin" value="1" <?php if ($_['rainloop-autologin']): ?>checked="checked"<?php endif; ?> />
					<label style="margin: auto 5px;" for="rainloop-autologin">
						<?php echo($l->t('Attempt to automatically login users with their Nextcloud username and password, or user-defined credentials, if set.')); ?>
					</label>
				</div>
				<div style="display: flex;">
					<input type="radio" id="rainloop-autologin-with-email" name="rainloop-autologin" value="2" <?php if ($_['rainloop-autologin-with-email']): ?>checked="checked"<?php endif; ?> />
					<label style="margin: auto 5px;" for="rainloop-autologin-with-email">
						<?php echo($l->t('Attempt to automatically login users with their Nextcloud email and password, or user-defined credentials, if set.')); ?>
					</label>
				</div>
				<br />
				<br />
				<input type="button" id="rainloop-save-button" name="rainloop-save-button" value="<?php echo($l->t('Save')); ?>" />
				&nbsp;&nbsp;<span class="rainloop-result-desc"></span>
			</p>
		</fieldset>
	</form>
</div>
