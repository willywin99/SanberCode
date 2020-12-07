<?php

    Class Elang implements Hewan, Fight {

        public function __construct($nama, $darah = 50, $jumlahKaki = 2, $keahlian = "terbang tinggi", $attackPower = 10, $deffencePower = 5)
        {
            $this->nama = $nama;
            $this->darah = $darah;
            $this->jumlahKaki = $jumlahKaki;
            $this->keahlian = $keahlian;
            $this->attackPower = $attackPower;
            $this->deffencePower = $deffencePower;
        }

        public function attraksi()
        {
            echo "$this->nama sedang $this->keahlian";
        }

        public function serang($obj)
        {
            echo "$this->nama sedang menyerang $obj->nama";
            return $obj->darah = $obj->darah - $this->attackPower / $obj->deffencePower;
        }

        public function diserang($obj)
        {
            echo "$this->nama sedang diserang";
            return $this->darah = $this->darah - $obj->attackPower / $this->deffencePower;
        }

        public function getInfoHewan()
        {
            echo 
            "
                [
                    nama : $this->nama,
                    darah : $this->darah,
                    jumlah kaki : $this->jumlahKaki,
                    keahlian : $this->keahlian,
                    attack power : $this->attackPower,
                    deffence power : $this->deffencePower
                    jenis hewan : Elang
                ]
            ";
        }
    }

?>