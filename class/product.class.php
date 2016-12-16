<?php
class Product extends database
{

	public function insertProduct($name, $categoryId, $desc, $price)
	{
		$sql = 'INSERT INTO sanpham(ten,loaiId,mota,gia) VALUES (?,?,?,?)';
		$this->query($sql,array($name, $categoryId, $desc, $price));
		$id = $this->pdo->lastInsertId();
		return $id;
	}

	public function updateProduct($id, $name, $categoryId, $desc, $price)
	{
		$sql = 'UPDATE sanpham SET ten=?,loaiId=?,gia=?';
		$array = array($name, $categoryId, $price);
		if ($desc) {
			$sql .= ',moTa=?';
			$array[] = $desc;
		}
		$sql .= ' WHERE id=?';
		$array[] = $id;
		$this->query($sql,$array);
		return $this->row;
	}

	function getProductById($id){
		return $this->query("SELECT * FROM sanpham INNER JOIN hinh ON sanpham.id=hinh.sanPhamId WHERE sanpham.id=$id");
	}

	function getProducts($page, $sort) {
		return $this->query(
			"SELECT *
			FROM sanpham INNER JOIN hinh ON sanpham.id=hinh.sanPhamId
			ORDER BY gia $sort
			LIMIT ".($page*8).",8"
		);
	}

	function getProductsByType($loaiId, $page = 0, $sort = 'asc'){
		return $this->query(
			"SELECT *
			FROM sanpham INNER JOIN hinh ON sanpham.id=hinh.sanPhamId
			WHERE sanpham.loaiId=$loaiId
			ORDER BY gia $sort
			LIMIT ".($page*8).",8"
		);
	}

	function searchProducts($keyword, $page = 0, $sort = 'asc') {
		$keyword = '%'.$keyword.'%';
		return $this->query("SELECT * FROM sanpham INNER JOIN hinh ON sanpham.id=hinh.sanPhamId
			WHERE sanpham.id LIKE :keyword OR sanpham.ten LIKE :keyword OR sanpham.moTa LIKE :keyword
			ORDER BY gia $sort
			LIMIT ".($page*8).",8",
			array(':keyword' => $keyword)
		);
	}

	function getTop4NewProducts() {
		return $this->query(
			"SELECT *
			FROM sanpham INNER JOIN hinh ON sanpham.id=hinh.sanPhamId
			ORDER BY sanpham.ngayRaMat desc
			LIMIT 4"
		);
	}

	function getTop4SellingProducts($loaiId){
		return $this->query(
			"SELECT *
			FROM sanpham INNER JOIN hinh ON sanpham.id=hinh.sanPhamId
			WHERE sanpham.loaiId=$loaiId
			ORDER BY sanpham.luotMua desc
			LIMIT 4"
		);
	}

	function get100Products($page = 0) {
		$rows = $this->query(
			"SELECT *
			FROM sanpham INNER JOIN hinh ON sanpham.id=hinh.sanPhamId
			ORDER BY sanpham.ngayRaMat desc
			LIMIT ".($page*100).",100"
		);
		$products = array();
		foreach ($rows as $r) {
			$product['id'] = $r['sanPhamId'];
			$product['name'] = $r['ten'];
			$product['cateId'] = $r['loaiId'];
			$product['desc'] = $r['moTa'];
			$product['price'] = $r['gia'];
			$product['date'] = $r['ngayRaMat'];
			$product['buy'] = $r['luotMua'] ;
			$product['image'] = $r['url'];
			$products[] = $product;
		}
		return $products;
	}

	function top4Product(){
		return $this->query("SELECT * FROM sanpham INNER JOIN hinh ON sanpham.id=hinh.sanPhamId  ORDER BY sanpham.luotMua desc LIMIT 4");
	}

	function top4PriceProductTypeThap(){
		return $this->query("SELECT * FROM sanpham INNER JOIN hinh ON sanpham.id=hinh.sanPhamId WHERE sanpham.loaiId=1 ORDER BY gia LIMIT 4" );
	}

	function top4PriceProductTypeThuyen(){
		return $this->query("SELECT * FROM sanpham INNER JOIN hinh ON sanpham.id=hinh.sanPhamId WHERE sanpham.loaiId=2 ORDER BY gia LIMIT 4" );
	}

	function top4PriceProductTypeQuat(){
		return $this->query("SELECT * FROM sanpham INNER JOIN hinh ON sanpham.id=hinh.sanPhamId WHERE sanpham.loaiId=3 ORDER BY gia LIMIT 4" );
	}

	function top4NewProductTypeThap(){
		return $this->query("SELECT * FROM sanpham INNER JOIN hinh ON sanpham.id=hinh.sanPhamId WHERE sanpham.loaiId=1 ORDER BY ngayRaMat desc LIMIT 4" );
	}

	function top4NewProductTypeThuyen(){
		return $this->query("SELECT * FROM sanpham INNER JOIN hinh ON sanpham.id=hinh.sanPhamId WHERE sanpham.loaiId=2 ORDER BY ngayRaMat desc LIMIT 4" );
	}

	function top4NewProductTypeQuat(){
		return $this->query("SELECT * FROM sanpham INNER JOIN hinh ON sanpham.id=hinh.sanPhamId WHERE sanpham.loaiId=3 ORDER BY ngayRaMat desc LIMIT 4" );
	}

}

?>
