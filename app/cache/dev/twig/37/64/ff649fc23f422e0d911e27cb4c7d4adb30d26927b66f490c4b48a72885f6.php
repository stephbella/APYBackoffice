<?php

/* BackofficeContenusBundle:Contenus:index.html.twig */
class __TwigTemplate_3764ff649fc23f422e0d911e27cb4c7d4adb30d26927b66f490c4b48a72885f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BackofficeMenusBundle:Menus:index.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'ssHeader' => array($this, 'block_ssHeader'),
            'contenu' => array($this, 'block_contenu'),
            'menus' => array($this, 'block_menus'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BackofficeMenusBundle:Menus:index.html.twig";
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
        $this->displayBlock('menus', $context, $blocks);
        // line 14
        echo "        <h2 style=\"margin-left: 170px; margin-top: 30px; color: #525252\">Liste des contenus</h2>
        <div style=\"margin-top: 10px; margin-left: 10px;\"><a href=\"/new_contenus\">Nouveau contenu</a></div>
        <div style=\"margin-top: 10px; margin-left: 10px;\"><a href=\"/logout\">Se déconnecter</a></div>
        <div style=\"margin-left :10px; width: 1024;\">";
        // line 17
        echo $this->env->getExtension('datagrid_twig_extension')->getGridSearch((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
        echo "
        ";
        // line 18
        echo $this->env->getExtension('datagrid_twig_extension')->getGrid((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
        echo "</div>        
    ";
    }

    // line 13
    public function block_menus($context, array $blocks = array())
    {
        $this->displayParentBlock("menus", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "BackofficeContenusBundle:Contenus:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  88 => 18,  84 => 17,  79 => 14,  76 => 13,  73 => 12,  66 => 10,  63 => 9,  56 => 7,  53 => 6,  48 => 12,  45 => 9,  42 => 6,  39 => 5,  33 => 4,);
    }
}
