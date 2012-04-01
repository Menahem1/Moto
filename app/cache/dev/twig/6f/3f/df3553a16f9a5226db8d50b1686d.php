<?php

/* ExoMotoBundle:Moto:form.html.twig */
class __TwigTemplate_6f3fdf3553a16f9a5226db8d50b1686d extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
\t
\t";
        // line 3
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
\t
\t<input type=\"submit\" />
</form>";
    }

    public function getTemplateName()
    {
        return "ExoMotoBundle:Moto:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
