<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Books</h1>

<ul>
  <?php foreach($books as $book): ?>
    <li>
          <?= Html::encode(" {$book->book_name} ") ?>,
          Жанр: <?= $book->genre->genre_name ?>
          Описание:  <?= $book->description ?>

    </li>
  <?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination'=>$pagination]) ?>
<?php
    $hash = Yii::$app->getSecurity()->generatePasswordHash('12345');
    echo $hash;

    $session = Yii::$app->session;
    $cookies = Yii::$app->request->cookies;
    $usersID = Yii::$app->user->identity;
    echo "<br>Сессия";
    foreach ($session as $name => $value)
    echo "<br>".$name."  ".$value;
    echo "<br>Куки";
    foreach ($cookies as $name => $value)
    echo "<br>".$name."  ".$value;
    echo "<br>Пользовательские куки";
    foreach ($usersID as $key => $value) {
    echo "<br>".$key."  ".$value;

    }
    // if ($cookies->has('_identity')){
    //   echo "Есть ключ";
    // }else {
    //   echo "Нет ключа";
    //   echo $cookies['identity'];
    // }

?>
