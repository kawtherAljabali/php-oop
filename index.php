<?php
class student {
  public $id;
  public $name;
  public $email;
  public $mobileNumber;

  function get_id() {
    return $this->id;
  }
  function get_name() {
    return $this->name;

  }  function get_email() {
    return $this->email;
  }
  function get_mobileNumber() {
    return $this->mobileNumber;
  }

}

$std=new student ();
$std->id=123443;
$std->name="sara";
$std->email="sara@orange.com";
$std->mobileNumber='0777777777';

class teacher extends student{
   public $salary;
   public $subject=array();
   
   function get_salary() {
    return $this->salary;

  }
     function get_subject() {
    return $this->subject;
    
  }


}



$tech=new teacher ();
$tech->id=96432;
$tech->name="sadi";
$tech->email="sadi@orange.com";
$tech->mobileNumber='0777788888';
$tech->salary=800;
$tech->subject=array('English', 'Arabic','Math', 'science');



echo $std->get_id() ."<br>";
echo $std->get_name()."<br>";
echo $std->get_email()."<br>";
echo $std->get_mobileNumber();

echo '<br>';
echo '<hr>';
echo $tech->get_id() ."<br>";
echo $tech->get_name()."<br>";
echo $tech->get_email()."<br>";
echo $tech->get_mobileNumber()."<br>";
echo $tech->get_salary()."<br>";


// for ($i=0;$i<1;$i++){
   print_r(implode(" ",$tech->get_subject()));
   echo "<br"

// }
////////////////////////////////////////////////////////////////////////

?>