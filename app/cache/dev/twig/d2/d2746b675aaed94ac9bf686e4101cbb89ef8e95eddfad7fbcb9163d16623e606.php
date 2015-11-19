<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_4c4a9e4a2aeb89e9f33a7e67de008bec801d44f812ec45e49a11d01e34ccbdbf extends Twig_Template
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
        $__internal_638aeec81bd715d3e25f30dc498e9444ea23340650e7c0f73f2433f36c2a08b6 = $this->env->getExtension("native_profiler");
        $__internal_638aeec81bd715d3e25f30dc498e9444ea23340650e7c0f73f2433f36c2a08b6->enter($__internal_638aeec81bd715d3e25f30dc498e9444ea23340650e7c0f73f2433f36c2a08b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : null), "message" => (isset($context["status_text"]) ? $context["status_text"] : null))));
        echo "
";
        
        $__internal_638aeec81bd715d3e25f30dc498e9444ea23340650e7c0f73f2433f36c2a08b6->leave($__internal_638aeec81bd715d3e25f30dc498e9444ea23340650e7c0f73f2433f36c2a08b6_prof);

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
