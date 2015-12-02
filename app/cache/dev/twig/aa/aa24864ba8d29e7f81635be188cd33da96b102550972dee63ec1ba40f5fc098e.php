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
        $__internal_c4db84d9372b118922bb02574c9700a36317841f6aa51dae3bf9a2613ae19f7e = $this->env->getExtension("native_profiler");
        $__internal_c4db84d9372b118922bb02574c9700a36317841f6aa51dae3bf9a2613ae19f7e->enter($__internal_c4db84d9372b118922bb02574c9700a36317841f6aa51dae3bf9a2613ae19f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BourseBundle:Profile:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4db84d9372b118922bb02574c9700a36317841f6aa51dae3bf9a2613ae19f7e->leave($__internal_c4db84d9372b118922bb02574c9700a36317841f6aa51dae3bf9a2613ae19f7e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_49e88c4e8e205c9667dd035dcffe6431fd9a8db084f1ccbdfdca8201f57689ac = $this->env->getExtension("native_profiler");
        $__internal_49e88c4e8e205c9667dd035dcffe6431fd9a8db084f1ccbdfdca8201f57689ac->enter($__internal_49e88c4e8e205c9667dd035dcffe6431fd9a8db084f1ccbdfdca8201f57689ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Accueil général ";
        
        $__internal_49e88c4e8e205c9667dd035dcffe6431fd9a8db084f1ccbdfdca8201f57689ac->leave($__internal_49e88c4e8e205c9667dd035dcffe6431fd9a8db084f1ccbdfdca8201f57689ac_prof);

    }

    // line 5
    public function block_lateral($context, array $blocks = array())
    {
        $__internal_177d1aabe0035fb0ed99442488a57c06ded24216caf36675f3f55ff1439dcc43 = $this->env->getExtension("native_profiler");
        $__internal_177d1aabe0035fb0ed99442488a57c06ded24216caf36675f3f55ff1439dcc43->enter($__internal_177d1aabe0035fb0ed99442488a57c06ded24216caf36675f3f55ff1439dcc43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lateral"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesCategories"]) ? $context["lesCategories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["categ"]) {
            // line 7
            echo "        test
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categ'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_177d1aabe0035fb0ed99442488a57c06ded24216caf36675f3f55ff1439dcc43->leave($__internal_177d1aabe0035fb0ed99442488a57c06ded24216caf36675f3f55ff1439dcc43_prof);

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
        return array (  60 => 7,  55 => 6,  49 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "BourseBundle:layout:layout.html.twig" %}*/
/* */
/* {% block title %} {{ parent() }} - Accueil général {% endblock %}*/
/* */
/* {% block lateral %}*/
/*     {% for categ in lesCategories %}*/
/*         test*/
/*     {% endfor %}*/
/* {% endblock %}*/
