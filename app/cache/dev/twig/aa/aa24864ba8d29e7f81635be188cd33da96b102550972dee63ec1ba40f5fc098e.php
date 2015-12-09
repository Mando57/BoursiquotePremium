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
        $__internal_5511e56b1ac49cf952c5ed776aee1ac1001b2fbac8f9d27bd35919098ea7dbad = $this->env->getExtension("native_profiler");
        $__internal_5511e56b1ac49cf952c5ed776aee1ac1001b2fbac8f9d27bd35919098ea7dbad->enter($__internal_5511e56b1ac49cf952c5ed776aee1ac1001b2fbac8f9d27bd35919098ea7dbad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BourseBundle:Profile:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5511e56b1ac49cf952c5ed776aee1ac1001b2fbac8f9d27bd35919098ea7dbad->leave($__internal_5511e56b1ac49cf952c5ed776aee1ac1001b2fbac8f9d27bd35919098ea7dbad_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c749e12545da7f4484c5757f45c130212b9de8b71e27fd4d7bff9821685e1c16 = $this->env->getExtension("native_profiler");
        $__internal_c749e12545da7f4484c5757f45c130212b9de8b71e27fd4d7bff9821685e1c16->enter($__internal_c749e12545da7f4484c5757f45c130212b9de8b71e27fd4d7bff9821685e1c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Accueil général ";
        
        $__internal_c749e12545da7f4484c5757f45c130212b9de8b71e27fd4d7bff9821685e1c16->leave($__internal_c749e12545da7f4484c5757f45c130212b9de8b71e27fd4d7bff9821685e1c16_prof);

    }

    // line 5
    public function block_lateral($context, array $blocks = array())
    {
        $__internal_c351db3606375bd0932922836dfc91b565e35d1e8b4933a533100691290af7e6 = $this->env->getExtension("native_profiler");
        $__internal_c351db3606375bd0932922836dfc91b565e35d1e8b4933a533100691290af7e6->enter($__internal_c351db3606375bd0932922836dfc91b565e35d1e8b4933a533100691290af7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lateral"));

        // line 6
        echo "
        <u>Mes valeurs favorites</u>
   <img src=";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/graph/graph.php"), "html", null, true);
        echo " />
";
        
        $__internal_c351db3606375bd0932922836dfc91b565e35d1e8b4933a533100691290af7e6->leave($__internal_c351db3606375bd0932922836dfc91b565e35d1e8b4933a533100691290af7e6_prof);

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
        return array (  59 => 8,  55 => 6,  49 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "BourseBundle:layout:layout.html.twig" %}*/
/* */
/* {% block title %} {{ parent() }} - Accueil général {% endblock %}*/
/* */
/* {% block lateral %}*/
/* */
/*         <u>Mes valeurs favorites</u>*/
/*    <img src={{ asset('images/graph/graph.php') }} />*/
/* {% endblock %}*/
