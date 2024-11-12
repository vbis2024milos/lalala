<?php
use app\models\UserModel;

/** @var $params UserModel
 */

?>

<div class="card">
    <div class="card-body">
        <h1><?php echo $params->first_name ?? "NEMA" ?> <br> <?php echo $params->last_name ?? "NEMA"?> <br><?php echo $params->email ?? "NEMA"?></h1>
    </div>
</div>
