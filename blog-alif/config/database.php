<?php class Database {

	public $host ="localhost",$user="root",$pass,$db="blog_alif";
	public $koneksi;
	public function __construct()
	{
		$this->koneksi = mysqli_connect(
			$this->host,
			$this->user,
			$this->pass,
			$this->db
		);
		if ($this->koneksi) {
			// echo "Berhasil";
		}else {
			echo "Koneksi database gagal";
		}
	}
}
$db = new Database();
//Kategori
include('kategori.php');
//Artikel
include('artikel.php');
 ?>

