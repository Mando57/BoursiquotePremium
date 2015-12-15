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
        $__internal_4daf29edbc4cf35c07ed676d42898be487187baf569a1deda76ae0b0ae914d76 = $this->env->getExtension("native_profiler");
        $__internal_4daf29edbc4cf35c07ed676d42898be487187baf569a1deda76ae0b0ae914d76->enter($__internal_4daf29edbc4cf35c07ed676d42898be487187baf569a1deda76ae0b0ae914d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BourseBundle:layout:layout.html.twig"));

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

<script>
    function R1600()
    {
        var width = 1600;
        document.body.style.zoom = screen.width/1600;
    }
</script>

<body onload=\"R1600();\">

<div id=\"bandeau\">
    <!-- Images En-tête -->
    <!--<img src=\"images/menuGauche.gif\"\talt=\"Choisir\" title=\"Choisir\"/>-->
    <img id=\"banniere\" src=";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/banniere.png"), "html", null, true);
        echo " alt=\"Lentete\" title=\"entetebourseimg\"/>

</div>

<!--  Menu haut-->
<ul id=\"menu\">
    <li><a href=";
        // line 33
        echo $this->env->getExtension('routing')->getPath("bourse_tableau");
        echo "> Tableau de bord </a></li>       ";
        // line 34
        echo "    <li><a href=";
        echo "> Analyse du marché</a></li>
    <li><a href=";
        // line 35
        echo "> Gerer tableau de bord</a></li>
</ul>
<div id=\"recherche\">
    Recherche : <input type=\"text\" name=\"recherche\"> <input type='submit' value=\"OK\" name='OK'/>
</div>




<div id=\"menu lateral\">
";
        // line 45
        $this->displayBlock('lateral', $context, $blocks);
        // line 47
        echo "</div>


<div id=\"conteneur\">
    ";
        // line 51
        $this->displayBlock('content', $context, $blocks);
        // line 53
        echo "</div>




<br><br><br>
<div id=\"pied\"> Copyright _ BourSIQoute _ 2016 </br> <div id=\"cred\"> powered by symfony 2</div>  </div>
</body>

</html>";
        
        $__internal_4daf29edbc4cf35c07ed676d42898be487187baf569a1deda76ae0b0ae914d76->leave($__internal_4daf29edbc4cf35c07ed676d42898be487187baf569a1deda76ae0b0ae914d76_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b5683b1cd5a9a51180be241406056ec95d52f7ea7dff3deafa180e5dcd87224c = $this->env->getExtension("native_profiler");
        $__internal_b5683b1cd5a9a51180be241406056ec95d52f7ea7dff3deafa180e5dcd87224c->enter($__internal_b5683b1cd5a9a51180be241406056ec95d52f7ea7dff3deafa180e5dcd87224c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "                boursiquote :
            ";
        
        $__internal_b5683b1cd5a9a51180be241406056ec95d52f7ea7dff3deafa180e5dcd87224c->leave($__internal_b5683b1cd5a9a51180be241406056ec95d52f7ea7dff3deafa180e5dcd87224c_prof);

    }

    // line 45
    public function block_lateral($context, array $blocks = array())
    {
        $__internal_11680be860346cb1da6573bee724a75a9300ef14a0995566e8190b0c928973b9 = $this->env->getExtension("native_profiler");
        $__internal_11680be860346cb1da6573bee724a75a9300ef14a0995566e8190b0c928973b9->enter($__internal_11680be860346cb1da6573bee724a75a9300ef14a0995566e8190b0c928973b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lateral"));

        
        $__internal_11680be860346cb1da6573bee724a75a9300ef14a0995566e8190b0c928973b9->leave($__internal_11680be860346cb1da6573bee724a75a9300ef14a0995566e8190b0c928973b9_prof);

    }

    // line 51
    public function block_content($context, array $blocks = array())
    {
        $__internal_4b3fa0964abdc0b8f24d687a80914983ce5d50d7f11ae24ea915de04ad2f0018 = $this->env->getExtension("native_profiler");
        $__internal_4b3fa0964abdc0b8f24d687a80914983ce5d50d7f11ae24ea915de04ad2f0018->enter($__internal_4b3fa0964abdc0b8f24d687a80914983ce5d50d7f11ae24ea915de04ad2f0018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 52
        echo "    ";
        
        $__internal_4b3fa0964abdc0b8f24d687a80914983ce5d50d7f11ae24ea915de04ad2f0018->leave($__internal_4b3fa0964abdc0b8f24d687a80914983ce5d50d7f11ae24ea915de04ad2f0018_prof);

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
        return array (  156 => 52,  150 => 51,  139 => 45,  131 => 4,  125 => 3,  109 => 53,  107 => 51,  101 => 47,  99 => 45,  87 => 35,  83 => 34,  80 => 33,  71 => 27,  54 => 12,  40 => 10,  36 => 9,  31 => 6,  29 => 3,  25 => 1,);
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
/* <script>*/
/*     function R1600()*/
/*     {*/
/*         var width = 1600;*/
/*         document.body.style.zoom = screen.width/1600;*/
/*     }*/
/* </script>*/
/* */
/* <body onload="R1600();">*/
/* */
/* <div id="bandeau">*/
/*     <!-- Images En-tête -->*/
/*     <!--<img src="images/menuGauche.gif"	alt="Choisir" title="Choisir"/>-->*/
/*     <img id="banniere" src={{ asset('images/banniere.png') }} alt="Lentete" title="entetebourseimg"/>*/
/* */
/* </div>*/
/* */
/* <!--  Menu haut-->*/
/* <ul id="menu">*/
/*     <li><a href={{ path('bourse_tableau') }}> Tableau de bord </a></li>       {# les liens sont a remettre via le routing #}*/
/*     <li><a href={#  {{ path('analyse') }}       #}> Analyse du marché</a></li>*/
/*     <li><a href={#  {{ path('gerertableau') }}  #}> Gerer tableau de bord</a></li>*/
/* </ul>*/
/* <div id="recherche">*/
/*     Recherche : <input type="text" name="recherche"> <input type='submit' value="OK" name='OK'/>*/
/* </div>*/
/* */
/* */
/* */
/* */
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
/* <div id="pied"> Copyright _ BourSIQoute _ 2016 </br> <div id="cred"> powered by symfony 2</div>  </div>*/
/* </body>*/
/* */
/* </html>*/
