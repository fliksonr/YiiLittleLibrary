<?php
namespace app\models;
use yii\db\ActiveRecord;
use app\models\Books;
class Genre extends ActiveRecord
{
  public function getBooks()
  {
     return $this->hasMany(Books::classname(), ['genre_id' => 'genre_id']);
  }
}
