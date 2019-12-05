<?php

/* SonataAdminBundle:CRUD/Association:show_many_to_many.html.twig */
class __TwigTemplate_d361e4ea46b1ff29115dfd55642225d12e801081bb4ee390fc58923631291f83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("@SonataAdmin/CRUD/base_show_field.html.twig", "SonataAdminBundle:CRUD/Association:show_many_to_many.html.twig", 12);
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

    // line 14
    public function block_field($context, array $blocks = [])
    {
        // line 15
        echo "    <ul class=\"sonata-ba-show-many-to-many\">
    ";
        // line 16
        $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", []), "route", []), "name", []);
        // line 17
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 18
            echo "            <li>
                ";
            // line 19
            if ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "hasassociationadmin", []) && $this->getAttribute($this->getAttribute(            // line 20
(isset($context["field_description"]) ? $context["field_description"] : null), "associationadmin", []), "hasRoute", [0 => (isset($context["route_name"]) ? $context["route_name"] : null)], "method")) && $this->getAttribute($this->getAttribute(            // line 21
(isset($context["field_description"]) ? $context["field_description"] : null), "associationadmin", []), "hasAccess", [0 => (isset($context["route_name"]) ? $context["route_name"] : null), 1 => $context["element"]], "method"))) {
                // line 22
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "associationadmin", []), "generateObjectUrl", [0 => (isset($context["route_name"]) ? $context["route_name"] : null), 1 => $context["element"], 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", []), "route", []), "parameters", [])], "method"), "html", null, true);
                echo "\">
                        ";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement($context["element"], (isset($context["field_description"]) ? $context["field_description"] : null)), "html", null, true);
                echo "
                    </a>
                ";
            } else {
                // line 26
                echo "                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement($context["element"], (isset($context["field_description"]) ? $context["field_description"] : null)), "html", null, true);
                echo "
                ";
            }
            // line 28
            echo "            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD/Association:show_many_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 30,  65 => 28,  59 => 26,  53 => 23,  48 => 22,  46 => 21,  45 => 20,  44 => 19,  41 => 18,  36 => 17,  34 => 16,  31 => 15,  28 => 14,  11 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:CRUD/Association:show_many_to_many.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/Association/show_many_to_many.html.twig");
    }
}
