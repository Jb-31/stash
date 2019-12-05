<?php

/* @SonataAdmin/Form/form_admin_fields.html.twig */
class __TwigTemplate_86eaad32b86c3cbfd529e0e5cae4057302751b1ab922d95e3c6d92a5fad7b1e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "@SonataAdmin/Form/form_admin_fields.html.twig", 12);
        $this->blocks = [
            'form_errors' => [$this, 'block_form_errors'],
            'sonata_help' => [$this, 'block_sonata_help'],
            'form_widget' => [$this, 'block_form_widget'],
            'form_widget_simple' => [$this, 'block_form_widget_simple'],
            'textarea_widget' => [$this, 'block_textarea_widget'],
            'number_widget' => [$this, 'block_number_widget'],
            'choice_widget' => [$this, 'block_choice_widget'],
            'money_widget' => [$this, 'block_money_widget'],
            'percent_widget' => [$this, 'block_percent_widget'],
            'checkbox_widget' => [$this, 'block_checkbox_widget'],
            'radio_widget' => [$this, 'block_radio_widget'],
            'form_label' => [$this, 'block_form_label'],
            'checkbox_label' => [$this, 'block_checkbox_label'],
            'radio_label' => [$this, 'block_radio_label'],
            'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
            'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
            'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
            'date_widget' => [$this, 'block_date_widget'],
            'time_widget' => [$this, 'block_time_widget'],
            'datetime_widget' => [$this, 'block_datetime_widget'],
            'form_row' => [$this, 'block_form_row'],
            'checkbox_row' => [$this, 'block_checkbox_row'],
            'radio_row' => [$this, 'block_radio_row'],
            'sonata_type_native_collection_widget_row' => [$this, 'block_sonata_type_native_collection_widget_row'],
            'sonata_type_native_collection_widget' => [$this, 'block_sonata_type_native_collection_widget'],
            'sonata_type_immutable_array_widget' => [$this, 'block_sonata_type_immutable_array_widget'],
            'sonata_type_immutable_array_widget_row' => [$this, 'block_sonata_type_immutable_array_widget_row'],
            'sonata_type_model_autocomplete_widget' => [$this, 'block_sonata_type_model_autocomplete_widget'],
            'sonata_type_choice_field_mask_widget' => [$this, 'block_sonata_type_choice_field_mask_widget'],
            'sonata_type_choice_multiple_sortable' => [$this, 'block_sonata_type_choice_multiple_sortable'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_form_errors($context, array $blocks = [])
    {
        // line 15
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 16
            echo "        ";
            if ( !$this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", [])) {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 17
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 19
                echo "                    <li><i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", []), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "            </ul>
        ";
            // line 22
            if ( !$this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", [])) {
                echo "</div>";
            }
            // line 23
            echo "    ";
        }
    }

    // line 26
    public function block_sonata_help($context, array $blocks = [])
    {
        // line 27
        ob_start();
        // line 28
        if (((isset($context["sonata_help"]) || array_key_exists("sonata_help", $context)) && (isset($context["sonata_help"]) ? $context["sonata_help"] : null))) {
            // line 29
            echo "    <span class=\"help-block sonata-ba-field-widget-help\">";
            echo (isset($context["sonata_help"]) ? $context["sonata_help"] : null);
            echo "</span>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 34
    public function block_form_widget($context, array $blocks = [])
    {
        // line 35
        $this->displayParentBlock("form_widget", $context, $blocks);
        echo "
    ";
        // line 36
        $this->displayBlock("sonata_help", $context, $blocks);
    }

    // line 39
    public function block_form_widget_simple($context, array $blocks = [])
    {
        // line 40
        echo "    ";
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "text")) : ("text"));
        // line 41
        echo "    ";
        if (((isset($context["type"]) ? $context["type"] : null) != "file")) {
            // line 42
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), ["class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", []), "")) : ("")) . " form-control")]);
            // line 43
            echo "    ";
        }
        // line 44
        echo "    ";
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
";
    }

    // line 47
    public function block_textarea_widget($context, array $blocks = [])
    {
        // line 48
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), ["class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", []), "")) : ("")) . " form-control")]);
        // line 49
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
    ";
        // line 50
        $this->displayBlock("sonata_help", $context, $blocks);
        echo "
