<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="row">
  <div class="alert alert-success" role="alert">
  <h4>Лабораторная работа №1</h4>
</div>
    <div class="col-lg-5">
      <h2>Отзыв о ресторане</h2>
<?php $form = ActiveForm::begin(); ?>
<!-- Проблема скорее всего где то здесь -->
    <?= $form->field($model, 'name')->label('Имя'); ?>
    <?= $form->field($model, 'email')->label('Электронная почта'); ?>
    <?= $form->field($model, 'visiting_date')->label('Дата посещения (дд.мм.гггг)'); ?>
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
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>
  </div>
  <div class="col-lg-7">
    <h2>Оставленный отзыв</h2>
      <table class="table table-bordered">
      <tbody>
        <tr>
          <th scope="row">Ваше имя:</th>
          <td><?= Html::encode($model->name) ?></td>
        </tr>
        <tr>
          <th scope="row">Ваш e-mail:</th>
          <td><?= Html::encode($model->email) ?></td>
        </tr>
        <tr>
          <th scope="row">Дата посещения:</th>
          <td><?= Html::encode($model->visiting_date) ?></td>
        </tr>
        <tr>
          <th scope="row">Ваш возраст:</th>
          <td><?= Html::encode($model->age) ?></td>
        </tr>
        <tr>
          <th scope="row">Ваша любимая кухня:</th>
          <td><?= Html::encode($model->fav_meal) ?></td>
        </tr>
        <tr>
          <th scope="row">Порекомендуете ли нас друзьям?</th>
          <td><?= Html::encode($model->recommend) ?></td>
        </tr>
        <tr>
          <th scope="row">Отзыв:</th>
          <td><?= Html::encode($model->review) ?></td>
        </tr>

      </tbody>
  </table>
  </div>
</div>

<?php ActiveForm::end(); ?>
