<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_48f61e1cbda6dbd29bfca2f8a593e8b480960602c6d1f2e29be53abc3c39e0a2 extends Twig_Template
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
        $__internal_45069219fa59959f79aba5df9e8cda8ae72344925c03a9f4ceb18fd937634312 = $this->env->getExtension("native_profiler");
        $__internal_45069219fa59959f79aba5df9e8cda8ae72344925c03a9f4ceb18fd937634312->enter($__internal_45069219fa59959f79aba5df9e8cda8ae72344925c03a9f4ceb18fd937634312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_45069219fa59959f79aba5df9e8cda8ae72344925c03a9f4ceb18fd937634312->leave($__internal_45069219fa59959f79aba5df9e8cda8ae72344925c03a9f4ceb18fd937634312_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
