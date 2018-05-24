<?php 

use yii\helpers\Html;


$this->title = "Customer";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<p>
        <?= Html::a('Create Customer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<table class="table table-bordered">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>   
        <th>phone</th>
        </tr>
    <?php foreach($model as $model) : ?>
    <tr>
    
    <td>
            <?= Html::a($model->id, ['/customer/view', 'id'=>$model->id]); ?>
        </td>  
        <td><?= $model->name ?></td>
        <td><?= $model->address ?></td>
        <td><?= $model->phone ?></td>

    </tr>
    <?php endforeach; ?>
</table>
