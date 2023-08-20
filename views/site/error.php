<?php
    use yii\helpers\Html;

    /* @var $this yii\web\View */
    /* @var $name string */
    /* @var $message string */
    /* @var $exception Exception */

    $this->title = $name;
?>
<div class="site-error">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>
    <p>
        A problem occurred while the server processed the request you made.
    </p>
    <p>
        Please, if you think it's a server error contact me via <a href="https://t.me/TalkToDelt_Bot" style="color: blue;">Telegram</a>. Thank you.
    </p>
</div>