<div class="col-md-9">
    <div class="row">
        <!-- Tab panes -->
        <div class="tab-content">
            <div style="display: grid;grid-template-columns: 300px 300px 300px;" class="products">
                <?php foreach($brand as $index =>$item):
                    if(isset($_GET['id'])&&$_GET['id']==$item['id']){
                        $count=1;
                ?>
                    <?php foreach($cate as $index =>$item_c):
                        if($item_c['id_shoe_brand']==$item['id']){
                    ?>
                        <?php foreach($products as $index =>$item_pr):
                            if($count>6){
                                break;
                            }
                            if($item_pr['id_category']==$item_c['id']){
                        ?>
                                    <div class="col-md-12">
                                        <div class="single-product">
                                            <div class="level-pro-new">
                                                <span>new</span>
                                            </div>
                                            <div style="height: 210px;" class="product-img">
                                                <a href="single-product.html">
                                                    <?php foreach ($img as $index => $item_i) :
                                                        if($item_i['id_shoe']==$item_pr['id']){  
                                                    ?>
                                                    <img style="height: 210px;" src="<?=PUBLIC_URL . $item_i['img']?>" alt="" class="image">
                                                    <!-- <img style="height: 210px;" src="img/product/2.png" alt="" class="secondary-img"> -->
                                                    <?php  break;                                                       
                                                        }  
                                                    endforeach ?>
                                                </a>
                                            </div>
                                            <div class="product-name">
                                                <a href="single-product.html" title="Fusce aliquam"><?=$item_pr['name']?></a>
                                            </div>
                                            <div class="price-rating">
                                                <span>$<?=$item_pr['price']?></span>
                                                <div class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                            <div class="actions">
                                                <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                <ul class="add-to-link">
                                                    <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                    <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                        <?php
                        $count++;                     
                        }
                        
                        endforeach ?>
                    <?php  
                    }
                endforeach ?>
                <?php 
                    }            
                endforeach; 
                ?>
                <?php foreach($brand as $index =>$item):
                    if(!isset($_GET['id'])){
                        $count=1;
                ?>
                    <?php foreach($cate as $index =>$item_c):
                        if($item_c['id_shoe_brand']==$item['id']){
                    ?>
                        <?php foreach($products as $index =>$item_pr):
                            if($count>6){
                                break;
                            }
                            if($item_pr['id_category']==$item_c['id']){
                                
                        ?>                                 
                                  <div class="col-md-12">
                                        <div class="single-product">
                                            <div class="level-pro-new">
                                                <span>new</span>
                                            </div>
                                            <div style="height: 210px;" class="product-img">
                                                <a href="single-product.html">
                                                    <?php foreach ($img as $index => $item_i) :
                                                        if($item_i['id_shoe']==$item_pr['id']){  
                                                    ?>
                                                    <img style="height: 210px;" src="<?=PUBLIC_URL . $item_i['img']?>" alt="" class="image">
                                                    <!-- <img style="height: 210px;" src="img/product/2.png" alt="" class="secondary-img"> -->
                                                    <?php  break;                                                       
                                                        }  
                                                    endforeach ?>
                                                </a>
                                            </div>
                                            <div class="product-name">
                                                <a href="single-product.html" title="Fusce aliquam"><?=$item_pr['name']?></a>
                                            </div>
                                            <div class="price-rating">
                                                <span>$<?=$item_pr['price']?></span>
                                                <div class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                            <div class="actions">
                                                <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                <ul class="add-to-link">
                                                    <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                    <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div> 
                        <?php      
                            $count++;             
                        }  
                        endforeach ?>
                    <?php  
                    }
                endforeach ?>
                <?php 
                    break;
                    }            
                endforeach; 
                ?>
            </div>
        </div>
    </div>
</div>