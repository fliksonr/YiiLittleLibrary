<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;
?>
<h1>Add author</h1>
<div class="row">

    <div class="col-sm-5 ">
<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'author_name')->label('Введите имя автора'); ?>
    <?= $form->field($model, 'author_date_of_birth')
             ->label('Введите дату рождения автора')
             ->widget(\yii\widgets\MaskedInput::className(), [
  'mask' => '9999.99.99']); ; ?>
    <?= $form->field($model, 'author_date_of_death')
             ->label('Введите дату смерти автора')
             ->widget(\yii\widgets\MaskedInput::className(), [
  'mask' => '9999.99.99']); ; ?>

    <div class="form-group">
    <?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
  </div>
<?php ActiveForm::end(); ?>
    </div>
  </div>

  <?php if (!empty($author_data)){ ?>
    Успешно добавлен автор со следующими данными
    <ul>
      <li>Имя:
    <?= Html::encode("{$author_data->full_name}  ") ?>
  </li>
  <li>Дата рождения:
    <?= Html::encode("{$author_data->date_of_birth}  ") ?>
  </li>
    <li>Дата смерти:
    <?= Html::encode("{$author_data->date_of_death}  ") ?>
  </li>
</ul>

  <?php } ?>
