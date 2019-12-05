<?php

/* knp_menu_ordered.html.twig */
class __TwigTemplate_22a31979caea95280716e2b74385f27ce49876b6678f95beec30e87468731690 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "knp_menu_ordered.html.twig", 1);
        $this->blocks = [
            'list' => [$this, 'block_list'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_list($context, array $blocks = [])
    {
        // line 4
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "knp_menu_ordered.html.twig", 4);
        // line 5
        echo "
";
        // line 6
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "hasChildren", []) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth", []) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren", []))) {
            // line 7
            echo "    <ol";
            echo $context["macros"]->getattributes((isset($context["listAttributes"]) ? $context["listAttributes"] : null));
            echo ">
        ";
            // line 8
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ol>
";
        }
    }

    public function getTemplateName()
    {
        return "knp_menu_ordered.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  38 => 7,  36 => 6,  33 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "knp_menu_ordered.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu_ordered.html.twig");
    }
}
