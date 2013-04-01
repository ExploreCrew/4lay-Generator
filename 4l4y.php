<?php


/**
 * @author BueBoyz
 * @copyright Www.ExploreCrew.Org 2013
 * 
 */


if (isset($_POST['string']))
{

    $string = $_POST['string'];
    $leet = $_POST['type'];

    function char_replace($str, $leet)
    {
        $str = strtolower($str);
        $chr = array(
            "a" => array(
                "4",
                "a",
                "4",
                "@"),
            "b" => array(
                "b",
                "b",
                "|3",
                "8"),
            "c" => array(
                "c",
                "C",
                "(",
                ),
            "d" => array(
                "d",
                "d",
                "|)",
                "[)"),
            "e" => array(
                "3",
                "e",
                "3"),
            "f" => array(
                "f",
                "f",
                ),
            "g" => array(
                "9",
                "9",
                "g"),
            "h" => array(
                "h",
                "#",
                "|-|",
                "]-["),
            "i" => array(
                "1",
                "!",
                "1",
                "|"),
            "j" => array("j", "j"),
            "k" => array(
                "k",
                "|<",
                "k"),
            "l" => array(
                "l",
                "l",
                "|_"),
            "m" => array(
                "m",
                "m",
                "|\/|"),
            "n" => array(
                "n",
                "n",
                "|\|"),
            "o" => array(
                "0",
                "0",
                "o"),
            "p" => array("p", "p"),
            "q" => array("q", "q"),
            "r" => array(
                "r",
                "R",
                "|2"),
            "s" => array(
                "5",
                "s",
                "$",
                "Z"),
            "t" => array(
                "t",
                "7",
                "+"),
            "u" => array(
                "u",
                "u",
                "|_|"),
            "v" => array(
                "v",
                "v",
                "\/"),
            "w" => array(
                "w",
                "w",
                "\/\/"),
            "x" => array(
                "x",
                "x",
                "><"),
            "y" => array(
                "y",
                "y",
                ),
            "z" => array(
                "z",
                "Z",
                "2"),
            );

        if (isset($chr[$str]))
        {
            if ($leet == true)
            {
                $ret = $chr[$str][rand(1, count($chr[$str]) - 1)];
            } else
            {
                $ret = $chr[$str][0];
            }

        } else
        {
            $ret = $str;
        }
        return $ret;

    }

$str = null;
    for ($i = 0; $i < strlen($string); $i++)
    {

        if (is_int($i / 2))
        {
            $str .= strtolower(char_replace($string[$i], $leet));
        } else
        {
            $str .= strtoupper(char_replace($string[$i], $leet));
        }
    }
}

echo "<!DOCTYPE HTML>";
echo "<html>";
echo "<head>";
echo "	<meta http-equiv=\"content-type\" content=\"text/html\" />";
echo "	<meta name=\"author\" content=\"http://www.explorecrew.org\" />";
echo "	<title>4l4Y/j3j3m0n/l33t 93n3r4t0r</title>";
echo "	<style type=\"text/css\">";
echo "	    textarea{width: 100%;}";
echo "	</style>";
echo "</head>";
echo "<body>";
echo "<form method=\"post\" enctype=\"multipart/form-data\" action=\"\">";
echo "<fieldset>";
echo "<legend>4l4Y/j3j3m0n/l33t 93n3r4t0r</legend>";
echo "<textarea name=\"string\">" . @$string . "</textarea><br/>";
echo "<select name=\"type\" size=\"1\">";
if ($leet == 1)
{
    $true = "selected=\"true\"";
} else
{
    $true = "";
}
echo "<option value=\"0\">alay (jejemon)</option>";
echo "<option value=\"1\" " . @$true . ">xx-hacker (l33t)</option>";
echo "</select>";
echo "<input type=\"submit\" value=\"Generate\" /><br/>";
echo "<textarea>" . @$str . "</textarea><br/>";
echo "</fieldset>";
echo "</form>";
echo "<small>Original Source by <a href=\"http://forum.explorecrew.org\">Viva ExploreCrew</a></small>";
echo "</body>";
echo "</html>";

?>
