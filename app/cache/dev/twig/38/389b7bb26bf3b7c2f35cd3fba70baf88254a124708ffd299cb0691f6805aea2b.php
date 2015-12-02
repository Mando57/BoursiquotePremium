<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_a4f995bfe9093294646f1e7e0ebbdda0189d69ea8e4074d172d6314cf2053a33 extends Twig_Template
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
        $__internal_93db1c6a7c793cdac1a3e81435174d72735aaf7900fa9914438b918575e208c1 = $this->env->getExtension("native_profiler");
        $__internal_93db1c6a7c793cdac1a3e81435174d72735aaf7900fa9914438b918575e208c1->enter($__internal_93db1c6a7c793cdac1a3e81435174d72735aaf7900fa9914438b918575e208c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_93db1c6a7c793cdac1a3e81435174d72735aaf7900fa9914438b918575e208c1->leave($__internal_93db1c6a7c793cdac1a3e81435174d72735aaf7900fa9914438b918575e208c1_prof);

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
