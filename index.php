
    <?
    define('key', true);
    require_once('Config/main.php');
    $uri = getRequestUri();
    $uri = str_replace('/uncoxFrameworkMVC/', '/', $uri);
    echo $uri . "<br><br>";
    $parts = explode('/', $uri);
    // print_r($parts);
    $controler = $parts[1];
    $method = $parts[2];

    echo "Controller is--->  " . $controler . "<br>";
    echo "Method is--->  " . $method . "<br>";

    $params = array();
    for ($i = 3; $i < count($parts); $i++) {
        $params[] = $parts[$i];
    }
    print_r($params);
    $classname = ucfirst($controler) . "Controller";
    // $userpath = baseUrl() . "/controller/" . $controler . ".php";
    $userpath = "controller/user.php";
    require_once($userpath);
    $userClassInstance = new $classname();



    // $guest = isset($_SESSION['suname']);
    // if ($guest) {
    //     echo $_SESSION['suname'] . " " .  "عزیز خوش آمدید ";
    // } else {
    //     echo "کاربر مهمان خوش آمدید";
    // }
