<?php

class ProfileModel extends Model {
  

  public function getUserProfile($email) {

    $sql = 'SELECT username, location, website, birthdate, avatar FROM users WHERE email = ?';
    $stmt = $this->pdo->prepare($sql);

    $stmt->execute([$email]);
    $result = $stmt->fetchAll();

    $result = [
      'username' => $result[0]['username'],
      'location' => $result[0]['location'],
      'email' => $email,
      'website' => $result[0]['website'],
      'birthdate' => $result[0]['birthdate']
    ];

    return $result;
  }
}