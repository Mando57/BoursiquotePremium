<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_12ad9490f54b70820e483bfcf832669a564b219660e73f5011d10895e0b0c898 extends Twig_Template
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
        $__internal_a8dde4a937fce1b14fc89a98d77ae2783059c24fee0a0599a7b3f1732ab8f3d0 = $this->env->getExtension("native_profiler");
        $__internal_a8dde4a937fce1b14fc89a98d77ae2783059c24fee0a0599a7b3f1732ab8f3d0->enter($__internal_a8dde4a937fce1b14fc89a98d77ae2783059c24fee0a0599a7b3f1732ab8f3d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "css", null, true);
        echo "

*/
";
        
        $__internal_a8dde4a937fce1b14fc89a98d77ae2783059c24fee0a0599a7b3f1732ab8f3d0->leave($__internal_a8dde4a937fce1b14fc89a98d77ae2783059c24fee0a0599a7b3f1732ab8f3d0_prof);

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
