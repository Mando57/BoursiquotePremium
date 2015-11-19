<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_b82e48d595d1d528fea597f5debea7f82a9c74621533b0bf9b25f1f0f2ae5f3d extends Twig_Template
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
        $__internal_e9df404c3e22e290153d38d16e53882a80da64e24a99f0ea682566eb078c6856 = $this->env->getExtension("native_profiler");
        $__internal_e9df404c3e22e290153d38d16e53882a80da64e24a99f0ea682566eb078c6856->enter($__internal_e9df404c3e22e290153d38d16e53882a80da64e24a99f0ea682566eb078c6856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9df404c3e22e290153d38d16e53882a80da64e24a99f0ea682566eb078c6856->leave($__internal_e9df404c3e22e290153d38d16e53882a80da64e24a99f0ea682566eb078c6856_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0d99e47ca14f964cd6eee44b98de3693ef85cff33754639517d6afac556bcb89 = $this->env->getExtension("native_profiler");
        $__internal_0d99e47ca14f964cd6eee44b98de3693ef85cff33754639517d6afac556bcb89->enter($__internal_0d99e47ca14f964cd6eee44b98de3693ef85cff33754639517d6afac556bcb89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_0d99e47ca14f964cd6eee44b98de3693ef85cff33754639517d6afac556bcb89->leave($__internal_0d99e47ca14f964cd6eee44b98de3693ef85cff33754639517d6afac556bcb89_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f305793e441d8c66cc28331d97ca6450b0968ba32e489517d693fda994390f28 = $this->env->getExtension("native_profiler");
        $__internal_f305793e441d8c66cc28331d97ca6450b0968ba32e489517d693fda994390f28->enter($__internal_f305793e441d8c66cc28331d97ca6450b0968ba32e489517d693fda994390f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_f305793e441d8c66cc28331d97ca6450b0968ba32e489517d693fda994390f28->leave($__internal_f305793e441d8c66cc28331d97ca6450b0968ba32e489517d693fda994390f28_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7bacbf7a4579e37acb27c99282fc8901d1f35061c4bd647f6d190e87b477d550 = $this->env->getExtension("native_profiler");
        $__internal_7bacbf7a4579e37acb27c99282fc8901d1f35061c4bd647f6d190e87b477d550->enter($__internal_7bacbf7a4579e37acb27c99282fc8901d1f35061c4bd647f6d190e87b477d550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "</div>
";
        
        $__internal_7bacbf7a4579e37acb27c99282fc8901d1f35061c4bd647f6d190e87b477d550->leave($__internal_7bacbf7a4579e37acb27c99282fc8901d1f35061c4bd647f6d190e87b477d550_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_cac02ec0c33c84482382cb104331f3965baebfb059c1cdcc0f29cd3e8ae2e8e7 = $this->env->getExtension("native_profiler");
        $__internal_cac02ec0c33c84482382cb104331f3965baebfb059c1cdcc0f29cd3e8ae2e8e7->enter($__internal_cac02ec0c33c84482382cb104331f3965baebfb059c1cdcc0f29cd3e8ae2e8e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_cac02ec0c33c84482382cb104331f3965baebfb059c1cdcc0f29cd3e8ae2e8e7->leave($__internal_cac02ec0c33c84482382cb104331f3965baebfb059c1cdcc0f29cd3e8ae2e8e7_prof);

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
