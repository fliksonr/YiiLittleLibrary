<?php
namespace app\controllers;
use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Authors;
use app\models\Genre;
use app\models\Books;
use app\models\SearchForm;
use app\models\AddAuthorForm;
use app\models\DeleteAuthorForm;


use \yii\db\Query;
/**
 *
 */
class LibraryController extends Controller
{
  public function actionAuthors()
  {
    $query = Authors::find();
    $pagination = new Pagination([
      'defaultPageSize'=>5,
      'totalCount'=>$query->count(),
    ]);
    $authors = $query->orderBy('full_name')
                       ->offset($pagination->offset)
                       ->limit($pagination->limit)
                       ->all();
    return $this->render('authors',[
      'authors'=>$authors,
      'pagination'=>$pagination,
    ]);
  }

  public function actionGenre()
  {
    $query = Genre::find();
    $pagination = new Pagination([
      'defaultPageSize'=>5,
      'totalCount'=>$query->count(),
    ]);
    $genre = $query->orderBy('genre_name')
                       ->offset($pagination->offset)
                       ->limit($pagination->limit)
                       ->all();
    return $this->render('genre',[
      'genre'=>$genre,
      'pagination'=>$pagination,
    ]);
  }

  public function actionBooks()
  {
    $query = Books::find()->innerjoinWith('genre');
    $pagination = new Pagination([
      'defaultPageSize'=>5,
      'totalCount'=>$query->count(),
    ]);
    $books = $query->orderBy('genre_name')
                       ->offset($pagination->offset)
                       ->limit($pagination->limit)
                       ->all();
    return $this->render('books',[
      'books'=>$books,
      'pagination'=>$pagination,
    ]);
  }

  public function actionTwenty()
  {
    $query = Books::find()->where(['and','publish_year<2000','publish_year>1900']);
    $pagination = new Pagination([
      'defaultPageSize'=>5,
      'totalCount'=>$query->count(),
    ]);
    $books = $query->orderBy('publish_year')
                       ->offset($pagination->offset)
                       ->limit($pagination->limit)
                       ->all();
    return $this->render('twenty',[
      'books'=>$books,
      'pagination'=>$pagination,
    ]);
  }

  public function actionCount()
  {
    $query = Authors::find()->innerjoinWith('author_books');
    $pagination = new Pagination([
      'defaultPageSize'=>5,
      'totalCount'=>$query->count(),
    ]);
    $authors =   $query->GroupBy('author_id')
                       ->orderBy('full_name')
                       ->offset($pagination->offset)
                       ->limit($pagination->limit)
                       ->all();
    return $this->render('count',[
      'authors'=>$authors,
      'pagination'=>$pagination,
    ]);
  }

  public function actionSearchbook()
  {
    $model = new SearchForm();
    if ($model->load(Yii::$app->request->post())&& $model->validate()) {
      $books = Books::find()
                  ->innerjoinWith('genre')
                  ->innerjoinWith('author')
                  ->where(['like','book_name', $model->book_name])
                  ->all();
      return $this->render('searchbook',
       ['model' => $model, 
        'books' =>$books,
      ]);
    }else{
      return $this->render('searchbook', ['model'=>$model]);
    }
  }

  public function actionAddauthor()
  {
    $model = new AddAuthorForm();
    if ($model->load(Yii::$app->request->post())&& $model->validate()) {
      $author_data = new Authors();
      $author_data -> full_name = $model->author_name;
      $author_data -> date_of_birth = $model->author_date_of_birth;
      $author_data -> date_of_death = $model->author_date_of_death;
      $author_data ->save();

      return $this ->render('addauthor',['model'=>$model,'author_data'=>$author_data]);
    }else{
      return $this->render('addauthor',['model'=>$model]);
    }
  }

  public function actionDeleteauthor()
  {
    $model = new DeleteAuthorForm();
    if ($model->load(Yii::$app->request->post())&& $model->validate()) {
      $author_data_delete =Authors::findOne($model->author_id);
      if(!empty($author_data_delete)){
      $author_data_delete ->delete();
    }else{
      return  'Автора не с таким id существует';
    }
      return $this ->render('deleteauthor',['model'=>$model,'author_data_delete'=>$author_data_delete]);
  }else{
    return $this ->render('deleteauthor',['model'=>$model]);
  }
}
}
