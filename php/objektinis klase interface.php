<?php

interface iTemplate{                        //yra planas kas bus toliau

    public function setVariable($name, $var);
    public function getHtml($template);

}

class Template implements iTemplate         //implements realizuoja interface
{
    private $vars = array();

    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
        echo 'labas';
    }

    public function getHtml($template)
    {
        foreach($this->vars as $name => $value) {
            $template = str_replace('{' . $name . '}', $value, $template);
        }

        return $template;
    }
}

$a = new Template();
$a ->setVariable('Paulius', 5);

// This will not work
// Fatal error: Class BadTemplate contains 1 abstract methods
// and must therefore be declared abstract (iTemplate::getHtml)

/*class BadTemplate implements iTemplate
{
    private $vars = array();

    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }
}

?>
*/
