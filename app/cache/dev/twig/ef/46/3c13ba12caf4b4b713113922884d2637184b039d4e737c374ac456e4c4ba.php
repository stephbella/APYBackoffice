<?php

/* BackofficeContenusBundle:Contenus:newcontenus.html.twig */
class __TwigTemplate_ef463c13ba12caf4b4b713113922884d2637184b039d4e737c374ac456e4c4ba extends Twig_Template
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
        echo "        <h2 style=\"margin-left: 170px; margin-top: 30px; color: #525252\">Gestion des contenus</h2>
        <div style=\"margin-top: 10px;margin-left: 300px;\"><a href=\"/contents\">Retour liste des contenus</a></div>
        <div style=\"margin-top: 10px; margin-left: 300px;\"><a href=\"/logout\">Se déconnecter</a></div>
        <div style=\"margin-left: 300px;margin-top: 20px;margin-right:300px;\" width=\"840\">
            <form method=\"post\" ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                <script type=\"text/javascript\">
                    // Replace the <textarea id=\"editor1\"> with a CKEditor
                    // instance, using default configuration.
                    CKEDITOR.replace( 'form_descriptContents' );            
                </script>
                <input type=\"submit\" class=\"btn btn-primary\" />
            </form>
        <div>
    ";
    }

    // line 13
    public function block_menus($context, array $blocks = array())
    {
        $this->displayParentBlock("menus", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "BackofficeContenusBundle:Contenus:newcontenus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 13,  89 => 19,  85 => 18,  79 => 14,  76 => 13,  73 => 12,  66 => 10,  63 => 9,  56 => 7,  53 => 6,  48 => 12,  45 => 9,  42 => 6,  39 => 5,  33 => 4,);
    }
}
