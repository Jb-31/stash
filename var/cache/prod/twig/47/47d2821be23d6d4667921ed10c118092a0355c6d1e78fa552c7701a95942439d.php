<?php

/* SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_one.html.twig */
class __TwigTemplate_6da295f7022f4e891848ee1dfce20ce38da78a9197f12307d3a5101cfc0c8c5f extends Twig_Template
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
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getTemplate", [0 => "base_list_field"], "method"), "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_one.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_field($context, array $blocks = [])
    {
        // line 17
        echo "    ";
        $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", []), "route", []), "name", []);
        // line 18
        echo "    ";
        if (((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "hasAssociationAdmin", []) && $this->getAttribute($this->getAttribute(        // line 19
(isset($context["field_description"]) ? $context["field_description"] : null), "associationadmin", []), "id", [0 => (isset($context["value"]) ? $context["value"] : null)], "method")) && $this->getAttribute($this->getAttribute(        // line 20
(isset($context["field_description"]) ? $context["field_description"] : null), "associationadmin", []), "hasRoute", [0 => (isset($context["route_name"]) ? $context["route_name"] : null)], "method")) && $this->getAttribute($this->getAttribute(        // line 21
(isset($context["field_description"]) ? $context["field_description"] : null), "associationadmin", []), "hasAccess", [0 => (isset($context["route_name"]) ? $context["route_name"] : null), 1 => (isset($context["value"]) ? $context["value"] : null)], "method"))) {
            // line 22
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "associationadmin", []), "generateObjectUrl", [0 => (isset($context["route_name"]) ? $context["route_name"] : null), 1 => (isset($context["value"]) ? $context["value"] : null), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", []), "route", []), "parameters", [])], "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["value"]) ? $context["value"] : null), (isset($context["field_description"]) ? $context["field_description"] : null)), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 24
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["value"]) ? $context["value"] : null), (isset($context["field_description"]) ? $context["field_description"] : null)), "html", null, true);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 24,  39 => 22,  37 => 21,  36 => 20,  35 => 19,  33 => 18,  30 => 17,  27 => 16,  18 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_one.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/doctrine-orm-admin-bundle/src/Resources/views/CRUD/list_orm_one_to_one.html.twig");
    }
}
