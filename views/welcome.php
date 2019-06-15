<?php require_once('views/partials/header.php'); ?>

<div class="page-header">
    <h2>Welcome</h2>
</div>

<p>Welcome to Shopping-List</p>

DB:<?php
print_r(\Data\DataManager::exposeConnection());
?>:DB

<?php require_once('views/partials/footer.php'); ?>