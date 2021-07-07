<div class="">
    <?php echo json_encode($detail) ?>
    <div class="container pb-5">
        <?php 
        foreach ($detail as $d) { 
            ?>
            <form action="<?php echo base_url('mitra/mitra/change_status') ?>" method="post">

                <div class="card">
                    <div class="card-body">
                        <table>
                            <input type="hidden" name="id_order" value="<?php echo $d['id_order']; ?>">
                            <tr>
                                <td>Jenis Jasa</td>
                                <td>:</td>
                                <td>
                                    <?php echo $d['daftar_keahlian'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Nama Pelanggan</td>
                                <td>:</td>
                                <td><?php echo $d['nama_pelanggan'] ?></td>
                            </tr>
                            <tr>
                                <td>Biaya</td>
                                <td>:</td>
                                <td>Rp.<?php echo number_format($d['harga_jasa']) ?></td>
                            </tr>
                            <tr>
                                <td>Lokasi Order</td>
                                <td>:</td>
                                <td> <?php echo $d['alamat_pelanggan'] ?> </td>
                            </tr>
                            <tr>
                                <td>Waktu Pengerjaan</td>
                                <td>:</td>
                                <td><?php echo $d['waktu'] ?>, <?php echo $d['tanggal'] ?></td>
                            </tr>

                        </table>
                    </div>
                    <div class="card-footer">
                        <?php if ($d['status_order'] == 'sedang diproses') { ?>
                            <button class="btn btn-success" type="submit">Selesai</button>
                        <?php } else { ?>
                            <p><?php echo $d['status_bayar'] ?></p>
                        <?php } ?>
                    </div>
                </div>
            </form>
        <?php } ?>

    </div>