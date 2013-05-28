<?php

/* WebProfilerBundle:Profiler:toolbar_js.html.twig */
class __TwigTemplate_b7720c06ba16428793702404827ea5d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("WebProfilerBundle:Profiler:base_js.html.twig")->display($context);
        // line 3
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    (function () {
        Sfjs.load(
            'sfwdt";
        // line 6
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "',
            '";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "');
                }
            }
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  24 => 3,  17 => 1,  220 => 69,  217 => 68,  212 => 13,  204 => 11,  199 => 10,  194 => 6,  182 => 77,  176 => 73,  174 => 72,  171 => 71,  169 => 68,  164 => 67,  160 => 65,  157 => 64,  153 => 62,  151 => 61,  148 => 60,  143 => 57,  141 => 56,  133 => 52,  129 => 50,  127 => 49,  121 => 47,  117 => 45,  115 => 44,  109 => 42,  105 => 40,  103 => 39,  97 => 37,  93 => 35,  91 => 34,  85 => 32,  81 => 30,  79 => 29,  73 => 27,  69 => 25,  67 => 24,  58 => 18,  52 => 14,  45 => 12,  42 => 13,  40 => 10,  35 => 7,  32 => 6,  29 => 6,  27 => 4,  22 => 2,  50 => 13,  47 => 14,  39 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
