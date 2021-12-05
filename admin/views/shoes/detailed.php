<div class="row" style="background:#007bff;border-radius:10px;">
    <h2 style="color: #fff; padding:5px 0px 0px 10px;">Chi Tiết</h2>
</div>
<div class="row">
    <div class="col-lg-6">
        <?php foreach($shoes as $index => $item): ?>
            <p>Tên giày : <b><?=$item['name'] ?></b></p>
            <p>Giá : <b><?=$item['price'] ?></b></p>
            <p>Chi tiết : <b><?=$item['detailed'] ?></b></p>
            <p>Like : <b><?=$item['favor'] ?></b></p>
            <p>Sale (%) : <b><?=$item['sale'] ?></b></p>
        <?php endforeach?>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header" style="text-align: center; background:#007bff;">
                <h2 style="color: #fff;" class="card-title">SIZE</h2>
            </div>
            <div class="card-body">
                <table class="table tabl-stripped">
                    <thead>
                        <th>STT</th>
                        <th>Tên giày</th>
                        <th>Size</th>
                        <th>Số lượng</th>
                        <!-- <th>Hiển thị menu</th> -->
                        <th>
                            <a href="<?= ADMIN_URL . 'shoe_size/tao-moi?id='.$_GET['id']?>" class="btn btn-sm btn-success">Tạo mới</a>
                        </th>
                    </thead>
                    <tbody>
                        <?php foreach($size as $index => $item): ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <?php foreach($shoes as $index => $item_s):
                                    if($item_s['id']==$item['id_shoe']){
                                ?>
                                        <td><?= $item_s['name']?></td>
                                <?php
                                    }
                                 endforeach?>
                                <td><?= $item['size'] ?></td>
                                <td><?= $item['quantity'] ?></td>
                                <td>
                                    <a href="<?= ADMIN_URL . 'shoe_size/cap-nhat?id='. $item['id'].'&&id_shoe='.$item['id_shoe'] ?>" class="btn btn-sm btn-info">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a  onclick="return confirm('Bạn có muốn xóa <?= $item['size']?>');" href="<?= ADMIN_URL . 'shoe_size/xoa?id='. $item['id'] ?>" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header" style="text-align: center; background:#007bff;">
                <h2 style="color: #fff;" class="card-title">Ảnh</h2>
            </div>
            <div class="card-body">
                <table class="table tabl-stripped">
                    <thead>
                        <th>STT</th>
                        <th>Tên giày</th>
                        <th>Ảnh giày</th>
                        <!-- <th>Hiển thị menu</th> -->
                        <th>
                            <a href="<?= ADMIN_URL . 'image_shoe/tao-moi?id='.$_GET['id']?>" class="btn btn-sm btn-success">Tạo mới</a>
                        </th>
                    </thead>
                    <tbody>
                        <?php foreach($img as $index => $item_img): ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <?php foreach($shoes as $index => $item_s):
                                    if($item_s['id']==$item_img['id_shoe']){
                                ?>
                                        <td><?= $item_s['name']?></td>
                                <?php
                                    }
                                 endforeach?>
                                <td><img width="150px" height="150px" src="<?=PUBLIC_URL .$item_img['img']?>" alt="<?=$item_img['img']?>"></td>
                                <td>
                                    <a href="<?= ADMIN_URL . 'image_shoe/cap-nhat?id='. $item_img['id'].'&&id_shoe='.$item_img['id_shoe'] ?>" class="btn btn-sm btn-info">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a  onclick="return confirm('Bạn có muốn xóa <?= $item_img['img']?>');" href="<?= ADMIN_URL . 'image_shoe/xoa?id='. $item_img['id'] ?>" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>