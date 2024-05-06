<?php
// session_start([
//     'cookie_lifetime' => 300
// ]);
?>

<div style="border-bottom: 1px solid; border-color:#eee; padding-bottom: 30px; margin-bottom:30px;">
    <div class="float-left">
        <p>
            <a href="/lwhh/session/myauthcrud/index.php?task=report">All Students</a>
            <a href="/lwhh/session/myauthcrud/index.php?task=add">Add New Student</a>
            <a href="/lwhh/session/myauthcrud/index.php?task=seed">Seed</a>

        </p>
    </div>

    <div class="float-right">
        <?php if(!$_SESSION['loggedin']): ?>

        <a href="/lwhh/session/myauthcrud/auth.php">Login </a>
      <?php else:?>
            <a href="/lwhh/session/myauthcrud/auth.php">Log Out </a>
       <?php endif; ?>
    </div>
    <p></p>
</div>