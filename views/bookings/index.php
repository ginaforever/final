<?php 

use yii\helpers\Html;


$this->title = "Bookings";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<p>
<?php if(Yii::$app->user->isGuest): ?>
    <span class="pull-right">Please <?= Html::a('login',['/site/login'])?> to create booking.</span>
<?php else: ?>
        <?= Html::a('Create Bookings', ['create'], ['class' => 'btn btn-success']) ?>
<?php endif; ?> 
<table class="table table-bordered">
    <tr>
        <th>Id</th>
        <th>customer_id</th>
        <th>arrive</th>
        <th>leave</th>
        <th>people</th>
    </tr>
    <?php foreach($pro as $models) : ?>
    <tr>
    
    <td>
            <?= Html::a($models->room_id, ['/bookings/view', 'id'=>$models->id]); ?>
            <td><?= $models->customer_id ?></td>
            <td><?= $models->arrive ?></td>
            <td><?= $models->leave ?></td>
            <td><?= $models->people ?></td>       
        </td> 
    </tr>
    <?php endforeach; ?>
</table>