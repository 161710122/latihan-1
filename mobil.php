<?php 
class mobil {
public $nama_merk ;
public $tipe ;
public $harga ;
public $kecepatan ;

	public function __construct ($nama_merk,$tipe,$harga,$kecepatan)		{
		
		$this->nama_merk = $nama_merk ;
		$this->tipe= $tipe ;
		$this->harga = $harga ;
		$this->kecepatan = $kecepatan ;
		

	}
	    public function get_nama_merk ()
	{
		return $this->nama_merk ;
	}
	public function get_tipe()
	{
		return $this->tipe ;
	}
	public function get_harga ()
	{
		return $this->harga ;
	}
	public function get_kecepatan ()
	{
		return $this->kecepatan ;
	}
}


$mobil = new mobil ('honda','mobilio','210000000','1000cc') ;
echo "<center> =============================<br> <center> Motor </center>============================= <br>";
echo " Nama_merk = ".$mobil->get_nama_merk()."<br>" ;
echo " Tipe = ".$mobil->get_tipe()."<br>" ;
echo " Harga = ".$mobil->get_harga()."<br>" ;
echo " Kecepatan = ".$mobil->get_kecepatan()."<br>" ;
?>

