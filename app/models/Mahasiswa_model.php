<?php

class Mahasiswa_model {
    private $mhs = [
        [
            "nama" => "Dishanubari Pramudia",
            "nim" => "41037006191049",
            "email" => "dishanubaripramudiaa@gmail.com",
            "jurusan"  => "Teknik Informatika"
        ],
        [
            "nama" => "Nagita Syifa Aulia",
            "nim" => "41037006191050",
            "email" => "nagitasyifaa@gmail.com",
            "jurusan"  => "Teknik Arsitektur"
        ],
        [
            "nama" => "Dirgantara Pramudia",
            "nim" => "41037006191051",
            "email" => "dirgaap@gmail.com",
            "jurusan"  => "Teknik Mesin"
        ]
     ];

    public function getAllMahasiswa()
    {
        return $this->mhs;
    }
}