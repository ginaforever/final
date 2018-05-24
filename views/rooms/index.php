<?php 

use yii\helpers\Html;


$this->title = "Rooms";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<p>
        <?= Html::a('Create Rooms', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<table class="table table-bordered">
    <tr>
    	<th>Id</th>
        <th>Description</th>
        <th>Capacity</th>   
    </tr>
    <?php foreach($model as $model) : ?>
    <tr>
    
    <td>
            <?= Html::a($model->id, ['/rooms/view', 'id'=>$model->id]); ?>
        </td> 
        <td><?= $model->description ?></td>  
        <td><?= $model->capacity ?></td>  
    </tr>
    <?php endforeach; ?>
</table>