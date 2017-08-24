<?php if ($user_login){ ?>
<p class="loggedin"><?php _e('Logged in as '); echo '<strong>' .$user_identity. '</strong>';?> &nbsp; <a href="<?php echo wp_logout_url(); ?>" title="<?php _e('Logout'); ?>"><i class="fa fa-sign-out"></i> <?php _e('Logout'); ?></a></p>
</ul>
<?php } ?>