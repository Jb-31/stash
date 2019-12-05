<?php

/* SonataAdminBundle:CRUD/Association:edit_many_to_one.html.twig */
class __TwigTemplate_f9712462fdae3cf9d4f6b4f85a3a0c338a2425de2e58b0ef9bf91e310e0ce796 extends Twig_Template
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
        // line 12
        if ( !$this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "hasassociationadmin", [])) {
            // line 13
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["value"]) ? $context["value"] : null), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", [])), "html", null, true);
            echo "
";
        } elseif (($this->getAttribute(        // line 14
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit", []) == "inline")) {
            // line 15
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "formfielddescriptions", []));
            foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
                // line 16
                echo "        ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), $this->getAttribute($context["field_description"], "name", []), [], "array"), 'row');
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 19
            echo "    <div id=\"field_container_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" class=\"field-container\">
        ";
            // line 20
            if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit", []) == "list")) {
                // line 21
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\" class=\"field-short-description\">
                ";
                // line 22
                if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin", []), "id", [0 => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "value", [])], "method")) {
                    // line 23
                    echo "                    ";
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_short_object_information", ["code" => $this->getAttribute($this->getAttribute($this->getAttribute(                    // line 24
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "code", []), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute(                    // line 25
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "id", [0 => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "value", [])], "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute(                    // line 26
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "uniqid", []), "linkParameters" => $this->getAttribute($this->getAttribute($this->getAttribute(                    // line 27
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "options", []), "link_parameters", [])]));
                    // line 28
                    echo "
                ";
                } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(                // line 29
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", [], "any", false, true), "options", [], "any", false, true), "placeholder", [], "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "options", []), "placeholder", []))) {
                    // line 30
                    echo "                    <span class=\"inner-field-short-description\">
                        ";
                    // line 31
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "options", []), "placeholder", []), [], "SonataAdminBundle"), "html", null, true);
                    echo "
                    </span>
                ";
                }
                // line 34
                echo "            </span>
            <span style=\"display: none\" >
                ";
                // line 36
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
                echo "
            </span>
        ";
            } else {
                // line 39
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\" >
                ";
                // line 40
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
                echo "
            </span>
        ";
            }
            // line 43
            echo "
        <div id=\"field_actions_";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" class=\"field-actions\">
            ";
            // line 45
            $context["display_btn_list"] = (((($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit", []) == "list") && $this->getAttribute($this->getAttribute($this->getAttribute(            // line 46
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "hasRoute", [0 => "list"], "method")) && $this->getAttribute($this->getAttribute($this->getAttribute(            // line 47
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "hasAccess", [0 => "list"], "method")) &&             // line 48
(isset($context["btn_list"]) ? $context["btn_list"] : null));
            // line 49
            echo "            ";
            $context["display_btn_add"] = (((($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit", []) != "admin") && $this->getAttribute($this->getAttribute($this->getAttribute(            // line 50
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "hasRoute", [0 => "create"], "method")) && $this->getAttribute($this->getAttribute($this->getAttribute(            // line 51
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "hasAccess", [0 => "create"], "method")) &&             // line 52
(isset($context["btn_add"]) ? $context["btn_add"] : null));
            // line 53
            echo "            ";
            if (((isset($context["display_btn_list"]) ? $context["display_btn_list"] : null) || (isset($context["display_btn_add"]) ? $context["display_btn_add"] : null))) {
                // line 54
                echo "            <div class=\"btn-group\">
                ";
                // line 55
                if ((isset($context["display_btn_list"]) ? $context["display_btn_list"] : null)) {
                    // line 56
                    echo "                    <a  href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "generateUrl", [0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "getOption", [0 => "link_parameters", 1 => []], "method")], "method"), "html", null, true);
                    echo "\"
                        onclick=\"return start_field_dialog_form_list_";
                    // line 57
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "(this);\"
                        class=\"btn btn-info btn-sm sonata-ba-action\"
                        title=\"";
                    // line 59
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_list"]) ? $context["btn_list"] : null), [], (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                    echo "\"
                        >
                        <i class=\"fa fa-list\"></i>
                        ";
                    // line 62
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_list"]) ? $context["btn_list"] : null), [], (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                    echo "
                    </a>
                ";
                }
                // line 65
                echo "
                ";
                // line 66
                if ((isset($context["display_btn_add"]) ? $context["display_btn_add"] : null)) {
                    // line 67
                    echo "                    <a  href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "generateUrl", [0 => "create", 1 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "getOption", [0 => "link_parameters", 1 => []], "method")], "method"), "html", null, true);
                    echo "\"
                        onclick=\"return start_field_dialog_form_add_";
                    // line 68
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        title=\"";
                    // line 70
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_add"]) ? $context["btn_add"] : null), [], (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                    echo "\"
                        >
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
                    // line 73
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_add"]) ? $context["btn_add"] : null), [], (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                    echo "
                    </a>
                ";
                }
                // line 76
                echo "            </div>
            ";
            }
            // line 78
            echo "
            ";
            // line 79
            if ((((($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit", []) == "list") && $this->getAttribute($this->getAttribute($this->getAttribute(            // line 80
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "hasRoute", [0 => "delete"], "method")) && $this->getAttribute($this->getAttribute($this->getAttribute(            // line 81
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "hasAccess", [0 => "delete"], "method")) &&             // line 82
(isset($context["btn_delete"]) ? $context["btn_delete"] : null))) {
                // line 83
                echo "                <a  href=\"\"
                    onclick=\"return remove_selected_element_";
                // line 84
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "(this);\"
                    class=\"btn btn-danger btn-sm sonata-ba-action\"
                    title=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_delete"]) ? $context["btn_delete"] : null), [], (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                echo "\"
                    >
                    <i class=\"fa fa-minus-circle\"></i>
                    ";
                // line 89
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_delete"]) ? $context["btn_delete"] : null), [], (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                echo "
                </a>
            ";
            }
            // line 92
            echo "        </div>

        ";
            // line 94
            $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_modal.html.twig", "SonataAdminBundle:CRUD/Association:edit_many_to_one.html.twig", 94)->display($context);
            // line 95
            echo "    </div>

    ";
            // line 97
            $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_many_script.html.twig", "SonataAdminBundle:CRUD/Association:edit_many_to_one.html.twig", 97)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD/Association:edit_many_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 97,  215 => 95,  213 => 94,  209 => 92,  203 => 89,  197 => 86,  192 => 84,  189 => 83,  187 => 82,  186 => 81,  185 => 80,  184 => 79,  181 => 78,  177 => 76,  171 => 73,  165 => 70,  160 => 68,  155 => 67,  153 => 66,  150 => 65,  144 => 62,  138 => 59,  133 => 57,  128 => 56,  126 => 55,  123 => 54,  120 => 53,  118 => 52,  117 => 51,  116 => 50,  114 => 49,  112 => 48,  111 => 47,  110 => 46,  109 => 45,  105 => 44,  102 => 43,  96 => 40,  91 => 39,  85 => 36,  81 => 34,  75 => 31,  72 => 30,  70 => 29,  67 => 28,  65 => 27,  64 => 26,  63 => 25,  62 => 24,  60 => 23,  58 => 22,  53 => 21,  51 => 20,  46 => 19,  36 => 16,  31 => 15,  29 => 14,  24 => 13,  22 => 12,  19 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:CRUD/Association:edit_many_to_one.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/Association/edit_many_to_one.html.twig");
    }
}
