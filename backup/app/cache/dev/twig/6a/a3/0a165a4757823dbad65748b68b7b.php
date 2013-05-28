<?php

/* SergeiKVladAuto33Bundle:Public:cars.html.twig */
class __TwigTemplate_6aa30a165a4757823dbad65748b68b7b extends Twig_Template
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
        echo "        <title>Парк автомобилей напрокат во Владимире</title>
";
    }

    // line 7
    public function block_meta($context, array $blocks = array())
    {
        // line 8
        echo "<meta name=\"keywords\" content=\"парк автомобилей напрокат во Владимире\">
<meta name=\"description\" content=\"Список автомобилей, которые вы можете взять напрокат в нашей компании\">
";
    }

    // line 12
    public function block_middle_bar($context, array $blocks = array())
    {
        // line 13
        echo "<h1>Прокат автомобилей во Владимире</h1>
<h2>Наши автомобили</h2>
<hr>
<div class=\"vehicle_content\">
    <div class=\"vehicle\">
        <div>
            <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/images/cars/vaz_priora_2008.JPG"), "html", null, true);
        echo "\" alt=\"ваз приора в аренду\"/>
        </div>
        <div class=\"desc\">
            <h2>ВАЗ Приора</h2>
            <hr>
            <h3>Цена</h3>
            <p class=\"price\">от 700 руб. в сутки</p>
        </div>
    </div>
    <div class=\"vehicle\">
        <div>
            <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/images/cars/ford_focus_2004.JPG"), "html", null, true);
        echo "\" alt=\"форд фокус в аренду\"/>
        </div>
        <div class=\"desc\">
            <h2>Ford Focus</h2>
            <hr>
            <h3>Цена</h3>
            <p class=\"price\">от 900 руб. в сутки</p>
        </div>
    </div>
    <div class=\"vehicle\">
        <div>
            <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/images/cars/hyundai_elantra_2008.JPG"), "html", null, true);
        echo "\" alt=\"hyundai elantra в аренду\"/>
        </div>
        <div class=\"desc\">
            <h2>Hyundai Elantra</h2>
            <hr>
            <h3>Цена</h3>
            <p class=\"price\">от 1000 руб. в сутки</p>
        </div>
    </div>
    <div class=\"vehicle\">
        <div>
            <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/images/cars/lexus_rx330_2003.JPG"), "html", null, true);
        echo "\" alt=\"lexus rx330 в аренду\"/>
        </div>
        <div class=\"desc\">
            <h2>Lexus RX330</h2>
            <hr>
            <h3>Цена</h3>
            <p class=\"price\">от 1500 руб. в сутки</p>
        </div>
    </div>
    <div class=\"vehicle\">
        <div>
            <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/images/cars/vw_passat_2010.JPG"), "html", null, true);
        echo "\" alt=\"volkswagen passat в аренду\"/>
        </div>
        <div class=\"desc\">
            <h2>Volkswagen Passat</h2>
            <hr>
            <h3>Цена</h3>
            <p class=\"price\">от 1300 руб. в сутки</p>
        </div>
    </div>
    <div class=\"vehicle\">
        <div>
            <img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/images/cars/renault_scenic_2008.JPG"), "html", null, true);
        echo "\" alt=\"renault scenic в аренду\"/>
        </div>
        <div class=\"desc\">
            <h2>Renault Scenic Diesel</h2>
            <hr>
            <h3>Цена</h3>
            <p class=\"price\">от 1200 руб. в сутки</p>
        </div>
    </div>
    <div class=\"vehicle\">
        <div>
            <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/images/cars/vw_multivan_mt_2008.JPG"), "html", null, true);
        echo "\" alt=\"volkswagen multivan в аренду\"/>
        </div>
        <div class=\"desc\">
            <h2>Volkswagen Multivan</h2>
            <hr>
            <h3>Цена</h3>
            <p class=\"price\">от 2000 руб. в сутки</p>
        </div>
    </div>
    <div class=\"vehicle\">
        <div>
            <img src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/images/cars/vw_multivan_at_2008.JPG"), "html", null, true);
        echo "\" alt=\"volkswagen multivan в аренду\"/>
        </div>
        <div class=\"desc\">
            <h2>Volkswagen Multivan</h2>
            <hr>
            <h3>Цена</h3>
            <p class=\"price\">от 2500 руб. в сутки</p>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SergeiKVladAuto33Bundle:Public:cars.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 96,  140 => 85,  126 => 74,  112 => 63,  98 => 52,  84 => 41,  70 => 30,  56 => 19,  48 => 13,  45 => 12,  39 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
