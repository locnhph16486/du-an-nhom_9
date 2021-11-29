<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tạo mới size</h3>
            </div>
            <div class="card-body">
                <form action="<?= ADMIN_URL . 'shoe_size/luu-tao-moi?id='.$_GET['id']?>" method="post">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label for="">Tên giày</label>
                            <?php foreach($shoes as $index => $item): 
                                    if(isset($_GET['id'])&&$_GET['id']==$item['id']){
                            ?>
                                    <input type="text" name="" class="form-control" placeholder="<?=$item['name']?>" disabled> 
                            <?php 
                                    }
                            endforeach?>
                        </div>
                        <div class="form-group">
                          <label for="">Size</label>
                          <input type="text" name="size" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                          <label for="">Số lượng</label>
                          <input type="text" name="quantity" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
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