";
    }

    // line 53
    public function block_number_widget($context, array $blocks = [])
    {
        // line 54
        $this->displayParentBlock("number_widget", $context, $blocks);
        echo "
    ";
        // line 55
        $this->displayBlock("sonata_help", $context, $blocks);
    }

    // line 58
    public function block_choice_widget($context, array $blocks = [])
    {
        // line 59
        $this->displayParentBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 60
        $this->displayBlock("sonata_help", $context, $blocks);
    }

    // line 64
    public function block_money_widget($context, array $blocks = [])
    {
        // line 65
        if (((isset($context["money_pattern"]) ? $context["money_pattern"] : null) == "{{ widget }}")) {
            // line 66
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 68
            echo "        ";
            $context["currencySymbol"] = twig_trim_filter(twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : null), ["{{ widget }}" => ""]));
            // line 69
            echo "        ";
            if (preg_match("/^{{ widget }}/", (isset($context["money_pattern"]) ? $context["money_pattern"] : null))) {
                // line 70
                echo "            <div class=\"input-group\">";
                // line 71
                $this->displayBlock("form_widget_simple", $context, $blocks);
                // line 72
                echo "<span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, (isset($context["currencySymbol"]) ? $context["currencySymbol"] : null), "html", null, true);
                echo "</span>
            </div>
        ";
            } elseif (preg_match("/{{ widget }}\$/",             // line 74
(isset($context["money_pattern"]) ? $context["money_pattern"] : null))) {
                // line 75
                echo "            <div class=\"input-group\">
                <span class=\"input-group-addon\">";
                // line 76
                echo twig_escape_filter($this->env, (isset($context["currencySymbol"]) ? $context["currencySymbol"] : null), "html", null, true);
                echo "</span>";
                // line 77
                $this->displayBlock("form_widget_simple", $context, $blocks);
                // line 78
                echo "</div>
        ";
            }
            // line 80
            echo "    ";
        }
        // line 81
        echo "    ";
        $this->displayBlock("sonata_help", $context, $blocks);
    }

    // line 84
    public function block_percent_widget($context, array $blocks = [])
    {
        // line 85
        echo "    ";
        ob_start();
        // line 86
        echo "        ";
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "text")) : ("text"));
        // line 87
        echo "        <div class=\"input-group\">
            ";
        // line 88
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
            <span class=\"input-group-addon\">%</span>
        </div>
        ";
        // line 91
        $this->displayBlock("sonata_help", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 95
    public function block_checkbox_widget($context, array $blocks = [])
    {
        // line 96
        $context["parent_label_class"] = (((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : null), "")) : (""));
        // line 97
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : null))) {
            // line 98
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
        } else {
            // line 100
            echo "<div class=\"checkbox\">";
            // line 101
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
            // line 102
            echo "</div>";
        }
    }

    // line 106
    public function block_radio_widget($context, array $blocks = [])
    {
        // line 107
        $context["parent_label_class"] = (((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : null), "")) : (""));
        // line 108
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : null))) {
            // line 109
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
        } else {
            // line 111
            echo "<div class=\"radio\">";
            // line 112
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
            // line 113
            echo "</div>";
        }
    }

    // line 118
    public function block_form_label($context, array $blocks = [])
    {
        // line 119
        ob_start();
        // line 120
        echo "    ";
        if (( !((isset($context["label"]) ? $context["label"] : null) === false) && ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "options", []), "form_type", [], "array") == "horizontal"))) {
            // line 121
            echo "        ";
            $context["label_class"] = "col-sm-3";
            // line 122
            echo "    ";
        }
        // line 123
        echo "
    ";
        // line 124
        $context["label_class"] = ((((isset($context["label_class"]) || array_key_exists("label_class", $context))) ? (_twig_default_filter((isset($context["label_class"]) ? $context["label_class"] : null), "")) : ("")) . " control-label");
        // line 125
        echo "
    ";
        // line 126
        if ( !((isset($context["label"]) ? $context["label"] : null) === false)) {
            // line 127
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), ["class" => (((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", []), "")) : ("")) . " ") . (isset($context["label_class"]) ? $context["label_class"] : null))]);
            // line 128
            echo "
        ";
            // line 129
            if ( !(isset($context["compound"]) ? $context["compound"] : null)) {
                // line 130
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), ["for" => (isset($context["id"]) ? $context["id"] : null)]);
                // line 131
                echo "        ";
            }
            // line 132
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : null)) {
                // line 133
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), ["class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", []), "")) : ("")) . " required"))]);
                // line 134
                echo "        ";
            }
            // line 135
            echo "
        ";
            // line 136
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
                // line 137
                if (((isset($context["label_format"]) || array_key_exists("label_format", $context)) &&  !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : null)))) {
                    // line 138
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : null), ["%name%" =>                     // line 139
(isset($context["name"]) ? $context["name"] : null), "%id%" =>                     // line 140
(isset($context["id"]) ? $context["id"] : null)]);
                } else {
                    // line 143
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : null));
                }
            }
            // line 146
            echo "
        <label";
            // line 147
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
            ";
            // line 148
            if (((isset($context["translation_domain"]) ? $context["translation_domain"] : null) === false)) {
                // line 149
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            } elseif ( !$this->getAttribute(            // line 150
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin", [])) {
                // line 151
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : null), [], (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
            } else {
                // line 153
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : null), [], (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "translationDomain", [])) ? ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "translationDomain", [])) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "translationDomain", [])))), "html", null, true);
                echo "
            ";
            }
            // line 155
            echo "        </label>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 160
    public function block_checkbox_label($context, array $blocks = [])
    {
        // line 161
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 164
    public function block_radio_label($context, array $blocks = [])
    {
        // line 165
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 168
    public function block_checkbox_radio_label($context, array $blocks = [])
    {
        // line 169
        echo "    ";
        if ($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin", [])) {
            // line 170
            echo "        ";
            $context["translation_domain"] = $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "translationDomain", []);
            // line 171
            echo "    ";
        }
        // line 172
        echo "    ";
        // line 173
        echo "    ";
        if ((isset($context["widget"]) || array_key_exists("widget", $context))) {
            // line 174
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : null)) {
                // line 175
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), ["class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", []), "")) : ("")) . " required"))]);
                // line 176
                echo "        ";
            }
            // line 177
            echo "        ";
            if ((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) {
                // line 178
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), ["class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", []), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : null)))]);
                // line 179
                echo "        ";
            }
            // line 180
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : null) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : null)))) {
                // line 181
                echo "            ";
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : null));
                // line 182
                echo "        ";
            }
            // line 183
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 184
            echo (isset($context["widget"]) ? $context["widget"] : null);
            // line 185
            if ( !((isset($context["label"]) ? $context["label"] : null) === false)) {
                // line 186
                echo "<span class=\"control-label__text\">
                    ";
                // line 187
                if (((isset($context["translation_domain"]) ? $context["translation_domain"] : null) === false)) {
                    // line 188
                    echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                } else {
                    // line 190
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : null), [], (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                }
                // line 192
                echo "</span>";
            }
            // line 194
            echo "</label>
    ";
        }
    }

    // line 198
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        // line 199
        ob_start();
        // line 200
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), ["class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", []), "")) : ("")) . " list-unstyled")]);
        // line 201
        echo "    <ul ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    ";
        // line 202
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 203
            echo "        <li>
            ";
            // line 204
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', ["horizontal" => false, "horizontal_input_wrapper_class" => "", "translation_domain" =>             // line 207
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : null)]);
            // line 208
            echo " ";
            // line 209
            echo "        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        echo "    </ul>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 215
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        // line 216
        ob_start();
        // line 217
        echo "    ";
        if ((((isset($context["required"]) ? $context["required"] : null) && (isset($context["placeholder"]) || array_key_exists("placeholder", $context))) && (null === (isset($context["placeholder"]) ? $context["placeholder"] : null)))) {
            // line 218
            echo "        ";
            $context["required"] = false;
            // line 219
            echo "    ";
        } elseif (((((((isset($context["required"]) ? $context["required"] : null) && (isset($context["empty_value"]) || array_key_exists("empty_value", $context))) && (isset($context["empty_value_in_choices"]) || array_key_exists("empty_value_in_choices", $context))) && (null === (isset($context["empty_value"]) ? $context["empty_value"] : null))) &&  !(isset($context["empty_value_in_choices"]) ? $context["empty_value_in_choices"] : null)) &&  !(isset($context["multiple"]) ? $context["multiple"] : null))) {
            // line 220
            echo "        ";
            $context["required"] = false;
            // line 221
            echo "    ";
        }
        // line 222
        echo "
    ";
        // line 223
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), ["class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", []), "")) : ("")) . " form-control")]);
        // line 224
        echo "    ";
        if ((((isset($context["sortable"]) || array_key_exists("sortable", $context)) && (isset($context["sortable"]) ? $context["sortable"] : null)) && (isset($context["multiple"]) ? $context["multiple"] : null))) {
            // line 225
            echo "        ";
            $this->displayBlock("sonata_type_choice_multiple_sortable", $context, $blocks);
            echo "
    ";
        } else {
            // line 227
            echo "        <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                echo " multiple=\"multiple\"";
            }
            echo " >
            ";
            // line 228
            if (((isset($context["empty_value"]) || array_key_exists("empty_value", $context)) &&  !(null === (isset($context["empty_value"]) ? $context["empty_value"] : null)))) {
                // line 229
                echo "                <option value=\"\"";
                if (((isset($context["required"]) ? $context["required"] : null) && twig_test_empty((isset($context["value"]) ? $context["value"] : null)))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                    ";
                // line 230
                if (((isset($context["empty_value"]) ? $context["empty_value"] : null) != "")) {
                    // line 231
                    echo "                        ";
                    if ( !$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin", [])) {
                        // line 232
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["empty_value"]) ? $context["empty_value"] : null), [], (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                    } else {
                        // line 234
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["empty_value"]) ? $context["empty_value"] : null), [], $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "translationDomain", [])), "html", null, true);
                    }
                    // line 236
                    echo "                    ";
                }
                // line 237
                echo "                </option>
            ";
            } elseif ((            // line 238
(isset($context["placeholder"]) || array_key_exists("placeholder", $context)) &&  !(null === (isset($context["placeholder"]) ? $context["placeholder"] : null)))) {
                // line 239
                echo "                <option value=\"\"";
                if (((isset($context["required"]) ? $context["required"] : null) && twig_test_empty((isset($context["value"]) ? $context["value"] : null)))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                    ";
                // line 240
                if (((isset($context["placeholder"]) ? $context["placeholder"] : null) != "")) {
                    // line 241
                    echo "                        ";
                    if ( !$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin", [])) {
                        // line 242
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) ? $context["placeholder"] : null), [], (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                    } else {
                        // line 244
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) ? $context["placeholder"] : null), [], $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "translationDomain", [])), "html", null, true);
                    }
                    // line 246
                    echo "                    ";
                }
                // line 247
                echo "                </option>
            ";
            }
            // line 249
            echo "            ";
            if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : null)) > 0)) {
                // line 250
                echo "                ";
                $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : null);
                // line 251
                echo "                ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
                ";
                // line 252
                if ((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : null)) > 0)) {
                    // line 253
                    echo "                    <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : null), "html", null, true);
                    echo "</option>
                ";
                }
                // line 255
                echo "            ";
            }
            // line 256
            echo "            ";
            $context["options"] = (isset($context["choices"]) ? $context["choices"] : null);
            // line 257
            echo "            ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
        </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 263
    public function block_date_widget($context, array $blocks = [])
    {
        // line 264
        ob_start();
        // line 265
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 266
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 268
            echo "        ";
            if (( !(isset($context["row"]) || array_key_exists("row", $context)) || ((isset($context["row"]) ? $context["row"] : null) == true))) {
                // line 269
                echo "            ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), ["class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", []), "")) : ("")) . " row")]);
                // line 270
                echo "        ";
            }
            // line 271
            echo "        ";
            $context["input_wrapper_class"] = (((isset($context["input_wrapper_class"]) || array_key_exists("input_wrapper_class", $context))) ? (_twig_default_filter((isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : null), "col-sm-4")) : ("col-sm-4"));
            // line 272
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 273
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : null), ["{{ year }}" => (((("<div class=\"" .             // line 274
(isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : null)) . "\">") . $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "year", []), 'widget')) . "</div>"), "{{ month }}" => (((("<div class=\"" .             // line 275
(isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : null)) . "\">") . $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "month", []), 'widget')) . "</div>"), "{{ day }}" => (((("<div class=\"" .             // line 276
(isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : null)) . "\">") . $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "day", []), 'widget')) . "</div>")]);
            // line 277
            echo "
        </div>
    ";
        }
        // line 280
        echo "    ";
        if ( !(isset($context["datepicker_use_button"]) || array_key_exists("datepicker_use_button", $context))) {
            // line 281
            echo "        ";
            $this->displayBlock("sonata_help", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 286
    public function block_time_widget($context, array $blocks = [])
    {
        // line 287
        ob_start();
        // line 288
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 289
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 291
            echo "        ";
            if (( !(isset($context["row"]) || array_key_exists("row", $context)) || ((isset($context["row"]) ? $context["row"] : null) == true))) {
                // line 292
                echo "            ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), ["class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", []), "")) : ("")) . " row")]);
                // line 293
                echo "        ";
            }
            // line 294
            echo "        ";
            $context["input_wrapper_class"] = (((isset($context["input_wrapper_class"]) || array_key_exists("input_wrapper_class", $context))) ? (_twig_default_filter((isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : null), "col-sm-6")) : ("col-sm-6"));
            // line 295
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"";
            // line 296
            echo twig_escape_filter($this->env, (isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : null), "html", null, true);
            echo "\">
                ";
            // line 297
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "hour", []), 'widget');
            echo "
            </div>
            ";
            // line 299
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : null)) {
                // line 300
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, (isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : null), "html", null, true);
                echo "\">
                    ";
                // line 301
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "minute", []), 'widget');
                echo "
                </div>
            ";
            }
            // line 304
            echo "            ";
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : null)) {
                // line 305
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, (isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : null), "html", null, true);
                echo "\">
                    ";
                // line 306
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "second", []), 'widget');
                echo "
                </div>
            ";
            }
            // line 309
            echo "        </div>
    ";
        }
        // line 311
        echo "    ";
        $this->displayBlock("sonata_help", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 315
    public function block_datetime_widget($context, array $blocks = [])
    {
        // line 316
        ob_start();
        // line 317
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 318
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 320
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), ["class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", []), "")) : ("")) . " row")]);
            // line 321
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 322
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", []), 'errors');
            echo "
            ";
            // line 323
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "time", []), 'errors');
            echo "

            ";
            // line 325
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", []), "vars", []), "widget", []) == "single_text")) {
                // line 326
                echo "                <div class=\"col-sm-2\">
                    ";
                // line 327
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", []), 'widget');
                echo "
                </div>
            ";
            } else {
                // line 330
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", []), 'widget', ["row" => false, "input_wrapper_class" => "col-sm-2"]);
                echo "
            ";
            }
            // line 332
            echo "
            ";
            // line 333
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "time", []), "vars", []), "widget", []) == "single_text")) {
                // line 334
                echo "                <div class=\"col-sm-2\">
                    ";
                // line 335
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "time", []), 'widget');
                echo "
                </div>
            ";
            } else {
                // line 338
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "time", []), 'widget', ["row" => false, "input_wrapper_class" => "col-sm-2"]);
                echo "
            ";
            }
            // line 340
            echo "        </div>
    ";
        }
        // line 342
        echo "    ";
        if ( !(isset($context["datepicker_use_button"]) || array_key_exists("datepicker_use_button", $context))) {
            // line 343
            echo "        ";
            $this->displayBlock("sonata_help", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 348
    public function block_form_row($context, array $blocks = [])
    {
        // line 349
        echo "    ";
        $context["show_label"] = (((isset($context["show_label"]) || array_key_exists("show_label", $context))) ? (_twig_default_filter((isset($context["show_label"]) ? $context["show_label"] : null), true)) : (true));
        // line 350
        echo "    <div class=\"form-group";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            echo " has-error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\">
        ";
        // line 351
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", [], "any", false, true), "options", [], "any", true, true)) {
            // line 352
            echo "            ";
            $context["label"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", [], "any", false, true), "options", [], "any", false, true), "name", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", [], "any", false, true), "options", [], "any", false, true), "name", []), (isset($context["label"]) ? $context["label"] : null))) : ((isset($context["label"]) ? $context["label"] : null)));
            // line 353
            echo "        ";
        }
        // line 354
        echo "
        ";
        // line 355
        $context["div_class"] = "sonata-ba-field";
        // line 356
        echo "
        ";
        // line 357
        if (((isset($context["label"]) ? $context["label"] : null) === false)) {
            // line 358
            echo "            ";
            $context["div_class"] = ((isset($context["div_class"]) ? $context["div_class"] : null) . " sonata-collection-row-without-label");
            // line 359
            echo "        ";
        }
        // line 360
        echo "
        ";
        // line 361
        if (((isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context)) && ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "options", []), "form_type", [], "array") == "horizontal"))) {
            // line 362
            echo "            ";
            // line 363
            echo "            ";
            if ((((isset($context["label"]) ? $context["label"] : null) === false) || $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", [], "any", false, true), "checked", [], "any", true, true))) {
                // line 364
                echo "                ";
                if (twig_in_filter("collection", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", []), "vars", []), "block_prefixes", []))) {
                    // line 365
                    echo "                    ";
                    $context["div_class"] = ((isset($context["div_class"]) ? $context["div_class"] : null) . " col-sm-12");
                    // line 366
                    echo "                ";
                } else {
                    // line 367
                    echo "                    ";
                    $context["div_class"] = ((isset($context["div_class"]) ? $context["div_class"] : null) . " col-sm-9 col-sm-offset-3");
                    // line 368
                    echo "                ";
                }
                // line 369
                echo "            ";
            } else {
                // line 370
                echo "                ";
                $context["div_class"] = ((isset($context["div_class"]) ? $context["div_class"] : null) . " col-sm-9");
                // line 371
                echo "            ";
            }
            // line 372
            echo "        ";
        }
        // line 373
        echo "
        ";
        // line 374
        if ((isset($context["show_label"]) ? $context["show_label"] : null)) {
            // line 375
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', (twig_test_empty($_label_ = (((isset($context["label"]) || array_key_exists("label", $context))) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : null), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
        ";
        }
        // line 377
        echo "
        ";
        // line 378
        if (((isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context)) && (isset($context["sonata_admin_enabled"]) ? $context["sonata_admin_enabled"] : null))) {
            // line 379
            echo "            ";
            $context["div_class"] = (((((isset($context["div_class"]) ? $context["div_class"] : null) . " sonata-ba-field-") . $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit", [])) . "-") . $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "inline", []));
            // line 380
            echo "        ";
        }
        // line 381
        echo "
        ";
        // line 382
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 383
            echo "            ";
            $context["div_class"] = ((isset($context["div_class"]) ? $context["div_class"] : null) . " sonata-ba-field-error");
            // line 384
            echo "        ";
        }
        // line 385
        echo "
        <div class=\"";
        // line 386
        echo twig_escape_filter($this->env, (isset($context["div_class"]) ? $context["div_class"] : null), "html", null, true);
        echo "\">
            ";
        // line 387
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget', ["horizontal" => false, "horizontal_input_wrapper_class" => ""]);
        echo " ";
        // line 388
        echo "
            ";
        // line 389
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 390
            echo "                <div class=\"help-block sonata-ba-field-error-messages\">
                    ";
            // line 391
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            echo "
                </div>
            ";
        }
        // line 394
        echo "
            ";
        // line 395
        if ((((isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context)) && (isset($context["sonata_admin_enabled"]) ? $context["sonata_admin_enabled"] : null)) && (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", [], "any", false, true), "help", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", [], "any", false, true), "help", []), false)) : (false)))) {
            // line 396
            echo "                <span class=\"help-block sonata-ba-field-help\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "help", []), [], (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "translationDomain", [])) ? ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "translationDomain", [])) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "translationDomain", []))));
            echo "</span>
            ";
        }
        // line 398
        echo "        </div>
    </div>
