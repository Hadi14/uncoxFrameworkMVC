<?
class UserController
{
    function __construct()
    {
        echo "<br><br>controller/user.php --- Constructor Method.!!!";
    }
    public function profile($params)
    {
        echo "<br> profile Method.!!! <br>";
        print_r($params);
    }
    public function login()
    {

        if (isset($_GET['uname'])) {
            $this->loginCheck();
        } else {
            $this->loginForm();
        }
    }
    private function loginCheck()
    {
        if (isset($_SESSION['suname'])) {
            header("Location: index.php");
            echo  "Already logined";
        } else {
            echo  "NO Already logined";
        }
        // if (isset($_GET['submit'])) {
        //     require_once("./Config/main.php");

        //     $db = Db::getInstance();
        //     $un = $_GET['uname'];
        //     $record = $db->first("select * from users where user='$un'");

        //     if ($record && $record['password'] == $_GET['pass']) {

        //         header("Location: index.php");
        //     } else {
        //         echo "Fail to Login...";
        //     }
        // }
    }
    private function loginForm()
    {
        echo "<br>controller/user.php ---- loginForm() Method.!!!";
        // $params['content'] = "hadi kiani";
        View::renderTemplate("view/login-check.php");
    }
    public function register()
    {
        if (isset($_GET['submit'])) {
            $this->registerCheck();
        } else {
            $this->registerForm();
        }
    }
    private function registerCheck()
    {
        require_once("./Config/main.php");
        if (isset($_GET['submit'])) {
            $db = Db::getInstance();
            $year = $_GET['Year']; //
            $month = $_GET['Month']; //
            $familycity = $_GET['familycity']; //
            $familyrural = $_GET['familyrural']; //
            $familymen = $_GET['familymen']; //
            $familywomen = $_GET['familywomen']; //
            $c;
            // add
            $record = $db->first("select * from hemayat where Year='$year' and Month='$month'");
            if ($record) {
                echo "Already Registered";
            } else {
                $us = $_SESSION['suname'];
                $db->insert("INSERT INTO hemayat (Year,Month,Hmy_CityFamily,Hmy_RuralFamily,Hmy_MenFamily,Hmy_WomenFamily,user) VALUES ('$year','$month','$familycity','$familyrural','$familymen','$familywomen','$us') ");
                echo "Record Added";
            }
        }
    }
    private function registerForm()
    {
        echo "<br>this page is Register Form";
    }
}
