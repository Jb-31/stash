<?php

/* SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_ff31cec8d86966b9967e3610fc1bc6b337c8ef03e85d056cd927ecc74657c318 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("@SonataAdmin/Form/form_admin_fields.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 12);
        $this->blocks = [
            'sonata_admin_orm_one_to_one_widget' => [$this, 'block_sonata_admin_orm_one_to_one_widget'],
            'sonata_admin_orm_many_to_many_widget' => [$this, 'block_sonata_admin_orm_many_to_many_widget'],
            'sonata_admin_orm_many_to_one_widget' => [$this, 'block_sonata_admin_orm_many_to_one_widget'],
            'sonata_admin_orm_one_to_many_widget' => [$this, 'block_sonata_admin_orm_one_to_many_widget'],
            'sonata_type_model_widget' => [$this, 'block_sonata_type_model_widget'],
            'sonata_type_model_list_widget' => [$this, 'block_sonata_type_model_list_widget'],
            'sonata_type_admin_widget' => [$this, 'block_sonata_type_admin_widget'],
            'sonata_type_collection_widget' => [$this, 'block_sonata_type_collection_widget'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@SonataAdmin/Form/form_admin_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_sonata_admin_orm_one_to_one_widget($context, array $blocks = [])
    {
        // line 17
        echo "    ";
        $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_one_to_one.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 17)->display($context);
    }

    // line 20
    public function block_sonata_admin_orm_many_to_many_widget($context, array $blocks = [])
    {
        // line 21
        echo "    ";
        $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_many_to_many.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 21)->display($context);
    }

    // line 24
    public function block_sonata_admin_orm_many_to_one_widget($context, array $blocks = [])
    {
        // line 25
        echo "    ";
        $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_many_to_one.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 25)->display($context);
    }

    // line 28
    public function block_sonata_admin_orm_one_to_many_widget($context, array $blocks = [])
    {
        // line 29
        echo "    ";
        $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_one_to_many.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 29)->display($context);
    }

    // line 32
    public function block_sonata_type_model_widget($context, array $blocks = [])
    {
        // line 33
        echo "    ";
        // line 37
        echo "
    ";
        // line 39
        echo "
    ";
        // line 40
        if (twig_test_empty($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []))) {
            // line 41
            echo "        ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 42
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "mappingtype", []) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_ONE"))) {
            // line 43
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 44
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "mappingtype", []) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_ONE"))) {
            // line 45
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 46
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "mappingtype", []) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY"))) {
            // line 47
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_many_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 48
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "mappingtype", []) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY"))) {
            // line 49
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 51
            echo "        ";
            // line 52
            echo "        ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
    ";
        }
    }

    // line 56
    public function block_sonata_type_model_list_widget($context, array $blocks = [])
    {
        // line 57
        echo "    <div id=\"field_container_";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"field-container\">
        <span id=\"field_widget_";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"field-short-description\">
            ";
        // line 59
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "id", [0 => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "value", [])], "method")) {
            // line 60
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_short_object_information", ["code" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 61
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "code", []), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 62
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "id", [0 => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "value", [])], "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 63
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "uniqid", []), "linkParameters" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 64
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "options", []), "link_parameters", [])]));
            // line 65
            echo "
            ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 66
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", [], "any", false, true), "options", [], "any", false, true), "placeholder", [], "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "options", []), "placeholder", []))) {
            // line 67
            echo "                <span class=\"inner-field-short-description\">
                    ";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "options", []), "placeholder", []), [], "SonataAdminBundle"), "html", null, true);
            echo "
                </span>
            ";
        }
        // line 71
        echo "        </span>
        <span id=\"field_actions_";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"field-actions\">
            <span class=\"btn-group\">
                ";
        // line 74
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "hasroute", [0 => "list"], "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "isGranted", [0 => "LIST"], "method")) && (isset($context["btn_list"]) ? $context["btn_list"] : null))) {
            // line 75
            echo "                    <a  href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "generateUrl", [0 => "list"], "method"), "html", null, true);
            echo "\"
                        onclick=\"return start_field_dialog_form_list_";
            // line 76
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "(this);\"
                        class=\"btn btn-info btn-sm sonata-ba-action\"
                        title=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_list"]) ? $context["btn_list"] : null), [], (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
            echo "\"
                            >
                        <i class=\"fa fa-list\"></i>
                        ";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_list"]) ? $context["btn_list"] : null), [], (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 84
        echo "
                ";
        // line 85
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "hasroute", [0 => "create"], "method") && $this->getAttribute($this->getAttribute($this->getAttribute(        // line 86
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "isGranted", [0 => "CREATE"], "method")) &&         // line 87
(isset($context["btn_add"]) ? $context["btn_add"] : null))) {
            // line 89
            echo "                    <a  href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "generateUrl", [0 => "create"], "method"), "html", null, true);
            echo "\"
                        onclick=\"return start_field_dialog_form_add_";
            // line 90
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        title=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_add"]) ? $context["btn_add"] : null), [], (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
            echo "\"
                            >
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_add"]) ? $context["btn_add"] : null), [], (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 98
        echo "                ";
        if (((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "hasroute", [0 => "edit"], "method") && $this->getAttribute($this->getAttribute($this->getAttribute(        // line 99
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "isGranted", [0 => "EDIT"], "method")) &&         // line 100
(isset($context["btn_edit"]) ? $context["btn_edit"] : null)) && ($this->getAttribute(        // line 101
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "value", []) != null))) {
            // line 103
            echo "                    <a  href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "generateUrl", [0 => "edit", 1 => ["id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "normalizedIdentifier", [0 => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "value", [])], "method")]], "method"), "html", null, true);
            echo "\"
                        onclick=\"return start_field_dialog_form_edit_";
            // line 104
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "(this);\"
                        class=\"btn btn-warning btn-sm sonata-ba-action\"
                        title=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_edit"]) ? $context["btn_edit"] : null), [], (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
            echo "\"
                            >
                        <i class=\"fa fa-pencil\"></i>
                        ";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_edit"]) ? $context["btn_edit"] : null), [], (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 112
        echo "            </span>

            <span class=\"btn-group\">
                ";
        // line 115
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "hasRoute", [0 => "delete"], "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "isGranted", [0 => "DELETE"], "method")) && (isset($context["btn_delete"]) ? $context["btn_delete"] : null))) {
            // line 116
            echo "                    <a  href=\"\"
                        onclick=\"return remove_selected_element_";
            // line 117
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "(this);\"
                        class=\"btn btn-danger btn-sm sonata-ba-action\"
                        title=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_delete"]) ? $context["btn_delete"] : null), [], (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
            echo "\"
                            >
                        <i class=\"fa fa-minus-circle\"></i>
                        ";
            // line 122
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_delete"]) ? $context["btn_delete"] : null), [], (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 125
        echo "            </span>
        </span>

        <span style=\"display: none\" >
            ";
        // line 130
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget', ["required" => false]);
        echo "
        </span>

        ";
        // line 133
        $this->displayBlock("sonata_help", $context, $blocks);
        echo "

        <div class=\"modal fade\" id=\"field_dialog_";
        // line 135
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\"></h4>
                    </div>
                    <div class=\"modal-body\">
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 149
        $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_many_script.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 149)->display($context);
    }

    // line 152
    public function block_sonata_type_admin_widget($context, array $blocks = [])
    {
        // line 153
        echo "    ";
        // line 154
        echo "    ";
        if (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "mappingtype", []) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_ONE"))) {
            // line 155
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 156
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "mappingtype", []) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_ONE"))) {
            // line 157
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 158
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "mappingtype", []) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY"))) {
            // line 159
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_many_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 160
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "mappingtype", []) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY"))) {
            // line 161
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 163
            echo "        INVALID MODE : ";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "
    ";
        }
    }

    // line 167
    public function block_sonata_type_collection_widget($context, array $blocks = [])
    {
        // line 168
        echo "    ";
        if (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "mappingtype", []) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY"))) {
            // line 169
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 170
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "mappingtype", []) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY"))) {
            // line 171
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 173
            echo "        INVALID MODE : ";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo " - type : sonata_type_collection - mapping : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "mappingtype", []), "html", null, true);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 173,  370 => 171,  368 => 170,  363 => 169,  360 => 168,  357 => 167,  349 => 163,  343 => 161,  341 => 160,  336 => 159,  334 => 158,  329 => 157,  327 => 156,  322 => 155,  319 => 154,  317 => 153,  314 => 152,  310 => 149,  293 => 135,  288 => 133,  281 => 130,  275 => 125,  269 => 122,  263 => 119,  258 => 117,  255 => 116,  253 => 115,  248 => 112,  242 => 109,  236 => 106,  231 => 104,  226 => 103,  224 => 101,  223 => 100,  222 => 99,  220 => 98,  214 => 95,  208 => 92,  203 => 90,  198 => 89,  196 => 87,  195 => 86,  194 => 85,  191 => 84,  185 => 81,  179 => 78,  174 => 76,  169 => 75,  167 => 74,  162 => 72,  159 => 71,  153 => 68,  150 => 67,  148 => 66,  145 => 65,  143 => 64,  142 => 63,  141 => 62,  140 => 61,  138 => 60,  136 => 59,  132 => 58,  127 => 57,  124 => 56,  116 => 52,  114 => 51,  108 => 49,  106 => 48,  101 => 47,  99 => 46,  94 => 45,  92 => 44,  87 => 43,  85 => 42,  80 => 41,  78 => 40,  75 => 39,  72 => 37,  70 => 33,  67 => 32,  62 => 29,  59 => 28,  54 => 25,  51 => 24,  46 => 21,  43 => 20,  38 => 17,  35 => 16,  11 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/doctrine-orm-admin-bundle/src/Resources/views/Form/form_admin_fields.html.twig");
    }
}
