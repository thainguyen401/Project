<?php
require_once('controllers/base_controller.php');
require_once('models/user.php');

class UsersController extends BaseController {
  function __construct() {
    $this->folder = 'users';
  }

  
}

?>