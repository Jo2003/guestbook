<h2><?php echo  __('Guestbook', 'guestbook'); ?></h2>
<h3><?php echo __('Add comment', 'guestbook'); ?></h3>
<form method="post" action='<?php echo $actionlink; ?>'>
    <input type='hidden' name='csrf' value='<?php echo $token; ?>' />
    <table>
        <tr>
            <td><label for='guestbook_username'><?php echo __('Username', 'guestbook'); ?>:</label></td>
            <td><input type="text" id='guestbook_username' name="guestbook_username" value="<?php echo $username; ?>" /></td>
        </tr>
        <tr>
            <td><label for='guestbook_email'><?php echo __('Email', 'guestbook'); ?>:</label></td>
            <td><input type="text" id='guestbook_email' name="guestbook_email" value="<?php echo $email; ?>" /></td>
        </tr>
        <tr>
            <td><label for='guestbook_message'><?php echo __('Message', 'guestbook'); ?>:</label></td>
            <td><textarea rows='8' cols='40' name='guestbook_message'><?php echo $message; ?></textarea></td>
        </tr>
<?php if (Option::get('captcha_installed') == 'true') { ?>
        <tr>
            <td><label for='gb_captcha'><?php echo __('Captcha', 'users'); ?>:</label><?php CryptCaptcha::draw(); ?></td>
            <td><input type="text" name="answer" id='gb_captcha' value='<?php if (isset($errors['captcha_wrong'])) echo Html::nbsp(3).'<span class="error">'.$errors['captcha_wrong'].'</span>'; ?>' /></td>
        </tr>
<?php } ?>        
    </table>
    <?php if (count($errors) > 0) { ?>
    <br />
    <ul>
    <?php foreach($errors as $error) { ?>
        <li><?php echo $error; ?></li>
    <?php } ?>             
    </ul>             
    <?php } ?> 
    <br />
    <input type="submit" value="<?php echo __('Send', 'guestbook'); ?>" name="guestbook_submit"/>
</form>