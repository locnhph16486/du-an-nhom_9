<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Sửa hãng giày</h3>
            </div>
            <div class="card-body">
                <form action="<?= ADMIN_URL . 'shoe_brand/luu-cap-nhat?id='. $_GET['id']?>" method="post">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                          <label for="">Tên hãng giày</label>
                          <?php foreach($brand as $index => $item): 
                            if($item['id']==$_GET['id'])
                            {
                            ?>
                          <input type="text" name="name" class="form-control" placeholder="<?=$item['name']?>" aria-describedby="helpId">
                          <?php
                                                          
                            }
                          endforeach?>
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <a href="<?= ADMIN_URL . 'shoe_brand'?>" class="btn btn-sm btn-danger">Hủy</a>
                            &nbsp;
                            <button type="submit" class="btn btn-sm btn-primary">Cập nhật</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>