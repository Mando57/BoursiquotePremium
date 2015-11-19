<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_b3fae041edf5bfad73870460d645929d3cafa6da7b140483f1fcebb5e7da3bfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_16fd50f35f00c551994011911b83705c4bc45385cd73fc113c0d02073674c868 = $this->env->getExtension("native_profiler");
        $__internal_16fd50f35f00c551994011911b83705c4bc45385cd73fc113c0d02073674c868->enter($__internal_16fd50f35f00c551994011911b83705c4bc45385cd73fc113c0d02073674c868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16fd50f35f00c551994011911b83705c4bc45385cd73fc113c0d02073674c868->leave($__internal_16fd50f35f00c551994011911b83705c4bc45385cd73fc113c0d02073674c868_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3f51faa9c0628800ded3793d1dc2c70ba1902a7e8339ececd8af3abfbb3daaf2 = $this->env->getExtension("native_profiler");
        $__internal_3f51faa9c0628800ded3793d1dc2c70ba1902a7e8339ececd8af3abfbb3daaf2->enter($__internal_3f51faa9c0628800ded3793d1dc2c70ba1902a7e8339ececd8af3abfbb3daaf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_3f51faa9c0628800ded3793d1dc2c70ba1902a7e8339ececd8af3abfbb3daaf2->leave($__internal_3f51faa9c0628800ded3793d1dc2c70ba1902a7e8339ececd8af3abfbb3daaf2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_26740ee1a7768548e8991cf1facffeb3492f779b114db8cebad3a4d42372e75f = $this->env->getExtension("native_profiler");
        $__internal_26740ee1a7768548e8991cf1facffeb3492f779b114db8cebad3a4d42372e75f->enter($__internal_26740ee1a7768548e8991cf1facffeb3492f779b114db8cebad3a4d42372e75f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_26740ee1a7768548e8991cf1facffeb3492f779b114db8cebad3a4d42372e75f->leave($__internal_26740ee1a7768548e8991cf1facffeb3492f779b114db8cebad3a4d42372e75f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c3966e4faa580978e737fc267c0915695fddd8056961ae826711ffb158dcc4e = $this->env->getExtension("native_profiler");
        $__internal_5c3966e4faa580978e737fc267c0915695fddd8056961ae826711ffb158dcc4e->enter($__internal_5c3966e4faa580978e737fc267c0915695fddd8056961ae826711ffb158dcc4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_5c3966e4faa580978e737fc267c0915695fddd8056961ae826711ffb158dcc4e->leave($__internal_5c3966e4faa580978e737fc267c0915695fddd8056961ae826711ffb158dcc4e_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_25226a9fca1cdec1080c30176e40cc4a6e1c1f716ace4abedd59c9d881bb856d = $this->env->getExtension("native_profiler");
        $__internal_25226a9fca1cdec1080c30176e40cc4a6e1c1f716ace4abedd59c9d881bb856d->enter($__internal_25226a9fca1cdec1080c30176e40cc4a6e1c1f716ace4abedd59c9d881bb856d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_25226a9fca1cdec1080c30176e40cc4a6e1c1f716ace4abedd59c9d881bb856d->leave($__internal_25226a9fca1cdec1080c30176e40cc4a6e1c1f716ace4abedd59c9d881bb856d_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
