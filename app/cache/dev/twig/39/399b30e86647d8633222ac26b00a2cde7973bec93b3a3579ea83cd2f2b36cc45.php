<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_40a418093f3b0b1a8a95127aed180a145b4886f0e10e7b631a9ac909ed13e505 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9f745ce8ed45ac337f79721dacbac9b0dfb5a2f17ed5f95f4042dc364d53e75 = $this->env->getExtension("native_profiler");
        $__internal_f9f745ce8ed45ac337f79721dacbac9b0dfb5a2f17ed5f95f4042dc364d53e75->enter($__internal_f9f745ce8ed45ac337f79721dacbac9b0dfb5a2f17ed5f95f4042dc364d53e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f9f745ce8ed45ac337f79721dacbac9b0dfb5a2f17ed5f95f4042dc364d53e75->leave($__internal_f9f745ce8ed45ac337f79721dacbac9b0dfb5a2f17ed5f95f4042dc364d53e75_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d78e3ced3f13dcee01e95dfc35486f0e11495d15b548a506e6d96d695a0e4258 = $this->env->getExtension("native_profiler");
        $__internal_d78e3ced3f13dcee01e95dfc35486f0e11495d15b548a506e6d96d695a0e4258->enter($__internal_d78e3ced3f13dcee01e95dfc35486f0e11495d15b548a506e6d96d695a0e4258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d78e3ced3f13dcee01e95dfc35486f0e11495d15b548a506e6d96d695a0e4258->leave($__internal_d78e3ced3f13dcee01e95dfc35486f0e11495d15b548a506e6d96d695a0e4258_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
