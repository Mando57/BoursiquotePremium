<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_99d4b6a36ce32102172498e6e17f1cd93a1cb0fdf3aeaab5d6171b5fa5ed6ab3 extends Twig_Template
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
        $__internal_0fe973c27290ffd724206ea9d4250faad0db3505fd2871a0aa02099b72b283de = $this->env->getExtension("native_profiler");
        $__internal_0fe973c27290ffd724206ea9d4250faad0db3505fd2871a0aa02099b72b283de->enter($__internal_0fe973c27290ffd724206ea9d4250faad0db3505fd2871a0aa02099b72b283de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo "\" />
";
        
        $__internal_0fe973c27290ffd724206ea9d4250faad0db3505fd2871a0aa02099b72b283de->leave($__internal_0fe973c27290ffd724206ea9d4250faad0db3505fd2871a0aa02099b72b283de_prof);

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
