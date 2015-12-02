<?php

/* LaFleurSymfonyBundle:layout:layout.html.twig */
class __TwigTemplate_0dd33c394fbebf76ee0146bb87246b443c3c387d1e876267c700bbdbaea872b8 extends Twig_Template
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
        $__internal_53012012dc6fd7e3e66b436a5081e3749ffcad49f409ad2b5076949999cb87df = $this->env->getExtension("native_profiler");
        $__internal_53012012dc6fd7e3e66b436a5081e3749ffcad49f409ad2b5076949999cb87df->enter($__internal_53012012dc6fd7e3e66b436a5081e3749ffcad49f409ad2b5076949999cb87df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LaFleurSymfonyBundle:layout:layout.html.twig"));

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
            // asset "4a3f6b4_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4a3f6b4_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/4a3f6b4_cssGeneral_1.css");
            // line 10
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\">
    ";
        } else {
            // asset "4a3f6b4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4a3f6b4") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/4a3f6b4.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("la_fleur_symfony_accueil");
        echo "> Accueil </a></li>
    <li><a href=";
        // line 22
        echo $this->env->getExtension('routing')->getPath("la_fleur_symfony_catalogue");
        echo "> Voir le catalogue de fleurs </a></li>
    <li><a href=";
        // line 23
        echo $this->env->getExtension('routing')->getPath("la_fleur_symfony_voirPanier");
        echo "> Voir le panier</a></li>
    <li><a href=\"\" >Administrer</a></li>
    ";
        // line 25
        $context["layout"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "layout"), "method");
        // line 26
        echo "    ";
        if (((isset($context["layout"]) ? $context["layout"] : $this->getContext($context, "layout")) == 1)) {
            // line 27
            echo "               
        ";
        } else {
            // line 29
            echo "        <li>
            <a href=";
            // line 30
            echo $this->env->getExtension('routing')->getPath("la_fleur_symfony_nouveau");
            echo " >Créer un compte</a>
        </li>
        <li>
            <a href=";
            // line 33
            echo $this->env->getExtension('routing')->getPath("la_fleur_symfony_connec");
            echo " >connecter</a>
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

</body>
</html>";
        
        $__internal_53012012dc6fd7e3e66b436a5081e3749ffcad49f409ad2b5076949999cb87df->leave($__internal_53012012dc6fd7e3e66b436a5081e3749ffcad49f409ad2b5076949999cb87df_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_31339b2c4f383b063fbdaaeeb953fa70d138bb22b9cdff9c2ae398542d28c4e3 = $this->env->getExtension("native_profiler");
        $__internal_31339b2c4f383b063fbdaaeeb953fa70d138bb22b9cdff9c2ae398542d28c4e3->enter($__internal_31339b2c4f383b063fbdaaeeb953fa70d138bb22b9cdff9c2ae398542d28c4e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "                lafleur symfony 2
            ";
        
        $__internal_31339b2c4f383b063fbdaaeeb953fa70d138bb22b9cdff9c2ae398542d28c4e3->leave($__internal_31339b2c4f383b063fbdaaeeb953fa70d138bb22b9cdff9c2ae398542d28c4e3_prof);

    }

    // line 44
    public function block_lateral($context, array $blocks = array())
    {
        $__internal_8733978e2a4048d98e2bc5fd1d8f1b256e1b9732bdfa3ed1c96875f09c0cd725 = $this->env->getExtension("native_profiler");
        $__internal_8733978e2a4048d98e2bc5fd1d8f1b256e1b9732bdfa3ed1c96875f09c0cd725->enter($__internal_8733978e2a4048d98e2bc5fd1d8f1b256e1b9732bdfa3ed1c96875f09c0cd725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lateral"));

        
        $__internal_8733978e2a4048d98e2bc5fd1d8f1b256e1b9732bdfa3ed1c96875f09c0cd725->leave($__internal_8733978e2a4048d98e2bc5fd1d8f1b256e1b9732bdfa3ed1c96875f09c0cd725_prof);

    }

    // line 47
    public function block_content($context, array $blocks = array())
    {
        $__internal_b5a3c319fc9a07608ce40a7db8d9fb97364cb059567bb82f5c1897c220286a92 = $this->env->getExtension("native_profiler");
        $__internal_b5a3c319fc9a07608ce40a7db8d9fb97364cb059567bb82f5c1897c220286a92->enter($__internal_b5a3c319fc9a07608ce40a7db8d9fb97364cb059567bb82f5c1897c220286a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_b5a3c319fc9a07608ce40a7db8d9fb97364cb059567bb82f5c1897c220286a92->leave($__internal_b5a3c319fc9a07608ce40a7db8d9fb97364cb059567bb82f5c1897c220286a92_prof);

    }

    public function getTemplateName()
    {
        return "LaFleurSymfonyBundle:layout:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 47,  141 => 44,  133 => 4,  127 => 3,  117 => 49,  115 => 47,  112 => 46,  110 => 44,  107 => 43,  105 => 36,  99 => 33,  93 => 30,  90 => 29,  86 => 27,  83 => 26,  81 => 25,  76 => 23,  72 => 22,  68 => 21,  61 => 17,  54 => 12,  40 => 10,  36 => 9,  31 => 6,  29 => 3,  25 => 1,);
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
/*     {% stylesheets '@LaFleurSymfonyBundle/Resources/public/css/cssGeneral.css' filter='cssrewrite' %}*/
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
/*     <li><a href={{ path('la_fleur_symfony_accueil') }}> Accueil </a></li>*/
/*     <li><a href={{ path('la_fleur_symfony_catalogue') }}> Voir le catalogue de fleurs </a></li>*/
/*     <li><a href={{ path('la_fleur_symfony_voirPanier') }}> Voir le panier</a></li>*/
/*     <li><a href="" >Administrer</a></li>*/
/*     {% set layout = app.session.get('layout') %}*/
/*     {% if layout==1 %}*/
/*                */
/*         {% else %}*/
/*         <li>*/
/*             <a href={{ path('la_fleur_symfony_nouveau') }} >Créer un compte</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href={{ path('la_fleur_symfony_connec') }} >connecter</a>*/
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
/* </body>*/
/* </html>*/
