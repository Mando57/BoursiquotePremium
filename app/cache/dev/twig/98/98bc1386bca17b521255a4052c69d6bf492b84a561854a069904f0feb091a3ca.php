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
        $__internal_6c8dc0ce26f4851de51bcdc16683b74732eb646ea4682cf8d247c5b7925b779a = $this->env->getExtension("native_profiler");
        $__internal_6c8dc0ce26f4851de51bcdc16683b74732eb646ea4682cf8d247c5b7925b779a->enter($__internal_6c8dc0ce26f4851de51bcdc16683b74732eb646ea4682cf8d247c5b7925b779a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_6c8dc0ce26f4851de51bcdc16683b74732eb646ea4682cf8d247c5b7925b779a->leave($__internal_6c8dc0ce26f4851de51bcdc16683b74732eb646ea4682cf8d247c5b7925b779a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_12b3c3de728a05d41b10442ffd9f9813b5ee97fcc19ea5be76fcc60c8a24a173 = $this->env->getExtension("native_profiler");
        $__internal_12b3c3de728a05d41b10442ffd9f9813b5ee97fcc19ea5be76fcc60c8a24a173->enter($__internal_12b3c3de728a05d41b10442ffd9f9813b5ee97fcc19ea5be76fcc60c8a24a173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_12b3c3de728a05d41b10442ffd9f9813b5ee97fcc19ea5be76fcc60c8a24a173->leave($__internal_12b3c3de728a05d41b10442ffd9f9813b5ee97fcc19ea5be76fcc60c8a24a173_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8b20102722f1db95c45d7e8c4daf5190b6f425f6d6e02315b66365f3e07e8589 = $this->env->getExtension("native_profiler");
        $__internal_8b20102722f1db95c45d7e8c4daf5190b6f425f6d6e02315b66365f3e07e8589->enter($__internal_8b20102722f1db95c45d7e8c4daf5190b6f425f6d6e02315b66365f3e07e8589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8b20102722f1db95c45d7e8c4daf5190b6f425f6d6e02315b66365f3e07e8589->leave($__internal_8b20102722f1db95c45d7e8c4daf5190b6f425f6d6e02315b66365f3e07e8589_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3de8fd9e9e385504993768bdf37487aa4deed3d312f888910fa624dfcacf522f = $this->env->getExtension("native_profiler");
        $__internal_3de8fd9e9e385504993768bdf37487aa4deed3d312f888910fa624dfcacf522f->enter($__internal_3de8fd9e9e385504993768bdf37487aa4deed3d312f888910fa624dfcacf522f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3de8fd9e9e385504993768bdf37487aa4deed3d312f888910fa624dfcacf522f->leave($__internal_3de8fd9e9e385504993768bdf37487aa4deed3d312f888910fa624dfcacf522f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0964559f7c90160da4adb15a2ae092f78adb1f8eeef7497650a2e143b8b5e602 = $this->env->getExtension("native_profiler");
        $__internal_0964559f7c90160da4adb15a2ae092f78adb1f8eeef7497650a2e143b8b5e602->enter($__internal_0964559f7c90160da4adb15a2ae092f78adb1f8eeef7497650a2e143b8b5e602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0964559f7c90160da4adb15a2ae092f78adb1f8eeef7497650a2e143b8b5e602->leave($__internal_0964559f7c90160da4adb15a2ae092f78adb1f8eeef7497650a2e143b8b5e602_prof);

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
