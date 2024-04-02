<?php

class Siswa{
    // Member 1 - Variabel
    public $nama;
    public $nilai;
    public $pelajaran;

    // Member 2 - Function return
    public function getHasil() {
        if($this->nilai > 55) return "Lulus";
        else return "Tidak Lulus";
        
    }
}

?>