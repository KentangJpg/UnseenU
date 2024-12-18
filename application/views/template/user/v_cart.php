<div class="container">

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Payment Details</h1>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form action="">
                            <div class="row mb-3">
                                <label for="CardNum" class="form-label">Card Number</label>
                                <input type="text" class="form-input form-control" placeholder=" XXX XXX XXX">
                            </div>
                            <div class="row">
                                <label for="cardHolder" class="form-label">Cardholder Name</label>
                                <input type="text" class="form-control form-input">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel Payment</button>
                    <a href="<?= base_url('index.php/cart/createInv') ?>" type="button" class="btn btn-primary">Confirm Payment</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-header bg-primary text-light">
            <h2>Shopping Cart</h2>
        </div>
        <div class="card-body">
            <?php echo form_open('index.php/cart/update'); ?>

            <table cellpadding="6" cellspacing="1" style="width:100%" class="table table-striped">

                <tr>
                    <th width="80px">QTY</th>
                    <th>Item Name</th>
                    <th style="text-align:right">Item Price</th>
                    <th style="text-align:right">Sub-Total</th>
                    <th style="text-align:right">Action</th>
                </tr>

                <?php $i = 1; ?>

                <?php foreach ($this->cart->contents() as $items): ?>

                    <?php echo form_hidden($i . '[rowid]', $items['rowid']); ?>

                    <tr>
                        <td><?php echo form_input(array(
                                'name' => $i . '[qty]',
                                'value' => $items['qty'],
                                'maxlength' => '3',
                                'min' => '0',
                                'size' => '5',
                                'type' => 'number',
                                'class' => 'form-control'
                            )); ?></td>
                        <td>
                            <?php echo $items['name']; ?>
                        </td>
                        <td style="text-align:right">Rp.<?php echo $this->cart->format_number($items['price']); ?></td>
                        <td style="text-align:right">Rp.<?php echo $this->cart->format_number($items['subtotal']); ?></td>
                        <td class="text-right">
                            <a href="<?= base_url('index.php/cart/delete/' . $items['rowid']); ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>

                    <?php $i++; ?>

                <?php endforeach; ?>

                <tr>
                    <td colspan="3"> </td>
                    <td class="right"><strong>Total</strong></td>
                    <td class="right"><strong>Rp. <?php echo $this->cart->format_number($this->cart->total()); ?></strong></td>
                </tr>

            </table>

            <div class="row">
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-save"></i> Update Cart</button>
                    <a href="<?= base_url('index.php/cart/clear') ?>" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i> Delete All</a>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-cart-shopping"></i> Check Out</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>