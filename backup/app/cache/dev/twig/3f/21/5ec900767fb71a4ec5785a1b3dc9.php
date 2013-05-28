<?php

/* SergeiKVladAuto33Bundle:Public:index.html.twig */
class __TwigTemplate_3f215ec900767fb71a4ec5785a1b3dc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'meta' => array($this, 'block_meta'),
            'middle_bar' => array($this, 'block_middle_bar'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    <title>Прокат автомобилей во Владимире</title>
";
    }

    // line 7
    public function block_meta($context, array $blocks = array())
    {
        // line 8
        echo "    <meta name=\"keywords\" content=\"автомобиль напрокат во владимире,
                                    прокат автомобилей во владимире,
                                    аренда автомобиля во Владимире по низким ценам\">
    <meta name=\"description\" content=\"Прокат автомобилей во Владимире. У нас вы можете взять в аренду автомобили любого класса по низким ценам.\">
";
    }

    // line 14
    public function block_middle_bar($context, array $blocks = array())
    {
        // line 15
        echo "<h1>Прокат автомобилей во Владимире</h1>
";
    }

    public function getTemplateName()
    {
        return "SergeiKVladAuto33Bundle:Public:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 15,  47 => 14,  39 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
