<?php 


function isValid($input) {
    return isset($input) && !empty($input) ? true : false;
}

function logIn($username, $password) {
    if(isValid($username) && isValid($password)) {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['isLogged'] = true;

        logSignIn($username);

    } else {
        $_SESSION['isLogged'] = false;
    }

    header('Location: ./index.php'); 

}

function logOut() {

    logSignOut($_SESSION["username"]);

    session_unset();
    session_destroy();

    header('Location: ./index.php');
}

function logSignIn($username) {
    $logFile = fopen('./logs/log.txt', 'a+'); 

    $date = date('Y-m-d H:m:s', strtotime('now'));

    $data = "[$date] - user with username $username has signed in \n";

    fwrite($logFile, $data);

    fclose($logFile);
}


function logSignOut($username) {
    $logFile = fopen('./logs/log.txt', 'a+'); 

    $date = date('Y-m-d H:m:s', strtotime('now'));

    $data = "[$date] - user with username $username has signed out \n";

    fwrite($logFile, $data);

    fclose($logFile);
}

function totalPrice() {
    $sumPrice = 0;
    foreach($_SESSION['items'] as $product) {
        $sumPrice += $product['price'];
    }
    echo $sumPrice;
}

function makeOrder() {
    // Update DB

    logOrder();
}

function logOrder() {
    $orderFile = fopen('./logs/orders.txt', 'a+'); 

    $date = date('Y-m-d H:m:s', strtotime('now'));
    $username = $_SESSION['username'];

    $items = '';      
    $sumPrice = 0;
    foreach($_SESSION['items'] as $product) {
        $items .= $product['name'] . ', ';
        $sumPrice += $product['price'];
    }

    $data = "[$date] - user with username " . $_SESSION['username'] . " make order with items: $items with total price: $sumPrice \n";

    fwrite($orderFile, $data);
    fclose($orderFile);

    unset($_SESSION['items']);

    header('Location: ./index.php');
}

?>