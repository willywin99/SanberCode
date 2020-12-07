<?php

    Class Harimau implements Fight, Hewan{
        
        public function __construct($nama, $darah = 50, $jumlahKaki = 4, $keahlian = "lari cepat", $attackPower = 7, $deffencePower = 8)
        {
            # code...
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
                    jenis hewan : Harimau
                ]
            ";
        }
    }

?>