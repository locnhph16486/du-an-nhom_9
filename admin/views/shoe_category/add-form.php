<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tạo mới danh mục</h3>
            </div>
            <div class="card-body">
                <form action="<?= ADMIN_URL . 'shoe_category/luu-tao-moi'?>" method="post">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                          <label for="">Tên danh mục giày</label>
                          <input type="text" name="name" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <select class="form-control" name="id_shoe_brand">
                            <?php foreach($brand as $index => $item): ?>
                                    <option value="<?php echo $item['id'] ?>"><?php echo $item['name'] ?></option>  
                            <?php endforeach?>
                        </select>
                        <br>
                        <div class="d-flex justify-content-center">
                            <a href="<?= ADMIN_URL . 'shoe_category'?>" class="btn btn-sm btn-danger">Hủy</a>
                            &nbsp;
                            <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>