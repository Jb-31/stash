<?php

/* SonataAdminBundle:CRUD:show_array.html.twig */
class __TwigTemplate_c9ea526afb6176058b43c0e19dec52681acf2400e46eacea80a4130d4396b161 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 13
        $this->parent = $this->loadTemplate("@SonataAdmin/CRUD/base_show_field.html.twig", "SonataAdminBundle:CRUD:show_array.html.twig", 13);
        $this->blocks = [
            'field' => [$this, 'block_field'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@SonataAdmin/CRUD/base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 11
        $context["show"] = $this->loadTemplate("@SonataAdmin/CRUD/base_array_macro.html.twig", "SonataAdminBundle:CRUD:show_array.html.twig", 11);
        // line 13
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_field($context, array $blocks = [])
    {
        // line 16
        echo "    ";
        echo $context["show"]->getrender_array((isset($context["value"]) ? $context["value"] : null), (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", [], "any", false, true), "inline", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", [], "any", false, true), "inline", []), false)) : (false)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 16,  31 => 15,  27 => 13,  25 => 11,  11 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:CRUD:show_array.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/show_array.html.twig");
    }
}
