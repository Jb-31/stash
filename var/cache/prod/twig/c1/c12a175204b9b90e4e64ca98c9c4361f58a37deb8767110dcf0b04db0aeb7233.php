<?php

/* @SonataAdmin/CRUD/base_list.html.twig */
class __TwigTemplate_2d6269035a82addefcb62ef1f82b249d5b0faee8fbbb45c886fffc6e20fa89b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'actions' => [$this, 'block_actions'],
            'tab_menu' => [$this, 'block_tab_menu'],
            'title' => [$this, 'block_title'],
            'navbar_title' => [$this, 'block_navbar_title'],
            'list_table' => [$this, 'block_list_table'],
            'list_header' => [$this, 'block_list_header'],
            'table_header' => [$this, 'block_table_header'],
            'table_body' => [$this, 'block_table_body'],
            'table_footer' => [$this, 'block_table_footer'],
            'no_result_content' => [$this, 'block_no_result_content'],
            'list_footer' => [$this, 'block_list_footer'],
            'batch' => [$this, 'block_batch'],
            'batch_javascript' => [$this, 'block_batch_javascript'],
            'batch_actions' => [$this, 'block_batch_actions'],
            'pager_results' => [$this, 'block_pager_results'],
            'pager_links' => [$this, 'block_pager_links'],
            'list_filters_actions' => [$this, 'block_list_filters_actions'],
            'list_filters' => [$this, 'block_list_filters'],
            'sonata_list_filter_group_class' => [$this, 'block_sonata_list_filter_group_class'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : null), "@SonataAdmin/CRUD/base_list.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = [])
    {
        // line 15
        $this->loadTemplate("@SonataAdmin/CRUD/action_buttons.html.twig", "@SonataAdmin/CRUD/base_list.html.twig", 15)->display($context);
    }

    // line 18
    public function block_tab_menu($context, array $blocks = [])
    {
        // line 19
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "sidemenu", [0 => (isset($context["action"]) ? $context["action"] : null)], "method"), ["currentClass" => "active", "template" => $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension')->getGlobalTemplate("tab_menu_template")], "twig");
    }

    // line 25
    public function block_title($context, array $blocks = [])
    {
        // line 26
        echo "    ";
        // line 30
        echo "
    ";
        // line 31
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isChild", []) && $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "parent", []), "subject", []))) {
            // line 32
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", ["%name%" => twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "parent", []), "toString", [0 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "parent", []), "subject", [])], "method"), 15)], "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
    }

    // line 36
    public function block_navbar_title($context, array $blocks = [])
    {
        // line 37
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
    }

    // line 40
    public function block_list_table($context, array $blocks = [])
    {
        // line 41
        echo "    <div class=\"col-xs-12 col-md-12\">
        ";
        // line 42
        $context["batchactions"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "batchactions", []);
        // line 43
        echo "        ";
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", [0 => "batch"], "method") && twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : null)))) {
            // line 44
            echo "            <form action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", [0 => "batch", 1 => ["filter" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "filterParameters", [])]], "method"), "html", null, true);
            echo "\" method=\"POST\" >
            <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
            // line 45
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
            echo "\">
        ";
        }
        // line 47
        echo "
        ";
        // line 49
        echo "        <div class=\"box box-primary\" ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", []), "pager", []), "lastPage", []) == 1)) {
            echo "style=\"margin-bottom: 100px;\"";
        }
        echo ">
            <div class=\"box-body ";
        // line 50
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", []), "results", [])) > 0)) {
            echo "table-responsive no-padding";
        }
        echo "\">
                ";
        // line 51
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), ["sonata.admin.list.table.top", ["admin" => (isset($context["admin"]) ? $context["admin"] : null)]]);
        echo "

                ";
        // line 53
        $this->displayBlock('list_header', $context, $blocks);
        // line 54
        echo "
                ";
        // line 55
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", []), "results", [])) > 0)) {
            // line 56
            echo "                    <table class=\"table table-bordered table-striped table-hover sonata-ba-list\">
                        ";
            // line 57
            $this->displayBlock('table_header', $context, $blocks);
            // line 96
            echo "
                        ";
            // line 97
            $this->displayBlock('table_body', $context, $blocks);
            // line 102
            echo "
                        ";
            // line 103
            $this->displayBlock('table_footer', $context, $blocks);
            // line 105
            echo "                    </table>
                ";
        } else {
            // line 107
            echo "                    ";
            $this->displayBlock('no_result_content', $context, $blocks);
            // line 125
            echo "                ";
        }
        // line 126
        echo "
                ";
        // line 127
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), ["sonata.admin.list.table.bottom", ["admin" => (isset($context["admin"]) ? $context["admin"] : null)]]);
        echo "
            </div>
            ";
        // line 129
        $this->displayBlock('list_footer', $context, $blocks);
        // line 230
        echo "        </div>
        ";
        // line 231
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", [0 => "batch"], "method") && twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : null)))) {
            // line 232
            echo "            </form>
        ";
        }
        // line 234
        echo "    </div>
