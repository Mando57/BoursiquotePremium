<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_a9e1f3dfba092b6f1b6c1834a614e338b82aaa16c059290b3e83242fdc748b00 extends Twig_Template
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
        $__internal_0ebcbb58fa8c32a0da7af5a9691be9971ad6f71f22104573f66cd62685fde63e = $this->env->getExtension("native_profiler");
        $__internal_0ebcbb58fa8c32a0da7af5a9691be9971ad6f71f22104573f66cd62685fde63e->enter($__internal_0ebcbb58fa8c32a0da7af5a9691be9971ad6f71f22104573f66cd62685fde63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_0ebcbb58fa8c32a0da7af5a9691be9971ad6f71f22104573f66cd62685fde63e->leave($__internal_0ebcbb58fa8c32a0da7af5a9691be9971ad6f71f22104573f66cd62685fde63e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
