<?php

/* BourseBundle:layout:layout.html.twig */
class __TwigTemplate_1caeb87eebe5ff8b447f8c0482df8c3258f603fe3433721318ef71e995b3c8d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'lateral' => array($this, 'block_lateral'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b606b268e12078342e7a056992d27ac6f4b993e1e9c489686dd49c73cc03e1f = $this->env->getExtension("native_profiler");
        $__internal_2b606b268e12078342e7a056992d27ac6f4b993e1e9c489686dd49c73cc03e1f->enter($__internal_2b606b268e12078342e7a056992d27ac6f4b993e1e9c489686dd49c73cc03e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BourseBundle:layout:layout.html.twig"));

        // line 1
        echo "<html lang=fr>
<head>
    <title> ";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        // line 6
        echo "        </title>
    <meta http-equiv=\"Content-Language\" content=\"fr\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    ";
        // line 9
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "0e4d8f7_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0e4d8f7_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/0e4d8f7_cssGeneral_1.css");
            // line 10
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\">
    ";
        } else {
            // asset "0e4d8f7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0e4d8f7") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/0e4d8f7.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\">
    ";
        }
        unset($context["asset_url"]);
        // line 12
        echo "</head>

<body>
<div id=\"bandeau\">
    <!-- Images En-tête -->
    <!--<img src=\"images/menuGauche.gif\"\talt=\"Choisir\" title=\"Choisir\"/>-->
    <img src=";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/banniere.png"), "html", null, true);
        echo " alt=\"Lentete\" title=\"entetebourseimg\"/>

</div>

<!--  Menu haut-->
<ul id=\"menu\">
    <li><a href=";
        // line 24
        echo $this->env->getExtension('routing')->getPath("bourse_tableau");
        echo "> Tableau de bord </a></li>       ";
        // line 25
        echo "    <li><a href=";
        echo "> Analyse du marché</a></li>
    <li><a href=";
        // line 26
        echo "> Gerer tableau de bord</a></li>
    ";
        // line 27
        $context["layout"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "layout"), "method");
        // line 28
        echo "    ";
        if (((isset($context["layout"]) ? $context["layout"] : null) == 1)) {
            // line 29
            echo "
    ";
        } else {
            // line 31
            echo "        <li>
            <a href=";
            // line 32
            echo " >Créer un compte</a>
        </li>
        <li>
            <a href=";
            // line 35
            echo " >connecter</a>
        </li>
    ";
        }
        // line 38
        echo "
</ul>
<div id=\"menu lateral\">
";
        // line 41
        $this->displayBlock('lateral', $context, $blocks);
        // line 43
        echo "</div>


<div id=\"conteneur\">
    ";
        // line 47
        $this->displayBlock('content', $context, $blocks);
        // line 49
        echo "</div>




<br><br><br>
<div id=\"pied\"> Copyright _ BourSIQoute _ 2016 </div>
<div id=\"credits\"> powered by symfony 2 </div>
</body>

