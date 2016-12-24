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

  public function get100Messages($page = 0)
  {
    $messages = array();
    $rows = $this->query("SELECT * FROM hopthu ORDER BY time LIMIT ".($page*100).",100");
    foreach ($rows as $r ) {
      $message['id'] = $r['id'];
      $message['sender'] = $r['nguoiGui'];
      $message['email'] = $r['email'];
      $message['subject'] = $r['tieuDe'];
      $message['content'] = $r['noiDung'];
      $message['time'] = $r['time'];
      $messages[] = $message;
    }
    return $messages;
  }

}

?>
