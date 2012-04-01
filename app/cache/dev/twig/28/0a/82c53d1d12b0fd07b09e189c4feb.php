<?php

/* ::layout.html.twig */
class __TwigTemplate_280a82c53d1d12b0fd07b09e189c4feb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'moto_body' => array($this, 'block_moto_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

\t</head>
\t\t<body>
\t\t\t\t";
        // line 9
        $this->displayBlock('moto_body', $context, $blocks);
        // line 11
        echo "
\t</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Exo";
    }

    // line 9
    public function block_moto_body($context, array $blocks = array())
    {
        // line 10
        echo "\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

}
