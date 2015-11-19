<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_06cf5dc9e582385d0e0c3b5039a940ca051aeacee9e04cf6bca210661b094e7b extends Twig_Template
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
        $__internal_649fd7c98f804a13545c6bc74b6988d47e67d6f8de84479229f76e658b24aa59 = $this->env->getExtension("native_profiler");
        $__internal_649fd7c98f804a13545c6bc74b6988d47e67d6f8de84479229f76e658b24aa59->enter($__internal_649fd7c98f804a13545c6bc74b6988d47e67d6f8de84479229f76e658b24aa59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : null))));
        // line 3
        echo "*/
";
        
        $__internal_649fd7c98f804a13545c6bc74b6988d47e67d6f8de84479229f76e658b24aa59->leave($__internal_649fd7c98f804a13545c6bc74b6988d47e67d6f8de84479229f76e658b24aa59_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
