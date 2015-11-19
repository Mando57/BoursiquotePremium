<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_4ccd8576168c3c2734988768ef283a24f67e23670eae02d7dfd5c951c867c354 extends Twig_Template
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
        $__internal_c6d42d6681b13278ca25e1550a46a490fe68f08ae1601ab1a75ccc9042cd9c7c = $this->env->getExtension("native_profiler");
        $__internal_c6d42d6681b13278ca25e1550a46a490fe68f08ae1601ab1a75ccc9042cd9c7c->enter($__internal_c6d42d6681b13278ca25e1550a46a490fe68f08ae1601ab1a75ccc9042cd9c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_c6d42d6681b13278ca25e1550a46a490fe68f08ae1601ab1a75ccc9042cd9c7c->leave($__internal_c6d42d6681b13278ca25e1550a46a490fe68f08ae1601ab1a75ccc9042cd9c7c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
