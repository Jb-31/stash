<?php

/* SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_one.html.twig */
class __TwigTemplate_50316a2491dd770c7ad8bbbdefd75068154c9e463ad5a83e2821be85c5916736 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getTemplate", [0 => "base_list_field"], "method"), "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_one.html.twig", 12);
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
        if ((isset($context["value"]) ? $context["value"] : null)) {
            // line 18
            echo "        ";
            $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", []), "route", []), "name", []);
            // line 19
            echo "        ";
            if (((( !(($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", [], "any", false, true), "identifier", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", [], "any", false, true), "identifier", []), false)) : (false)) && $this->getAttribute(            // line 20
(isset($context["field_description"]) ? $context["field_description"] : null), "hasAssociationAdmin", [])) && $this->getAttribute($this->getAttribute(            // line 21
(isset($context["field_description"]) ? $context["field_description"] : null), "associationadmin", []), "hasRoute", [0 => (isset($context["route_name"]) ? $context["route_name"] : null)], "method")) && $this->getAttribute($this->getAttribute(            // line 22
(isset($context["field_description"]) ? $context["field_description"] : null), "associationadmin", []), "hasAccess", [0 => (isset($context["route_name"]) ? $context["route_name"] : null), 1 => (isset($context["value"]) ? $context["value"] : null)], "method"))) {
                // line 24
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "associationadmin", []), "generateObjectUrl", [0 => (isset($context["route_name"]) ? $context["route_name"] : null), 1 => (isset($context["value"]) ? $context["value"] : null), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", []), "route", []), "parameters", [])], "method"), "html", null, true);
                echo "\">
                ";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["value"]) ? $context["value"] : null), (isset($context["field_description"]) ? $context["field_description"] : null)), "html", null, true);
                echo "
            </a>
        ";
            } else {
                // line 28
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["value"]) ? $context["value"] : null), (isset($context["field_description"]) ? $context["field_description"] : null)), "html", null, true);
                echo "
        ";
            }
            // line 30
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 30,  53 => 28,  47 => 25,  42 => 24,  40 => 22,  39 => 21,  38 => 20,  36 => 19,  33 => 18,  30 => 17,  27 => 16,  18 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_one.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/doctrine-orm-admin-bundle/src/Resources/views/CRUD/list_orm_many_to_one.html.twig");
    }
}
