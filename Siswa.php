<?php

class Siswa{
    // Member 1 - Variabel
    public $nama;
    public $nilai;
    public $pelajaran;

    // Member 2 - Method - Constructor
    public function __construct($nama, $nilai, $pelajaran)
    {
        $this->nama = $nama;
        $this->nilai = $nilai;
        $this->pelajaran = $pelajaran;
    }

    // Member 3 - Function return
    public function getHasil() {
        if($this->nilai > 55) return "Lulus";
        else return "Tidak Lulus";
        
    }
}

?>