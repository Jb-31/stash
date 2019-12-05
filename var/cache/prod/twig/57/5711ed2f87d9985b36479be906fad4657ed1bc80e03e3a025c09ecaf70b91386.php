<?php

/* SonataCoreBundle:Form:color.html.twig */
class __TwigTemplate_0068b4a0dbc6c60cb1ef7efdeb26c68250544a02f04397e52ed207c3cc437442 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'sonata_type_color_widget' => [$this, 'block_sonata_type_color_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 11
        $this->displayBlock('sonata_type_color_widget', $context, $blocks);
    }

    public function block_sonata_type_color_widget($context, array $blocks = [])
    {
        // line 12
        echo "    ";
        ob_start();
        // line 13
        echo "        <input type=\"color\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" ";
        }
        echo "/>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:Form:color.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 13,  26 => 12,  20 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataCoreBundle:Form:color.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/views/Form/color.html.twig");
    }
}
