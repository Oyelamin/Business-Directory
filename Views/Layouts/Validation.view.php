<?php if(isset($_COOKIE['error'])): ?>
<div style="text-align:center;margin:auto; width:50%;" class="notification is-danger">
    <?php echo $_COOKIE['error']; ?>
</div>
<?php elseif(isset($_COOKIE['success'])):?>
<div style="text-align:center;margin:auto; width:50%;" class="notification is-success">
    <?php echo $_COOKIE['success']; ?>
</div>
<?php endif; ?>