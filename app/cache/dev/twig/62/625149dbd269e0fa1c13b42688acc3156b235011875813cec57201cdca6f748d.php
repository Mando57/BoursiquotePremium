<?php

/* ::base.html.twig */
class __TwigTemplate_e1288532879b1e80a4eea37b7470bcd53ead4167e0a1a1ddfab8449fe39516aa extends Twig_Template
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
        $__internal_7eee5a4a8a11c1559e1e670c2f9b1be4aea4d365290c23b157d7e303cb391789 = $this->env->getExtension("native_profiler");
        $__internal_7eee5a4a8a11c1559e1e670c2f9b1be4aea4d365290c23b157d7e303cb391789->enter($__internal_7eee5a4a8a11c1559e1e670c2f9b1be4aea4d365290c23b157d7e303cb391789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_7eee5a4a8a11c1559e1e670c2f9b1be4aea4d365290c23b157d7e303cb391789->leave($__internal_7eee5a4a8a11c1559e1e670c2f9b1be4aea4d365290c23b157d7e303cb391789_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f3c53eecace50ed79f1bb496af0c907db75389c668310b01afae4b4e402d4df = $this->env->getExtension("native_profiler");
        $__internal_4f3c53eecace50ed79f1bb496af0c907db75389c668310b01afae4b4e402d4df->enter($__internal_4f3c53eecace50ed79f1bb496af0c907db75389c668310b01afae4b4e402d4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4f3c53eecace50ed79f1bb496af0c907db75389c668310b01afae4b4e402d4df->leave($__internal_4f3c53eecace50ed79f1bb496af0c907db75389c668310b01afae4b4e402d4df_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f8ae0bedee8be595dd9a0ac08b3a373974bbbd37aca0be00772a4061a765b9f0 = $this->env->getExtension("native_profiler");
        $__internal_f8ae0bedee8be595dd9a0ac08b3a373974bbbd37aca0be00772a4061a765b9f0->enter($__internal_f8ae0bedee8be595dd9a0ac08b3a373974bbbd37aca0be00772a4061a765b9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f8ae0bedee8be595dd9a0ac08b3a373974bbbd37aca0be00772a4061a765b9f0->leave($__internal_f8ae0bedee8be595dd9a0ac08b3a373974bbbd37aca0be00772a4061a765b9f0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0b0e92ce9c2afa9b23939be31b9c41578095d1c977d278b91b9c36e995930f5 = $this->env->getExtension("native_profiler");
        $__internal_c0b0e92ce9c2afa9b23939be31b9c41578095d1c977d278b91b9c36e995930f5->enter($__internal_c0b0e92ce9c2afa9b23939be31b9c41578095d1c977d278b91b9c36e995930f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c0b0e92ce9c2afa9b23939be31b9c41578095d1c977d278b91b9c36e995930f5->leave($__internal_c0b0e92ce9c2afa9b23939be31b9c41578095d1c977d278b91b9c36e995930f5_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0f83dc64be38404d3e88931f473491f39a5ded1749c16c2a89fcb9f4afbf96e9 = $this->env->getExtension("native_profiler");
        $__internal_0f83dc64be38404d3e88931f473491f39a5ded1749c16c2a89fcb9f4afbf96e9->enter($__internal_0f83dc64be38404d3e88931f473491f39a5ded1749c16c2a89fcb9f4afbf96e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0f83dc64be38404d3e88931f473491f39a5ded1749c16c2a89fcb9f4afbf96e9->leave($__internal_0f83dc64be38404d3e88931f473491f39a5ded1749c16c2a89fcb9f4afbf96e9_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
