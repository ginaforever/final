<?php
use yii\widgets\DetailView;
//$bookings

$this->title = "View Bookings: $booking->name";
$this->params['breadcrumbs'][] = ['label'=>'', 'url'=>['/bookings/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= $this->title; ?></h1>s

<?= DetailView::widget([
    'model' => $room,
    'attributes' => [
        'id',
        'customer_id',
        'room_id',
        'arrive',
        'leave',
        'people',

    ]
]);