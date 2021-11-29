<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <form action="" method="get">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                              <input type="text" name="keyword" value="<?= $keyword ?>" class="form-control" placeholder="Tìm kiếm..." aria-describedby="helpId">
                            </div>
                        </div>
                    </div>
                </form>
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
                            Sửa|Xóa
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
                                    <a href="javascript:;" onclick="confirm_remove('<?= ADMIN_URL . 'shoe_size/xoa?id='. $item['id'] ?>', '<?= $item['size']?>')" class="btn btn-sm btn-danger">
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