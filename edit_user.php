<?php
require('./includes/pdo.php');
require('./includes/functions.php');
?>
<?php
if(!empty($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
$sql_edit_user = "SELECT * FROM users WHERE id = :id";
$query = $pdo->prepare($sql_edit_user);
$query->bindValue(':id',$id, PDO::PARAM_INT);
$query->execute();
$users = $query->fetch();
?>
<h1>Editer un utilisateur</h1>
