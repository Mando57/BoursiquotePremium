<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_44ca7e78c6eb19b84b8ca3cd361c3ea85500cbf764c0c43dce5cad8d658b96ed extends Twig_Template
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
        $__internal_14ebbb61b7bf3a678aafd8eeb62ab60d25f2a632124b2313956c103ae239676a = $this->env->getExtension("native_profiler");
        $__internal_14ebbb61b7bf3a678aafd8eeb62ab60d25f2a632124b2313956c103ae239676a->enter($__internal_14ebbb61b7bf3a678aafd8eeb62ab60d25f2a632124b2313956c103ae239676a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : null);
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : null);
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_14ebbb61b7bf3a678aafd8eeb62ab60d25f2a632124b2313956c103ae239676a->leave($__internal_14ebbb61b7bf3a678aafd8eeb62ab60d25f2a632124b2313956c103ae239676a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
