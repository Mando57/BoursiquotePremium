<?php

/* LaFleurSymfonyBundle:Catalogue:catalogue.html.twig */
class __TwigTemplate_f76635bb95780ae31b389d9845f7e0539e6b00ff341d27bce2d64124819a8bc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LaFleurSymfonyBundle:layout:layout.html.twig", "LaFleurSymfonyBundle:Catalogue:catalogue.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'lateral' => array($this, 'block_lateral'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LaFleurSymfonyBundle:layout:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e44bbbb0143f755c273245ed66e82616446377a88d1a446514f7937408a5049 = $this->env->getExtension("native_profiler");
        $__internal_1e44bbbb0143f755c273245ed66e82616446377a88d1a446514f7937408a5049->enter($__internal_1e44bbbb0143f755c273245ed66e82616446377a88d1a446514f7937408a5049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LaFleurSymfonyBundle:Catalogue:catalogue.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e44bbbb0143f755c273245ed66e82616446377a88d1a446514f7937408a5049->leave($__internal_1e44bbbb0143f755c273245ed66e82616446377a88d1a446514f7937408a5049_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_66c7c63eeebd0714f24e74ec8e44b936de7b07ca7fc08fabb103a0f9d50044a6 = $this->env->getExtension("native_profiler");
        $__internal_66c7c63eeebd0714f24e74ec8e44b936de7b07ca7fc08fabb103a0f9d50044a6->enter($__internal_66c7c63eeebd0714f24e74ec8e44b936de7b07ca7fc08fabb103a0f9d50044a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Accueil général ";
        
        $__internal_66c7c63eeebd0714f24e74ec8e44b936de7b07ca7fc08fabb103a0f9d50044a6->leave($__internal_66c7c63eeebd0714f24e74ec8e44b936de7b07ca7fc08fabb103a0f9d50044a6_prof);

    }

    // line 5
    public function block_lateral($context, array $blocks = array())
    {
        $__internal_f56f4a8d8db385b8e9b238a79ac7db68eb7d6958dc794e51fa0f276c7df88dd3 = $this->env->getExtension("native_profiler");
        $__internal_f56f4a8d8db385b8e9b238a79ac7db68eb7d6958dc794e51fa0f276c7df88dd3->enter($__internal_f56f4a8d8db385b8e9b238a79ac7db68eb7d6958dc794e51fa0f276c7df88dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lateral"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesCategories"]) ? $context["lesCategories"] : $this->getContext($context, "lesCategories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categ"]) {
            // line 7
            echo "        <li>
            <a href=";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("la_fleur_symfony_categorie", array("cat" => $this->getAttribute($context["categ"], "id", array()))), "html", null, true);
            echo "> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categ"], "libelle", array()), "html", null, true);
            echo "</a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categ'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_f56f4a8d8db385b8e9b238a79ac7db68eb7d6958dc794e51fa0f276c7df88dd3->leave($__internal_f56f4a8d8db385b8e9b238a79ac7db68eb7d6958dc794e51fa0f276c7df88dd3_prof);

    }

    public function getTemplateName()
    {
        return "LaFleurSymfonyBundle:Catalogue:catalogue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 8,  60 => 7,  55 => 6,  49 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LaFleurSymfonyBundle:layout:layout.html.twig" %}*/
/* */
/* {% block title %} {{ parent() }} - Accueil général {% endblock %}*/
/* */
/* {% block lateral %}*/
/*     {% for categ in lesCategories %}*/
/*         <li>*/
/*             <a href={{ path('la_fleur_symfony_categorie', {'cat':categ.id}) }}> {{categ.libelle}}</a>*/
/*         </li>*/
/*     {% endfor %}*/
/* {% endblock %}*/
