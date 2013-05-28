<?php

/* ::base.html.twig */
class __TwigTemplate_6b4977c4caf65d0b9e0d9822d2f9a08d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'meta' => array($this, 'block_meta'),
            'css' => array($this, 'block_css'),
            'javascript' => array($this, 'block_javascript'),
            'middle_bar' => array($this, 'block_middle_bar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"ru-ru\" xml:lang=\"ru-ru\">
    <head>
        ";
        // line 4
        $context["right_bar"] = "false";
        // line 5
        echo "        ";
        $context["left_bar"] = "false";
        // line 6
        echo "        ";
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "        <meta content=\"text/html; charset=utf-8\" http-equiv=\"content-type\">
        <meta content=\"index, follow\" name=\"robots\">
        <meta content=\"ru-RU\" name=\"language\">
        ";
        // line 10
        $this->displayBlock('meta', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('css', $context, $blocks);
        // line 12
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/js/jquery.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 13
        $this->displayBlock('javascript', $context, $blocks);
        // line 14
        echo "    </head>
    <body>
        <div id=\"wrapper\">
            <div id=\"header\">
                <div id=\"logo\"><a class=\"logo\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("public_index"), "html", null, true);
        echo "\"></a></div>
                <div id=\"header_background\"></div>
            </div>
            <div id=\"nav\">
                <ul>
                    <li
                            ";
        // line 24
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method") == "public_no_driver")) {
            // line 25
            echo "                                class=\"selected\"
                            ";
        }
        // line 27
        echo "                            ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("public_index"), "html", null, true);
        echo "\"><i>Прокат автомобиля</i></a></li>
                    <li
                            ";
        // line 29
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method") == "public_with_driver")) {
            // line 30
            echo "                                class=\"selected\"
                            ";
        }
        // line 32
        echo "                            ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("public_with_driver"), "html", null, true);
        echo "\"><i>Трансфер до аэропорта</i></a></li>
                    <li
                            ";
        // line 34
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method") == "public_procession")) {
            // line 35
            echo "                            class=\"selected\"
                            ";
        }
        // line 37
        echo "                            ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("public_procession"), "html", null, true);
        echo "\"><i>Автомобили на свадьбу</i></a></li>
                    <li
                            ";
        // line 39
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method") == "public_cars")) {
            // line 40
            echo "                            class=\"selected\"
                            ";
        }
        // line 42
        echo "                            ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("public_cars"), "html", null, true);
        echo "\"><i>Парк автомобилей</i></a></li>
                    <li
                            ";
        // line 44
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method") == "public_conditions")) {
            // line 45
            echo "                            class=\"selected\"
                            ";
        }
        // line 47
        echo "                            ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("public_conditions"), "html", null, true);
        echo "\"><i>Условия аренды</i></a></li>
                    <li
                            ";
        // line 49
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method") == "public_contacts")) {
            // line 50
            echo "                            class=\"selected\"
                            ";
        }
        // line 52
        echo "                            ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("public_contacts"), "html", null, true);
        echo "\"><i>Контакты</i></a></li>
                </ul>
            </div>
            <div id=\"page\">
                ";
        // line 56
        if (($this->getContext($context, "left_bar") == "true")) {
            // line 57
            echo "                    <div id=\"left_bar\">
                    </div>
                ";
        }
        // line 60
        echo "                    <div id=\"middle_bar\"
                        ";
        // line 61
        if ((($this->getContext($context, "left_bar") == "true") && ($this->getContext($context, "right_bar") == "true"))) {
            // line 62
            echo "                           style=\"width:580px; float:left;\"
                        ";
        } else {
            // line 64
            echo "                           ";
            if ((($this->getContext($context, "left_bar") == "true") || ($this->getContext($context, "right_bar") == "true"))) {
                // line 65
                echo "                               style=\"width:780px; float: left;\"
                           ";
            }
            // line 67
            echo "                        ";
        }
        echo ">
                        ";
        // line 68
        $this->displayBlock('middle_bar', $context, $blocks);
        // line 71
        echo "                    </div>
                ";
        // line 72
        if (($this->getContext($context, "right_bar") == "true")) {
            // line 73
            echo "                    <div id=\"right_bar\">

                    </div>
                ";
        }
        // line 77
        echo "            </div>
            <div id=\"footer\">

            </div>
        </div>

    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 10
    public function block_meta($context, array $blocks = array())
    {
    }

    // line 11
    public function block_css($context, array $blocks = array())
    {
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">";
    }

    // line 13
    public function block_javascript($context, array $blocks = array())
    {
    }

    // line 68
    public function block_middle_bar($context, array $blocks = array())
    {
        // line 69
        echo "
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
        return array (  220 => 69,  217 => 68,  212 => 13,  204 => 11,  199 => 10,  194 => 6,  182 => 77,  176 => 73,  174 => 72,  171 => 71,  169 => 68,  164 => 67,  160 => 65,  157 => 64,  153 => 62,  151 => 61,  148 => 60,  143 => 57,  141 => 56,  133 => 52,  129 => 50,  127 => 49,  121 => 47,  117 => 45,  115 => 44,  109 => 42,  105 => 40,  103 => 39,  97 => 37,  93 => 35,  91 => 34,  85 => 32,  81 => 30,  79 => 29,  73 => 27,  69 => 25,  67 => 24,  58 => 18,  52 => 14,  45 => 12,  42 => 11,  40 => 10,  35 => 7,  32 => 6,  29 => 5,  27 => 4,  22 => 1,  50 => 13,  47 => 14,  39 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
