<?php
namespace app\models;
use yii\db\ActiveRecord;
use app\models\Genre;
class Books extends ActiveRecord
{
  public function getGenre()
  {
     return $this->hasOne(Genre::classname(), ['genre_id' => 'genre_id']);
                                         // id жанра в жанре  id жанра в книге
  }
  public function getAuthor()
  {
    return $this->hasOne(Authors::classname(),['authors_id'=>'author_id']);
  }
}
