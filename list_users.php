<?php
require('./includes/pdo.php');
require('./includes/functions.php');
?>
<?php

?>

<h1>Liste des users</h1>
<table>
    <thead>
    <tr>
        <th>id</th>
        <th>nom</th>
        <th>prenom</th>
        <th>email</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($users as $user) {

    }
    ?>
    </tbody>
</table>