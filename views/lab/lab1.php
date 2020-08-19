<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="row">
  <div class="alert alert-success" role="alert">
  <h4>Лабораторная работа №1</h4>
</div>
    <div class="col-lg-5">
<?php $form = ActiveForm::begin(); ?>
<!-- Проблема скорее всего где то здесь -->
    <?= $form->field($model, 'name')->label('Имя'); ?>
    <?= $form->field($model, 'email')->label('Электронная почта'); ?>
    <?= $form->field($model, 'visiting_date')->label('Дата посещения')
    ->widget(\yii\widgets\MaskedInput::className(), [
  'mask' => '99.99.9999']); ?>
    <?= $form->field($model, 'age')->label('Возраст'); ?>
    <?= $form->field($model, 'fav_meal')->dropdownList([
        'Русская' => 'Русская',
        'Грузинская' => 'Грузинская',
        'Итальянская' => 'Итальянская'
    ],
    ['prompt'=>'Выберите кухню']
)->label('Любимая кухня'); ?>
    <?= $form->field($model, 'recommend')->radioList([
      'Да' => 'Да',
      'Нет' => 'Нет'
    ])->label('Порекомендуете ли Вы нас своим друзьям?'); ?>
    <?= $form->field($model, 'review')->textArea()->label('Отзыв'); ?>


    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
    </div>

  </div>
</div>
<?php ActiveForm::end(); ?>
