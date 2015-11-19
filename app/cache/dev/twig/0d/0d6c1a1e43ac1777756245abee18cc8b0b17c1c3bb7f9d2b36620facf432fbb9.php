<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_a7daa230fbb61596323f3ae5c406926b7576172a74982e133215d2c773acea64 extends Twig_Template
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
        $__internal_3b4b14955df263fdb2b14b148189f97bc40b895772db4996106529859ca45626 = $this->env->getExtension("native_profiler");
        $__internal_3b4b14955df263fdb2b14b148189f97bc40b895772db4996106529859ca45626->enter($__internal_3b4b14955df263fdb2b14b148189f97bc40b895772db4996106529859ca45626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b4b14955df263fdb2b14b148189f97bc40b895772db4996106529859ca45626->leave($__internal_3b4b14955df263fdb2b14b148189f97bc40b895772db4996106529859ca45626_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2a4caaa3dac404599d7be3f298e93b601e55fcf7bf560726019c4a98bfd44f62 = $this->env->getExtension("native_profiler");
        $__internal_2a4caaa3dac404599d7be3f298e93b601e55fcf7bf560726019c4a98bfd44f62->enter($__internal_2a4caaa3dac404599d7be3f298e93b601e55fcf7bf560726019c4a98bfd44f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2a4caaa3dac404599d7be3f298e93b601e55fcf7bf560726019c4a98bfd44f62->leave($__internal_2a4caaa3dac404599d7be3f298e93b601e55fcf7bf560726019c4a98bfd44f62_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd14dde63a85e4710d68b06c4c6c14c5362117ec3ece8ff8912a77d5e0c831b9 = $this->env->getExtension("native_profiler");
        $__internal_bd14dde63a85e4710d68b06c4c6c14c5362117ec3ece8ff8912a77d5e0c831b9->enter($__internal_bd14dde63a85e4710d68b06c4c6c14c5362117ec3ece8ff8912a77d5e0c831b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo ")
";
        
        $__internal_bd14dde63a85e4710d68b06c4c6c14c5362117ec3ece8ff8912a77d5e0c831b9->leave($__internal_bd14dde63a85e4710d68b06c4c6c14c5362117ec3ece8ff8912a77d5e0c831b9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d01e8f5ef1ebbdce4169841dd5c72c0b44902984e02ed5dd3fdc08b1c36e2e8 = $this->env->getExtension("native_profiler");
        $__internal_4d01e8f5ef1ebbdce4169841dd5c72c0b44902984e02ed5dd3fdc08b1c36e2e8->enter($__internal_4d01e8f5ef1ebbdce4169841dd5c72c0b44902984e02ed5dd3fdc08b1c36e2e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4d01e8f5ef1ebbdce4169841dd5c72c0b44902984e02ed5dd3fdc08b1c36e2e8->leave($__internal_4d01e8f5ef1ebbdce4169841dd5c72c0b44902984e02ed5dd3fdc08b1c36e2e8_prof);

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
