<div class="container-fluid">
    <h4>Invoice Pemesanan Produk</h4>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>Id Invoice</th>
            <th>Tanggal Pemesanan</th>
            <th>Jumlah total</th>
            <th>Status</th>
            <th>Action</th>
        </tr>

        <?php foreach ($invoice as $inv): ?>
        <tr>
            <td><?= $inv->$id ?></td>
            <td><?= $inv->$date ?></td>
            <td><?= $inv->$total ?></td>
            <td></td>
            <td><div class="btn btn-sm btn-primary">Detail</div></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>