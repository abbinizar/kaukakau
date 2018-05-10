<?php

class model_stok
{
    function __construct()
    {
    }

    public static function bacaStok()
    {
        $db = DB::getInstance();
        $hasil = $db->query("SELECT * FROM stock;");
        if ($hasil->rowCount() > 0) {
            foreach ($hasil as $item) {
                $output[] = array(
                    'id' => $item['id'],
                    'tanggal' => $item['tanggal'],
                    'jumlah_stock' => $item['jumlah_stock'],
                    'peramalan' => $item['peramalan'],
                    'safety_stock' => $item['safety_stock']
                );
            }
            return $output;
        } else {
            return 'kosong';
        }
    }

    public static function tambahStok($tanggal, $jumlah)
    {
        $db = DB::getInstance();
        $status = $db->exec("INSERT INTO stock(tanggal, jumlah) VALUES ('$tanggal', $jumlah);");
        if ($status > 0) {
            return 'sukses';
        } else {
            return 'gagal';
        }
    }

    public static function perbaruiStok($id, $tanggal, $jumlah)
    {
        $db = DB::getInstance();
        $status = $db->exec("UPDATE stok set tanggal='$tanggal', jumlah='$jumlah' WHERE id=$id;");
        if ($status > 0) {
            return 'sukses';
        } else {
            return 'gagal';
        }
    }
}