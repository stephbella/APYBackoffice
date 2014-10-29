<?php

/* BackofficeContenusBundle:Contenus:editcontenus.html.twig */
class __TwigTemplate_fb6b16574101a1959a97a962e5d65db0e7fead9d1e80647790c7fef6bbe0757c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BackofficeContenusBundle:Contenus:newcontenus.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'ssHeader' => array($this, 'block_ssHeader'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BackofficeContenusBundle:Contenus:newcontenus.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 9
        echo "    ";
        $this->displayBlock('ssHeader', $context, $blocks);
        // line 12
        echo "    ";
        $this->displayBlock('contenu', $context, $blocks);
    }

    // line 6
    public function block_header($context, array $blocks = array())
    {
        // line 7
        echo "        ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
    ";
    }

    // line 9
    public function block_ssHeader($context, array $blocks = array())
    {
        // line 10
        echo "        ";
        $this->displayParentBlock("ssHeader", $context, $blocks);
        echo "
    ";
    }

    // line 12
    public function block_contenu($context, array $blocks = array())
    {
        // line 13
        echo "        ";
        $this->displayParentBlock("contenu", $context, $blocks);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "BackofficeContenusBundle:Contenus:editcontenus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 13,  72 => 12,  65 => 10,  62 => 9,  55 => 7,  52 => 6,  47 => 12,  44 => 9,  41 => 6,  38 => 5,  32 => 4,);
    }
}
