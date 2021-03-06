<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\WishlistSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Master Wishlist';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wishlist-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Data Wishlist', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="box">
    <div class="box-header">
        <b><center> <h3 class="box-title">Data Master Produk</h3></center></b>
    </div>

<div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th><center>No</center></th>
            <th><center>Id Wishlist</center></th>
            <th><center>Nama Konsumen</center></th>
            <th><center>Nama Produk</center></th>
            <th><center>Aksi</center></th>
           
        </tr>
        </thead>

        <tbody>

        <?php
        $no=1;foreach($model as $db):

        ?>
           <td><center><?= $no; ?></center></td>    
           <td><center><?= $db['id_wishlist']?></center></td>    
           <td><center><?= $db['nama_konsumen']?></center></td>    
           <td><center><?= $db['nama_produk']?></center></td>        

           <td> <center>
               <?= Html::a('<i class="fa fa-search"></i>', ['/wishlist/view', 'id' =>$db['id_wishlist']], ['class' => 'btn btn-warning btn-xs']) ?>
                <?= Html::a('<i class="fa fa-pencil"></i>', ['/wishlist/update', 'id' =>$db['id_wishlist']], ['class' => 'btn btn-info btn-xs']) ?>
                <?= Html::a('<i class="fa fa-trash"></i>', ['/wishlist/delete', 'id' =>$db['id_wishlist']], [
                    'class' => 'btn btn-danger btn-xs',
                    'data' => [
                    'confirm' => 'anda yakin ingin menghapus "'.$db['id_wishlist']. '"?',
                    'method' => 'post', 
                    ]
                    ]); ?>

             </center></td>
          </tr>

            <?php $no++;endforeach; ?>

          </tbody>
        </table>           
       </div>         
     </div>               

</div>
