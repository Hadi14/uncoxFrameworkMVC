<?
function dump($var, $return = false)
{
    if (is_array($var)) {
        $out = print_r($var, true);
    } else if (is_object($var)) {
        $out = var_export($var);
    } else {
        $out = $var;
    }
    if ($return) {
        return "\n<pre>$out</pre>\n";
        echo "reterned";
    } else {
        echo "<pre> $out</pre>";
    }
}
function getFullUrl()
{
    $strurl = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    return  $strurl;
}
function getRequestUri()
{
    return $_SERVER['REQUEST_URI'];
}
function baseUrl()
{
    return "/uncoxFrameworkMVC";
}
