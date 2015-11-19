<?php

/* LaFleurSymfonyBundle:Catalogue:connec.html.twig */
class __TwigTemplate_2620f6a32cf59a18d23c070ba13f91c9ab1b6d8ea51fa2d53e9da716f1462fd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LaFleurSymfonyBundle:layout:layout.html.twig", "LaFleurSymfonyBundle:Catalogue:connec.html.twig", 2);
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
        $__internal_de3a3ddd8fbaca549284a78e63ffd9e0d6e250a6ae8bf4562d802176b74f8684 = $this->env->getExtension("native_profiler");
        $__internal_de3a3ddd8fbaca549284a78e63ffd9e0d6e250a6ae8bf4562d802176b74f8684->enter($__internal_de3a3ddd8fbaca549284a78e63ffd9e0d6e250a6ae8bf4562d802176b74f8684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LaFleurSymfonyBundle:Catalogue:connec.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de3a3ddd8fbaca549284a78e63ffd9e0d6e250a6ae8bf4562d802176b74f8684->leave($__internal_de3a3ddd8fbaca549284a78e63ffd9e0d6e250a6ae8bf4562d802176b74f8684_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_27f6890a3d387292727f5368717d89307931e7616dffef522b039e30cc292651 = $this->env->getExtension("native_profiler");
        $__internal_27f6890a3d387292727f5368717d89307931e7616dffef522b039e30cc292651->enter($__internal_27f6890a3d387292727f5368717d89307931e7616dffef522b039e30cc292651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Nouveau ";
        
        $__internal_27f6890a3d387292727f5368717d89307931e7616dffef522b039e30cc292651->leave($__internal_27f6890a3d387292727f5368717d89307931e7616dffef522b039e30cc292651_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_b69ffc7f240d9a757dfb035682d5556b7ebf3ced32d148d6a861e9a4589a2eec = $this->env->getExtension("native_profiler");
        $__internal_b69ffc7f240d9a757dfb035682d5556b7ebf3ced32d148d6a861e9a4589a2eec->enter($__internal_b69ffc7f240d9a757dfb035682d5556b7ebf3ced32d148d6a861e9a4589a2eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo "    \t<form name='nouveau 'method='post'>
\t\t\t<input type='text' name='login' />
\t\t\t<input type='password' name='pwd'/>
\t\t\t<br><input type='submit' name='co' value='creer compte' />
\t\t</form>
    
";
        
        $__internal_b69ffc7f240d9a757dfb035682d5556b7ebf3ced32d148d6a861e9a4589a2eec->leave($__internal_b69ffc7f240d9a757dfb035682d5556b7ebf3ced32d148d6a861e9a4589a2eec_prof);

    }

    public function getTemplateName()
    {
        return "LaFleurSymfonyBundle:Catalogue:connec.html.twig";
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
/* {% block title %} {{ parent() }} - Nouveau {% endblock %}*/
/* */
/* {% block content %}*/
/*    {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*         <div class='flash notice'>*/
/*             {{ flashMessage }}*/
/*         </div>*/
/*     {% endfor %}*/
/*     	<form name='nouveau 'method='post'>*/
/* 			<input type='text' name='login' />*/
/* 			<input type='password' name='pwd'/>*/
/* 			<br><input type='submit' name='co' value='creer compte' />*/
/* 		</form>*/
/*     */
/* {% endblock %}*/
