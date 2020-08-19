<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Genres</h1>

<ul>
  <?php foreach ($genre as $genre): ?>
    <li>
        <?= Html::encode("{$genre->genre_name}") ?>,
        Описание:  <?= $genre->description ?>
    </li>
  <?php endforeach; ?>
</ul>
<?= LinkPager::widget(['pagination'=>$pagination]) ?>
