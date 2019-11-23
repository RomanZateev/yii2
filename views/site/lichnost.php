<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="body-content">
        <form action="">
            <div class="form-group">
                <label>Фамилия</label>
                <input type="text" class="form-control" id="Familiya" aria-describedby="Familiya" placeholder="Введите фамилию">    
            </div>
            <div class="form-group">
                <label>Имя</label>
                <input type="text" class="form-control" id="Imya" aria-describedby="Imya" placeholder="Имя">    
            </div>
            <div class="form-group">
                <label>Отчество</label>
                <input type="text" class="form-control" id="Otchestvo" aria-describedby="Otchestvo" placeholder="Введите отчетсво">    
            </div>
            <div class="form-group">
                <label>Дата рождения</label>
                <input type="date" class="form-control" id="Data_rojdenya" aria-describedby="Data_rojdenya" placeholder="Введите дату рождения">    
            </div>
            <div class="form-group">
                <label>Пол</label>
                <input type="text" class="form-control" id="Pol" aria-describedby="Pol" placeholder="Введите пол">    
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
