<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="body-content">
        <div class="row">
            <h2>Работники</h2>
            <p>
                <?= Html::a('Добавить', ['lichnost/new'], ['class'=>'btn btn-lg btn-success']) ?>
            </p>
        </div>
        <div class="row">
            <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Фамилия</th>
                    <th>Имя</th>
                    <th>Отчество</th>
                    <th>Дата рождения</th>
                    <th>Пол</th>
                    <th></th>
                </tr>
            </thead>
                <tbody>
                    <?php foreach ($people as $man) {?>
                    <tr>
                        <td><?php echo $man->Familiya; ?></td>
                        <td><?php echo $man->Imya; ?></td>
                        <td>
                            <?php 
                                if ($man->Otchestvo)
                                    echo $man->Otchestvo;
                                else
                                    echo "-";
                            ?>
                        </td>
                        <td><?php echo $man->Data_rojdenya; ?></td>
                        <td>
                            <?php 
                                echo $man->Pol;
                            ?>
                        </td>
                        <td>
                            <?= Html::a('', ['api/lichnost'], ['class'=>'glyphicon glyphicon-eye-open'], ['data-method' => 'POST']) ?>
                            <?= Html::a('', ['user/useredit', 'id' => $man['idLichnost']], ['class'=>'glyphicon glyphicon-pencil']) ?>
                            <?= Html::a('', ['user/userdelete', 'id' => $man['idLichnost']], ['class'=>'glyphicon glyphicon-remove']) ?>
                        </td>
                        <?php }?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
