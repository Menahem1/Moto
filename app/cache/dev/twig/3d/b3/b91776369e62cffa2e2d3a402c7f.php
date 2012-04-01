<?php

/* ExoMotoBundle:Moto:add.html.twig */
class __TwigTemplate_3db3b91776369e62cffa2e2d3a402c7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'moto_body' => array($this, 'block_moto_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ExoMotoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Add/Update - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_moto_body($context, array $blocks = array())
    {
        // line 8
        echo "\t
\t<h2>Ajouter ou modifier une moto</h2>
\t
\t";
        // line 11
        $this->env->loadTemplate("ExoMotoBundle:Moto:form.html.twig")->display(array_merge($context, array("form" => $this->getContext($context, "form"))));
        // line 12
        echo "\t

\t
";
    }

    public function getTemplateName()
    {
        return "ExoMotoBundle:Moto:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
