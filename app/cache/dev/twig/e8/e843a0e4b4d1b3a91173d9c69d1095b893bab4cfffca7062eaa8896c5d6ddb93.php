<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_5e9db2f4c7ffe8e885d9252e827eef083939186d1cd4c9d49a29b47d36baa699 extends Twig_Template
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
        $__internal_6fe24484777106a76a378767569470d9c3083411046615fffeb5d188d3d650d3 = $this->env->getExtension("native_profiler");
        $__internal_6fe24484777106a76a378767569470d9c3083411046615fffeb5d188d3d650d3->enter($__internal_6fe24484777106a76a378767569470d9c3083411046615fffeb5d188d3d650d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_6fe24484777106a76a378767569470d9c3083411046615fffeb5d188d3d650d3->leave($__internal_6fe24484777106a76a378767569470d9c3083411046615fffeb5d188d3d650d3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
