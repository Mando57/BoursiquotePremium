<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_424123c5ddc04b733ab4116aedc704e7d8db5d3b6fe2a3680a1f8222427fd7cc extends Twig_Template
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
        $__internal_22114e390f2c998b4a304be31b188d9cf4b67b527d9000e99801ec1b57b38dbd = $this->env->getExtension("native_profiler");
        $__internal_22114e390f2c998b4a304be31b188d9cf4b67b527d9000e99801ec1b57b38dbd->enter($__internal_22114e390f2c998b4a304be31b188d9cf4b67b527d9000e99801ec1b57b38dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_22114e390f2c998b4a304be31b188d9cf4b67b527d9000e99801ec1b57b38dbd->leave($__internal_22114e390f2c998b4a304be31b188d9cf4b67b527d9000e99801ec1b57b38dbd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
