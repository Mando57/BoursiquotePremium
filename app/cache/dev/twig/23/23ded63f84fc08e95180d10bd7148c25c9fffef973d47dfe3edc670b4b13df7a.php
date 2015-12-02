<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_d7c96d30f1c84b2893b9353fcbebe4dcb162ac725a990612bb88a709040004c7 extends Twig_Template
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
        $__internal_caf476559f01eaaa50670f3524ae16b7dc84830e68d5865cd7a00b8fe22fbbbd = $this->env->getExtension("native_profiler");
        $__internal_caf476559f01eaaa50670f3524ae16b7dc84830e68d5865cd7a00b8fe22fbbbd->enter($__internal_caf476559f01eaaa50670f3524ae16b7dc84830e68d5865cd7a00b8fe22fbbbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_caf476559f01eaaa50670f3524ae16b7dc84830e68d5865cd7a00b8fe22fbbbd->leave($__internal_caf476559f01eaaa50670f3524ae16b7dc84830e68d5865cd7a00b8fe22fbbbd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
