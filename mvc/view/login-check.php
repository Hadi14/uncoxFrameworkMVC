<?
if (isset($_GET['submit'])) {
    require_once("./Config/main.php");

    $db = Db::getInstance();
    $un = $_GET['uname'];
    $record = $db->first("select * from users where user='$un'");

    if ($record && $record['password'] == $_GET['pass']) {

        header("Location: index.php");
    } else {
        echo "Fail to Login...";
    }
}
