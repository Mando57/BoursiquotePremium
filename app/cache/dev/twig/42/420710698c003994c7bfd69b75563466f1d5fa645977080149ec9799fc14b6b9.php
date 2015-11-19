<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_70d86a7c5ea228261a4fb93522ead1733137a5af1b438ce5faf3dfb1cd3e482a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6fe2e5800d6de5886745f7e1787d88a9a30fa04a5ba7323745216072443a5023 = $this->env->getExtension("native_profiler");
        $__internal_6fe2e5800d6de5886745f7e1787d88a9a30fa04a5ba7323745216072443a5023->enter($__internal_6fe2e5800d6de5886745f7e1787d88a9a30fa04a5ba7323745216072443a5023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fe2e5800d6de5886745f7e1787d88a9a30fa04a5ba7323745216072443a5023->leave($__internal_6fe2e5800d6de5886745f7e1787d88a9a30fa04a5ba7323745216072443a5023_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d492be4d12f6fc9240eac8c1d81523642cd339ed69f127a1534887a4610f0559 = $this->env->getExtension("native_profiler");
        $__internal_d492be4d12f6fc9240eac8c1d81523642cd339ed69f127a1534887a4610f0559->enter($__internal_d492be4d12f6fc9240eac8c1d81523642cd339ed69f127a1534887a4610f0559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d492be4d12f6fc9240eac8c1d81523642cd339ed69f127a1534887a4610f0559->leave($__internal_d492be4d12f6fc9240eac8c1d81523642cd339ed69f127a1534887a4610f0559_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3d2c2f2853aefa79f13c88d1bf7dad33e43d471706925f6ab403229d7b7b135 = $this->env->getExtension("native_profiler");
        $__internal_d3d2c2f2853aefa79f13c88d1bf7dad33e43d471706925f6ab403229d7b7b135->enter($__internal_d3d2c2f2853aefa79f13c88d1bf7dad33e43d471706925f6ab403229d7b7b135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : null), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_d3d2c2f2853aefa79f13c88d1bf7dad33e43d471706925f6ab403229d7b7b135->leave($__internal_d3d2c2f2853aefa79f13c88d1bf7dad33e43d471706925f6ab403229d7b7b135_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
