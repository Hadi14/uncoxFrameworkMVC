<?
class View
{
    public static function renderTemplate($filePath, $params)
    {
        extract($params);
        ob_start();
        echo "<br>config/view.php ---";
        require_once($filePath);
        $content = ob_get_clean();

        require_once("view/default.php");
    }
}
