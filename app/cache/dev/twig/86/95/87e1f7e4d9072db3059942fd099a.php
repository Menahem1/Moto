<?php

/* ExoMotoBundle::layout.html.twig */
class __TwigTemplate_869587e1f7e4d9072db3059942fd099a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'moto_body' => array($this, 'block_moto_body'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Moto - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_moto_body($context, array $blocks = array())
    {
        // line 10
        echo "\t";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
\t";
        // line 9
        $this->displayBlock('moto_body', $context, $blocks);
        // line 11
        echo "\t
";
    }

    public function getTemplateName()
    {
        return "ExoMotoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
