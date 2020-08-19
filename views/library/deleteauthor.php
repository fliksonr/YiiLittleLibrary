<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;
?>
<h1>Delete author</h1>
<div class="row">
    <div class="col-sm-5 ">
<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'author_id')->label('Введите id автора'); ?>
    <div class="form-group">
    <?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
  </div>
<?php ActiveForm::end(); ?>
    </div>
  </div>

  <?php if (!empty($author_data_delete->full_name)){ ?>
    Успешно удален автор со следующими данными
    <ul>
      <li>Имя:
    <?= Html::encode("{$author_data_delete->full_name}  ") ?>
  </li>
  <li>Дата рождения:
    <?= Html::encode("{$author_data_delete->date_of_birth}  ") ?>
  </li>
    <li>Дата смерти:
    <?= Html::encode("{$author_data_delete->date_of_death}  ") ?>
  </li>
</ul>

<?php }

?>
