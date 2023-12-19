<?
$firstName = filter_input(INPUT_POST,'firstName');
$lastName = filter_input(INPUT_POST,'lastName');
$email = filter_input(INPUT_POST,'email');
$password = filter_input(INPUT_POST,'password');

if(!empty($userName)){
    if(!empty($password)){
        $host = "localhost";
        $dbuserName="root";
        $dbpassword="";
        $dbname="workwise";

        $conn = new mysqli($host,$dbuserName,$dbpassword,dbname);
        if(mysqli_connect_error()){
            die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
        }else{
            $sql = "INSET INTO form(userName,password) values (''
        }
    }
}
?>