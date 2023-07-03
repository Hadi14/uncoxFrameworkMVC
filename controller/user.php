<?
class UserController
{
    function __construct()
    {
        echo "<br><br> Constructor Method.!!!";
    }
    public function profile($params)
    {
        echo "<br> profile Method.!!! <br>";
        print_r($params);
    }
}
