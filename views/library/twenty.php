<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>20th Century Books</h1>

<ul>
  <?php foreach($books as $book): ?>
    <li>
        <?= Html::encode(" {$book->book_name} {$book->publish_year} ") ?>,
        Описание:  <?= $book->description ?>
    </li>
  <?php endforeach; ?>
</ul>
<?= LinkPager::widget(['pagination'=>$pagination]) ?>
