<?php

/* ExoMotoBundle:Default:index.html.twig */
class __TwigTemplate_2f3ed59491905b4bba5462374dddbfa9 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "ExoMotoBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
