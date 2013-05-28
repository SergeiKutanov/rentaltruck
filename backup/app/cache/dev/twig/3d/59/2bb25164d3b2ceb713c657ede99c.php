<?php

/* SergeiKVladAuto33Bundle:Public:conditions.html.twig */
class __TwigTemplate_3d592bb25164d3b2ceb713c657ede99c extends Twig_Template
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
        echo "<title>Как взять автомобиль напрокат во Владимире</title>
";
    }

    // line 7
    public function block_meta($context, array $blocks = array())
    {
        // line 8
        echo "<meta name=\"keywords\" content=\"Как взять автомобиль напрокат во Владимире, условия аренды автомобилей\">
<meta name=\"description\" content=\"Как взять автомобиль напрокат? Условия аренды автомобилей у нас.\">
";
    }

    // line 12
    public function block_middle_bar($context, array $blocks = array())
    {
        // line 13
        echo "    <h1>Как взять у нас автомобиль напрокат</h1>
    <h2>Условия проката автомобиля</h2>
    <table class=\"conditions\" cellspacing=\"0\">
        <tbody>
            <tr>
                <td>Возраст</td>
                <td>От 21 года</td>
            </tr>
            <tr>
                <td>Водительский стаж</td>
                <td>От 2 лет</td>
            </tr>
            <tr>
                <td>Минимальный срок аренды автомобиля</td>
                <td>1 сутки</td>
            </tr>
            <tr>
                <td>Ограничение пробега</td>
                <td>Не более 300 км в сутки</td>
            </tr>
        </tbody>
    </table>
    <h2>Необходимые документы</h2>
    <table class=\"conditions\" cellspacing=\"0\">
        <tbody>
        <tr>
            <td>Общегражданский паспорт - для граждан РФ</td>
        </tr>
        <tr>
            <td>Национальный паспорт - для иностранных граждан РФ</td>
        </tr>
        <tr>
            <td>Для иностранных граждан - миграционная карта или въездная виза</td>
        </tr>
        <tr>
            <td>Водительское удостоверение</td>
        </tr>
        </tbody>
    </table>
    <p>
        Оплата <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("public_index"), "html", null, true);
        echo "\">проката автомобиля</a> производится вперед за весь период аренды в полном объёме.
        В стоимость входит полное страхование (КАСКО, ОСАГО) и техническое обслуживание автомобиля. Не входит ГМС, оплата штрафов
        и прочих дополнительных расходов.</p>
    <p>
        Вы получаете чистый, полностью заправленный автомобиль напрокат. В таком же виде вы обязаны сдать машину обратно.
        В нашей компании мы подходим к каждому клиенту индивидуально и все условия проката могут оговариваться отдельно.
        Поэтому взять автомобиль напрокат у нас может взять практически любой.
    </p>
";
    }

    public function getTemplateName()
    {
        return "SergeiKVladAuto33Bundle:Public:conditions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 53,  48 => 13,  45 => 12,  39 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
