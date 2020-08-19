<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;
?>
<h1>Book Search</h1>
<div class="row">

    <div class="col-sm-5 ">
<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'book_name')->label('Введите название книги'); ?>
    <div class="form-group">
    <?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
  </div>
<?php ActiveForm::end(); ?>
    </div>
  </div>

  <?php if (!empty($books)){ ?>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Название книги</th>
          <th scope="col">Автор</th>
          <th scope="col">Описание</th>
          <th scope="col">Год выхода</th>
          <th scope="col">Жанр</th>
        </tr>
      </thead>
      <tbody>
    <?php foreach($books as $book): ?>
      <tr>
        <td><?= Html::encode("{$book->book_name}  ") ?></td>
        <td><?= Html::encode("{$book->author->full_name}  ") ?></td>  
        <td><?= Html::encode("{$book->description}") ?></td>
        <td><?= Html::encode("{$book->publish_year} ") ?></td>
        <td><?= Html::encode("{$book->genre->genre_name} ") ?></td>

      </tr>
    <?php endforeach; ?>
  </tbody>
  </table>
<?php } ?>
