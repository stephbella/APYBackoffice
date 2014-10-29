<?php

/* BackofficeSecurityBundle:Login:log.html.twig */
class __TwigTemplate_309ea5c28299f1259b3673ea5f3c6171b085a13820e85fd77fbcfa608eb96863 extends Twig_Template
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
        echo "WebCreator2 - Backend";
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
        echo "    <table cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"840\" height=\"300\">
        <tr><td colspan=\"5\" height=\"10\"></td></tr>
        <tr>
            <td>
                <table cellpadding=\"0\" cellspacing=\"0\" align=\"center\">
                    <tr>
                        <td colspan=\"3\" height=\"10\"><div style=\"font-size: 18px; color: #525252\">Module d'Administration</div></td>
                    </tr>
                    <tr>
                        <td colspan=\"3\" height=\"10\"></td>
                    </tr>
                    <tr>
                        <td width=\"20\"></td>
                        <td width=\"179\" valign=\"top\">
                            ";
        // line 26
        $this->displayBlock('contenu', $context, $blocks);
        // line 38
        echo " <!-- fin du code pour le contenus -->\t
                        </td>
                        <td width=\"37\"></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
";
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

    // line 26
    public function block_contenu($context, array $blocks = array())
    {
        // line 27
        echo "                                ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 28
            echo "                                    <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
                                ";
        }
        // line 30
        echo "                                <form action=\"";
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
                                    <label for=\"username\">Login:</label>
                                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
                                    <label for=\"password\">Password:</label>
                                    <input type=\"password\" id=\"password\" name=\"_password\" />                                
                                    <input type=\"hidden\" name=\"_target_path\" value=\"/menus\" />
                                    <button type=\"submit\">login</button>
                                </form>
                            ";
    }

    public function getTemplateName()
    {
        return "BackofficeSecurityBundle:Login:log.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 32,  109 => 30,  103 => 28,  100 => 27,  97 => 26,  90 => 10,  87 => 9,  80 => 7,  77 => 6,  65 => 38,  63 => 26,  47 => 12,  44 => 9,  41 => 6,  38 => 5,  32 => 4,);
    }
}
