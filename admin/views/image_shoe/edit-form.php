<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Cập nhật ảnh</h3>
            </div>
            <div class="card-body">
                <form action="<?= ADMIN_URL . 'image_shoe/luu-cap-nhat?id='. $_GET['id'].'&&id_shoe='.$_GET['id_shoe']?>" method="post" enctype="multipart/form-data">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label for="">Tên giày</label>
                            <?php foreach($shoes as $index => $item): 
                                    if($item['id']==$_GET['id_shoe']){
                                ?>
                                    <input type="text" name="id_shoe" class="form-control" placeholder="<?=$item['name']?>" disabled> 
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
                            <a href="<?= ADMIN_URL . 'image_shoe'?>" class="btn btn-sm btn-danger">Hủy</a>
                            &nbsp;
                            <button type="submit" class="btn btn-sm btn-primary">Upload</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>