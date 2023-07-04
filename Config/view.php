<?
class View
{
    public static function renderTemplate($filePath)
    {
        // extract($params);
        ob_start();
        echo "<br>config/view.php ---";
        echo "<br> filepath: $filePath";
        require_once("mvc/" . $filePath);
        $content = ob_get_clean();

        // require_once("view/default.php");
        require_once("mvc/view/login.php");
    }
}
