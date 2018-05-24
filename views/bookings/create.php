<?php

use yii\helpers\Html;


$this->title = 'Create Bookings';
$this->params['breadcrumbs'][] = ['label' => 'bookings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bookings-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>