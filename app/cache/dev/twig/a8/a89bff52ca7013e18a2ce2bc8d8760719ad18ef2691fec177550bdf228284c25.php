<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_96d852a964c7e53fa4024fefe2ca071a0fd96c69b6763344f55d199197aad32b extends Twig_Template
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
        $__internal_e3e551f3d1a47a3b27f3493aa49e40271118265104113b85a5db24f44bc757a8 = $this->env->getExtension("native_profiler");
        $__internal_e3e551f3d1a47a3b27f3493aa49e40271118265104113b85a5db24f44bc757a8->enter($__internal_e3e551f3d1a47a3b27f3493aa49e40271118265104113b85a5db24f44bc757a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "js", null, true);
        echo "

*/
";
        
        $__internal_e3e551f3d1a47a3b27f3493aa49e40271118265104113b85a5db24f44bc757a8->leave($__internal_e3e551f3d1a47a3b27f3493aa49e40271118265104113b85a5db24f44bc757a8_prof);

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
