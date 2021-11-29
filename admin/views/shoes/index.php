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
                        <th>Tên danh mục giày</th>
                        <th>Tên giày</th>
                        <th>Giá</th>
                        <th>Lượt thích</th>
                        <th>Giảm giá (%)</th>
                        <!-- <th>Hiển thị menu</th> -->
                        <th>
                            <a href="<?= ADMIN_URL . 'shoes/tao-moi'?>" class="btn btn-sm btn-success">Tạo mới</a>
                        </th>
                    </thead>
                    <tbody>
                        <?php foreach($shoes as $index => $item): ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <?php foreach($category as $index => $item_cate):
                                    if($item_cate['id']==$item['id_category']){
                                ?>
                                        <td><?= $item_cate['name']?></td>
                                <?php
                                    }
                                 endforeach?>
                                <td><?= $item['name'] ?></td>
                                <td><?= $item['price']?></td>
                                <td><?= $item['favor']?></td>
                                <td><?= $item['sale']?></td>
                                <td>
                                    <a href="<?= ADMIN_URL . 'shoes/chi-tiet-giay?id='. $item['id'] ?>" class="btn btn-sm btn-info" data-toggle="tooltip" title="Chi tiết" > 
                                        <i class="fas fa-highlighter"></i>
                                    </a>
                                    <a href="<?= ADMIN_URL . 'shoes/cap-nhat?id='. $item['id'] ?>" class="btn btn-sm btn-info" data-toggle="tooltip" title="Sửa" >
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="javascript:;" onclick="confirm_remove('<?= ADMIN_URL . 'shoes/xoa?id='. $item['id'] ?>', '<?= $item['name']?>')" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Xóa" >
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