";
    }

    // line 402
    public function block_checkbox_row($context, array $blocks = [])
    {
        // line 403
        $context["show_label"] = false;
        // line 404
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 407
    public function block_radio_row($context, array $blocks = [])
    {
        // line 408
        $context["show_label"] = false;
        // line 409
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 412
    public function block_sonata_type_native_collection_widget_row($context, array $blocks = [])
    {
        // line 413
        ob_start();
        // line 414
        echo "    <div class=\"sonata-collection-row\">
        ";
        // line 415
        if ((isset($context["allow_delete"]) ? $context["allow_delete"] : null)) {
            // line 416
            echo "            <div class=\"row\">
                <div class=\"col-xs-1\">
                    <a href=\"#\" class=\"btn btn-link sonata-collection-delete\">
                        <i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                <div class=\"col-xs-11\">
        ";
        }
        // line 424
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'row', ["label" => false]);
        echo "
        ";
        // line 425
        if ((isset($context["allow_delete"]) ? $context["allow_delete"] : null)) {
            // line 426
            echo "                </div>
            </div>
        ";
        }
        // line 429
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 433
    public function block_sonata_type_native_collection_widget($context, array $blocks = [])
    {
        // line 434
        ob_start();
        // line 435
        echo "    ";
        if ((isset($context["prototype"]) || array_key_exists("prototype", $context))) {
            // line 436
            echo "        ";
            $context["child"] = (isset($context["prototype"]) ? $context["prototype"] : null);
            // line 437
            echo "        ";
            $context["allow_delete_backup"] = (isset($context["allow_delete"]) ? $context["allow_delete"] : null);
            // line 438
            echo "        ";
            $context["allow_delete"] = true;
            // line 439
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), ["data-prototype" =>             $this->renderBlock("sonata_type_native_collection_widget_row", $context, $blocks), "data-prototype-name" => $this->getAttribute($this->getAttribute((isset($context["prototype"]) ? $context["prototype"] : null), "vars", []), "name", []), "class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", []), "")) : (""))]);
            // line 440
            echo "        ";
            $context["allow_delete"] = (isset($context["allow_delete_backup"]) ? $context["allow_delete_backup"] : null);
            // line 441
            echo "    ";
        }
        // line 442
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 443
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
        ";
        // line 444
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 445
            echo "            ";
            $this->displayBlock("sonata_type_native_collection_widget_row", $context, $blocks);
            echo "
        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 447
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
        ";
        // line 448
        if ((isset($context["allow_add"]) ? $context["allow_add"] : null)) {
            // line 449
            echo "            <div><a href=\"#\" class=\"btn btn-link sonata-collection-add\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i></a></div>
        ";
        }
        // line 451
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 455
    public function block_sonata_type_immutable_array_widget($context, array $blocks = [])
    {
        // line 456
        echo "    ";
        ob_start();
        // line 457
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 458
        $this->displayBlock("sonata_help", $context, $blocks);
        echo "

            ";
        // line 460
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

            ";
        // line 462
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
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
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 463
            echo "                ";
            $this->displayBlock("sonata_type_immutable_array_widget_row", $context, $blocks);
            echo "
            ";
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 465
        echo "
            ";
        // line 466
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 471
    public function block_sonata_type_immutable_array_widget_row($context, array $blocks = [])
    {
        // line 472
        echo "    ";
        ob_start();
        // line 473
        echo "        <div class=\"form-group";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "vars", []), "errors", [])) > 0)) {
            echo " has-error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
        echo "\">

            ";
        // line 475
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'label');
        echo "

            ";
        // line 477
        $context["div_class"] = "";
        // line 478
        echo "            ";
        if (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "options", []), "form_type", [], "array") == "horizontal")) {
            // line 479
            echo "                ";
            $context["div_class"] = "col-sm-9";
            // line 480
            echo "            ";
        }
        // line 481
        echo "
            <div class=\"";
        // line 482
        echo twig_escape_filter($this->env, (isset($context["div_class"]) ? $context["div_class"] : null), "html", null, true);
        echo " sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit", []), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "inline", []), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "vars", []), "errors", [])) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
                ";
        // line 483
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'widget', ["horizontal" => false, "horizontal_input_wrapper_class" => ""]);
        echo " ";
        // line 484
        echo "                ";
        $context["sonata_help"] = $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "vars", []), "sonata_help", []);
        // line 485
        echo "                ";
        $this->displayBlock("sonata_help", $context, $blocks);
        echo "
            </div>

            ";
        // line 488
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "vars", []), "errors", [])) > 0)) {
            // line 489
            echo "                <div class=\"help-block sonata-ba-field-error-messages\">
                    ";
            // line 490
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'errors');
            echo "
                </div>
            ";
        }
        // line 493
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 497
    public function block_sonata_type_model_autocomplete_widget($context, array $blocks = [])
    {
        // line 498
        echo "    ";
        $this->loadTemplate((isset($context["template"]) ? $context["template"] : null), "@SonataAdmin/Form/form_admin_fields.html.twig", 498)->display($context);
    }

    // line 501
    public function block_sonata_type_choice_field_mask_widget($context, array $blocks = [])
    {
        // line 502
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 504
        echo "    ";
        $context["main_form_name"] = twig_slice($this->env, (isset($context["id"]) ? $context["id"] : null), 0, ((twig_length_filter($this->env, (isset($context["id"]) ? $context["id"] : null)) - twig_length_filter($this->env, (isset($context["name"]) ? $context["name"] : null))) - 1));
        // line 505
        echo "    ";
        if ((isset($context["expanded"]) ? $context["expanded"] : null)) {
            // line 506
            echo "        ";
            $context["js_selector"] = (((("#" . (isset($context["main_form_name"]) ? $context["main_form_name"] : null)) . "_") . (isset($context["name"]) ? $context["name"] : null)) . " input");
            // line 507
            echo "        ";
            $context["js_event"] = "ifChecked";
            // line 508
            echo "    ";
        } else {
            // line 509
            echo "        ";
            $context["js_selector"] = ((("#" . (isset($context["main_form_name"]) ? $context["main_form_name"] : null)) . "_") . (isset($context["name"]) ? $context["name"] : null));
            // line 510
            echo "        ";
            $context["js_event"] = "change";
            // line 511
            echo "    ";
        }
        // line 512
        echo "    <script>
        jQuery(document).ready(function() {
            var allFields = ";
        // line 514
        echo twig_jsonencode_filter((isset($context["all_fields"]) ? $context["all_fields"] : null));
        echo ",
                map = ";
        // line 515
        echo twig_jsonencode_filter((isset($context["map"]) ? $context["map"] : null));
        echo ",
                showMaskChoiceEl = jQuery(\"";
        // line 516
        echo twig_escape_filter($this->env, (isset($context["js_selector"]) ? $context["js_selector"] : null), "html", null, true);
        echo "\");

            showMaskChoiceEl.on(\"";
        // line 518
        echo twig_escape_filter($this->env, (isset($context["js_event"]) ? $context["js_event"] : null), "html", null, true);
        echo "\", function () {
                choice_field_mask_show(jQuery(this).val());
            });

            function choice_field_mask_show(val) {
                var controlGroupIdFunc = function (field) {
                    // Most of fields are named with an underscore
                    var defaultFieldId = '#sonata-ba-field-container-";
        // line 525
        echo twig_escape_filter($this->env, (isset($context["main_form_name"]) ? $context["main_form_name"] : null), "html", null, true);
        echo "_' + field;

                    // Some fields may be named with a dash (like keys of immutable array form type)
                    if (jQuery(defaultFieldId).length === 0) {
                        return '#sonata-ba-field-container-";
        // line 529
        echo twig_escape_filter($this->env, (isset($context["main_form_name"]) ? $context["main_form_name"] : null), "html", null, true);
        echo "-' + field;
                    }

                    return defaultFieldId;
                };

                jQuery.each(allFields, function (i, field) {
                    jQuery(controlGroupIdFunc(field)).hide();
                });

                if (map[val]) {
                    jQuery.each(map[val], function (i, field) {
                        jQuery(controlGroupIdFunc(field)).show();
                    });
                }
            }

            ";
        // line 546
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
            // line 547
            echo "                choice_field_mask_show(showMaskChoiceEl.val());
            ";
        } else {
            // line 549
            echo "                choice_field_mask_show('";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "');
            ";
        }
        // line 551
        echo "        });

    </script>
";
    }

    // line 556
    public function block_sonata_type_choice_multiple_sortable($context, array $blocks = [])
    {
        // line 557
        echo "    <input type=\"hidden\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : null), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["value"]) ? $context["value"] : null), ","), "html", null, true);
        echo "\" />

    <script>
        jQuery(document).ready(function() {
            Admin.setup_sortable_select2(jQuery('#";
        // line 561
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "'), ";
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", []), "choices", []));
        echo ");
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Form/form_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1443 => 561,  1431 => 557,  1428 => 556,  1421 => 551,  1415 => 549,  1411 => 547,  1409 => 546,  1389 => 529,  1382 => 525,  1372 => 518,  1367 => 516,  1363 => 515,  1359 => 514,  1355 => 512,  1352 => 511,  1349 => 510,  1346 => 509,  1343 => 508,  1340 => 507,  1337 => 506,  1334 => 505,  1331 => 504,  1326 => 502,  1323 => 501,  1318 => 498,  1315 => 497,  1309 => 493,  1303 => 490,  1300 => 489,  1298 => 488,  1291 => 485,  1288 => 484,  1285 => 483,  1273 => 482,  1270 => 481,  1267 => 480,  1264 => 479,  1261 => 478,  1259 => 477,  1254 => 475,  1242 => 473,  1239 => 472,  1236 => 471,  1228 => 466,  1225 => 465,  1208 => 463,  1191 => 462,  1186 => 460,  1181 => 458,  1176 => 457,  1173 => 456,  1170 => 455,  1164 => 451,  1160 => 449,  1158 => 448,  1153 => 447,  1136 => 445,  1119 => 444,  1115 => 443,  1110 => 442,  1107 => 441,  1104 => 440,  1101 => 439,  1098 => 438,  1095 => 437,  1092 => 436,  1089 => 435,  1087 => 434,  1084 => 433,  1078 => 429,  1073 => 426,  1071 => 425,  1066 => 424,  1056 => 416,  1054 => 415,  1051 => 414,  1049 => 413,  1046 => 412,  1041 => 409,  1039 => 408,  1036 => 407,  1031 => 404,  1029 => 403,  1026 => 402,  1020 => 398,  1014 => 396,  1012 => 395,  1009 => 394,  1003 => 391,  1000 => 390,  998 => 389,  995 => 388,  992 => 387,  988 => 386,  985 => 385,  982 => 384,  979 => 383,  977 => 382,  974 => 381,  971 => 380,  968 => 379,  966 => 378,  963 => 377,  957 => 375,  955 => 374,  952 => 373,  949 => 372,  946 => 371,  943 => 370,  940 => 369,  937 => 368,  934 => 367,  931 => 366,  928 => 365,  925 => 364,  922 => 363,  920 => 362,  918 => 361,  915 => 360,  912 => 359,  909 => 358,  907 => 357,  904 => 356,  902 => 355,  899 => 354,  896 => 353,  893 => 352,  891 => 351,  882 => 350,  879 => 349,  876 => 348,  867 => 343,  864 => 342,  860 => 340,  854 => 338,  848 => 335,  845 => 334,  843 => 333,  840 => 332,  834 => 330,  828 => 327,  825 => 326,  823 => 325,  818 => 323,  814 => 322,  809 => 321,  806 => 320,  800 => 318,  797 => 317,  795 => 316,  792 => 315,  784 => 311,  780 => 309,  774 => 306,  769 => 305,  766 => 304,  760 => 301,  755 => 300,  753 => 299,  748 => 297,  744 => 296,  739 => 295,  736 => 294,  733 => 293,  730 => 292,  727 => 291,  721 => 289,  718 => 288,  716 => 287,  713 => 286,  704 => 281,  701 => 280,  696 => 277,  694 => 276,  693 => 275,  692 => 274,  691 => 273,  686 => 272,  683 => 271,  680 => 270,  677 => 269,  674 => 268,  668 => 266,  665 => 265,  663 => 264,  660 => 263,  650 => 257,  647 => 256,  644 => 255,  638 => 253,  636 => 252,  631 => 251,  628 => 250,  625 => 249,  621 => 247,  618 => 246,  615 => 244,  612 => 242,  609 => 241,  607 => 240,  600 => 239,  598 => 238,  595 => 237,  592 => 236,  589 => 234,  586 => 232,  583 => 231,  581 => 230,  574 => 229,  572 => 228,  564 => 227,  558 => 225,  555 => 224,  553 => 223,  550 => 222,  547 => 221,  544 => 220,  541 => 219,  538 => 218,  535 => 217,  533 => 216,  530 => 215,  524 => 211,  517 => 209,  515 => 208,  513 => 207,  512 => 204,  509 => 203,  505 => 202,  500 => 201,  497 => 200,  495 => 199,  492 => 198,  486 => 194,  483 => 192,  480 => 190,  477 => 188,  475 => 187,  472 => 186,  470 => 185,  468 => 184,  453 => 183,  450 => 182,  447 => 181,  444 => 180,  441 => 179,  438 => 178,  435 => 177,  432 => 176,  429 => 175,  426 => 174,  423 => 173,  421 => 172,  418 => 171,  415 => 170,  412 => 169,  409 => 168,  405 => 165,  402 => 164,  398 => 161,  395 => 160,  388 => 155,  382 => 153,  379 => 151,  377 => 150,  375 => 149,  373 => 148,  358 => 147,  355 => 146,  351 => 143,  348 => 140,  347 => 139,  346 => 138,  344 => 137,  342 => 136,  339 => 135,  336 => 134,  333 => 133,  330 => 132,  327 => 131,  324 => 130,  322 => 129,  319 => 128,  316 => 127,  314 => 126,  311 => 125,  309 => 124,  306 => 123,  303 => 122,  300 => 121,  297 => 120,  295 => 119,  292 => 118,  287 => 113,  285 => 112,  283 => 111,  280 => 109,  278 => 108,  276 => 107,  273 => 106,  268 => 102,  266 => 101,  264 => 100,  261 => 98,  259 => 97,  257 => 96,  254 => 95,  247 => 91,  241 => 88,  238 => 87,  235 => 86,  232 => 85,  229 => 84,  224 => 81,  221 => 80,  217 => 78,  215 => 77,  212 => 76,  209 => 75,  207 => 74,  201 => 72,  199 => 71,  197 => 70,  194 => 69,  191 => 68,  188 => 66,  186 => 65,  183 => 64,  179 => 60,  175 => 59,  172 => 58,  168 => 55,  164 => 54,  161 => 53,  155 => 50,  150 => 49,  147 => 48,  144 => 47,  137 => 44,  134 => 43,  131 => 42,  128 => 41,  125 => 40,  122 => 39,  118 => 36,  114 => 35,  111 => 34,  102 => 29,  100 => 28,  98 => 27,  95 => 26,  90 => 23,  86 => 22,  83 => 21,  74 => 19,  70 => 18,  67 => 17,  62 => 16,  60 => 15,  57 => 14,  11 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SonataAdmin/Form/form_admin_fields.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/admin-bundle/src/Resources/views/Form/form_admin_fields.html.twig");
    }
}
