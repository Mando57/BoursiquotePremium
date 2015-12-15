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
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BourseBundle:layout:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8ed3c2fda3109f0521d043d221f3fa890bc4092555a470afab06180ee91bd0c = $this->env->getExtension("native_profiler");
        $__internal_d8ed3c2fda3109f0521d043d221f3fa890bc4092555a470afab06180ee91bd0c->enter($__internal_d8ed3c2fda3109f0521d043d221f3fa890bc4092555a470afab06180ee91bd0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BourseBundle:Profile:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8ed3c2fda3109f0521d043d221f3fa890bc4092555a470afab06180ee91bd0c->leave($__internal_d8ed3c2fda3109f0521d043d221f3fa890bc4092555a470afab06180ee91bd0c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bc7fdcfe8ecd1af682ea71bc9bc6ebdf360ee71109c41b8e750a8b68969e3ce6 = $this->env->getExtension("native_profiler");
        $__internal_bc7fdcfe8ecd1af682ea71bc9bc6ebdf360ee71109c41b8e750a8b68969e3ce6->enter($__internal_bc7fdcfe8ecd1af682ea71bc9bc6ebdf360ee71109c41b8e750a8b68969e3ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Accueil général ";
        
        $__internal_bc7fdcfe8ecd1af682ea71bc9bc6ebdf360ee71109c41b8e750a8b68969e3ce6->leave($__internal_bc7fdcfe8ecd1af682ea71bc9bc6ebdf360ee71109c41b8e750a8b68969e3ce6_prof);

    }

    // line 5
    public function block_lateral($context, array $blocks = array())
    {
        $__internal_bc60ee8801b9d7fd937a0dcd45748d73862f75d44779eb58f5ba4e2ff9ae7c06 = $this->env->getExtension("native_profiler");
        $__internal_bc60ee8801b9d7fd937a0dcd45748d73862f75d44779eb58f5ba4e2ff9ae7c06->enter($__internal_bc60ee8801b9d7fd937a0dcd45748d73862f75d44779eb58f5ba4e2ff9ae7c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lateral"));

        // line 6
        echo "

";
        
        $__internal_bc60ee8801b9d7fd937a0dcd45748d73862f75d44779eb58f5ba4e2ff9ae7c06->leave($__internal_bc60ee8801b9d7fd937a0dcd45748d73862f75d44779eb58f5ba4e2ff9ae7c06_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_fc1c28cc681c85d1f1e96a81862eecf53b64be7a4006c90b3b0e05c4b732fad7 = $this->env->getExtension("native_profiler");
        $__internal_fc1c28cc681c85d1f1e96a81862eecf53b64be7a4006c90b3b0e05c4b732fad7->enter($__internal_fc1c28cc681c85d1f1e96a81862eecf53b64be7a4006c90b3b0e05c4b732fad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "<div id=\"conteneur\">

        <p id=\"p1\">Mes valeurs favorites</p>
        <img src=";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/graph/graph.php"), "html", null, true);
        echo " />

</div>
";
        
        $__internal_fc1c28cc681c85d1f1e96a81862eecf53b64be7a4006c90b3b0e05c4b732fad7->leave($__internal_fc1c28cc681c85d1f1e96a81862eecf53b64be7a4006c90b3b0e05c4b732fad7_prof);

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
        return array (  76 => 14,  71 => 11,  65 => 10,  56 => 6,  50 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "BourseBundle:layout:layout.html.twig" %}*/
/* */
/* {% block title %} {{ parent() }} - Accueil général {% endblock %}*/
/* */
/* {% block lateral %}*/
/* */
/* */
/* {% endblock %}*/
/* */
/*  {% block content %}*/
/* <div id="conteneur">*/
/* */
/*         <p id="p1">Mes valeurs favorites</p>*/
/*         <img src={{ asset('images/graph/graph.php') }} />*/
/* */
/* </div>*/
/* {% endblock %}*/
