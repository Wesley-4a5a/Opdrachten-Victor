<?php


class user
{
  protected $username = null;
  protected $password = null;

  public function __construct($user, $pass)
  {
    $this->username = $user;
    $this->password = md5($pass);
  }

  public function getUsername(){
    return $this->username;
  }

  public function getPassword(){
    return $this->password;
  }

  public function changePassword($newPass){
      $this->password = md5($newPass);
  }

  public function checkPassword($pass){
    if($this->password ===  md5($pass)){
      return true;
    }
    else{
      return false;
    }
  }

}

class normaluser extends user
{

  public function doNormalUserStuff(){
    return 'Normal user -> vieze peasant';
  }

}


class supervisor extends user
{

  public function doSupervisorStuff(){
    return 'Superuser -> Geld zat, Koning enzo';
  }

}


$thomas = new normaluser('tomas', 'legend32');
echo $thomas->getUsername();
echo $thomas->getPassword();
echo $thomas->checkPassword('legend32');
echo '<br />';
echo $thomas->doNormalUserStuff();

echo '<br />';
$anna = new supervisor('anna', 'whatevah96');
echo $anna->getUsername();
echo $anna->getPassword();
echo $anna->checkPassword('whatevah96');
echo '<br />';
echo $anna->doSupervisorStuff();


 ?>
