<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig */
class __TwigTemplate_dd95d636e23f9bd0f9b75fb5f021c8d7d37a8e84b87ce7aa7bb83b9185a35f42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 11
        echo "
";
        // line 13
        echo "
";
        // line 14
        if ( !$this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "hasassociationadmin", [])) {
            // line 15
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["value"]) ? $context["value"] : null), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", [])), "html", null, true);
            echo "
";
        } elseif (($this->getAttribute(        // line 16
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit", []) == "inline")) {
            // line 17
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "formfielddescriptions", []));
            foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
                // line 18
                echo "        ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", []), $this->getAttribute($context["field_description"], "name", []), [], "array"), 'row');
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 21
            echo "    <div id=\"field_container_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" class=\"field-container\">
        ";
            // line 22
            if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit", []) == "list")) {
                // line 23
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\" class=\"field-short-description\">
                ";
                // line 24
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "id", [0 => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "value", [])], "method")) {
                    // line 25
                    echo "                    ";
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_short_object_information", ["code" => $this->getAttribute($this->getAttribute($this->getAttribute(                    // line 26
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "code", []), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute(                    // line 27
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "id", [0 => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "value", [])], "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute(                    // line 28
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "uniqid", []), "linkParameters" => $this->getAttribute($this->getAttribute($this->getAttribute(                    // line 29
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "options", []), "link_parameters", [])]));
                    // line 30
                    echo "
                ";
                } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(                // line 31
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", [], "any", false, true), "options", [], "any", false, true), "placeholder", [], "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "options", []), "placeholder", []))) {
                    // line 32
                    echo "                    <span class=\"inner-field-short-description\">
                        ";
                    // line 33
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "options", []), "placeholder", []), [], "SonataAdminBundle"), "html", null, true);
                    echo "
                    </span>
                ";
                }
                // line 36
                echo "            </span>
            <span style=\"display: none\" >
                ";
                // line 38
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
                echo "
            </span>
        ";
            } else {
                // line 41
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\" >
                ";
                // line 42
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
                echo "
            </span>
        ";
            }
            // line 45
            echo "
        <div id=\"field_actions_";
            // line 46
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" class=\"field-actions\">
            ";
            // line 47
            $context["display_btn_list"] = (((($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit", []) == "list") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "hasroute", [0 => "list"], "method")) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "isGranted", [0 => "LIST"], "method")) && (isset($context["btn_list"]) ? $context["btn_list"] : null));
            // line 48
            echo "            ";
            $context["display_btn_add"] = (((($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit", []) != "admin") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "hasroute", [0 => "create"], "method")) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "isGranted", [0 => "CREATE"], "method")) && (isset($context["btn_add"]) ? $context["btn_add"] : null));
            // line 49
            echo "            ";
            if (((isset($context["display_btn_list"]) ? $context["display_btn_list"] : null) || (isset($context["display_btn_add"]) ? $context["display_btn_add"] : null))) {
                // line 50
                echo "            <div class=\"btn-group\">
                ";
                // line 51
                if ((isset($context["display_btn_list"]) ? $context["display_btn_list"] : null)) {
                    // line 52
                    echo "                    <a  href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "generateUrl", [0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "getOption", [0 => "link_parameters", 1 => []], "method")], "method"), "html", null, true);
                    echo "\"
                        onclick=\"return start_field_dialog_form_list_";
                    // line 53
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "(this);\"
                        class=\"btn btn-info btn-sm sonata-ba-action\"
                        title=\"";
                    // line 55
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_list"]) ? $context["btn_list"] : null), [], (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                    echo "\"
                        >
                        <i class=\"fa fa-list\"></i>
                        ";
                    // line 58
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_list"]) ? $context["btn_list"] : null), [], (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                    echo "
                    </a>
                ";
                }
                // line 61
                echo "
                ";
                // line 62
                if ((isset($context["display_btn_add"]) ? $context["display_btn_add"] : null)) {
                    // line 63
                    echo "                    <a  href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "generateUrl", [0 => "create", 1 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "getOption", [0 => "link_parameters", 1 => []], "method")], "method"), "html", null, true);
                    echo "\"
                        onclick=\"return start_field_dialog_form_add_";
                    // line 64
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        title=\"";
                    // line 66
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_add"]) ? $context["btn_add"] : null), [], (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                    echo "\"
                        >
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
                    // line 69
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_add"]) ? $context["btn_add"] : null), [], (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                    echo "
                    </a>
                ";
                }
                // line 72
                echo "            </div>
            ";
            }
            // line 74
            echo "
            ";
            // line 75
            if ((((($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit", []) == "list") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "hasRoute", [0 => "delete"], "method")) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "isGranted", [0 => "DELETE"], "method")) && (isset($context["btn_delete"]) ? $context["btn_delete"] : null))) {
                // line 76
                echo "                <a  href=\"\"
                    onclick=\"return remove_selected_element_";
                // line 77
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "(this);\"
                    class=\"btn btn-danger btn-sm sonata-ba-action\"
                    title=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_delete"]) ? $context["btn_delete"] : null), [], (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                echo "\"
                    >
                    <i class=\"fa fa-minus-circle\"></i>
                    ";
                // line 82
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_delete"]) ? $context["btn_delete"] : null), [], (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                echo "
                </a>
            ";
            }
            // line 85
            echo "        </div>

        ";
            // line 87
            $this->loadTemplate("@SonataDoctrineORMAdmin/CRUD/edit_modal.html.twig", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig", 87)->display($context);
            // line 88
            echo "    </div>

    ";
            // line 90
            $this->loadTemplate("@SonataDoctrineORMAdmin/CRUD/edit_orm_many_association_script.html.twig", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig", 90)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 90,  209 => 88,  207 => 87,  203 => 85,  197 => 82,  191 => 79,  186 => 77,  183 => 76,  181 => 75,  178 => 74,  174 => 72,  168 => 69,  162 => 66,  157 => 64,  152 => 63,  150 => 62,  147 => 61,  141 => 58,  135 => 55,  130 => 53,  125 => 52,  123 => 51,  120 => 50,  117 => 49,  114 => 48,  112 => 47,  108 => 46,  105 => 45,  99 => 42,  94 => 41,  88 => 38,  84 => 36,  78 => 33,  75 => 32,  73 => 31,  70 => 30,  68 => 29,  67 => 28,  66 => 27,  65 => 26,  63 => 25,  61 => 24,  56 => 23,  54 => 22,  49 => 21,  39 => 18,  34 => 17,  32 => 16,  27 => 15,  25 => 14,  22 => 13,  19 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/doctrine-orm-admin-bundle/src/Resources/views/CRUD/edit_orm_one_to_one.html.twig");
    }
}
