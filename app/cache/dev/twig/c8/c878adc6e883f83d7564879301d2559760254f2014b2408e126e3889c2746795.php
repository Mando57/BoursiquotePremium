<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_fc4ab4993605f420fe15603b7c8f3842308e39fc36353e95c824134d1260d438 extends Twig_Template
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
        $__internal_e05a2e1208b47fa80ef65f3e4dc8a3d71f5ff07000491a57dddfc6fa1c3de918 = $this->env->getExtension("native_profiler");
        $__internal_e05a2e1208b47fa80ef65f3e4dc8a3d71f5ff07000491a57dddfc6fa1c3de918->enter($__internal_e05a2e1208b47fa80ef65f3e4dc8a3d71f5ff07000491a57dddfc6fa1c3de918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_e05a2e1208b47fa80ef65f3e4dc8a3d71f5ff07000491a57dddfc6fa1c3de918->leave($__internal_e05a2e1208b47fa80ef65f3e4dc8a3d71f5ff07000491a57dddfc6fa1c3de918_prof);

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
