<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_3b04895a2b3863f19c6a64a9607bada9710b99ab3e57e0af3a68364f436a02b0 extends Twig_Template
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
        $__internal_10f748dd4e2b9267ba7989eb92c7401aa2b5f7ba4186cdd22e5eb891ad709f61 = $this->env->getExtension("native_profiler");
        $__internal_10f748dd4e2b9267ba7989eb92c7401aa2b5f7ba4186cdd22e5eb891ad709f61->enter($__internal_10f748dd4e2b9267ba7989eb92c7401aa2b5f7ba4186cdd22e5eb891ad709f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10f748dd4e2b9267ba7989eb92c7401aa2b5f7ba4186cdd22e5eb891ad709f61->leave($__internal_10f748dd4e2b9267ba7989eb92c7401aa2b5f7ba4186cdd22e5eb891ad709f61_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f484b26afa5e6719b0dabe8a75582ba4d5257da59423fd4bd4f51a768ae5dff2 = $this->env->getExtension("native_profiler");
        $__internal_f484b26afa5e6719b0dabe8a75582ba4d5257da59423fd4bd4f51a768ae5dff2->enter($__internal_f484b26afa5e6719b0dabe8a75582ba4d5257da59423fd4bd4f51a768ae5dff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f484b26afa5e6719b0dabe8a75582ba4d5257da59423fd4bd4f51a768ae5dff2->leave($__internal_f484b26afa5e6719b0dabe8a75582ba4d5257da59423fd4bd4f51a768ae5dff2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_114c4e1c009f9c123d515409fbd19d15446f5a2c9edfa98119e0fd446074d573 = $this->env->getExtension("native_profiler");
        $__internal_114c4e1c009f9c123d515409fbd19d15446f5a2c9edfa98119e0fd446074d573->enter($__internal_114c4e1c009f9c123d515409fbd19d15446f5a2c9edfa98119e0fd446074d573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
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
        
        $__internal_114c4e1c009f9c123d515409fbd19d15446f5a2c9edfa98119e0fd446074d573->leave($__internal_114c4e1c009f9c123d515409fbd19d15446f5a2c9edfa98119e0fd446074d573_prof);

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
