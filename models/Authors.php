<?php
namespace app\models;
use yii\db\ActiveRecord;
class Authors extends ActiveRecord
{
  public function getAuthor_books()
  {
     return $this->hasMany(Books::classname(), ['author_id' => 'authors_id']);
  }
}
