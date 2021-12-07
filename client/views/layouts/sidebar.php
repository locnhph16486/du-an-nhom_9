
<div class="col-md-3">
    <div class="product-menu">
        <div class="menu-title">
            <h2>Best seller <strong>Products</strong></h2>
        </div>
        <div class="side-menu">
                <!-- Nav tabs -->
            <ul class="tab-navigation" role="tablist">
                <?php foreach($brand as $index => $item): ?>
                    <li role="presentation"><a href="<?= HOME_ASSET .'home-brand?id='. $item['id']?>" ><?=$item['name']?> </a></li>
                <!-- <li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">adidas</a></li>
                <li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Nike</a></li>
                <li role="presentation"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Converse </a></li>
                <li role="presentation"><a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab">Vans </a></li>
                <li role="presentation"><a href="#tab5" aria-controls="tab5" role="tab" data-toggle="tab">Mizuno </a></li> -->
                <?php endforeach ?>
                <li> <img src="<?= HOME ?>img/banner/banner-5.jpg" alt=""> </li>
            </ul>
        </div>
    </div>
</div>