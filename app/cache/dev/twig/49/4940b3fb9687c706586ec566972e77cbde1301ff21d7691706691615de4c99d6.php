<?php

/* LaFleurSymfonyBundle:Catalogue:validPanier.html.twig */
class __TwigTemplate_20efc51a9b8eb1650dd7282e5196f2fc37d8aba5ec7a8f16441bebcf51bab841 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LaFleurSymfonyBundle:layout:layout.html.twig", "LaFleurSymfonyBundle:Catalogue:validPanier.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LaFleurSymfonyBundle:layout:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b4c6152298a8b093d1b0f2fac621e765929958d7ff1b93d539de034eed18fab = $this->env->getExtension("native_profiler");
        $__internal_3b4c6152298a8b093d1b0f2fac621e765929958d7ff1b93d539de034eed18fab->enter($__internal_3b4c6152298a8b093d1b0f2fac621e765929958d7ff1b93d539de034eed18fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LaFleurSymfonyBundle:Catalogue:validPanier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b4c6152298a8b093d1b0f2fac621e765929958d7ff1b93d539de034eed18fab->leave($__internal_3b4c6152298a8b093d1b0f2fac621e765929958d7ff1b93d539de034eed18fab_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_93c20eb0b91a4c902f9a70913e6b32342f05f34d78ce34329f5aa1a392e7fd6f = $this->env->getExtension("native_profiler");
        $__internal_93c20eb0b91a4c902f9a70913e6b32342f05f34d78ce34329f5aa1a392e7fd6f->enter($__internal_93c20eb0b91a4c902f9a70913e6b32342f05f34d78ce34329f5aa1a392e7fd6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Validation du panier ";
        
        $__internal_93c20eb0b91a4c902f9a70913e6b32342f05f34d78ce34329f5aa1a392e7fd6f->leave($__internal_93c20eb0b91a4c902f9a70913e6b32342f05f34d78ce34329f5aa1a392e7fd6f_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_6e8630f384603b4b9290d142ade425f3ea631fb30fcb6827b67eb3bf071c3f85 = $this->env->getExtension("native_profiler");
        $__internal_6e8630f384603b4b9290d142ade425f3ea631fb30fcb6827b67eb3bf071c3f85->enter($__internal_6e8630f384603b4b9290d142ade425f3ea631fb30fcb6827b67eb3bf071c3f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "   ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 8
            echo "        <div class='flash notice'>
            ";
            // line 9
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    \t<form name='commande 'method='post'>
            nom:<input id=\"nom\" type=\"text\" name=\"nom\" size=\"30\" maxlength=\"45\">
            <br>adresse :<input id=\"rue\" type=\"text\" name=\"rue\" size=\"30\" maxlength=\"45\">
            <br>code postal:<input id=\"cp\" type=\"text\" name=\"cp\" size=\"5\" maxlength=\"5\">
            <br>ville:<input id=\"ville\" type=\"text\" name=\"ville\" size=\"25\" maxlength=\"25\">
\t\t\t<br><input type='submit' name='valider' value='creer commande' />
\t\t</form>
    
";
        
        $__internal_6e8630f384603b4b9290d142ade425f3ea631fb30fcb6827b67eb3bf071c3f85->leave($__internal_6e8630f384603b4b9290d142ade425f3ea631fb30fcb6827b67eb3bf071c3f85_prof);

    }

    public function getTemplateName()
    {
        return "LaFleurSymfonyBundle:Catalogue:validPanier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 12,  63 => 9,  60 => 8,  55 => 7,  49 => 6,  35 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "LaFleurSymfonyBundle:layout:layout.html.twig" %}*/
/* */
/* {% block title %} {{ parent() }} - Validation du panier {% endblock %}*/
/* */
/* {% block content %}*/
/*    {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*         <div class='flash notice'>*/
/*             {{ flashMessage }}*/
/*         </div>*/
/*     {% endfor %}*/
/*     	<form name='commande 'method='post'>*/
/*             nom:<input id="nom" type="text" name="nom" size="30" maxlength="45">*/
/*             <br>adresse :<input id="rue" type="text" name="rue" size="30" maxlength="45">*/
/*             <br>code postal:<input id="cp" type="text" name="cp" size="5" maxlength="5">*/
/*             <br>ville:<input id="ville" type="text" name="ville" size="25" maxlength="25">*/
/* 			<br><input type='submit' name='valider' value='creer commande' />*/
/* 		</form>*/
/*     */
/* {% endblock %}*/
