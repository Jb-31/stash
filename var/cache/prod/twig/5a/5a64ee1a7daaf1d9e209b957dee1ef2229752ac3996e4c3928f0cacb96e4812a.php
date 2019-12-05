<?php

/* SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_many.html.twig */
class __TwigTemplate_097a5fcd5b4254968c9fef63ae94de8d1828e2e188a19fb2b49dd8f67ea6b6b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("@SonataAdmin/CRUD/base_show_field.html.twig", "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_many.html.twig", 12);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_field($context, array $blocks = [])
    {
        // line 17
        echo "    <ul class=\"sonata-ba-show-many-to-many\">
    ";
        // line 18
        $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", []), "route", []), "name", []);
        // line 19
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 20
            echo "            <li>
                ";
            // line 21
            if ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "hasassociationadmin", []) && $this->getAttribute($this->getAttribute(            // line 22
(isset($context["field_description"]) ? $context["field_description"] : null), "associationadmin", []), "hasRoute", [0 => (isset($context["route_name"]) ? $context["route_name"] : null)], "method")) && $this->getAttribute($this->getAttribute(            // line 23
(isset($context["field_description"]) ? $context["field_description"] : null), "associationadmin", []), "hasAccess", [0 => (isset($context["route_name"]) ? $context["route_name"] : null), 1 => $context["element"]], "method"))) {
                // line 24
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "associationadmin", []), "generateObjectUrl", [0 => (isset($context["route_name"]) ? $context["route_name"] : null), 1 => $context["element"], 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", []), "route", []), "parameters", [])], "method"), "html", null, true);
                echo "\">
                        ";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement($context["element"], (isset($context["field_description"]) ? $context["field_description"] : null)), "html", null, true);
                echo "
                    </a>
                ";
            } else {
                // line 28
                echo "                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement($context["element"], (isset($context["field_description"]) ? $context["field_description"] : null)), "html", null, true);
                echo "
                ";
            }
            // line 30
            echo "            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 32,  65 => 30,  59 => 28,  53 => 25,  48 => 24,  46 => 23,  45 => 22,  44 => 21,  41 => 20,  36 => 19,  34 => 18,  31 => 17,  28 => 16,  11 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_many.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/doctrine-orm-admin-bundle/src/Resources/views/CRUD/show_orm_many_to_many.html.twig");
    }
}
