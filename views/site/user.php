<?php
echo $name;
use app\components\Hello;
?>
<div> виджет gоворит <?= Hello::widget(['message' => 'Hello world'])?></div>
