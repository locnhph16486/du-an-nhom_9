<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tạo mới danh mục</h3>
            </div>
            <div class="card-body">
                <form action="<?= ADMIN_URL . 'shoe_category/luu-cap-nhat?id='. $_GET['id']?>" method="post">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                          <label for="">Tên danh mục giày</label>
                          <?php foreach($category as $index => $item): 
                            if($item['id']==$_GET['id'])
                            {
                            ?>
                          <input type="text" name="name" class="form-control" placeholder="<?=$item['name']?>" aria-describedby="helpId">
                          <?php
                                                          
                            }
                          endforeach?>
                        </div>
                        <div class="form-group">
                          <label for="">Tên hãng giày</label>
                          <select class="form-control" name="id_shoe_brand">
                            <?php foreach($brand as $index => $item): ?>
                                    <option value="<?php echo $item['id'] ?>"><?php echo $item['name'] ?></option>  
                            <?php endforeach?>
                        </select>
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <a href="<?= ADMIN_URL . 'shoe_category'?>" class="btn btn-sm btn-danger">Hủy</a>
                            &nbsp;
                            <button type="submit" class="btn btn-sm btn-primary">Cập nhật</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>