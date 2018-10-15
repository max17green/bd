
<ul class="list-group">
<?php
    foreach ($users as $user) {
        ?>
        <li class="list-group-item"><?= $user["name"] ?></li>
        <?php
    }
?>
</ul>
<?php
//echo json_encode($users);
?>
