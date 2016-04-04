<?php
namespace backend\models\ActiveRecord;

use yii\db\ActiveRecord;

/**
  * @property integer id :: **auto_increment**, primary key
  * @property string username :: not null
  * @property string password :: not null
*/
define("TABLE_NAME", "testing");
define("USERNAME", "username");
define("PASSWORD", "password");
// Must change below variable if increased or decreased property
define("USER_PROPERTIES_SIZE", 2);

class Users extends ActiveRecord {

  public static function tableName() {
    return TABLE_NAME;
  }

  // if below function return false, so this function works unsuccessful.
  public function insertUser($userData) {
    if (sizeof($userData) != USER_PROPERTIES_SIZE && $this->checkUserProperties()) {
      return false;
    }

    if ($this->existUsername($userData["username"])) {
      return false;
    }

    $transaction = $this::getDb()->beginTransaction();
    try {
      $this->username = $userData["username"];
      $this->password = $userData["password"];
      $this->save();
      $transaction->commit();
      return true;
    }
    catch(\Exception $e) {
      $transaction->rollBack();
      return false;
    }
  }

  private function existUsername($username) {
    $user = $this::findOne([
      USERNAME => $username
    ]);

    if ($user == null) {
      return false;
    }

    return true;
  }
}
