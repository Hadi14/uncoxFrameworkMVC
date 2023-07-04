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

        // require_once("theme/default.php");
        require_once("theme/login.php");
    }
}
