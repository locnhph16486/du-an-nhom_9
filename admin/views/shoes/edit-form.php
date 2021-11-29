<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Sửa giày</h3>
            </div>
            <div class="card-body">
                <form action="<?= ADMIN_URL . 'shoes/luu-cap-nhat?id='. $_GET['id']?>" method="post">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                          <label for="">Tên danh mục giày</label>
                          <select class="form-control" name="id_category">
                            <?php foreach($cate as $index => $item_case): ?>
                                    <option value="<?php echo $item_case['id'] ?>"><?php echo $item_case['name'] ?></option>  
                            <?php endforeach?>
                            </select>
                        </div>
                        <div class="form-group">
                          <label for="">Tên giày</label>
                          <?php foreach($shoes as $index => $item): 
                            if($item['id']==$_GET['id'])
                            {
                            ?>
                          <input type="text" name="name" class="form-control" placeholder="<?=$item['name']?>" aria-describedby="helpId">
                          <?php                         
                            }
                          endforeach?>
                        </div>
                        <div class="form-group">
                          <label for="">Giá tiền</label>
                          <input type="text" name="price" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                          <label for="">Chi tiết</label>
                          <textarea class="form-control" rows="4" name="detailed" placeholder="Enter ..."></textarea>                       
                        </div>
                        <div class="form-group">
                          <label for="">Lượt yêu thích</label>
                          <input type="text" name="favor" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                          <label for="">Giảm giá (%)</label>
                          <input type="text" name="sale" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <a href="<?= ADMIN_URL . 'shoes'?>" class="btn btn-sm btn-danger">Hủy</a>
                            &nbsp;
                            <button type="submit" class="btn btn-sm btn-primary">Cập nhật</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>