";
    }

    // line 53
    public function block_list_header($context, array $blocks = [])
    {
    }

    // line 57
    public function block_table_header($context, array $blocks = [])
    {
        // line 58
        echo "                            <thead>
                                <tr class=\"sonata-ba-list-field-header\">
                                    ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list", []), "elements", []));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 61
            echo "                                        ";
            if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", [0 => "batch"], "method") && ($this->getAttribute($context["field_description"], "getOption", [0 => "code"], "method") == "_batch")) && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : null)) > 0))) {
                // line 62
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                              <input type=\"checkbox\" id=\"list_batch_checkbox\">
                                            </th>
                                        ";
            } elseif (($this->getAttribute(            // line 65
$context["field_description"], "getOption", [0 => "code"], "method") == "_select")) {
                // line 66
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                        ";
            } elseif ((($this->getAttribute(            // line 67
$context["field_description"], "name", []) == "_action") && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "isXmlHttpRequest", []))) {
                // line 68
                echo "                                            ";
                // line 69
                echo "                                        ";
            } elseif ((($this->getAttribute($context["field_description"], "getOption", [0 => "ajax_hidden"], "method") == true) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "isXmlHttpRequest", []))) {
                // line 70
                echo "                                            ";
                // line 71
                echo "                                        ";
            } else {
                // line 72
                echo "                                            ";
                $context["sortable"] = false;
                // line 73
                echo "                                            ";
                if (($this->getAttribute($this->getAttribute($context["field_description"], "options", [], "any", false, true), "sortable", [], "any", true, true) && $this->getAttribute($this->getAttribute($context["field_description"], "options", []), "sortable", []))) {
                    // line 74
                    echo "                                                ";
                    $context["sortable"] = true;
                    // line 75
                    echo "                                                ";
                    $context["sort_parameters"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager", []), "sortparameters", [0 => $context["field_description"], 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", [])], "method");
                    // line 76
                    echo "                                                ";
                    $context["current"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", []), "values", []), "_sort_by", []) == $context["field_description"]) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", []), "values", []), "_sort_by", []), "name", []) == $this->getAttribute($this->getAttribute((isset($context["sort_parameters"]) ? $context["sort_parameters"] : null), "filter", []), "_sort_by", [])));
                    // line 77
                    echo "                                                ";
                    $context["sort_active_class"] = (((isset($context["current"]) ? $context["current"] : null)) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 78
                    echo "                                                ";
                    $context["sort_by"] = (((isset($context["current"]) ? $context["current"] : null)) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", []), "values", []), "_sort_order", [])) : ($this->getAttribute($this->getAttribute($context["field_description"], "options", []), "_sort_order", [])));
                    // line 79
                    echo "                                            ";
                }
                // line 80
                echo "
                                            ";
                // line 81
                ob_start();
                // line 82
                echo "                                                <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field_description"], "type", []), "html", null, true);
                echo " ";
                if ((isset($context["sortable"]) ? $context["sortable"] : null)) {
                    echo " sonata-ba-list-field-header-order-";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["sort_by"]) ? $context["sort_by"] : null)), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["sort_active_class"]) ? $context["sort_active_class"] : null), "html", null, true);
                }
                if ($this->getAttribute($this->getAttribute($context["field_description"], "options", [], "any", false, true), "header_class", [], "any", true, true)) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field_description"], "options", []), "header_class", []), "html", null, true);
                }
                echo "\"";
                if ($this->getAttribute($this->getAttribute($context["field_description"], "options", [], "any", false, true), "header_style", [], "any", true, true)) {
                    echo " style=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field_description"], "options", []), "header_style", []), "html", null, true);
                    echo "\"";
                }
                echo ">
                                                    ";
                // line 83
                if ((isset($context["sortable"]) ? $context["sortable"] : null)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", [0 => "list", 1 => twig_array_merge((isset($context["sort_parameters"]) ? $context["sort_parameters"] : null), ["_list_mode" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getListMode", [], "method")])], "method"), "html", null, true);
                    echo "\">";
                }
                // line 84
                echo "                                                    ";
                if ($this->getAttribute($context["field_description"], "getOption", [0 => "label_icon"], "method")) {
                    // line 85
                    echo "                                                        <i class=\"sonata-ba-list-field-header-label-icon ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field_description"], "getOption", [0 => "label_icon"], "method"), "html", null, true);
                    echo "\" aria-hidden=\"true\"></i>
                                                    ";
                }
                // line 87
                echo "                                                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["field_description"], "label", []), [], $this->getAttribute($context["field_description"], "translationDomain", [])), "html", null, true);
                echo "
                                                    ";
                // line 88
                if ((isset($context["sortable"]) ? $context["sortable"] : null)) {
                    echo "</a>";
                }
                // line 89
                echo "                                                </th>
                                            ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 91
                echo "                                        ";
            }
            // line 92
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "                                </tr>
                            </thead>
                        ";
    }

    // line 97
    public function block_table_body($context, array $blocks = [])
    {
        // line 98
        echo "                            <tbody>
                                ";
        // line 99
        $this->loadTemplate($this->env->getExtension('Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension')->getAdminTemplate(("outer_list_rows_" . $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getListMode", [], "method")), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "code", [])), "@SonataAdmin/CRUD/base_list.html.twig", 99)->display($context);
        // line 100
        echo "                            </tbody>
                        ";
    }

    // line 103
    public function block_table_footer($context, array $blocks = [])
    {
        // line 104
        echo "                        ";
    }

    // line 107
    public function block_no_result_content($context, array $blocks = [])
    {
        // line 108
        echo "                        <div class=\"info-box\">
                            <span class=\"info-box-icon bg-aqua\"><i class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"></i></span>
                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_result", [], "SonataAdminBundle"), "html", null, true);
        echo "</span>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: 0%\"></div>
                                </div>
                                <span class=\"progress-description\">
                                    ";
        // line 116
        if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "xmlHttpRequest", [])) {
            // line 117
            echo "                                    <ul class=\"list-unstyled\">
                                        ";
            // line 118
            $this->loadTemplate($this->env->getExtension('Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension')->getAdminTemplate("button_create", $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "code", [])), "@SonataAdmin/CRUD/base_list.html.twig", 118)->display($context);
            // line 119
            echo "                                    </ul>
                                    ";
        }
        // line 121
        echo "                                </span>
                            </div><!-- /.info-box-content -->
                        </div>
                    ";
    }

    // line 129
    public function block_list_footer($context, array $blocks = [])
    {
        // line 130
        echo "                ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", []), "results", [])) > 0)) {
            // line 131
            echo "                    <div class=\"box-footer\">
                        <div class=\"form-inline clearfix\">
                            ";
            // line 133
            if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "isXmlHttpRequest", [])) {
                // line 134
                echo "                                <div class=\"pull-left\">
                                    ";
                // line 135
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", [0 => "batch"], "method") && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : null)) > 0))) {
                    // line 136
                    echo "                                        ";
                    $this->displayBlock('batch', $context, $blocks);
                    // line 184
                    echo "                                    ";
                }
                // line 185
                echo "                                </div>


                                ";
                // line 189
                echo "                                ";
                $context["export_formats"] = (((isset($context["export_formats"]) || array_key_exists("export_formats", $context))) ? (_twig_default_filter((isset($context["export_formats"]) ? $context["export_formats"] : null), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "exportFormats", []))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "exportFormats", [])));
                // line 190
                echo "
                                <div class=\"pull-right\">
                                    ";
                // line 192
                if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", [0 => "export"], "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasAccess", [0 => "export"], "method")) && twig_length_filter($this->env, (isset($context["export_formats"]) ? $context["export_formats"] : null)))) {
                    // line 193
                    echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                                <i class=\"fa fa-share-square-o\" aria-hidden=\"true\"></i>
                                                ";
                    // line 196
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_export_download", [], "SonataAdminBundle"), "html", null, true);
                    echo "
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\">
                                                ";
                    // line 200
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["export_formats"]) ? $context["export_formats"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                        // line 201
                        echo "                                                <li>
                                                    <a href=\"";
                        // line 202
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", [0 => "export", 1 => ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager", []), "paginationparameters", [0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", []), 1 => 0], "method") + ["format" => $context["format"]])], "method"), "html", null, true);
                        echo "\">
                                                        <i class=\"fa fa-arrow-circle-o-down\" aria-hidden=\"true\"></i>
                                                        ";
                        // line 204
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("export_format_" . $context["format"]), [], "SonataAdminBundle"), "html", null, true);
                        echo "
                                                    </a>
                                                </li>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 208
                    echo "                                            </ul>
                                        </div>

                                        &nbsp;-&nbsp;
                                    ";
                }
                // line 213
                echo "
                                    ";
                // line 214
                $this->displayBlock('pager_results', $context, $blocks);
                // line 217
                echo "                                </div>
                            ";
            }
            // line 219
            echo "                        </div>

                        ";
            // line 221
            $this->displayBlock('pager_links', $context, $blocks);
            // line 227
            echo "                    </div>
                ";
        }
        // line 229
        echo "            ";
    }

    // line 136
    public function block_batch($context, array $blocks = [])
    {
        // line 137
        echo "                                            <script>
                                                ";
        // line 138
        $this->displayBlock('batch_javascript', $context, $blocks);
        // line 166
        echo "                                            </script>

                                        ";
        // line 168
        $this->displayBlock('batch_actions', $context, $blocks);
        // line 181
        echo "
                                            <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_batch", [], "SonataAdminBundle"), "html", null, true);
        echo "\">
                                        ";
    }

    // line 138
    public function block_batch_javascript($context, array $blocks = [])
    {
        // line 139
        echo "                                                    jQuery(document).ready(function (\$) {
                                                        // Toggle individual checkboxes when the batch checkbox is changed
                                                        \$('#list_batch_checkbox').on('ifChanged change', function () {
                                                            var checkboxes = \$(this)
                                                                .closest('table')
                                                                .find('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            ;

                                                            if (Admin.get_config('USE_ICHECK')) {
                                                                checkboxes.iCheck(\$(this).is(':checked') ? 'check' : 'uncheck');
                                                            } else {
                                                                checkboxes.prop('checked', this.checked);
                                                            }
                                                        });

                                                        // Add a CSS class to rows when they are selected
                                                        \$('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            .on('ifChanged change', function () {
                                                                \$(this)
                                                                    .closest('tr, div.sonata-ba-list-field-batch')
                                                                    .toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'))
                                                                ;
                                                            })
                                                            .trigger('ifChanged')
                                                        ;
                                                    });
                                                ";
    }

    // line 168
    public function block_batch_actions($context, array $blocks = [])
    {
        // line 169
        echo "                                            <label class=\"checkbox\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid", []), "html", null, true);
        echo "_all_elements\">
                                                <input type=\"checkbox\" name=\"all_elements\" id=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid", []), "html", null, true);
        echo "_all_elements\">
                                                ";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("all_elements", [], "SonataAdminBundle"), "html", null, true);
        echo "
                                                (";
        // line 172
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", []), "pager", []), "nbresults", []), "html", null, true);
        echo ")
                                            </label>

                                            <select name=\"action\" style=\"width: auto; height: auto\" class=\"form-control\">
                                                ";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["batchactions"]) ? $context["batchactions"] : null));
        foreach ($context['_seq'] as $context["action"] => $context["options"]) {
            // line 177
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["action"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["options"], "label", []), [], (($this->getAttribute($context["options"], "translation_domain", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["options"], "translation_domain", []), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "translationDomain", []))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "translationDomain", [])))), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['action'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "                                            </select>
                                        ";
    }

    // line 214
    public function block_pager_results($context, array $blocks = [])
    {
        // line 215
        echo "                                        ";
        $this->loadTemplate($this->env->getExtension('Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension')->getAdminTemplate("pager_results", $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "code", [])), "@SonataAdmin/CRUD/base_list.html.twig", 215)->display($context);
        // line 216
        echo "                                    ";
    }

    // line 221
    public function block_pager_links($context, array $blocks = [])
    {
        // line 222
        echo "                            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", []), "pager", []), "haveToPaginate", [], "method")) {
            // line 223
            echo "                                <hr/>
                                ";
            // line 224
            $this->loadTemplate($this->env->getExtension('Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension')->getAdminTemplate("pager_links", $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "code", [])), "@SonataAdmin/CRUD/base_list.html.twig", 224)->display($context);
            // line 225
            echo "                            ";
        }
        // line 226
        echo "                        ";
    }

    // line 237
    public function block_list_filters_actions($context, array $blocks = [])
    {
        // line 238
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", []), "filters", []))) {
            // line 239
            echo "        <ul class=\"nav navbar-nav navbar-right\">

            <li class=\"dropdown sonata-actions\">
                <a href=\"#\" class=\"dropdown-toggle sonata-ba-action\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-filter\" aria-hidden=\"true\"></i>
                    ";
            // line 244
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_filters", [], "SonataAdminBundle"), "html", null, true);
            echo "
                    <span class=\"badge sonata-filter-count\"></span>
                    <b class=\"caret\"></b>
                </a>

                <ul class=\"dropdown-menu\" role=\"menu\">
                    ";
            // line 250
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", []), "filters", []));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                if ((($this->getAttribute($this->getAttribute($context["filter"], "options", []), "show_filter", [], "array") === true) || (null === $this->getAttribute($this->getAttribute($context["filter"], "options", []), "show_filter", [], "array")))) {
                    // line 251
                    echo "                        ";
                    $context["filterActive"] = (($this->getAttribute($context["filter"], "isActive", [], "method") || $this->getAttribute($this->getAttribute($context["filter"], "options", []), "show_filter", [], "array")) &&  !$this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isDefaultFilter", [0 => $this->getAttribute($context["filter"], "formName", [])], "method"));
                    // line 252
                    echo "                        <li>
                            <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                    // line 253
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid", []), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "name", []), "html", null, true);
                    echo "\" filter-container=\"filter-container-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid", [], "method"), "html", null, true);
                    echo "\">
                                <i class=\"fa ";
                    // line 254
                    echo ((($this->getAttribute($context["filter"], "isActive", [], "method") || $this->getAttribute($this->getAttribute($context["filter"], "options", []), "show_filter", [], "array"))) ? ("fa-check-square-o") : ("fa-square-o"));
                    echo "\"></i>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["filter"], "label", []), [], (($this->getAttribute($context["filter"], "translationDomain", [])) ? ($this->getAttribute($context["filter"], "translationDomain", [])) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "translationDomain", [])))), "html", null, true);
                    echo "
                            </a>
                        </li>
                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 258
            echo "                </ul>
            </li>
        </ul>
    ";
        }
    }

    // line 264
    public function block_list_filters($context, array $blocks = [])
    {
        // line 265
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", []), "filters", [])) {
            // line 266
            echo "        ";
            $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : null), [0 => $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension')->getAdminTemplate("filter", $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "code", []))]);
            // line 267
            echo "
        <div class=\"col-xs-12 col-md-12 sonata-filters-box\" style=\"display: ";
            // line 268
            echo (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", []), "hasDisplayableFilters", [])) ? ("block") : ("none"));
            echo "\" id=\"filter-container-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid", [], "method"), "html", null, true);
            echo "\">
            <div class=\"box box-primary\" >
                <div class=\"box-body\">
                    <form class=\"sonata-filter-form form-horizontal ";
            // line 271
            echo ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isChild", []) && (1 == twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", []), "filters", []))))) ? ("hide") : (""));
            echo "\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", [0 => "list"], "method"), "html", null, true);
            echo "\" method=\"GET\" role=\"form\">
                        ";
            // line 272
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            echo "

                        <div class=\"row\">
                            <div class=\"col-sm-9\">
                                ";
            // line 276
            $context["withAdvancedFilter"] = false;
            // line 277
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", []), "filters", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 278
                echo "                                    ";
                $context["filterActive"] = ((($this->getAttribute($context["filter"], "isActive", [], "method") && (null === $this->getAttribute($this->getAttribute($context["filter"], "options", []), "show_filter", [], "array"))) || ($this->getAttribute($this->getAttribute($context["filter"], "options", []), "show_filter", [], "array") === true)) &&  !$this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isDefaultFilter", [0 => $this->getAttribute($context["filter"], "formName", [])], "method"));
                // line 279
                echo "                                    ";
                $context["filterVisible"] = (($this->getAttribute($this->getAttribute($context["filter"], "options", []), "show_filter", [], "array") === true) || (null === $this->getAttribute($this->getAttribute($context["filter"], "options", []), "show_filter", [], "array")));
                // line 280
                echo "                                    <div class=\"form-group ";
                $this->displayBlock('sonata_list_filter_group_class', $context, $blocks);
                echo "\" id=\"filter-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid", []), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "name", []), "html", null, true);
                echo "\" sonata-filter=\"";
                echo (((isset($context["filterVisible"]) ? $context["filterVisible"] : null)) ? ("true") : ("false"));
                echo "\" style=\"display: ";
                if ((isset($context["filterActive"]) ? $context["filterActive"] : null)) {
                    echo "block";
                } else {
                    echo "none";
                }
                echo "\">
                                        ";
                // line 281
                if ( !($this->getAttribute($context["filter"], "label", []) === false)) {
                    // line 282
                    echo "                                            <label for=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), $this->getAttribute($context["filter"], "formName", []), [], "array"), "children", []), "value", [], "array"), "vars", []), "id", []), "html", null, true);
                    echo "\" class=\"col-sm-3 control-label\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["filter"], "label", []), [], (($this->getAttribute($context["filter"], "translationDomain", [])) ? ($this->getAttribute($context["filter"], "translationDomain", [])) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "translationDomain", [])))), "html", null, true);
                    echo "</label>
                                        ";
                }
                // line 284
                echo "                                        ";
                $context["attr"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), $this->getAttribute($context["filter"], "formName", []), [], "array", false, true), "children", [], "any", false, true), "type", [], "array", false, true), "vars", [], "any", false, true), "attr", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), $this->getAttribute($context["filter"], "formName", []), [], "array", false, true), "children", [], "any", false, true), "type", [], "array", false, true), "vars", [], "any", false, true), "attr", []), [])) : ([]));
                // line 285
                echo "
                                        <div class=\"col-sm-4 advanced-filter\">
                                            ";
                // line 287
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), $this->getAttribute($context["filter"], "formName", []), [], "array"), "children", []), "type", [], "array"), 'widget', ["attr" => (isset($context["attr"]) ? $context["attr"] : null)]);
                echo "
                                        </div>

                                        <div class=\"col-sm-4\">
                                            ";
                // line 291
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), $this->getAttribute($context["filter"], "formName", []), [], "array"), "children", []), "value", [], "array"), 'widget');
                echo "
                                        </div>

                                        <div class=\"col-sm-1\">
                                            <label class=\"control-label\">
                                                <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                // line 296
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid", []), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "name", []), "html", null, true);
                echo "\" filter-container=\"filter-container-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid", [], "method"), "html", null, true);
                echo "\">
                                                    <i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i>
                                                </a>
                                            </label>
                                        </div>
                                    </div>

                                    ";
                // line 303
                if ($this->getAttribute($this->getAttribute($context["filter"], "options", []), "advanced_filter", [], "array")) {
                    // line 304
                    echo "                                        ";
                    $context["withAdvancedFilter"] = true;
                    // line 305
                    echo "                                    ";
                }
                // line 306
                echo "                                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 307
            echo "                            </div>
                            <div class=\"col-sm-3 text-center\">
                                <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\">

                                ";
            // line 311
            $context["foo"] = $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_page", [], "array"), "setRendered", [], "method");
            // line 312
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
            echo "

                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        <i class=\"fa fa-filter\" aria-hidden=\"true\"></i> ";
            // line 316
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_filter", [], "SonataAdminBundle"), "html", null, true);
            echo "
                                    </button>

                                    <a class=\"btn btn-default\" href=\"";
            // line 319
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", [0 => "list", 1 => ["filters" => "reset"]], "method"), "html", null, true);
            echo "\">
                                        ";
            // line 320
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_reset_filter", [], "SonataAdminBundle"), "html", null, true);
            echo "
                                    </a>
                                </div>

                                ";
            // line 324
            if ((isset($context["withAdvancedFilter"]) ? $context["withAdvancedFilter"] : null)) {
                // line 325
                echo "                                    <div class=\"form-group\">
                                        <a href=\"#\" data-toggle=\"advanced-filter\">
                                            <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i>
                                            ";
                // line 328
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_advanced_filters", [], "SonataAdminBundle"), "html", null, true);
                echo "
                                        </a>
                                    </div>
                                ";
            }
            // line 332
            echo "                            </div>
                        </div>

                        ";
            // line 335
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "persistentParameters", []));
            foreach ($context['_seq'] as $context["paramKey"] => $context["paramValue"]) {
                // line 336
                echo "                            <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, $context["paramKey"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["paramValue"], "html", null, true);
                echo "\">
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['paramKey'], $context['paramValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 338
            echo "                    </form>
                </div>
            </div>
        </div>
    ";
        }
    }

    // line 280
    public function block_sonata_list_filter_group_class($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  883 => 280,  874 => 338,  863 => 336,  859 => 335,  854 => 332,  847 => 328,  842 => 325,  840 => 324,  833 => 320,  829 => 319,  823 => 316,  815 => 312,  813 => 311,  807 => 307,  793 => 306,  790 => 305,  787 => 304,  785 => 303,  771 => 296,  763 => 291,  756 => 287,  752 => 285,  749 => 284,  741 => 282,  739 => 281,  722 => 280,  719 => 279,  716 => 278,  698 => 277,  696 => 276,  689 => 272,  683 => 271,  675 => 268,  672 => 267,  669 => 266,  666 => 265,  663 => 264,  655 => 258,  642 => 254,  634 => 253,  631 => 252,  628 => 251,  623 => 250,  614 => 244,  607 => 239,  605 => 238,  602 => 237,  598 => 226,  595 => 225,  593 => 224,  590 => 223,  587 => 222,  584 => 221,  580 => 216,  577 => 215,  574 => 214,  569 => 179,  558 => 177,  554 => 176,  547 => 172,  543 => 171,  539 => 170,  534 => 169,  531 => 168,  501 => 139,  498 => 138,  492 => 182,  489 => 181,  487 => 168,  483 => 166,  481 => 138,  478 => 137,  475 => 136,  471 => 229,  467 => 227,  465 => 221,  461 => 219,  457 => 217,  455 => 214,  452 => 213,  445 => 208,  435 => 204,  430 => 202,  427 => 201,  423 => 200,  416 => 196,  411 => 193,  409 => 192,  405 => 190,  402 => 189,  397 => 185,  394 => 184,  391 => 136,  389 => 135,  386 => 134,  384 => 133,  380 => 131,  377 => 130,  374 => 129,  367 => 121,  363 => 119,  361 => 118,  358 => 117,  356 => 116,  348 => 111,  343 => 108,  340 => 107,  336 => 104,  333 => 103,  328 => 100,  326 => 99,  323 => 98,  320 => 97,  314 => 93,  308 => 92,  305 => 91,  301 => 89,  297 => 88,  292 => 87,  286 => 85,  283 => 84,  277 => 83,  255 => 82,  253 => 81,  250 => 80,  247 => 79,  244 => 78,  241 => 77,  238 => 76,  235 => 75,  232 => 74,  229 => 73,  226 => 72,  223 => 71,  221 => 70,  218 => 69,  216 => 68,  214 => 67,  211 => 66,  209 => 65,  204 => 62,  201 => 61,  197 => 60,  193 => 58,  190 => 57,  185 => 53,  180 => 234,  176 => 232,  174 => 231,  171 => 230,  169 => 129,  164 => 127,  161 => 126,  158 => 125,  155 => 107,  151 => 105,  149 => 103,  146 => 102,  144 => 97,  141 => 96,  139 => 57,  136 => 56,  134 => 55,  131 => 54,  129 => 53,  124 => 51,  118 => 50,  111 => 49,  108 => 47,  103 => 45,  98 => 44,  95 => 43,  93 => 42,  90 => 41,  87 => 40,  80 => 37,  77 => 36,  69 => 32,  67 => 31,  64 => 30,  62 => 26,  59 => 25,  55 => 19,  52 => 18,  48 => 15,  45 => 14,  36 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SonataAdmin/CRUD/base_list.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_list.html.twig");
    }
}
