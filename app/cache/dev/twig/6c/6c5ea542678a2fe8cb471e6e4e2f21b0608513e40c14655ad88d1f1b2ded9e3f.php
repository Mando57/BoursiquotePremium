<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_581e61db84088c1a963f42ca672cdd0909fae15b0e34b013f69ac8136e0daf04 extends Twig_Template
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
        $__internal_3b387f9c6cf6b954991afcb204e83300bc18bc338ee1b5d4db4acbf46c908318 = $this->env->getExtension("native_profiler");
        $__internal_3b387f9c6cf6b954991afcb204e83300bc18bc338ee1b5d4db4acbf46c908318->enter($__internal_3b387f9c6cf6b954991afcb204e83300bc18bc338ee1b5d4db4acbf46c908318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : null))));
        // line 3
        echo "*/
";
        
        $__internal_3b387f9c6cf6b954991afcb204e83300bc18bc338ee1b5d4db4acbf46c908318->leave($__internal_3b387f9c6cf6b954991afcb204e83300bc18bc338ee1b5d4db4acbf46c908318_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
