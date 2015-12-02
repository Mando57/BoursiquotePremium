<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_f0fb937dacf483860215fbe96c4fcf5110fd8f2b45bd503fa632e553c48e6c81 extends Twig_Template
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
        $__internal_9c914eccdf579807f7415be454436a67f97bf680d910d73a4e68ceddea678f89 = $this->env->getExtension("native_profiler");
        $__internal_9c914eccdf579807f7415be454436a67f97bf680d910d73a4e68ceddea678f89->enter($__internal_9c914eccdf579807f7415be454436a67f97bf680d910d73a4e68ceddea678f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_9c914eccdf579807f7415be454436a67f97bf680d910d73a4e68ceddea678f89->leave($__internal_9c914eccdf579807f7415be454436a67f97bf680d910d73a4e68ceddea678f89_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
