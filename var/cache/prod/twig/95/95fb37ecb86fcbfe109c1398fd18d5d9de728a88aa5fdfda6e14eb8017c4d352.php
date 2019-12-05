<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_many.html.twig */
class __TwigTemplate_d684bb41741ecd753f029c2ea265461cfe1a9977a25bd350249fa0bee8937ead extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "hasassociationadmin", [])) {
            // line 15
            echo "    <div id=\"field_container_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" class=\"field-container\">
        <span id=\"field_widget_";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" >
            ";
            // line 17
            if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit", []) == "inline")) {
                // line 18
                echo "                ";
                if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "inline", []) == "table")) {
                    // line 19
                    echo "                    ";
                    if ((twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", [])) > 0)) {
                        // line 20
                        echo "                        <table class=\"table table-bordered\">
                            <thead>
                                <tr>
                                    ";
                        // line 23
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", []), 0, [], "array"), "children", []));
                        foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                            // line 24
                            echo "                                        ";
                            if (($context["field_name"] == "_delete")) {
                                // line 25
                                echo "                                            <th>";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action_delete", [], "SonataAdminBundle"), "html", null, true);
                                echo "</th>
                                        ";
                            } else {
                                // line 27
                                echo "                                            <th ";
                                echo (($this->getAttribute($this->getAttribute($context["nested_field"], "vars", []), "required", [], "array")) ? ("class=\"required\"") : (""));
                                echo ">
                                                ";
                                // line 28
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["nested_field"], "vars", []), "sonata_admin", [], "array"), "admin", []), "trans", [0 => $this->getAttribute($this->getAttribute($context["nested_field"], "vars", []), "label", [])], "method"), "html", null, true);
                                echo "
                                            </th>
                                        ";
                            }
                            // line 31
                            echo "                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 32
                        echo "                                </tr>
                            </thead>
                            <tbody class=\"sonata-ba-tbody\">
                                ";
                        // line 35
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", []));
                        foreach ($context['_seq'] as $context["nested_group_field_name"] => $context["nested_group_field"]) {
                            // line 36
                            echo "                                    <tr>
                                        ";
                            // line 37
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["nested_group_field"], "children", []));
                            foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                                // line 38
                                echo "                                            <td class=\"sonata-ba-td-";
                                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                                echo "-";
                                echo twig_escape_filter($this->env, $context["field_name"], "html", null, true);
                                echo " control-group";
                                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["nested_field"], "vars", []), "errors", [])) > 0)) {
                                    echo " error sonata-ba-field-error";
                                }
                                echo "\">
                                                ";
                                // line 39
                                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", [], "any", false, true), "associationadmin", [], "any", false, true), "hasformfielddescriptions", [0 => $context["field_name"]], "method", true, true)) {
                                    // line 40
                                    echo "                                                    ";
                                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["nested_field"], 'widget');
                                    echo "

                                                    ";
                                    // line 42
                                    $context["dummy"] = $this->getAttribute($context["nested_group_field"], "setrendered", []);
                                    // line 43
                                    echo "                                                ";
                                } else {
                                    // line 44
                                    echo "                                                    ";
                                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["nested_field"], 'widget');
                                    echo "
                                                ";
                                }
                                // line 46
                                echo "                                                ";
                                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["nested_field"], "vars", []), "errors", [])) > 0)) {
                                    // line 47
                                    echo "                                                    <div class=\"help-inline sonata-ba-field-error-messages\">
                                                        ";
                                    // line 48
                                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["nested_field"], 'errors');
                                    echo "
                                                    </div>
                                                ";
                                }
                                // line 51
                                echo "                                            </td>
                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 53
                            echo "                                    </tr>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['nested_group_field_name'], $context['nested_group_field'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 55
                        echo "                            </tbody>
                        </table>
                    ";
                    }
                    // line 58
                    echo "                ";
                } elseif ((twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", [])) > 0)) {
                    // line 59
                    echo "                    <div>
                        ";
                    // line 60
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", []));
                    foreach ($context['_seq'] as $context["nested_group_field_name"] => $context["nested_group_field"]) {
                        // line 61
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["nested_group_field"], "children", []));
                        foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                            // line 62
                            echo "                                ";
                            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", [], "any", false, true), "associationadmin", [], "any", false, true), "hasformfielddescriptions", [0 => $context["field_name"]], "method", true, true)) {
                                // line 63
                                echo "                                    ";
                                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["nested_field"], 'row', ["inline" => "natural", "edit" => "inline"]);
                                // line 66
                                echo "
                                    ";
                                // line 67
                                $context["dummy"] = $this->getAttribute($context["nested_group_field"], "setrendered", []);
                                // line 68
                                echo "                                ";
                            } else {
                                // line 69
                                echo "                                    ";
                                if (($this->getAttribute($this->getAttribute($context["nested_field"], "vars", []), "name", []) == "_delete")) {
                                    // line 70
                                    echo "                                        ";
                                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["nested_field"], 'row', ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action_delete", [], "SonataAdminBundle")]);
                                    echo "
                                    ";
                                } else {
                                    // line 72
                                    echo "                                        ";
                                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["nested_field"], 'row');
                                    echo "
                                    ";
                                }
                                // line 74
                                echo "                                ";
                            }
                            // line 75
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 76
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['nested_group_field_name'], $context['nested_group_field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 77
                    echo "                    </div>
                ";
                }
                // line 79
                echo "            ";
            } else {
                // line 80
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
                echo "
            ";
            }
            // line 82
            echo "
        </span>

        ";
            // line 85
            if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit", []) == "inline")) {
                // line 86
                echo "
            ";
                // line 87
                if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "hasroute", [0 => "create"], "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "isGranted", [0 => "CREATE"], "method")) && (isset($context["btn_add"]) ? $context["btn_add"] : null))) {
                    // line 88
                    echo "                <span id=\"field_actions_";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "\" >
                    <a
                        href=\"";
                    // line 90
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "generateUrl", [0 => "create", 1 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "getOption", [0 => "link_parameters", 1 => []], "method")], "method"), "html", null, true);
                    echo "\"
                        onclick=\"return start_field_retrieve_";
                    // line 91
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        title=\"";
                    // line 93
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_add"]) ? $context["btn_add"] : null), [], (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                    echo "\"
                        >
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
                    // line 96
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_add"]) ? $context["btn_add"] : null), [], (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                    echo "
                    </a>
                </span>
            ";
                }
                // line 100
                echo "
            ";
                // line 102
                echo "            ";
                $this->loadTemplate("@SonataDoctrineORMAdmin/CRUD/edit_orm_one_association_script.html.twig", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_many.html.twig", 102)->display($context);
                // line 103
                echo "
        ";
            } else {
                // line 105
                echo "            <div id=\"field_container_";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\" class=\"field-container\">
                <span id=\"field_widget_";
                // line 106
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\" >
                    ";
                // line 107
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
                echo "
                </span>

                <span id=\"field_actions_";
                // line 110
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\" class=\"field-actions\">
                    ";
                // line 111
                if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "hasRoute", [0 => "create"], "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "isGranted", [0 => "CREATE"], "method")) && (isset($context["btn_add"]) ? $context["btn_add"] : null))) {
                    // line 112
                    echo "                        <a
                            href=\"";
                    // line 113
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "generateUrl", [0 => "create", 1 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "getOption", [0 => "link_parameters", 1 => []], "method")], "method"), "html", null, true);
                    echo "\"
                            onclick=\"return start_field_dialog_form_add_";
                    // line 114
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "(this);\"
                            class=\"btn btn-success btn-sm sonata-ba-action\"
                            title=\"";
                    // line 116
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_add"]) ? $context["btn_add"] : null), [], (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                    echo "\"
                            >
                            <i class=\"fa fa-plus-circle\"></i>
                            ";
                    // line 119
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_add"]) ? $context["btn_add"] : null), [], (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                    echo "
                        </a>
                    ";
                }
                // line 122
                echo "                </span>

                ";
                // line 124
                $this->loadTemplate("@SonataDoctrineORMAdmin/CRUD/edit_modal.html.twig", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_many.html.twig", 124)->display($context);
                // line 125
                echo "            </div>

            ";
                // line 127
                $this->loadTemplate("@SonataDoctrineORMAdmin/CRUD/edit_orm_many_association_script.html.twig", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_many.html.twig", 127)->display($context);
                // line 128
                echo "        ";
            }
            // line 129
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 129,  335 => 128,  333 => 127,  329 => 125,  327 => 124,  323 => 122,  317 => 119,  311 => 116,  306 => 114,  302 => 113,  299 => 112,  297 => 111,  293 => 110,  287 => 107,  283 => 106,  278 => 105,  274 => 103,  271 => 102,  268 => 100,  261 => 96,  255 => 93,  250 => 91,  246 => 90,  240 => 88,  238 => 87,  235 => 86,  233 => 85,  228 => 82,  222 => 80,  219 => 79,  215 => 77,  209 => 76,  203 => 75,  200 => 74,  194 => 72,  188 => 70,  185 => 69,  182 => 68,  180 => 67,  177 => 66,  174 => 63,  171 => 62,  166 => 61,  162 => 60,  159 => 59,  156 => 58,  151 => 55,  144 => 53,  137 => 51,  131 => 48,  128 => 47,  125 => 46,  119 => 44,  116 => 43,  114 => 42,  108 => 40,  106 => 39,  95 => 38,  91 => 37,  88 => 36,  84 => 35,  79 => 32,  73 => 31,  67 => 28,  62 => 27,  56 => 25,  53 => 24,  49 => 23,  44 => 20,  41 => 19,  38 => 18,  36 => 17,  32 => 16,  27 => 15,  25 => 14,  22 => 13,  19 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_many.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/doctrine-orm-admin-bundle/src/Resources/views/CRUD/edit_orm_many_to_many.html.twig");
    }
}
