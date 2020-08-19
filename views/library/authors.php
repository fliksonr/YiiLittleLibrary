<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Authors</h1>

<ul>
  <?php foreach ($authors as $author): ?>
    <li>
          <?= Html::encode(" {$author->full_name}") ?>,
          Дата рождения  <?= $author->date_of_birth ?>
    </li>
  <?php endforeach; ?>
</ul>
<?= LinkPager::widget(['pagination'=>$pagination]) ?>
