<?php

/* BackofficeMenusBundle:Menus:index.html.twig */
class __TwigTemplate_b96881faffe18f35224e9e7fcb599ffd820254ff477f411b101796be4b4b7510 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

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
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Webcreator2 - Backend";
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
        // line 21
        echo "        <h2 style=\"margin-left: 170px; margin-top: 30px; color: #525252\">Liste des menus</h2>
        <div style=\"margin-top: 10px; margin-left: 10px;\"><a href=\"/new_menus\">Nouveau menu</a></div>
        <div style=\"margin-top: 10px; margin-left: 10px;\"><a href=\"/logout\">Se déconnecter</a></div>
        <div style=\"margin-left :10px; width: 1024;\">";
        // line 24
        echo $this->env->getExtension('datagrid_twig_extension')->getGridSearch((isset($context["grid"]) ? $context["grid"] : null));
        echo "
        ";
        // line 25
        echo $this->env->getExtension('datagrid_twig_extension')->getGrid((isset($context["grid"]) ? $context["grid"] : null));
        echo "</div>
    ";
    }

    // line 13
    public function block_menus($context, array $blocks = array())
    {
        // line 14
        echo "            <table style=\"margin-left: 170px;color:#fff;\">
                <tr>
                    <td width=\"146\" height=\"28\" background=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/button5.jpg"), "html", null, true);
        echo "\"><a href=\"/menus\" style=\"margin-left: 50px;color: #fff;text-decoration: none;\">Menus</a></td>
                    <td width=\"146\" height=\"28\" background=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/button5.jpg"), "html", null, true);
        echo "\"><a href=\"/contents\" style=\"margin-left: 50px;color: #fff;text-decoration: none;\">Contenus</a></td>
                </tr>
            </table>
        ";
    }

    public function getTemplateName()
    {
        return "BackofficeMenusBundle:Menus:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 17,  101 => 16,  97 => 14,  94 => 13,  88 => 25,  84 => 24,  79 => 21,  76 => 13,  73 => 12,  66 => 10,  63 => 9,  56 => 7,  53 => 6,  48 => 12,  45 => 9,  42 => 6,  39 => 5,  33 => 4,);
    }
}
