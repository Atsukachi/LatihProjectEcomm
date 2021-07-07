<div class="">
    <!-- <?php echo json_encode($riwayat) ?> -->
    <div class="container pb-5">
        <?php foreach ($riwayat as $r) {
            $biaya_admin = 10 / 100 * $r['harga_jasa'];
            $total = $biaya_admin + $r['harga_jasa'];
        ?>
            <div class="card">
                <div class="card-body">
                    <table>
                        <tr>
                            <td>Jenis Jasa</td>
                            <td>:</td>
                            <td>
                                <?php echo $r['daftar_keahlian'] ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Pelanggan</td>
                            <td>:</td>
                            <td><?php echo $r['nama_mitra'] ?></td>
                        </tr>
                        <tr>
                            <td>Biaya</td>
                            <td>:</td>
                            <td>Rp.<?php echo number_format($total) ?></td>
                        </tr>
                        <tr>
                            <td>Waktu Pengerjaan</td>
                            <td>:</td>
                            <td><?php echo $r['waktu'] ?>, <?php echo $r['tanggal'] ?></td>
                        </tr>

                    </table>
                </div>
                <div class="card-footer">
                    <?php if ($r['status_order'] == 'selesai') { ?>
                        <?php echo form_open_multipart('service/page/status_bayar') ?>
                        <input type="hidden" name="id_order" d value="<?php echo $r['id_order'] ?>">
                        <table>
                            <tr>
                                <td>Status</td>
                                <td>:</td>
                                <td><?php echo $r['status_order'] ?></td>
                            </tr>
                            <tr>
                                <td>Total Tagihan</td>
                                <td>:</td>
                                <td>Rp.<?php echo number_format($total) ?></td>
                            </tr>
                            <tr>
                                <td>Nomor Rekening</td>
                                <td>:</td>
                                <td><?php echo 281848919 ?></td>
                            </tr>

                        </table>
                        <input type="file" name="bukti_tf"><br><br>
                        <button type="submit" class="btn btn-success">Upload Bukti Pembayaran</button>
                        </form>
                    <?php } else if ($r['status_order'] == 'sedang diproses') { ?>
                        <p><?php echo $r['status_order'] ?></p>
                    <?php } else {
                    } ?>
                </div>
            </div>
        <?php } ?>
    </div>
</div>