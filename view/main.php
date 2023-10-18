<?php
function PrintList(array $arr, string $heading)
{
    if (count($arr) == 0) {
        return;
    }

    $li_elements = "";

    foreach ($arr as $paramKey => $paramValue) {
        $li_elements .= "<li><p>{$paramKey}: \"{$paramValue}\".</p></li>";
    }

    echo
        "<div>" .
        "<h3>{$heading}:</h3>" .
        "<ul>" .
        $li_elements .
        "</ul>" .
        "</div>";
}
?>

<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="get">
    <h1>Web Form Processor</h1>
    <?php
    foreach ($inputFields as $i => $inputField) {
        $isRequired = $isRequiredInputFields[$i] ? "required" : null;

        echo
            "<div class=\"field\">" .
            "<label for=\"{$inputField}_field\">{$inputField}:</label>" .
            "<input id=\"{$inputField}_field\" name=\"{$inputField}\" type=\"text\" autocomplete=\"off\" {$isRequired} />" .
            "</div>";
    }
    ?>
    <div class="button-displayer">
        <button>Submit</button>
        <button formmethod="post">Post</button>
        <button type="reset">Reset</button>
    </div>
</form>

<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
    <div class="field">
        <label for="go-to-page-field">Go To Page:</label>
        <input id="go-to-page-field" name="pageName" type="text" autocomplete="off" />
    </div>
    <div class="button-displayer">
        <button>Go</button>
    </div>
</form>

<section id="server-list-section">
    <?php
    PrintList($_GET, "GET");
    PrintList($_POST, "POST");
    PrintList($_COOKIE, "COOKIES");
    ?>
</section>