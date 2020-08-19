<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "Genre".
 *
 * @property int $genre_id
 * @property string $genre_name
 * @property string $description
 *
 * @property Books[] $books
 */
class Genre extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Genre';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['genre_name', 'description'], 'required'],
            [['genre_name'], 'string', 'max' => 20],
            [['description'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'genre_id' => 'ID жанра',
            'genre_name' => 'Название жанра',
            'description' => 'Описание',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBooks()
    {
        return $this->hasMany(Books::className(), ['genre_id' => 'genre_id']);
    }
}
