<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_9854e55e52fcb16edf34737f5a462e27b0621b4d9d9096fb32e3837d2dc548c1 extends Twig_Template
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
        $__internal_617a4506702ddc7df444008b3e3972426d44baacbd3b957eb88dbb0910ece3aa = $this->env->getExtension("native_profiler");
        $__internal_617a4506702ddc7df444008b3e3972426d44baacbd3b957eb88dbb0910ece3aa->enter($__internal_617a4506702ddc7df444008b3e3972426d44baacbd3b957eb88dbb0910ece3aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_617a4506702ddc7df444008b3e3972426d44baacbd3b957eb88dbb0910ece3aa->leave($__internal_617a4506702ddc7df444008b3e3972426d44baacbd3b957eb88dbb0910ece3aa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
