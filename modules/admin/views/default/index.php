<div class="admin-default-index">
  <div class="site-index">
      <div class="jumbotron">
    <!-- <h1><?= $this->context->action->uniqueId ?></h1> -->
    <h2>Административная часть</h2>
    <!-- <p>
        This is the view content for action "<?= $this->context->action->id ?>".
        The action belongs to the controller "<?= get_class($this->context) ?>"
        in the "<?= $this->context->module->id ?>" module.
    </p>
    <p>
        You may customize this page by editing the following file:<br>
        <code><?= __FILE__ ?></code>
    </p> -->

    <div class="body-content">
        <div class="row">
            <div class="col-lg-4">
                <p><a class="btn btn-lg btn-success" href="/admin/books">Книги</a></p>
            </div>
            <div class=" col-lg-4">
                <p><a class="btn btn-lg btn-success" href="admin/authors">Авторы</a></p>
            </div>
            <div class=" col-lg-4">
                <p><a class="btn btn-lg btn-success" href="/admin/genre">Жанры</a></p>
            </div>
            </div>
        </div>
      </div>
    </div>
</div>
