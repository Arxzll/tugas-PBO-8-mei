<?php
class mahasiswa{

public $nim = 10588 ;
public $nama = "Ari Rizal Firdaus" ;
public $jurusan = "11 PPLG" ;

function tampil_biodata(){
 echo $this->nim;
 echo $this->nama;
}

}
$mahasiswa = new mahasiswa();
$mahasiswa->tampil_biodata();
?>