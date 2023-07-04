<?
class View
{
    public static function renderTemplate($filePath, $params)
    {
        extract($params);
        // $content = "<br>HadiHashemi";
        require_once($filePath);
    }
}
