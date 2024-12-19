<div class="container">
    <!-- Default box -->
    <div class="card shadow">
        <div class="card-header bg-primary">
            <h3 class="text-light">Item Details</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="col-12">
                        <img src="<?= base_url('assets/img/item/' . $item->Image) ?>" class="img-thumbnail" alt="Product Image">
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <h3 class="my-3"><?= $item->ItemName; ?></h3>
                    <p><?= $item->Desc ?></p>
                    <hr>

                    <div class="bg-gray py-2 px-3 mt-4">
                        <h2 class="mb-0">
                            <?= "Rp." . number_format($item->Price); ?>
                        </h2>
                    </div>
                    <?php
                    echo form_open('index.php/cart/add');
                    echo form_hidden('id', $item->ItemId);
                    echo form_hidden('price', $item->Price);
                    echo form_hidden('name', $item->ItemName);
                    echo form_hidden('redirect_page', str_replace('index.php', 'index.php', 'index.php/series/viewDetails/' . $item->ItemId));
                    ?>
                    <div class="row">
                        <div class="col-sm-4">
                            <input type="number" name="qty" class="form-control form-control-lg" value="1" min="1">
                        </div>
                        <div class="col-sm-8">
                            <button type="submit" class="btn btn-primary btn-lg btn-flat">
                                <i class="fas fa-cart-plus fa-lg mr-2"></i>
                                Add to Cart
                            </button>
                        </div>
                    </div>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>

    </div>


</div>
</div>