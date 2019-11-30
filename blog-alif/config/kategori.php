<?php
//Kategori
class Kategori extends Database{
	//Menampilkan Semua Data 
	public function index()
	{
		$datakategori=mysqli_query($this->koneksi,"SELECT * FROM kategori");
		// var_dump($datakategori);
		return $datakategori;
	}
	//Menambah Data
	public function create($nama,$slug)
	{
		mysqli_query($this->koneksi,"INSERT INTO Kategori VALUES(null,'$nama','$slug')");
	}
	//Menampilkan data berdasarkan id 
	public function show($id)
	{
		$datakategori = mysqli_query($this->koneksi,"SELECT FROM kategori WHERE id='$id'");
		return $datakategori;
	}
	//Menampilkan data berdasarkan id 
	public function edit($id)
	{
		$datakategori=mysqli_query($this->koneksi,"SELECT * FROM kategori WHERE id='$id'");
		return $datakategori;
	}
	public function update($id,$nama,$slug)
	{
		mysqli_query($this->koneksi,"UPDATE kategori SET nama='$nama',slug='$slug' WHERE id='$id'");
	}
	//Menghapus Data
	public function delete($id)
	{
		mysqli_query($this->koneksi,"DELETE FROM kategori WHERE id='$id'");
	}
}
 ?>
 ?>