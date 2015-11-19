<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_33a6f308e337c21e37f4ea2ab4b7f657c8221b3ec83b787c8667529d3409afb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_51e7881742ca4c279bfa13618c4e56e7836833fe3e109dc9a87fceb6c4339b2e = $this->env->getExtension("native_profiler");
        $__internal_51e7881742ca4c279bfa13618c4e56e7836833fe3e109dc9a87fceb6c4339b2e->enter($__internal_51e7881742ca4c279bfa13618c4e56e7836833fe3e109dc9a87fceb6c4339b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : null))));
        
        $__internal_51e7881742ca4c279bfa13618c4e56e7836833fe3e109dc9a87fceb6c4339b2e->leave($__internal_51e7881742ca4c279bfa13618c4e56e7836833fe3e109dc9a87fceb6c4339b2e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
