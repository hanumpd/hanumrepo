<?php

use yii\widgets\ListView;
use backend\models\PostSearch;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <!--    <div class="jumbotron">
            <h1>Congratulations!</h1>
    
            <p class="lead">You have successfully created your Yii-powered application.</p>
    
            <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
        </div>-->

    <!--    <div class="body-content">
    
            <div class="row">
                <div class="col-lg-4"  style="border: 20px">
                    <h2>Berita 1 (Ga Penting)</h2>
    
                    <p>Hai semuanya. nama gue hanum. i don't know what kind of news that i'll share with you guys today but, tadi pagi gue sakit perut karena makan ayam d'besto pake saos sambel. literally gue lupa kalau gua gabisa makan saos sambel karena biasanya gue makan saos tomat bisanya. sekian berita ga penting ini. cherrio!!</p>
    
                    <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
                </div>
                <div class="col-lg-2 col-lg-offset-6" style="border: 1px black solid; padding: 10px">
                    <h2>Category</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                       dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                       ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                       fugiat nulla pariatur</p>
                    
                </div>
            </div>    
            <div class="row">
                <div class="col-lg-4">
                    <h2>Berita 2</h2>
    
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur.</p>
    
                    <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
                </div>
                <div class="col-lg-2 col-lg-offset-6" style="border: 1px black solid; padding: 10px">
                    <h2>Tags</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur</p>
                    
                </div>
                
            </div>
                
            <div class="row">
                <div class="col-lg-4">
                    <h2>Berita 3</h2>
    
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur.</p>
    
                    <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
                </div>
            </div>
            </div>-->
    <div id='header-inner'>
        <div class="title-wrapper" style="margin-left: 270pt">
            <h1>A Bunch Of Chocolate</h1>

        </div>
        <div class="descriptionwrapper" style="margin-left: 330pt">
            <p class="description"><span>by Hanum Puspita Damayanti</span></p>
        </div>
        <div class="body-content">

            <div class="row">
                <div class="col-md-9"  style="min-height: 600px">
                    <?php
                    echo ListView::widget([
                        'dataProvider' => $dataProvider,
                        'itemView' => '_itemView',
                    ]);
                    ?>
                    <!--                <h2>Berita 1 (Ga Penting)</h2>
                    
                                    <p>Hai semuanya. nama gue hanum. i don't know what kind of news that i'll share with you guys today but, tadi pagi gue sakit perut karena makan ayam d'besto pake saos sambel. literally gue lupa kalau gua gabisa makan saos sambel karena biasanya gue makan saos tomat bisanya. sekian berita ga penting ini. cherrio!!</p>
                    
                                    <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>-->
                </div>
                <div class="col-md-3">
                    <div class="panel panel-success" style="width: 100%; margin-bottom: 20px">
                        <div class="panel-heading"> 
                            <h3 class="panel-title">Category</h3>
                        </div>
                        <div class="panel-body">
                            <?=$category?>
                        </div>
                    </div>
                </div>     
                    <div class="col-md-3">
                        <div class="panel panel-success" style="width: 100%; margin-bottom: 20px">
                            <div class="panel-heading">
                                <h3 class="panel-title">Tags</h3>
                            </div>
                            <div class="panel-body">
                                ...
                            </div>
                        </div>
                    </div>
                 
                
            </div>

        </div>
    </div>
