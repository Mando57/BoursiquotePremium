<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_bc5ff31541481b6770e69b5ba7007525f58eda4c4a58e626c089b83a6ffc4097 extends Twig_Template
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
        $__internal_0ff459171cd8c2d2c88d85dbc74a1507e7128da9e4fc8432b4a1ad776f39bb8a = $this->env->getExtension("native_profiler");
        $__internal_0ff459171cd8c2d2c88d85dbc74a1507e7128da9e4fc8432b4a1ad776f39bb8a->enter($__internal_0ff459171cd8c2d2c88d85dbc74a1507e7128da9e4fc8432b4a1ad776f39bb8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : null))));
        
        $__internal_0ff459171cd8c2d2c88d85dbc74a1507e7128da9e4fc8432b4a1ad776f39bb8a->leave($__internal_0ff459171cd8c2d2c88d85dbc74a1507e7128da9e4fc8432b4a1ad776f39bb8a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
