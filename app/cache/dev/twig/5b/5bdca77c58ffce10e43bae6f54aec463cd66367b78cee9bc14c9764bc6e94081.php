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
        $__internal_c489d2b84119e31a074894f6adbf6251c1e62c755e3edccfe25f5b4fcb00fdd0 = $this->env->getExtension("native_profiler");
        $__internal_c489d2b84119e31a074894f6adbf6251c1e62c755e3edccfe25f5b4fcb00fdd0->enter($__internal_c489d2b84119e31a074894f6adbf6251c1e62c755e3edccfe25f5b4fcb00fdd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BourseBundle:layout:layout.html.twig"));

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
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/lafleur.gif"), "html", null, true);
        echo "\talt=\"Lafleur\" title=\"Lafleur\"/>
</div>
<!--  Menu haut-->
<ul id=\"menu\">
    <li><a href=";
        // line 21
        echo "> Accueil </a></li>
    <li><a href=> Voir le catalogue de fleurs </a></li>
    <li><a href=> Voir le panier</a></li>
    <li><a href= >Administrer</a></li>
    ";
        // line 25
        $context["layout"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "layout"), "method");
        // line 26
        echo "    ";
        if (((isset($context["layout"]) ? $context["layout"] : null) == 1)) {
            // line 27
            echo "               
        ";
        } else {
            // line 29
            echo "        <li>
            <a href= >Créer un compte</a>
        </li>
        <li>
            <a href= >connecter</a>
        </li>
    ";
        }
        // line 36
        echo "       ";
        // line 43
        echo "</ul>
";
        // line 44
        $this->displayBlock('lateral', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('content', $context, $blocks);
        // line 49
        echo "


<br><br><br>
powered by symfony 2
</body>

</html>";
        
        $__internal_c489d2b84119e31a074894f6adbf6251c1e62c755e3edccfe25f5b4fcb00fdd0->leave($__internal_c489d2b84119e31a074894f6adbf6251c1e62c755e3edccfe25f5b4fcb00fdd0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_58d7b07fd1f4e6afd81cf764c01b6703eb6f14a602f3b8cf23aa8858fb6e7c6e = $this->env->getExtension("native_profiler");
        $__internal_58d7b07fd1f4e6afd81cf764c01b6703eb6f14a602f3b8cf23aa8858fb6e7c6e->enter($__internal_58d7b07fd1f4e6afd81cf764c01b6703eb6f14a602f3b8cf23aa8858fb6e7c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "                lafleur symfony 2
            ";
        
        $__internal_58d7b07fd1f4e6afd81cf764c01b6703eb6f14a602f3b8cf23aa8858fb6e7c6e->leave($__internal_58d7b07fd1f4e6afd81cf764c01b6703eb6f14a602f3b8cf23aa8858fb6e7c6e_prof);

    }

    // line 44
    public function block_lateral($context, array $blocks = array())
    {
        $__internal_9ee0d3ead853dbd7ca5d2cdadade82fad537083f69995c2fed0f44212ea81d75 = $this->env->getExtension("native_profiler");
        $__internal_9ee0d3ead853dbd7ca5d2cdadade82fad537083f69995c2fed0f44212ea81d75->enter($__internal_9ee0d3ead853dbd7ca5d2cdadade82fad537083f69995c2fed0f44212ea81d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lateral"));

        
        $__internal_9ee0d3ead853dbd7ca5d2cdadade82fad537083f69995c2fed0f44212ea81d75->leave($__internal_9ee0d3ead853dbd7ca5d2cdadade82fad537083f69995c2fed0f44212ea81d75_prof);

    }

    // line 47
    public function block_content($context, array $blocks = array())
    {
        $__internal_0ab2a92abe25bcc681584f71b0c405d3dbea42f24df990f55422c2faadae60c1 = $this->env->getExtension("native_profiler");
        $__internal_0ab2a92abe25bcc681584f71b0c405d3dbea42f24df990f55422c2faadae60c1->enter($__internal_0ab2a92abe25bcc681584f71b0c405d3dbea42f24df990f55422c2faadae60c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_0ab2a92abe25bcc681584f71b0c405d3dbea42f24df990f55422c2faadae60c1->leave($__internal_0ab2a92abe25bcc681584f71b0c405d3dbea42f24df990f55422c2faadae60c1_prof);

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
        return array (  143 => 47,  132 => 44,  124 => 4,  118 => 3,  104 => 49,  102 => 47,  99 => 46,  97 => 44,  94 => 43,  92 => 36,  83 => 29,  79 => 27,  76 => 26,  74 => 25,  68 => 21,  61 => 17,  54 => 12,  40 => 10,  36 => 9,  31 => 6,  29 => 3,  25 => 1,);
    }
}
/* <html lang=fr>*/
/* <head>*/
/*     <title> {% block title %}*/
/*                 lafleur symfony 2*/
/*             {% endblock %}*/
/*         </title>*/
/*     <meta http-equiv="Content-Language" content="fr">*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=utf-8">*/
/*     {% stylesheets '@BourseBundle/Resources/public/css/cssGeneral.css' filter='cssrewrite' %}*/
/*     <link href="{{ asset_url }}" rel="stylesheet" media="screen">*/
/*     {% endstylesheets %}*/
/* </head>*/
/* <body>*/
/* <div id="bandeau">*/
/*     <!-- Images En-tête -->*/
/*     <!--<img src="images/menuGauche.gif"	alt="Choisir" title="Choisir"/>-->*/
/*     <img src={{ asset('images/lafleur.gif') }}	alt="Lafleur" title="Lafleur"/>*/
/* </div>*/
/* <!--  Menu haut-->*/
/* <ul id="menu">*/
/*     <li><a href={# path('la_fleur_symfony_accueil') #}> Accueil </a></li>*/
/*     <li><a href=> Voir le catalogue de fleurs </a></li>*/
/*     <li><a href=> Voir le panier</a></li>*/
/*     <li><a href= >Administrer</a></li>*/
/*     {% set layout = app.session.get('layout') %}*/
/*     {% if layout==1 %}*/
/*                */
/*         {% else %}*/
/*         <li>*/
/*             <a href= >Créer un compte</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href= >connecter</a>*/
/*         </li>*/
/*     {% endif %}*/
/*        {#*/
/* <!---<li><a href="index.php?uc=gererPanier&action=voirPanier"> Voir son panier </a></li>*/
/* ajout du controle*/
/* <li><a href="index.php?uc=connec&action=login"> Connection </a></li>*/
/* fin d'ajout du controle*/
/* <li><a href="index.php?uc=administrer&action=administrer"> Administrer </a></li>-->*/
/* #}*/
/* </ul>*/
/* {% block lateral %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* {% endblock %}*/
/* */
/* */
/* */
/* <br><br><br>*/
/* powered by symfony 2*/
/* </body>*/
/* */
/* </html>*/
