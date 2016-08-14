<?php

class LoginModel extends Model {
  
  // validate first
  
  public function registerNewUser($data) {
    // validate data

    $errors = [];

    // sanitize username
    if (isset($data['username'])) {
      $data['username'] = filter_var($data['username'], FILTER_SANITIZE_STRING);
      empty($data['username']) ? $errors[] = 'username' : null;
    } else {
      $errors[] = 'username';
    }

    // validate email
    if (isset($data['email'])) {
      $data['email'] = filter_var($data['email'], FILTER_VALIDATE_EMAIL);
      empty($data['email']) ? $errors[] = 'email' : null;
    } else {
      $errors[] = 'email';
    }

    // check if password is long enough and is equal to repeated password
    if (isset($data['password']) && strlen($data['password']) >= 4) {
      $data['password'] != $data['passwordRepeated'] ? $errors[] = 'passwordRepeated' : null;
    } else {
      $errors[] = 'password';
    }

    // sanitize location
    if (isset($data['location'])) {
      $data['location'] = filter_var($data['location'], FILTER_SANITIZE_STRING);
      empty($data['location']) ? $errors[] = 'location' : null;
    } else {
      $data['location'] = 'Unknown';
    }

    // validate website
    if (isset($data['website'])) {
      $data['website'] = filter_var($data['website'], FILTER_SANITIZE_STRING);
      empty($data['website']) ? $errors[] = 'website' : null;
    } else {
      $data['website'] = 'Unknown';
    }

    // validate birthdate
    if (isset($data['birthdate'])) {
      $data_arr = explode('-', $data['birthdate']);
      !checkdate($data_arr[1], $data_arr[2], $data_arr[0]) ? $errors[] = 'birthdate' : null;
    } else {
      $data['birthdate'] = '1000-01-01';
    }

    // check if email already registered
    if ($this->checkAlreadyRegistered($data['email'])) {
      $errors[] = 'alreadyRegistered';
    };

    if (!empty($errors)) {
      return $errors;
    }

    // then register
    unset($data['passwordRepeated']);

    $sql = 'INSERT INTO users 
            SET username = :username,
                email = :email,
                hashed_password = :password,
                location = :location,
                website = :website,
                birthdate = :birthdate,
                avatar = :avatar';
    
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute($data);

    return true;
  }

  
  public function authenticate($email, $password) {
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);

    if (empty($email) || empty($password)) {
      return 'Incorrect input (email or password)';
    }

    $sql = 'SELECT hashed_password FROM users WHERE email = ?';
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([$email]);

    $result = $stmt->fetchAll();

    return $result[0]['hashed_password'] == $password;
  }

  
  private function checkAlreadyRegistered($email) {
    $sql = 'SELECT email FROM users WHERE email = ?';
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([$email]);

    $result = $stmt->fetchAll();
    return !empty($result[0]);
  }

  
  public function restorePassword($email) {

  }
}