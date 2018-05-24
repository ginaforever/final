<?php
use yii\widgets\DetailView;
//$bookings

$this->title = "Bookings: $model->id";
$this->params['breadcrumbs'][] = ['label'=>'', 'url'=>['/bookings/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= $this->title; ?></h1>

<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        'id',
        'customer_id',
        'room_id',
        'arrive',
        'leave',
        'people',

    ]
]);