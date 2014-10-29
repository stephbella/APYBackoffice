<?php

/* ::base.html.twig */
class __TwigTemplate_7532c252577bde32a795830a16ab4f9a067f7747fec3b5c29e0db920b12b22c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'ssHeader' => array($this, 'block_ssHeader'),
            'debtablecontenu' => array($this, 'block_debtablecontenu'),
            'menus' => array($this, 'block_menus'),
            'contenu' => array($this, 'block_contenu'),
            'fintablecontenu' => array($this, 'block_fintablecontenu'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "44edb47_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_44edb47_0") : $this->env->getExtension('assets')->getAssetUrl("css/44edb47_feuille_1.css");
            // line 7
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "44edb47"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_44edb47") : $this->env->getExtension('assets')->getAssetUrl("css/44edb47.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\" />
        <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ckeditor/ckeditor.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    </head>
    <body bgcolor=\"#F3F3F3\" topmargin=\"0\" rightmargin=\"0\" marginwidth=\"0\" marginheight=\"0\" leftmargin=\"0\"
bottommargin=\"0\" style=\"background: url(";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/fond_de_page.jpg"), "html", null, true);
        echo ") #C7CDCD repeat; background-repeat: repeat-x\">
    ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 128
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Société yourfaithfully";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('ssHeader', $context, $blocks);
        // line 31
        echo "    ";
        $this->displayBlock('debtablecontenu', $context, $blocks);
        // line 41
        echo "                            <!-- dèbut du code pour le menu -->
    ";
        // line 42
        $this->displayBlock('menus', $context, $blocks);
        // line 79
        echo "                            <!-- fin du code pour le menu -->\t
                            </td>
                            <td width=\"16\"></td>
                            <td width=\"720\">\t
                            <!-- dèbut du code pour le contenus -->
    ";
        // line 84
        $this->displayBlock('contenu', $context, $blocks);
        // line 100
        echo "\t
                            <!-- fin du code pour le contenus -->
    ";
        // line 102
        $this->displayBlock('fintablecontenu', $context, $blocks);
        // line 111
        echo "        <!-- Voici les trois lignes qui constitus le pied de page -->
    ";
        // line 112
        $this->displayBlock('footer', $context, $blocks);
        // line 127
        echo "    ";
    }

    // line 15
    public function block_header($context, array $blocks = array())
    {
        // line 16
        echo "        <table cellpadding=\"0\" cellspacing=\"0\" align=\"center\">
            <tr>
                <td width=\"647\" height=\"124\" background=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.jpg"), "html", null, true);
        echo "\"></td>
                <td width=\"173\" height=\"124\" background=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/2.jpg"), "html", null, true);
        echo "\"></td>
                <td width=\"204\" height=\"124\" background=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/3.jpg"), "html", null, true);
        echo "\"></td>
            </tr>
        </table>
    ";
    }

    // line 24
    public function block_ssHeader($context, array $blocks = array())
    {
        // line 25
        echo "        <table cellpadding=\"0\" cellspacing=\"0\" align=\"center\">
            <tr>
                <td width=\"1024\" height=\"133\" background=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/4.jpg"), "html", null, true);
        echo "\"></td>
            </tr>
        </table>
    ";
    }

    // line 31
    public function block_debtablecontenu($context, array $blocks = array())
    {
        // line 32
        echo "        <table cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"1024\" height=\"366\" background=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/5.jpg"), "html", null, true);
        echo "\">
            <tr><td colspan=\"5\" height=\"10\"></td></tr>
            <tr>
                <td>
                    <table cellpadding=\"0\" cellspacing=\"0\" style=\"margin-left: 15px;\">
                       <tr>
                            <td width=\"20\"></td>
                            <td width=\"199\" valign=\"top\">
    ";
    }

    // line 42
    public function block_menus($context, array $blocks = array())
    {
        echo "\t
                                <table cellpadding=\"0\" cellspacing=\"0\" align=\"center\">
                                    <tr>
                                        <td width=\"148\" height=\"30\" background=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/button1.jpg"), "html", null, true);
        echo "\"></td>
                                    </tr>
                                    <tr>
                                        <td height=\"5\"></td>
                                    </tr>
                                    <tr>
                                        <td width=\"148\" height=\"30\" background=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/button2.jpg"), "html", null, true);
        echo "\"></td>
                                    </tr>
                                    <tr>
                                        <td height=\"5\"></td>
                                    </tr>
                                    <tr>
                                        <td width=\"148\" height=\"30\" background=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/button3.jpg"), "html", null, true);
        echo "\"></td>
                                    </tr>
                                    <tr>
                                        <td height=\"5\"></td>
                                    </tr>
                                    <tr>
                                        <td width=\"148\" height=\"30\" background=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/button4.jpg"), "html", null, true);
        echo "\"></td>
                                    </tr>
                                    <tr>
                                        <td height=\"5\"></td>
                                    </tr>
                                    <tr>
                                        <td width=\"148\" height=\"30\" background=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/button5.jpg"), "html", null, true);
        echo "\"></td>
                                    </tr>
                                    <tr>
                                        <td height=\"5\"></td>
                                    </tr>
                                    <tr>
                                        <td width=\"148\" height=\"30\" background=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/button5.jpg"), "html", null, true);
        echo "\"></td>
                                    </tr>
                                </table>
    ";
    }

    // line 84
    public function block_contenu($context, array $blocks = array())
    {
        echo "        
                                <table cellpadding=\"0\" cellspacing=\"0\" style=\"margin-left: 40px;\">
                                    <tr>
                                        <td width=\"588\" height=\"32\" background=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/9.jpg"), "html", null, true);
        echo "\" class=\"titre\">
                                        &nbsp;
                                        Espace sécurisé de ventes privées Micro Cool</td>
                                    </tr>
                                </table>
                                <div class=\"texte\" style=\"margin-left: 30px;\">
                                    <img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/carre.jpg"), "html", null, true);
        echo "\" border=\"0\" align=\"right\">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nulla at enim. Aliquam mi nisl, vulputate eget, pulvinar in, tristique quis, arcu. Duis lorem. Nullam ornare, mi quis dignissim commodo, orci urna consectetuer tortor, id ultricies nulla tellus eu metus. Nunc magna. Quisque tempus, libero et rutrum fringilla, mi velit faucibus nisi, a pretium augue quam vitae nisi. Morbi massa dolor, semper quis, varius quis, pellentesque id, lacus. Vestibulum viverra. Mauris nibh. Suspendisse vel sem eu libero congue mollis. Pellentesque porttitor. Pellentesque enim pede, dictum ut, ornare eu, porttitor vitae, erat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam erat volutpat. Nunc aliquam. Suspendisse tincidunt mauris nonummy ante.
                                    <br><br>
                                    Phasellus malesuada convallis neque. Nam posuere. Curabitur turpis. Nullam a massa. Sed varius, orci et tincidunt egestas, augue ipsum laoreet diam, sed tristique metus magna eget massa. Etiam eu mauris vitae sapien posuere iaculis. Proin urna. Nam mattis laoreet lorem. Morbi id diam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum pulvinar malesuada neque. Donec vestibulum mi a justo. Sed viverra sollicitudin dui. Praesent a massa eget augue gravida tincidunt. Morbi urna. Donec vehicula ante sed sem. Donec rutrum. Vestibulum ante. Vivamus lectus ante, iaculis ut, laoreet sed, rhoncus sit amet, dui. Suspendisse potenti.
                                    <br><br>
                                    Aliquam rhoncus mauris vitae urna. Cras odio ante, bibendum consectetuer, posuere eget, rhoncus vitae, dui. Sed sit amet metus eget pede elementum vulputate. Aliquam dolor ipsum, pharetra sit amet, vulputate rutrum, bibendum et, tortor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas vehicula, dolor eu venenatis pharetra, libero leo vestibulum felis, a ullamcorper velit risus nec mi. Fusce tempus euismod purus. Quisque adipiscing. Pellentesque vel risus. Maecenas id urna volutpat mauris facilisis imperdiet. Nullam venenatis turpis eget purus. Maecenas nec magna. Donec quis erat a odio porta hendrerit. Proin ultricies felis. Curabitur aliquam turpis in velit.
                                </div>
    ";
    }

    // line 102
    public function block_fintablecontenu($context, array $blocks = array())
    {
        // line 103
        echo "                            </td>
                            <td width=\"37\"></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    ";
    }

    // line 112
    public function block_footer($context, array $blocks = array())
    {
        // line 113
        echo "        <table cellpadding=\"0\" cellspacing=\"0\" align=\"center\">
            <tr>
                <td width=\"1024\" height=\"38\" background=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/6.jpg"), "html", null, true);
        echo "\"></td>
            </tr>
            <tr>
                <td width=\"1024\" height=\"61\" background=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/7.jpg"), "html", null, true);
        echo "\">\t
                </td>
            </tr>
            <tr>
                <td width=\"1024\" height=\"76\" background=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/8.jpg"), "html", null, true);
        echo "\"  class=\"copyright\">
                </td>
            </tr>
        </table>
    ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 122,  296 => 118,  290 => 115,  286 => 113,  283 => 112,  272 => 103,  269 => 102,  257 => 93,  248 => 87,  241 => 84,  233 => 75,  224 => 69,  215 => 63,  206 => 57,  197 => 51,  188 => 45,  181 => 42,  167 => 32,  164 => 31,  156 => 27,  152 => 25,  149 => 24,  141 => 20,  137 => 19,  133 => 18,  129 => 16,  126 => 15,  122 => 127,  120 => 112,  117 => 111,  115 => 102,  111 => 100,  109 => 84,  102 => 79,  100 => 42,  97 => 41,  94 => 31,  91 => 24,  88 => 15,  85 => 14,  79 => 5,  73 => 128,  71 => 14,  67 => 13,  61 => 10,  56 => 9,  42 => 7,  38 => 6,  34 => 5,  28 => 1,);
    }
}
