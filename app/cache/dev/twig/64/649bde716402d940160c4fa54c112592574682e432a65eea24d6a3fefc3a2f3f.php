<?php

/* BourseBundle:Default:index.html.twig */
class __TwigTemplate_8e9198451ff3caf457bbb3e20258374284d9d6b32596a918da4198bf3a386b0b extends Twig_Template
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
        $__internal_e7bd99fbfec10a52316402474c0c4e3291dac7c1101064ae626310dcfce775ac = $this->env->getExtension("native_profiler");
        $__internal_e7bd99fbfec10a52316402474c0c4e3291dac7c1101064ae626310dcfce775ac->enter($__internal_e7bd99fbfec10a52316402474c0c4e3291dac7c1101064ae626310dcfce775ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BourseBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "!
";
        
        $__internal_e7bd99fbfec10a52316402474c0c4e3291dac7c1101064ae626310dcfce775ac->leave($__internal_e7bd99fbfec10a52316402474c0c4e3291dac7c1101064ae626310dcfce775ac_prof);

    }

    public function getTemplateName()
    {
        return "BourseBundle:Default:index.html.twig";
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
/* Hello {{ name }}!*/
/* */
