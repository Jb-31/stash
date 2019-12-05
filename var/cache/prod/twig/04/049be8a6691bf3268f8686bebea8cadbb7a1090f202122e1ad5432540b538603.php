<?php

/* SonataAdminBundle:Form/Type:sonata_type_model_autocomplete.html.twig */
class __TwigTemplate_dad5f5c656b981fef6bf6a3ec56fcc37a6c3c8899d50947611b4bc2c2656e90b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'sonata_type_model_autocomplete_ajax_request_parameters' => [$this, 'block_sonata_type_model_autocomplete_ajax_request_parameters'],
            'sonata_type_model_autocomplete_dropdown_item_format' => [$this, 'block_sonata_type_model_autocomplete_dropdown_item_format'],
            'sonata_type_model_autocomplete_selection_format' => [$this, 'block_sonata_type_model_autocomplete_selection_format'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 11
        ob_start();
        // line 12
        echo "
    <input type=\"text\" id=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_autocomplete_input\" value=\"\"";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
        foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        if ((((isset($context["read_only"]) || array_key_exists("read_only", $context))) ? (_twig_default_filter((isset($context["read_only"]) ? $context["read_only"] : null), false)) : (false))) {
            echo " readonly=\"readonly\"";
        }
        // line 16
        if ((isset($context["disabled"]) ? $context["disabled"] : null)) {
            echo " disabled=\"disabled\"";
        }
        // line 17
        echo "    />

    <select id=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_autocomplete_input_v4\" data-sonata-select2=\"false\"";
        // line 20
        if ((((isset($context["read_only"]) || array_key_exists("read_only", $context))) ? (_twig_default_filter((isset($context["read_only"]) ? $context["read_only"] : null), false)) : (false))) {
            echo " readonly=\"readonly\"";
        }
        // line 21
        if ((isset($context["disabled"]) ? $context["disabled"] : null)) {
            echo " disabled=\"disabled\"";
        }
        // line 22
        echo "    >";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : null));
        foreach ($context['_seq'] as $context["idx"] => $context["val"]) {
            if ((($context["idx"] . "") != "_labels")) {
                // line 24
                echo "<option value=\"";
                echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "_labels", [], "array"), $context["idx"], [], "array"), "html", null, true);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</select>

    <div id=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_hidden_inputs_wrap\">
        ";
        // line 29
        if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : null));
            foreach ($context['_seq'] as $context["idx"] => $context["val"]) {
                if ((($context["idx"] . "") != "_labels")) {
                    // line 31
                    echo "<input type=\"hidden\" name=\"";
                    echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : null), "html", null, true);
                    echo "[]\"";
                    if ((isset($context["disabled"]) ? $context["disabled"] : null)) {
                        echo " disabled=\"disabled\"";
                    }
                    echo " value=\"";
                    echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                    echo "\">";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['idx'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 34
            echo "<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : null), "html", null, true);
            echo "\"";
            if ((isset($context["disabled"]) ? $context["disabled"] : null)) {
                echo " disabled=\"disabled\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["value"]) ? $context["value"] : null), 0, [], "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["value"]) ? $context["value"] : null), 0, [], "array"), "")) : ("")), "html", null, true);
            echo "\">
        ";
        }
        // line 36
        echo "</div>

    ";
        // line 38
        if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []) && $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "hasAssociationAdmin", []))) {
            // line 39
            echo "        <div id=\"field_actions_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" class=\"field-actions\">
            ";
            // line 40
            $context["display_btn_add"] = (((($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit", []) != "admin") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "hasRoute", [0 => "create"], "method")) && $this->getAttribute($this->getAttribute($this->getAttribute(            // line 41
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "isGranted", [0 => "CREATE"], "method")) && (isset($context["btn_add"]) ? $context["btn_add"] : null));
            // line 42
            echo "            ";
            if ((isset($context["display_btn_add"]) ? $context["display_btn_add"] : null)) {
                // line 43
                echo "                <a  href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "generateUrl", [0 => "create", 1 => $this->getAttribute($this->getAttribute(                // line 44
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "getOption", [0 => "link_parameters", 1 => []], "method")], "method"), "html", null, true);
                // line 45
                echo "\"
                    onclick=\"return start_field_dialog_form_add_";
                // line 46
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "(this);\"
                    class=\"btn btn-success btn-sm sonata-ba-action\"
                    title=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_add"]) ? $context["btn_add"] : null), [], (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                echo "\"
                    >
                    <i class=\"fa fa-plus-circle\"></i>
                    ";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_add"]) ? $context["btn_add"] : null), [], (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                echo "
                </a>
            ";
            }
            // line 54
            echo "            ";
            $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_modal.html.twig", "SonataAdminBundle:Form/Type:sonata_type_model_autocomplete.html.twig", 54)->display($context);
            // line 55
            echo "            ";
            $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_many_script.html.twig", "SonataAdminBundle:Form/Type:sonata_type_model_autocomplete.html.twig", 55)->display($context);
            // line 56
            echo "        </div>
    ";
        }
        // line 58
        echo "
    <script>
        ";
        // line 61
        echo "        jQuery(function (\$) {
            // Select2 v3 does not used same input as v4.
            // NEXT_MAJOR: Remove this BC layer while upgrading to v4.
            var usedInputRef = window.Select2 ? '#";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "js", null, true);
        echo "_autocomplete_input' : '#";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "js", null, true);
        echo "_autocomplete_input_v4';
            var unusedInputRef = window.Select2 ? '#";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "js", null, true);
        echo "_autocomplete_input_v4' : '#";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "js", null, true);
        echo "_autocomplete_input';

            \$(unusedInputRef).remove();
            var autocompleteInput = \$(usedInputRef);

            var select2Options = {";
        // line 71
        $context["allowClearPlaceholder"] = ((( !(isset($context["multiple"]) ? $context["multiple"] : null) &&  !(isset($context["required"]) ? $context["required"] : null))) ? (" ") : (""));
        // line 72
        echo "placeholder: '";
        echo twig_escape_filter($this->env, (((isset($context["placeholder"]) ? $context["placeholder"] : null)) ? ((isset($context["placeholder"]) ? $context["placeholder"] : null)) : ((isset($context["allowClearPlaceholder"]) ? $context["allowClearPlaceholder"] : null))), "js", null, true);
        echo "', // allowClear needs placeholder to work properly
                allowClear: ";
        // line 73
        echo (((isset($context["required"]) ? $context["required"] : null)) ? ("false") : ("true"));
        echo ",
                enable: ";
        // line 74
        echo (((isset($context["disabled"]) ? $context["disabled"] : null)) ? ("false") : ("true"));
        echo ",
                readonly: ";
        // line 75
        echo ((((((isset($context["read_only"]) || array_key_exists("read_only", $context))) ? (_twig_default_filter((isset($context["read_only"]) ? $context["read_only"] : null), false)) : (false)) || (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "read_only", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "read_only", []), false)) : (false)))) ? ("true") : ("false"));
        echo ", ";
        // line 76
        echo "                ";
        echo "    ";
        // line 77
        echo "                minimumInputLength: ";
        echo twig_escape_filter($this->env, (isset($context["minimum_input_length"]) ? $context["minimum_input_length"] : null), "js", null, true);
        echo ",
                multiple: ";
        // line 78
        echo (((isset($context["multiple"]) ? $context["multiple"] : null)) ? ("true") : ("false"));
        echo ",
                width: function() {
                    // Select2 v3 and v4 BC. If window.Select2 is defined, then the v3 is installed.
                    // NEXT_MAJOR: Remove Select2 v3 support.
                    return Admin.get_select2_width(window.Select2 ? this.element : jQuery(this));
                },
                dropdownAutoWidth: ";
        // line 84
        echo (((isset($context["dropdown_auto_width"]) ? $context["dropdown_auto_width"] : null)) ? ("true") : ("false"));
        echo ",
                containerCssClass: '";
        // line 85
        echo twig_escape_filter($this->env, ((isset($context["container_css_class"]) ? $context["container_css_class"] : null) . " form-control"), "js", null, true);
        echo "',
                dropdownCssClass: '";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["dropdown_css_class"]) ? $context["dropdown_css_class"] : null), "js", null, true);
        echo "',
                ajax: {
                    url:  '";
        // line 88
        echo twig_escape_filter($this->env, (((isset($context["url"]) ? $context["url"] : null)) ? ((isset($context["url"]) ? $context["url"] : null)) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute((isset($context["route"]) ? $context["route"] : null), "name", []), (($this->getAttribute((isset($context["route"]) ? $context["route"] : null), "parameters", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["route"]) ? $context["route"] : null), "parameters", []), [])) : ([]))))), "js", null, true);
        echo "',
                    dataType: 'json',
                    quietMillis: ";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["quiet_millis"]) ? $context["quiet_millis"] : null), "js", null, true);
        echo ",
                    cache: ";
        // line 91
        echo (((isset($context["cache"]) ? $context["cache"] : null)) ? ("true") : ("false"));
        echo ",
                    data: function (term, page) { // page is the one-based page number tracked by Select2
                        // Select2 v4 got a \"params\" unique argument
                        // NEXT_MAJOR: Remove this BC layer.
                        if (typeof page === 'undefined') {
                            page = typeof term.page !== 'undefined' ? term.page : 1;
                            term = term.term;
                        }

                        ";
        // line 100
        $this->displayBlock('sonata_type_model_autocomplete_ajax_request_parameters', $context, $blocks);
        // line 140
        echo "                    },
                },
                escapeMarkup: function (m) { return m; } // we do not want to escape markup since we are displaying html in results
            };

            // Select2 v3/v4 special options.
            // NEXT_MAJOR: Remove this BC layer while upgrading to v4.
            var templateResult = function (item) {
                return ";
        // line 148
        $this->displayBlock('sonata_type_model_autocomplete_dropdown_item_format', $context, $blocks);
        // line 154
        echo "; // format of one dropdown item
            };
            var templateSelection = function (item) {
                // Select2 v4 BC select pre-selection.
                if (typeof item.label === 'undefined') {
                    item.label = item.text;
                }
                return ";
        // line 161
        $this->displayBlock('sonata_type_model_autocomplete_selection_format', $context, $blocks);
        // line 167
        echo "; // format selected item '<b>'+item.label+'</b>';
            };

            if (window.Select2) {
                select2Options.initSelection = function (element, callback) {
                    callback(element.val());
                };
                select2Options.ajax.results = function (data, page) {
                    // notice we return the value of more so Select2 knows if more results can be loaded
                    return {results: data.items, more: data.more};
                };
                select2Options.formatResult = templateResult;
                select2Options.formatSelection = templateSelection;
            } else {
                select2Options.ajax.processResults = function (data, params) {
                    return {
                        results: data.items,
                        pagination: {
                            more: data.more
                        }
                    };
                };
                select2Options.templateResult = templateResult;
                select2Options.templateSelection = templateSelection;
            }
            // END Select2 v3/v4 special options

            autocompleteInput.select2(select2Options);

            // Events structure is different between v3 and v4
            // NEXT_MAJOR: Remove BC layer.
            var boundEvents = window.Select2 ? 'change' : 'select2:select select2:unselect';
            autocompleteInput.on(boundEvents, function(e) {
                if (e.type === 'select2:select') {
                    e.added = e.params.data;
                }
                if (e.type === 'select2:unselect') {
                    e.removed = e.params.data;
                }

                // console.log('change '+JSON.stringify({val:e.val, added:e.added, removed:e.removed}));

                // remove input
                if (undefined !== e.removed && null !== e.removed) {
                    var removedItems = e.removed;

                    ";
        // line 213
        if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
            // line 214
            echo "                        if(!\$.isArray(removedItems)) {
                            removedItems = [removedItems];
                        }

                        var length = removedItems.length;
                        for (var i = 0; i < length; i++) {
                            el = removedItems[i];
                            \$('#";
            // line 221
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "js", null, true);
            echo "_hidden_inputs_wrap input:hidden[value=\"'+el.id+'\"]').remove();
                        }";
        } else {
            // line 224
            echo "\$('#";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "js", null, true);
            echo "_hidden_inputs_wrap input:hidden').val('');";
        }
        // line 226
        echo "                }

                // add new input
                var el = null;
                if (undefined !== e.added) {

                    var addedItems = e.added;

                    ";
        // line 234
        if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
            // line 235
            echo "                        if(!\$.isArray(addedItems)) {
                            addedItems = [addedItems];
                        }

                        var length = addedItems.length;
                        for (var i = 0; i < length; i++) {
                            el = addedItems[i];
                            \$('#";
            // line 242
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "js", null, true);
            echo "_hidden_inputs_wrap').append('<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : null), "js", null, true);
            echo "[]\" value=\"'+el.id+'\" />');
                        }";
        } else {
            // line 245
            echo "\$('#";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "js", null, true);
            echo "_hidden_inputs_wrap input:hidden').val(addedItems.id);";
        }
        // line 247
        echo "                }
            });

            // Initialise the autocomplete
            var data = [];";
        // line 253
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
            // line 254
            echo "data =";
            if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                echo "[";
            }
            // line 255
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            foreach ($context['_seq'] as $context["idx"] => $context["val"]) {
                if ((($context["idx"] . "") != "_labels")) {
                    // line 256
                    if ( !$this->getAttribute($context["loop"], "first", [])) {
                        echo ", ";
                    }
                    // line 257
                    echo "{id: '";
                    echo twig_escape_filter($this->env, $context["val"], "js", null, true);
                    echo "', label:'";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "_labels", [], "array"), $context["idx"], [], "array"), "js", null, true);
                    echo "'}";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['idx'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 259
            if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                echo "]";
            }
            echo ";
            ";
        }
        // line 262
        echo "// Select2 v3 data populate.
            // NEXT_MAJOR: Remove while dropping v3 support.
            if (window.Select2 && (undefined==data.length || 0<data.length)) { // Leave placeholder if no data set
                autocompleteInput.select2('data', data);
            }

            // remove unneeded autocomplete text input before form submit
            \$(usedInputRef).closest('form').submit(function()
            {
                \$(usedInputRef).remove();
                return true;
            });

            // Automatically select the created record after closing the popup window
            ";
        // line 276
        if ((((($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []) && $this->getAttribute($this->getAttribute(        // line 277
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "hasAssociationAdmin", [])) &&         // line 278
(isset($context["btn_add"]) ? $context["btn_add"] : null)) && $this->getAttribute($this->getAttribute($this->getAttribute(        // line 279
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "hasRoute", [0 => "create"], "method")) && $this->getAttribute($this->getAttribute($this->getAttribute(        // line 280
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "hasAccess", [0 => "create"], "method"))) {
            // line 281
            echo "
                ";
            // line 282
            $context["create_url"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "generateUrl", [0 => "create", 1 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "getOption", [0 => "link_parameters", 1 => []], "method")], "method");
            // line 283
            echo "    
                \$(document).ajaxSuccess(function(event, xhr, settings) {
                  if(typeof xhr.responseJSON != 'undefined') {
                      if ('";
            // line 286
            echo twig_escape_filter($this->env, (isset($context["create_url"]) ? $context["create_url"] : null), "js", null, true);
            echo "'.indexOf(settings.url) !== -1 && typeof xhr.responseJSON != 'string' && xhr.responseJSON.result == 'ok') {
                        var form = JSON.parse('{\"' + decodeURI(settings.data).replace('+', ' ').replace(/\"/g, '\\\\\"').replace(/&/g, '\",\"').replace(/=/g,'\":\"') + '\"}');
                        var item = new Option(
                          form['";
            // line 289
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "uniqid", []), "js", null, true);
            echo "[";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", []), "property", []), "js", null, true);
            echo "]'],
                          xhr.responseJSON.objectId,
                          true, true
                          );";
            // line 294
            if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                // line 295
                echo "var data = autocompleteInput.select2('data');
                          data.push(item);";
            } else {
                // line 298
                echo "var data = item;";
            }
            // line 301
            echo "\$('#";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "js", null, true);
            echo "_hidden_inputs_wrap').html('<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : null), "js", null, true);
            echo "\" value=\"'+xhr.responseJSON.objectId+'\" />');
    
                        // append to Select2
                        autocompleteInput.select2('data', data).append(data).trigger('change');
    
                        // manually trigger the `select2:select` event
                        autocompleteInput.select2('data', data).trigger({
                            type: 'select2:select',
                            params: {
                                data: data
                            }
                        });
                      }
                  }
                });
            ";
        }
        // line 317
        echo "        });
        ";
        // line 319
        echo "    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 100
    public function block_sonata_type_model_autocomplete_ajax_request_parameters($context, array $blocks = [])
    {
        // line 101
        echo "                        return {
                                //search term
                                '";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["req_param_name_search"]) ? $context["req_param_name_search"] : null), "js", null, true);
        echo "': term,

                                // page size
                                '";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["req_param_name_items_per_page"]) ? $context["req_param_name_items_per_page"] : null), "js", null, true);
        echo "': ";
        echo twig_escape_filter($this->env, (isset($context["items_per_page"]) ? $context["items_per_page"] : null), "js", null, true);
        echo ",

                                // page number
                                '";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["req_param_name_page_number"]) ? $context["req_param_name_page_number"] : null), "js", null, true);
        echo "': page,

                                // admin
                                ";
        // line 112
        if ( !(null === $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin", []))) {
            // line 113
            echo "                                    'uniqid': '";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin", []), "uniqid", []), "js", null, true);
            echo "',
                                    'admin_code': '";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin", []), "code", []), "js");
            echo "',
                                ";
        } elseif (        // line 115
(isset($context["admin_code"]) ? $context["admin_code"] : null)) {
            // line 116
            echo "                                    'admin_code':  '";
            echo twig_escape_filter($this->env, (isset($context["admin_code"]) ? $context["admin_code"] : null), "js");
            echo "',
                                ";
        }
        // line 118
        echo "
                                 // subclass
                                ";
        // line 120
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "query", []), "get", [0 => "subclass"], "method")) {
            // line 121
            echo "                                    'subclass': '";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "query", []), "get", [0 => "subclass"], "method"), "js", null, true);
            echo "',
                                ";
        }
        // line 123
        echo "
                                ";
        // line 124
        if (((isset($context["context"]) ? $context["context"] : null) == "filter")) {
            // line 125
            echo "                                    'field':  '";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["full_name"]) ? $context["full_name"] : null), ["filter[" => "", "][value]" => "", "__" => "."]), "js", null, true);
            echo "',
                                    '_context': 'filter'
                                ";
        } else {
            // line 128
            echo "                                    'field':  '";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "js", null, true);
            echo "'
                                ";
        }
        // line 130
        echo "
                                // other parameters
                                ";
        // line 132
        if ( !twig_test_empty((isset($context["req_params"]) ? $context["req_params"] : null))) {
            echo ",";
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["req_params"]) ? $context["req_params"] : null));
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
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 134
                echo "'";
                echo twig_escape_filter($this->env, $context["key"], "js", null, true);
                echo "': '";
                echo twig_escape_filter($this->env, $context["value"], "js", null, true);
                echo "'";
                // line 135
                if ( !$this->getAttribute($context["loop"], "last", [])) {
                    echo ", ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 138
        echo "                        };
                        ";
    }

    // line 148
    public function block_sonata_type_model_autocomplete_dropdown_item_format($context, array $blocks = [])
    {
        // line 149
        if ((((isset($context["safe_label"]) || array_key_exists("safe_label", $context))) ? (_twig_default_filter((isset($context["safe_label"]) ? $context["safe_label"] : null), false)) : (false))) {
            // line 150
            echo "                        '<div class=\"";
            echo twig_escape_filter($this->env, (isset($context["dropdown_item_css_class"]) ? $context["dropdown_item_css_class"] : null), "js", null, true);
            echo "\">'+item.label+'<\\/div>'
                    ";
        } else {
            // line 152
            echo "                        jQuery('<div class=\"";
            echo twig_escape_filter($this->env, (isset($context["dropdown_item_css_class"]) ? $context["dropdown_item_css_class"] : null), "js", null, true);
            echo "\">').text(item.label).prop('outerHTML')
                    ";
        }
    }

    // line 161
    public function block_sonata_type_model_autocomplete_selection_format($context, array $blocks = [])
    {
        // line 162
        if ((((isset($context["safe_label"]) || array_key_exists("safe_label", $context))) ? (_twig_default_filter((isset($context["safe_label"]) ? $context["safe_label"] : null), false)) : (false))) {
            // line 163
            echo "                        item.label
                    ";
        } else {
            // line 165
            echo "                        jQuery('<div>').text(item.label).prop('innerHTML')
                    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form/Type:sonata_type_model_autocomplete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  690 => 165,  686 => 163,  684 => 162,  681 => 161,  673 => 152,  667 => 150,  665 => 149,  662 => 148,  657 => 138,  640 => 135,  634 => 134,  617 => 133,  614 => 132,  610 => 130,  604 => 128,  597 => 125,  595 => 124,  592 => 123,  586 => 121,  584 => 120,  580 => 118,  574 => 116,  572 => 115,  568 => 114,  563 => 113,  561 => 112,  555 => 109,  547 => 106,  541 => 103,  537 => 101,  534 => 100,  528 => 319,  525 => 317,  503 => 301,  500 => 298,  496 => 295,  494 => 294,  486 => 289,  480 => 286,  475 => 283,  473 => 282,  470 => 281,  468 => 280,  467 => 279,  466 => 278,  465 => 277,  464 => 276,  448 => 262,  441 => 259,  427 => 257,  423 => 256,  412 => 255,  407 => 254,  405 => 253,  399 => 247,  394 => 245,  387 => 242,  378 => 235,  376 => 234,  366 => 226,  361 => 224,  356 => 221,  347 => 214,  345 => 213,  297 => 167,  295 => 161,  286 => 154,  284 => 148,  274 => 140,  272 => 100,  260 => 91,  256 => 90,  251 => 88,  246 => 86,  242 => 85,  238 => 84,  229 => 78,  224 => 77,  221 => 76,  218 => 75,  214 => 74,  210 => 73,  205 => 72,  203 => 71,  193 => 65,  187 => 64,  182 => 61,  178 => 58,  174 => 56,  171 => 55,  168 => 54,  162 => 51,  156 => 48,  151 => 46,  148 => 45,  146 => 44,  144 => 43,  141 => 42,  139 => 41,  138 => 40,  133 => 39,  131 => 38,  127 => 36,  115 => 34,  99 => 31,  94 => 30,  92 => 29,  88 => 28,  84 => 26,  73 => 24,  68 => 23,  66 => 22,  62 => 21,  58 => 20,  55 => 19,  51 => 17,  47 => 16,  43 => 15,  30 => 14,  27 => 13,  24 => 12,  22 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:Form/Type:sonata_type_model_autocomplete.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/admin-bundle/src/Resources/views/Form/Type/sonata_type_model_autocomplete.html.twig");
    }
}
