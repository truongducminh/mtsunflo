<?php
/**
 *
 */
class Message extends Database
{

  public function insertMessage($sender, $email, $subject, $content)
  {
    $this->query("INSERT INTO hopthu (nguoiGui, email, tieuDe, noiDung) VALUES (?,?,?,?)",
      array($sender, $email, $subject, $content)
    );
    if ($this->row <= 0) return -1;
    return 1;
  }

}

?>
