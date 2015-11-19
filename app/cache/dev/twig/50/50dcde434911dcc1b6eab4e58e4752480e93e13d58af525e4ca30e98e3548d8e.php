<?php

/* ::base.html.twig */
class __TwigTemplate_8c5b3420469b1939d9b5121b16d595d41064a2bc7a42891c502ff63082188049 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07e262fdcf195144389d1744dfaa10dbe3bd5d037ccd94e95f1ed971567f7323 = $this->env->getExtension("native_profiler");
        $__internal_07e262fdcf195144389d1744dfaa10dbe3bd5d037ccd94e95f1ed971567f7323->enter($__internal_07e262fdcf195144389d1744dfaa10dbe3bd5d037ccd94e95f1ed971567f7323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_07e262fdcf195144389d1744dfaa10dbe3bd5d037ccd94e95f1ed971567f7323->leave($__internal_07e262fdcf195144389d1744dfaa10dbe3bd5d037ccd94e95f1ed971567f7323_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_161d99a4abb7625eaa562b1645bbac97696969a8bc2a45f61948246c9b0703ea = $this->env->getExtension("native_profiler");
        $__internal_161d99a4abb7625eaa562b1645bbac97696969a8bc2a45f61948246c9b0703ea->enter($__internal_161d99a4abb7625eaa562b1645bbac97696969a8bc2a45f61948246c9b0703ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_161d99a4abb7625eaa562b1645bbac97696969a8bc2a45f61948246c9b0703ea->leave($__internal_161d99a4abb7625eaa562b1645bbac97696969a8bc2a45f61948246c9b0703ea_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b10ed4f298d755707be21853f308503588f2573e5cb754d603db821027a35e64 = $this->env->getExtension("native_profiler");
        $__internal_b10ed4f298d755707be21853f308503588f2573e5cb754d603db821027a35e64->enter($__internal_b10ed4f298d755707be21853f308503588f2573e5cb754d603db821027a35e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b10ed4f298d755707be21853f308503588f2573e5cb754d603db821027a35e64->leave($__internal_b10ed4f298d755707be21853f308503588f2573e5cb754d603db821027a35e64_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7b48a2813319fc865f6ecfe2200d987d6d909b7a8810b11d96458b3356ab2a5 = $this->env->getExtension("native_profiler");
        $__internal_d7b48a2813319fc865f6ecfe2200d987d6d909b7a8810b11d96458b3356ab2a5->enter($__internal_d7b48a2813319fc865f6ecfe2200d987d6d909b7a8810b11d96458b3356ab2a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d7b48a2813319fc865f6ecfe2200d987d6d909b7a8810b11d96458b3356ab2a5->leave($__internal_d7b48a2813319fc865f6ecfe2200d987d6d909b7a8810b11d96458b3356ab2a5_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ff7684a9769024676bbe95deff58a90dd8f1c370f502d2a7398956b61e9d3676 = $this->env->getExtension("native_profiler");
        $__internal_ff7684a9769024676bbe95deff58a90dd8f1c370f502d2a7398956b61e9d3676->enter($__internal_ff7684a9769024676bbe95deff58a90dd8f1c370f502d2a7398956b61e9d3676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ff7684a9769024676bbe95deff58a90dd8f1c370f502d2a7398956b61e9d3676->leave($__internal_ff7684a9769024676bbe95deff58a90dd8f1c370f502d2a7398956b61e9d3676_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
