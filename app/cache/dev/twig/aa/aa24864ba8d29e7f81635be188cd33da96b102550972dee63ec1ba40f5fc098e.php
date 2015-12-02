<?php

/* BourseBundle:Profile:index.html.twig */
class __TwigTemplate_a9bccf56eeebcd642ca8a23c427a709616bd30f026185d75f7cc18e83f1a32d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BourseBundle:layout:layout.html.twig", "BourseBundle:Profile:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'lateral' => array($this, 'block_lateral'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BourseBundle:layout:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_549c312dd35271c79055e7fbd4428705eb7ad8634d9a8708e73d61a45c219019 = $this->env->getExtension("native_profiler");
        $__internal_549c312dd35271c79055e7fbd4428705eb7ad8634d9a8708e73d61a45c219019->enter($__internal_549c312dd35271c79055e7fbd4428705eb7ad8634d9a8708e73d61a45c219019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BourseBundle:Profile:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_549c312dd35271c79055e7fbd4428705eb7ad8634d9a8708e73d61a45c219019->leave($__internal_549c312dd35271c79055e7fbd4428705eb7ad8634d9a8708e73d61a45c219019_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c7194a458732cafe0cb864099cce85c61e01deca7a7f1a6377c214c1aff32741 = $this->env->getExtension("native_profiler");
        $__internal_c7194a458732cafe0cb864099cce85c61e01deca7a7f1a6377c214c1aff32741->enter($__internal_c7194a458732cafe0cb864099cce85c61e01deca7a7f1a6377c214c1aff32741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Accueil général ";
        
        $__internal_c7194a458732cafe0cb864099cce85c61e01deca7a7f1a6377c214c1aff32741->leave($__internal_c7194a458732cafe0cb864099cce85c61e01deca7a7f1a6377c214c1aff32741_prof);

    }

    // line 5
    public function block_lateral($context, array $blocks = array())
    {
        $__internal_adf9633e2bbb93cd0882cdf531f477cf896efec746e74e9304d034be35ffe03e = $this->env->getExtension("native_profiler");
        $__internal_adf9633e2bbb93cd0882cdf531f477cf896efec746e74e9304d034be35ffe03e->enter($__internal_adf9633e2bbb93cd0882cdf531f477cf896efec746e74e9304d034be35ffe03e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lateral"));

        // line 6
        echo "
        <u>Mes valeurs favorites</u>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesBourses"]) ? $context["lesBourses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["categ"]) {
            // line 9
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categ"], "nom", array()), "html", null, true);
            echo "


    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categ'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_adf9633e2bbb93cd0882cdf531f477cf896efec746e74e9304d034be35ffe03e->leave($__internal_adf9633e2bbb93cd0882cdf531f477cf896efec746e74e9304d034be35ffe03e_prof);

    }

    public function getTemplateName()
    {
        return "BourseBundle:Profile:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 9,  59 => 8,  55 => 6,  49 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "BourseBundle:layout:layout.html.twig" %}*/
/* */
/* {% block title %} {{ parent() }} - Accueil général {% endblock %}*/
/* */
/* {% block lateral %}*/
/* */
/*         <u>Mes valeurs favorites</u>*/
/*     {% for categ in lesBourses %}*/
/*         {{ categ.nom }}*/
/* */
/* */
/*     {% endfor %}*/
/* {% endblock %}*/
