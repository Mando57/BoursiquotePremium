<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_24ddae4e5f019e278eeee88961954b471dcba7c895cbb2f1bc9f77793a675e22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4680720c628c08f62a857cb7e919bda664dc66e104f17bb5ec7d2b4dbe7c997 = $this->env->getExtension("native_profiler");
        $__internal_e4680720c628c08f62a857cb7e919bda664dc66e104f17bb5ec7d2b4dbe7c997->enter($__internal_e4680720c628c08f62a857cb7e919bda664dc66e104f17bb5ec7d2b4dbe7c997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4680720c628c08f62a857cb7e919bda664dc66e104f17bb5ec7d2b4dbe7c997->leave($__internal_e4680720c628c08f62a857cb7e919bda664dc66e104f17bb5ec7d2b4dbe7c997_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_66dee600aadf5bb731ca71aea662038c247e72b62023684cfcd02d9ea7266c10 = $this->env->getExtension("native_profiler");
        $__internal_66dee600aadf5bb731ca71aea662038c247e72b62023684cfcd02d9ea7266c10->enter($__internal_66dee600aadf5bb731ca71aea662038c247e72b62023684cfcd02d9ea7266c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_66dee600aadf5bb731ca71aea662038c247e72b62023684cfcd02d9ea7266c10->leave($__internal_66dee600aadf5bb731ca71aea662038c247e72b62023684cfcd02d9ea7266c10_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce8d6abf7736761900a9f725fe3d172864b24bf113f0717c7a09532acd94d15e = $this->env->getExtension("native_profiler");
        $__internal_ce8d6abf7736761900a9f725fe3d172864b24bf113f0717c7a09532acd94d15e->enter($__internal_ce8d6abf7736761900a9f725fe3d172864b24bf113f0717c7a09532acd94d15e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo ")
";
        
        $__internal_ce8d6abf7736761900a9f725fe3d172864b24bf113f0717c7a09532acd94d15e->leave($__internal_ce8d6abf7736761900a9f725fe3d172864b24bf113f0717c7a09532acd94d15e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_48e0628ca047581edd35a3e1ffb00f5dc3849931877ecd351400c6893ab1bfc5 = $this->env->getExtension("native_profiler");
        $__internal_48e0628ca047581edd35a3e1ffb00f5dc3849931877ecd351400c6893ab1bfc5->enter($__internal_48e0628ca047581edd35a3e1ffb00f5dc3849931877ecd351400c6893ab1bfc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_48e0628ca047581edd35a3e1ffb00f5dc3849931877ecd351400c6893ab1bfc5->leave($__internal_48e0628ca047581edd35a3e1ffb00f5dc3849931877ecd351400c6893ab1bfc5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
