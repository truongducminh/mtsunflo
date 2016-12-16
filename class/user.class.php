<?php
class User extends database
{

  public function insertUser($name, $username, $password, $dateOfBirth, $address, $phone, $email) {
    $this->query("INSERT INTO user (name, username, password, dateOfBirth, address, phoneNumber, email) VALUES (?,?,?,?,?,?,?)",
                  array($name, $username, $password, $dateOfBirth, $address, $phone, $email));
    $id = $this->pdo->lastInsertId();
    return $id;
  }

  public function getUserById($id)
  {
    return $this->query("SELECT * FROM user WHERE id=$id");
  }

  public function verifyAccount($username, $password)
  {
    $arr = array($username, $password);
    return $this->query("SELECT * FROM user WHERE username=? AND password=?",$arr);
  }

  public function get100Users($page = 0)
  {
    $rows = $this->query("SELECT * FROM user");
    $users = array();
		foreach ($rows as $r) {
			$user['id'] = $r['id'];
			$user['name'] = $r['name'];
			$user['dateOfBirth'] = $r['dateOfBirth'];
			$user['address'] = $r['address'];
			$user['phoneNumber'] = $r['phoneNumber'];
			$user['email'] = $r['email'];
			$users[] = $user;
		}
		return $users;
  }

}

?>
