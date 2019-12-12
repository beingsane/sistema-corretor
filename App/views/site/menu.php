<?php if(!isset($_SESSION['isLogado'])) { ?>
<a href="site/login">Login</a>

<?php } else { ?>
<a href="site/logout">Logout</a>
<?php } ?>