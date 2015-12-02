<?php

/* base.html.twig */
class __TwigTemplate_9a373bb3ea023d259c7f52ca66c63f38dfe2ae4cb683d3daaf99f4fa2b5a2541 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e8c9dedce1ab67e39489d153edc9916f3e8d4ce93cfa97eb717b9ff7b0b4a61 = $this->env->getExtension("native_profiler");
        $__internal_9e8c9dedce1ab67e39489d153edc9916f3e8d4ce93cfa97eb717b9ff7b0b4a61->enter($__internal_9e8c9dedce1ab67e39489d153edc9916f3e8d4ce93cfa97eb717b9ff7b0b4a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_9e8c9dedce1ab67e39489d153edc9916f3e8d4ce93cfa97eb717b9ff7b0b4a61->leave($__internal_9e8c9dedce1ab67e39489d153edc9916f3e8d4ce93cfa97eb717b9ff7b0b4a61_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3680396b4cfae65543e3c696ede05084403d92a50eb5648f9588e4d81a114fc6 = $this->env->getExtension("native_profiler");
        $__internal_3680396b4cfae65543e3c696ede05084403d92a50eb5648f9588e4d81a114fc6->enter($__internal_3680396b4cfae65543e3c696ede05084403d92a50eb5648f9588e4d81a114fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3680396b4cfae65543e3c696ede05084403d92a50eb5648f9588e4d81a114fc6->leave($__internal_3680396b4cfae65543e3c696ede05084403d92a50eb5648f9588e4d81a114fc6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_abe061179b12f7592d3d376242b9b935a6a18d91c7c47ba09d4d4a8b0303840b = $this->env->getExtension("native_profiler");
        $__internal_abe061179b12f7592d3d376242b9b935a6a18d91c7c47ba09d4d4a8b0303840b->enter($__internal_abe061179b12f7592d3d376242b9b935a6a18d91c7c47ba09d4d4a8b0303840b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_abe061179b12f7592d3d376242b9b935a6a18d91c7c47ba09d4d4a8b0303840b->leave($__internal_abe061179b12f7592d3d376242b9b935a6a18d91c7c47ba09d4d4a8b0303840b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9241a2b45258f90951f8a5ea075c0583796ed7e284b80b4ceff9726aedbe51e = $this->env->getExtension("native_profiler");
        $__internal_a9241a2b45258f90951f8a5ea075c0583796ed7e284b80b4ceff9726aedbe51e->enter($__internal_a9241a2b45258f90951f8a5ea075c0583796ed7e284b80b4ceff9726aedbe51e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a9241a2b45258f90951f8a5ea075c0583796ed7e284b80b4ceff9726aedbe51e->leave($__internal_a9241a2b45258f90951f8a5ea075c0583796ed7e284b80b4ceff9726aedbe51e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f5bcb33b685af8a7134c2b93289e08cc38d212bd2bc699ae0789da05b5d3b86f = $this->env->getExtension("native_profiler");
        $__internal_f5bcb33b685af8a7134c2b93289e08cc38d212bd2bc699ae0789da05b5d3b86f->enter($__internal_f5bcb33b685af8a7134c2b93289e08cc38d212bd2bc699ae0789da05b5d3b86f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f5bcb33b685af8a7134c2b93289e08cc38d212bd2bc699ae0789da05b5d3b86f->leave($__internal_f5bcb33b685af8a7134c2b93289e08cc38d212bd2bc699ae0789da05b5d3b86f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
