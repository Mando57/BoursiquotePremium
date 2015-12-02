<?php

/* LaFleurSymfonyBundle:Catalogue:categorie.html.twig */
class __TwigTemplate_e3a64b6eacd8c0d6f94b63f8e2f185c0cbba75be242036a51990c4415b77187b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LaFleurSymfonyBundle:layout:layout.html.twig", "LaFleurSymfonyBundle:Catalogue:categorie.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'lateral' => array($this, 'block_lateral'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LaFleurSymfonyBundle:layout:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7cac1e47a410b633bf383dbc26f924ae1d02908026c86942b18b9ce4a8545a11 = $this->env->getExtension("native_profiler");
        $__internal_7cac1e47a410b633bf383dbc26f924ae1d02908026c86942b18b9ce4a8545a11->enter($__internal_7cac1e47a410b633bf383dbc26f924ae1d02908026c86942b18b9ce4a8545a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LaFleurSymfonyBundle:Catalogue:categorie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cac1e47a410b633bf383dbc26f924ae1d02908026c86942b18b9ce4a8545a11->leave($__internal_7cac1e47a410b633bf383dbc26f924ae1d02908026c86942b18b9ce4a8545a11_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d81a36fbcad65afe05187e015d61af01d45171c24b8986a81f23bf26b534ba0b = $this->env->getExtension("native_profiler");
        $__internal_d81a36fbcad65afe05187e015d61af01d45171c24b8986a81f23bf26b534ba0b->enter($__internal_d81a36fbcad65afe05187e015d61af01d45171c24b8986a81f23bf26b534ba0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Accueil général ";
        
        $__internal_d81a36fbcad65afe05187e015d61af01d45171c24b8986a81f23bf26b534ba0b->leave($__internal_d81a36fbcad65afe05187e015d61af01d45171c24b8986a81f23bf26b534ba0b_prof);

    }

    // line 5
    public function block_lateral($context, array $blocks = array())
    {
        $__internal_1511d9640aa37f70525ee1c0fa6a5d22dc71f1f65798d4c7fa3029090270d050 = $this->env->getExtension("native_profiler");
        $__internal_1511d9640aa37f70525ee1c0fa6a5d22dc71f1f65798d4c7fa3029090270d050->enter($__internal_1511d9640aa37f70525ee1c0fa6a5d22dc71f1f65798d4c7fa3029090270d050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lateral"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesCategories"]) ? $context["lesCategories"] : $this->getContext($context, "lesCategories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categ"]) {
            // line 7
            echo "        <li>
            <a href=";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("la_fleur_symfony_categorie", array("cat" => $this->getAttribute($context["categ"], "id", array()))), "html", null, true);
            echo "> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categ"], "libelle", array()), "html", null, true);
            echo "</a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categ'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_1511d9640aa37f70525ee1c0fa6a5d22dc71f1f65798d4c7fa3029090270d050->leave($__internal_1511d9640aa37f70525ee1c0fa6a5d22dc71f1f65798d4c7fa3029090270d050_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_7eae7910d58c6a3dcfa4940b5f6aa63ec048c57fbd24ddd0efd197a81043c098 = $this->env->getExtension("native_profiler");
        $__internal_7eae7910d58c6a3dcfa4940b5f6aa63ec048c57fbd24ddd0efd197a81043c098->enter($__internal_7eae7910d58c6a3dcfa4940b5f6aa63ec048c57fbd24ddd0efd197a81043c098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 15
        echo "    <div id=\"produits\">
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "        <div class='flash notice'>
            ";
            // line 18
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesProduits"]) ? $context["lesProduits"] : $this->getContext($context, "lesProduits")));
        foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
            // line 22
            echo "    <ul>
        <li><img src=";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["prod"], "image", array())), "html", null, true);
            echo " alt=image /></li>
        <li> ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["prod"], "description", array()), "html", null, true);
            echo " </li>
        <li> ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["prod"], "prix", array()), "html", null, true);
            echo " euro </li>
        <li><a href=";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("la_fleur_symfony_ajouterpanier", array("cat" => (isset($context["laCateg"]) ? $context["laCateg"] : $this->getContext($context, "laCateg")), "prod" => $this->getAttribute($context["prod"], "id", array()))), "html", null, true);
            echo ">
            <img src=";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/mettrepanier.png"), "html", null, true);
            echo " TITLE=\"ajouter au panier\"></a></li>
    </ul>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</div>
";
        
        $__internal_7eae7910d58c6a3dcfa4940b5f6aa63ec048c57fbd24ddd0efd197a81043c098->leave($__internal_7eae7910d58c6a3dcfa4940b5f6aa63ec048c57fbd24ddd0efd197a81043c098_prof);

    }

    public function getTemplateName()
    {
        return "LaFleurSymfonyBundle:Catalogue:categorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 30,  129 => 27,  125 => 26,  121 => 25,  117 => 24,  113 => 23,  110 => 22,  105 => 21,  96 => 18,  93 => 17,  89 => 16,  86 => 15,  80 => 14,  64 => 8,  61 => 7,  56 => 6,  50 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "LaFleurSymfonyBundle:layout:layout.html.twig" %}*/
/* */
/* {% block title %} {{ parent() }} - Accueil général {% endblock %}*/
/* */
/* {%block lateral %}*/
/*     {% for categ in lesCategories %}*/
/*         <li>*/
/*             <a href={{ path('la_fleur_symfony_categorie', {'cat':categ.id}) }}> {{categ.libelle}}</a>*/
/*         </li>*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
/* */
/* {% block content %}*/
/*     <div id="produits">*/
/*     {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*         <div class='flash notice'>*/
/*             {{ flashMessage }}*/
/*         </div>*/
/*     {% endfor %}*/
/*     {% for prod in lesProduits %}*/
/*     <ul>*/
/*         <li><img src={{ asset(prod.image)}} alt=image /></li>*/
/*         <li> {{prod.description}} </li>*/
/*         <li> {{ prod.prix}} euro </li>*/
/*         <li><a href={{ path("la_fleur_symfony_ajouterpanier",{'cat':laCateg,'prod':prod.id}) }}>*/
/*             <img src={{ asset('images/mettrepanier.png')}} TITLE="ajouter au panier"></a></li>*/
/*     </ul>*/
/*     {% endfor %}*/
/* </div>*/
/* {% endblock %}*/
