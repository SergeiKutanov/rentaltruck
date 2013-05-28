<?php

/* SergeiKVladAuto33Bundle:Public:withdriver.html.twig */
class __TwigTemplate_f9c9f937b006ef2326de3828eed306d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'meta' => array($this, 'block_meta'),
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
        echo "<title>Прокат автомобилей с водителем во Владимире</title>
";
    }

    // line 7
    public function block_meta($context, array $blocks = array())
    {
        // line 8
        echo "<meta name=\"keywords\" content=\"пассажирские перевозки во владимире, трансфер владимир москва\">
<meta name=\"description\" content=\"Мы предлогаем пассажирские перевозки во владимире на комфортабельных легковых
                                    автомобилях и микроавтобусах. Так же возможет групповой и личный трансфер до
                                    аэропортов Москвы.\">
";
    }

    public function getTemplateName()
    {
        return "SergeiKVladAuto33Bundle:Public:withdriver.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  35 => 7,  30 => 4,  27 => 3,);
    }
}
