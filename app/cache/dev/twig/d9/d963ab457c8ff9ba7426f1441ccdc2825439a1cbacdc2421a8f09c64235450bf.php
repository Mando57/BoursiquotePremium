<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_57baa194ed0fef24249f1650f968fa2973c103667a655eb3b32945b2826b64e8 extends Twig_Template
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
        $__internal_af8a08a5d7daf8518075cf6fa0dcb34c4d07cfcf6fd2b6ddf6b3ecd56dbe1a6f = $this->env->getExtension("native_profiler");
        $__internal_af8a08a5d7daf8518075cf6fa0dcb34c4d07cfcf6fd2b6ddf6b3ecd56dbe1a6f->enter($__internal_af8a08a5d7daf8518075cf6fa0dcb34c4d07cfcf6fd2b6ddf6b3ecd56dbe1a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : null), "message" => (isset($context["status_text"]) ? $context["status_text"] : null), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "toarray", array()))));
        echo "
";
        
        $__internal_af8a08a5d7daf8518075cf6fa0dcb34c4d07cfcf6fd2b6ddf6b3ecd56dbe1a6f->leave($__internal_af8a08a5d7daf8518075cf6fa0dcb34c4d07cfcf6fd2b6ddf6b3ecd56dbe1a6f_prof);

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
