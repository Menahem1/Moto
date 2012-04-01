<?php

/* ExoMotoBundle:Moto:index.html.twig */
class __TwigTemplate_3663fe2bcd87f69e20d15bb338562137 extends Twig_Template
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
        echo "Index - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_moto_body($context, array $blocks = array())
    {
        // line 8
        echo "\t\t\t\t\t\t<h2><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moto_up_ad"), "html", null, true);
        echo "\">Ajouter une moto</a></h2>
\t\t\t\t\t\t<table border=1>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Nom de la moto</th>
\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t<th>Prénom</th>
\t\t\t\t\t\t<th>Categorie</th>
\t\t\t\t\t\t<th>Piece(s)</th>
\t\t\t\t\t\t<th>Supprimer</th>
\t\t
\t
\t\t\t\t";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "moto"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["moto"]) {
            // line 20
            echo "
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t<td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moto_up_ad", array("id" => $this->getAttribute($this->getContext($context, "moto"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "moto"), "moto"), "html", null, true);
            echo "</a></td>
\t\t\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "moto"), "nom"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "moto"), "prenom"), "html", null, true);
            echo "</a></td>
\t\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "moto"), "nomcategorie"), "nomcategorie"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
            // line 27
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "moto"), "piece"));
            foreach ($context['_seq'] as $context["_key"] => $context["piece"]) {
                // line 28
                echo "\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "piece"), "nompiece"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['piece'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 30
            echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moto_del", array("id" => $this->getAttribute($this->getContext($context, "moto"), "id"))), "html", null, true);
            echo "\">Supprimer</a></td>
\t\t\t\t\t\t</tr>


\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            echo "\t\t\t\t\t<li>No Moto in database</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['moto'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 38
        echo "\t\t\t\t
\t\t\t\t\t\t</table>

";
    }

    public function getTemplateName()
    {
        return "ExoMotoBundle:Moto:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