</html>";
        
        $__internal_2b606b268e12078342e7a056992d27ac6f4b993e1e9c489686dd49c73cc03e1f->leave($__internal_2b606b268e12078342e7a056992d27ac6f4b993e1e9c489686dd49c73cc03e1f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ad20b1b5f5436dfd10455c62fce926e9ea29151a28892342531a317a2db0a03 = $this->env->getExtension("native_profiler");
        $__internal_9ad20b1b5f5436dfd10455c62fce926e9ea29151a28892342531a317a2db0a03->enter($__internal_9ad20b1b5f5436dfd10455c62fce926e9ea29151a28892342531a317a2db0a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "                boursiquote :
            ";
        
        $__internal_9ad20b1b5f5436dfd10455c62fce926e9ea29151a28892342531a317a2db0a03->leave($__internal_9ad20b1b5f5436dfd10455c62fce926e9ea29151a28892342531a317a2db0a03_prof);

    }

    // line 41
    public function block_lateral($context, array $blocks = array())
    {
        $__internal_0dcedcdf9ca63461c5ce41e717240ae2e9eaa4267e775763615d2d97a936a55b = $this->env->getExtension("native_profiler");
        $__internal_0dcedcdf9ca63461c5ce41e717240ae2e9eaa4267e775763615d2d97a936a55b->enter($__internal_0dcedcdf9ca63461c5ce41e717240ae2e9eaa4267e775763615d2d97a936a55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lateral"));

        
        $__internal_0dcedcdf9ca63461c5ce41e717240ae2e9eaa4267e775763615d2d97a936a55b->leave($__internal_0dcedcdf9ca63461c5ce41e717240ae2e9eaa4267e775763615d2d97a936a55b_prof);

    }

    // line 47
    public function block_content($context, array $blocks = array())
    {
        $__internal_0df9a6d7d62ba94f66b0f1be91663be4d8af3aa8981ae6002cae38d72dac02cc = $this->env->getExtension("native_profiler");
        $__internal_0df9a6d7d62ba94f66b0f1be91663be4d8af3aa8981ae6002cae38d72dac02cc->enter($__internal_0df9a6d7d62ba94f66b0f1be91663be4d8af3aa8981ae6002cae38d72dac02cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 48
        echo "    ";
        
        $__internal_0df9a6d7d62ba94f66b0f1be91663be4d8af3aa8981ae6002cae38d72dac02cc->leave($__internal_0df9a6d7d62ba94f66b0f1be91663be4d8af3aa8981ae6002cae38d72dac02cc_prof);

    }

    public function getTemplateName()
    {
        return "BourseBundle:layout:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 48,  160 => 47,  149 => 41,  141 => 4,  135 => 3,  118 => 49,  116 => 47,  110 => 43,  108 => 41,  103 => 38,  98 => 35,  93 => 32,  90 => 31,  86 => 29,  83 => 28,  81 => 27,  78 => 26,  74 => 25,  71 => 24,  62 => 18,  54 => 12,  40 => 10,  36 => 9,  31 => 6,  29 => 3,  25 => 1,);
    }
}
/* <html lang=fr>*/
/* <head>*/
/*     <title> {% block title %}*/
/*                 boursiquote :*/
/*             {% endblock %}*/
/*         </title>*/
/*     <meta http-equiv="Content-Language" content="fr">*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=utf-8">*/
/*     {% stylesheets '@BourseBundle/Resources/public/css/cssGeneral.css' filter='cssrewrite' %}*/
/*     <link href="{{ asset_url }}" rel="stylesheet" media="screen">*/
/*     {% endstylesheets %}*/
/* </head>*/
/* */
/* <body>*/
/* <div id="bandeau">*/
/*     <!-- Images En-tête -->*/
/*     <!--<img src="images/menuGauche.gif"	alt="Choisir" title="Choisir"/>-->*/
/*     <img src={{ asset('images/banniere.png') }} alt="Lentete" title="entetebourseimg"/>*/
/* */
/* </div>*/
/* */
/* <!--  Menu haut-->*/
/* <ul id="menu">*/
/*     <li><a href={{ path('bourse_tableau') }}> Tableau de bord </a></li>       {# les liens sont a remettre via le routing #}*/
/*     <li><a href={#  {{ path('analyse') }}       #}> Analyse du marché</a></li>*/
/*     <li><a href={#  {{ path('gerertableau') }}  #}> Gerer tableau de bord</a></li>*/
/*     {% set layout = app.session.get('layout') %}*/
/*     {% if layout==1 %}*/
/* */
/*     {% else %}*/
/*         <li>*/
/*             <a href={# path('la_fleur_symfony_nouveau') #} >Créer un compte</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href={# path('la_fleur_symfony_connec') #} >connecter</a>*/
/*         </li>*/
/*     {% endif %}*/
/* */
/* </ul>*/
/* <div id="menu lateral">*/
/* {% block lateral %}*/
/* {% endblock %}*/
/* </div>*/
/* */
/* */
/* <div id="conteneur">*/
/*     {% block content %}*/
/*     {% endblock %}*/
/* </div>*/
/* */
/* */
/* */
/* */
/* <br><br><br>*/
/* <div id="pied"> Copyright _ BourSIQoute _ 2016 </div>*/
/* <div id="credits"> powered by symfony 2 </div>*/
/* </body>*/
/* */
/* </html>*/
