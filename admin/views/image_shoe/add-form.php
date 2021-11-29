<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tạo mới ảnh</h3>
            </div>
            <div class="card-body">
                <form action="<?= ADMIN_URL . 'image_shoe/luu-tao-moi?id='.$_GET['id']?>" method="post" enctype="multipart/form-data">
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
                            <div>
                                <label for="">Chọn ảnh</label>
                                <input type="file" name="image">
                            </div>
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <a href="<?= ADMIN_URL . 'shoe_category'?>" class="btn btn-sm btn-danger">Hủy</a>
                            &nbsp;
                            <button type="submit" class="btn btn-sm btn-primary">Upload</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>