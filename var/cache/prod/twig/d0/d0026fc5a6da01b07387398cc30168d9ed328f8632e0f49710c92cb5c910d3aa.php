<?php

/* SonataAdminBundle:CRUD:list_array.html.twig */
class __TwigTemplate_b2129dbe434ab947663e9ee6857ed7a0693c4d63792a97011183fc1327456ccb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'field' => [$this, 'block_field'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 13
        return $this->loadTemplate($this->env->getExtension('Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension')->getAdminTemplate("base_list_field", $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "code", [])), "SonataAdminBundle:CRUD:list_array.html.twig", 13);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 11
        $context["list"] = $this->loadTemplate("@SonataAdmin/CRUD/base_array_macro.html.twig", "SonataAdminBundle:CRUD:list_array.html.twig", 11);
        // line 13
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_field($context, array $blocks = [])
    {
        // line 16
        echo "    ";
        echo $context["list"]->getrender_array((isset($context["value"]) ? $context["value"] : null), ( !$this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", [], "any", false, true), "inline", [], "any", true, true) || $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", []), "inline", [])));
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 16,  30 => 15,  26 => 13,  24 => 11,  18 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:CRUD:list_array.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/list_array.html.twig");
    }
}
