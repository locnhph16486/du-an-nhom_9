<div class="row">
    <div class="col-12">
        <div class="card">
            <!-- <div class="card-header">
                <form action="" method="get">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                              <input type="text" name="keyword" value="<?= $keyword ?>" class="form-control" placeholder="Tìm kiếm..." aria-describedby="helpId">
                            </div>
                        </div>
                    </div>
                </form>
            </div> -->
            <div class="card-body">
                <table class="table tabl-stripped">
                    <thead>
                        <th>STT</th>
                        <th>Tên giày</th>
                        <th>Ảnh giày</th>
                        <!-- <th>Hiển thị menu</th> -->
                        <!-- <th>
                            <a href="<?= ADMIN_URL . 'shoe_category/tao-moi'?>" class="btn btn-sm btn-success">Tạo mới</a>
                        </th> -->
                        <th>
                            Sửa|Xóa
                        </th>
                    </thead>
                    <tbody>
                        <?php foreach($img as $index => $item): ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <?php foreach($shoes as $index => $item_s):
                                    if($item_s['id']==$item['id_shoe']){
                                ?>
                                        <td><?= $item_s['name']?></td>
                                <?php
                                    }
                                 endforeach?>
                                <td><img width="150px" height="150px" src="<?=PUBLIC_URL .$item['img']?>" alt="<?=$item['img']?>"></td>
                                <td>
                                    <a href="<?= ADMIN_URL . 'image_shoe/cap-nhat?id='. $item['id'].'&&id_shoe='.$item['id_shoe'] ?>" class="btn btn-sm btn-info">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="javascript:;" onclick="confirm_remove('<?= ADMIN_URL . 'image_shoe/xoa?id='. $item['id'] ?>', '<?= $item['img']?>')" class="btn btn-sm btn-danger">
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