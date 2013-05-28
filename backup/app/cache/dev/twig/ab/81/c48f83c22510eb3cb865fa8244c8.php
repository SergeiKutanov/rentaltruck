<?php

/* SergeiKVladAuto33Bundle:Public:procession.html.twig */
class __TwigTemplate_ab81c48f83c22510eb3cb865fa8244c8 extends Twig_Template
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
        echo "<title>Автомобили на свадьбу во Владимире</title>
";
    }

    // line 7
    public function block_meta($context, array $blocks = array())
    {
        // line 8
        echo "<meta name=\"keywords\" content=\"автомобиль на свадьбу недорого во Владимире,
                                прокат автомобилей на свадьбу во Владимире,
                                аренда автомобиля с водителем на свадьбу во Владимире недорого\">
<meta name=\"description\" content=\"Прокат автомобилей на свадьбу с водителем во Владимире. У нас вы можете взять в аренду автомобили на свадьбу с водителем любого класса по низким ценам.\">
";
    }

    public function getTemplateName()
    {
        return "SergeiKVladAuto33Bundle:Public:procession.html.twig";
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
