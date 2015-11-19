<?php

/* base.html.twig */
class __TwigTemplate_08d9b29281af797ef15f41bbde402cfad21764191f0efa7527ffd958af4945bb extends Twig_Template
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
        $__internal_305a8beb4512f7ebbb198a369c9b8abfc00721b152415ac4e3d4fd25d52585fe = $this->env->getExtension("native_profiler");
        $__internal_305a8beb4512f7ebbb198a369c9b8abfc00721b152415ac4e3d4fd25d52585fe->enter($__internal_305a8beb4512f7ebbb198a369c9b8abfc00721b152415ac4e3d4fd25d52585fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_305a8beb4512f7ebbb198a369c9b8abfc00721b152415ac4e3d4fd25d52585fe->leave($__internal_305a8beb4512f7ebbb198a369c9b8abfc00721b152415ac4e3d4fd25d52585fe_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_656c443e88530bd4623a61d3cb0997246eb40acab2ff3d4da7e7a21b0e93af32 = $this->env->getExtension("native_profiler");
        $__internal_656c443e88530bd4623a61d3cb0997246eb40acab2ff3d4da7e7a21b0e93af32->enter($__internal_656c443e88530bd4623a61d3cb0997246eb40acab2ff3d4da7e7a21b0e93af32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_656c443e88530bd4623a61d3cb0997246eb40acab2ff3d4da7e7a21b0e93af32->leave($__internal_656c443e88530bd4623a61d3cb0997246eb40acab2ff3d4da7e7a21b0e93af32_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7dd8a839ca15d0835e2b8ec0185f59511929d3b843a371ab14cbafbeb6c998a5 = $this->env->getExtension("native_profiler");
        $__internal_7dd8a839ca15d0835e2b8ec0185f59511929d3b843a371ab14cbafbeb6c998a5->enter($__internal_7dd8a839ca15d0835e2b8ec0185f59511929d3b843a371ab14cbafbeb6c998a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7dd8a839ca15d0835e2b8ec0185f59511929d3b843a371ab14cbafbeb6c998a5->leave($__internal_7dd8a839ca15d0835e2b8ec0185f59511929d3b843a371ab14cbafbeb6c998a5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f4989f93b8b9f7451bf290113d7cba87fb31ea2e459d83b6d5a1dd955b80cd3 = $this->env->getExtension("native_profiler");
        $__internal_9f4989f93b8b9f7451bf290113d7cba87fb31ea2e459d83b6d5a1dd955b80cd3->enter($__internal_9f4989f93b8b9f7451bf290113d7cba87fb31ea2e459d83b6d5a1dd955b80cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9f4989f93b8b9f7451bf290113d7cba87fb31ea2e459d83b6d5a1dd955b80cd3->leave($__internal_9f4989f93b8b9f7451bf290113d7cba87fb31ea2e459d83b6d5a1dd955b80cd3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_552ea0e39fc6609ea42ed3c029e5f4848e0369e8b1866d492f4198d6db8b0b2a = $this->env->getExtension("native_profiler");
        $__internal_552ea0e39fc6609ea42ed3c029e5f4848e0369e8b1866d492f4198d6db8b0b2a->enter($__internal_552ea0e39fc6609ea42ed3c029e5f4848e0369e8b1866d492f4198d6db8b0b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_552ea0e39fc6609ea42ed3c029e5f4848e0369e8b1866d492f4198d6db8b0b2a->leave($__internal_552ea0e39fc6609ea42ed3c029e5f4848e0369e8b1866d492f4198d6db8b0b2a_prof);

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
