<head>
    <meta charset="UTF-8">
    <title>My Form</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<?php
class Form
{
    private $fields = [];
    private $action;
    private $submit;
    private $jumField = 0;
    public function __construct($action, $submit)
    {
        $this->action = $action;
        $this->submit = $submit;
    }

    public function displayForm()
    {
        echo '<div class="card">';
        echo "<form action='" . $this->action . "' method='POST'>";
        echo '<div class="input">';
        for ($j = 0; $j < count($this->fields); $j++) {
            echo "<label>" . $this->fields[$j]['label'] . "</label>";
            echo "<input class='input-field' type='text' value='" . $this->fields[$j]["value"] . "' name='" . $this->fields[$j]['name'] . "'>";
        }
        echo "</div>";
        echo "<button class='submit' type='submit' name='" . $this->submit . "'>KIRIM</button>";
        echo "</form>";
        echo "</div>";
    }

    public function addField($name, $label, $value = "")
    {
        $this->fields[$this->jumField]['name'] = $name;
        $this->fields[$this->jumField]['label'] = $label;
        $this->fields[$this->jumField]['value'] = $value;
        $this->jumField++;
    }
}
