<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "Books".
 *
 * @property int $book_id
 * @property string $book_name
 * @property string $description
 * @property string $publish_year
 * @property int $author_id
 * @property int $genre_id
 *
 * @property Authors $author
 * @property Genre $genre
 * @property Comments[] $comments
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Books';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['book_name', 'description', 'publish_year', 'author_id', 'genre_id'], 'required'],
            [['publish_year'], 'safe'],
            [['author_id', 'genre_id'], 'integer'],
            [['book_name'], 'string', 'max' => 30],
            [['description'], 'string', 'max' => 50],
            [['author_id'], 'exist', 'skipOnError' => true, 'targetClass' => Authors::className(), 'targetAttribute' => ['author_id' => 'authors_id']],
            [['genre_id'], 'exist', 'skipOnError' => true, 'targetClass' => Genre::className(), 'targetAttribute' => ['genre_id' => 'genre_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'book_id' => 'ID книги',
            'book_name' => 'Название книги',
            'description' => 'Описание книги',
            'publish_year' => 'Год публикации',
            'author_id' => 'ID автора',
            'genre_id' => 'ID жанра',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(Authors::className(), ['authors_id' => 'author_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGenre()
    {
        return $this->hasOne(Genre::className(), ['genre_id' => 'genre_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comments::className(), ['book_id' => 'book_id']);
    }
}
