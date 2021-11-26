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
                        <!-- <th>Hiển thị menu</th> -->
                        <th>
                            <a href="<?= ADMIN_URL . 'shoe_brand/tao-moi'?>" class="btn btn-sm btn-success">Tạo mới</a>
                        </th>
                    </thead>
                    <tbody>
                        <?php foreach($brand as $index => $item): ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><?= $item['name'] ?></td>
                                <td>
                                    <a href="<?= ADMIN_URL . 'shoe_brand/cap-nhat?id='. $item['id'] ?>" class="btn btn-sm btn-info">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="javascript:;" onclick="confirm_remove('<?= ADMIN_URL . 'shoe_brand/xoa?id='. $item['id'] ?>', '<?= $item['name']?>')" class="btn btn-sm btn-danger">
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