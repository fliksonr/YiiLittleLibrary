<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>How much books author have?</h1>

<ul>
  <?php foreach($authors as $author): ?>
    <li>
        <?= Html::encode("{$author->full_name}  ") ?>,
         <?= Html::encode(count($author->author_books)) ?>
    </li>
  <?php endforeach; ?>
</ul>
<?= LinkPager::widget(['pagination'=>$pagination]) ?>
