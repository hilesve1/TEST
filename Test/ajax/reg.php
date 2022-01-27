<?php 
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$pass2 = $_POST['pass2'];

//массив готовых юзеров
$array_users = array(array('1','Илья','hilesve1@gmail.com'), array('2','Макс','abc@gmail.com'));

//проверка совпадения почты
function email_validation($array_users, $email ){
    $flag = false;;
    for ($i = 0; $i< 9; $i++){
        if ($array_users[$i][2] == $email){
            echo "Емаилы совпадают";
            $flag = true;
            break;
        }
    }
    if ($flag != true){
        echo "OK";
    } 
}

//проверка совпадения паролей + вызов функции проверки почты
function data_validation($email, $pass, $pass2, $array_users) {
    if (!preg_match("|^[-0-9a-z_\.]+@[-0-9a-z_^\.]+\.[a-z]{2,6}$|i", $email)) {
        echo "Email введен неверно";
    } else {
        if ($pass == $pass2){
           email_validation($array_users, $email);
        } else {
            echo "Пароли не совпадают";
        }
    }
}


data_validation($email, $pass, $pass2, $array_users);

if ($flag != true){
    $user = "Юзер успешно прошел регистрацию ";
} 

$log = date('Y-m-d H:i:s') . '' . print_r($user, true);
file_put_contents(__DIR__ . '/log.txt', $log . PHP_EOL, FILE_APPEND);





