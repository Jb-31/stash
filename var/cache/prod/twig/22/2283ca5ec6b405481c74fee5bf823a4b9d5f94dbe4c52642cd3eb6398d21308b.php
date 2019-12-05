<?php

/* SonataCoreBundle:Form:datepicker.html.twig */
class __TwigTemplate_556a30548ef293443a7c4922e1e562ff3b2f13942eab7abd6464816c40f3eaea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'sonata_type_date_picker_widget_html' => [$this, 'block_sonata_type_date_picker_widget_html'],
            'sonata_type_date_picker_widget' => [$this, 'block_sonata_type_date_picker_widget'],
            'sonata_type_datetime_picker_widget_html' => [$this, 'block_sonata_type_datetime_picker_widget_html'],
            'sonata_type_datetime_picker_widget' => [$this, 'block_sonata_type_datetime_picker_widget'],
            'sonata_type_datetime_range_script_block' => [$this, 'block_sonata_type_datetime_range_script_block'],
            'sonata_type_datetime_range_picker_widget' => [$this, 'block_sonata_type_datetime_range_picker_widget'],
            'sonata_type_date_range_picker_widget' => [$this, 'block_sonata_type_date_range_picker_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 11
        $this->displayBlock('sonata_type_date_picker_widget_html', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('sonata_type_date_picker_widget', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('sonata_type_datetime_picker_widget_html', $context, $blocks);
        // line 53
        echo "
";
        // line 54
        $this->displayBlock('sonata_type_datetime_picker_widget', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('sonata_type_datetime_range_script_block', $context, $blocks);
        // line 88
        echo "
";
        // line 89
        $this->displayBlock('sonata_type_datetime_range_picker_widget', $context, $blocks);
        // line 94
        echo "
";
        // line 95
        $this->displayBlock('sonata_type_date_range_picker_widget', $context, $blocks);
    }

    // line 11
    public function block_sonata_type_date_picker_widget_html($context, array $blocks = [])
    {
        // line 12
        echo "    ";
        if ((isset($context["datepicker_use_button"]) ? $context["datepicker_use_button"] : null)) {
            // line 13
            echo "        <div class='input-group date' id='dp_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "'>
    ";
        }
        // line 15
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), ["data-date-format" => (isset($context["moment_format"]) ? $context["moment_format"] : null)]);
        // line 16
        echo "    ";
        $this->displayBlock("date_widget", $context, $blocks);
        echo "
    ";
        // line 17
        if ((isset($context["datepicker_use_button"]) ? $context["datepicker_use_button"] : null)) {
            // line 18
            echo "            <span class=\"input-group-addon\"><span class=\"fa fa-calendar\"></span></span>
        </div>
    ";
        }
    }

    // line 23
    public function block_sonata_type_date_picker_widget($context, array $blocks = [])
    {
        // line 24
        echo "    ";
        ob_start();
        // line 25
        echo "        ";
        if ((isset($context["wrap_fields_with_addons"]) ? $context["wrap_fields_with_addons"] : null)) {
            // line 26
            echo "            <div class=\"input-group\">
                ";
            // line 27
            $this->displayBlock("sonata_type_date_picker_widget_html", $context, $blocks);
            echo "
            </div>
        ";
        } else {
            // line 30
            echo "            ";
            $this->displayBlock("sonata_type_date_picker_widget_html", $context, $blocks);
            echo "
        ";
        }
        // line 32
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                \$('#";
        // line 34
        echo (((isset($context["datepicker_use_button"]) ? $context["datepicker_use_button"] : null)) ? ("dp_") : (""));
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "').datetimepicker(";
        echo twig_jsonencode_filter((isset($context["dp_options"]) ? $context["dp_options"] : null));
        echo ");
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 40
    public function block_sonata_type_datetime_picker_widget_html($context, array $blocks = [])
    {
        // line 41
        echo "    ";
        if ((isset($context["datepicker_use_button"]) ? $context["datepicker_use_button"] : null)) {
            // line 42
            echo "        <div class='input-group date ";
            if ( !$this->getAttribute((isset($context["dp_options"]) ? $context["dp_options"] : null), "pickDate", [], "array")) {
                echo "timepicker";
            }
            echo "' id='dtp_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "'>
    ";
        }
        // line 44
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), ["data-date-format" => (isset($context["moment_format"]) ? $context["moment_format"] : null)]);
        // line 45
        echo "    ";
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
    ";
        // line 46
        if ((isset($context["datepicker_use_button"]) ? $context["datepicker_use_button"] : null)) {
            // line 47
            echo "            <span class=\"input-group-addon\">
                <span class=\"fa ";
            // line 48
            if ($this->getAttribute((isset($context["dp_options"]) ? $context["dp_options"] : null), "pickDate", [], "array")) {
                echo "fa-calendar";
            } else {
                echo "fa-clock";
            }
            echo "\"></span>
            </span>
        </div>
    ";
        }
    }

    // line 54
    public function block_sonata_type_datetime_picker_widget($context, array $blocks = [])
    {
        // line 55
        echo "    ";
        ob_start();
        // line 56
        echo "        ";
        if ((isset($context["wrap_fields_with_addons"]) ? $context["wrap_fields_with_addons"] : null)) {
            // line 57
            echo "            <div class=\"input-group\">
                ";
            // line 58
            $this->displayBlock("sonata_type_datetime_picker_widget_html", $context, $blocks);
            echo "
            </div>
        ";
        } else {
            // line 61
            echo "            ";
            $this->displayBlock("sonata_type_datetime_picker_widget_html", $context, $blocks);
            echo "
        ";
        }
        // line 63
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                \$('#";
        // line 65
        echo (((isset($context["datepicker_use_button"]) ? $context["datepicker_use_button"] : null)) ? ("dtp_") : (""));
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "').datetimepicker(";
        echo twig_jsonencode_filter((isset($context["dp_options"]) ? $context["dp_options"] : null));
        echo ");
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 71
    public function block_sonata_type_datetime_range_script_block($context, array $blocks = [])
    {
        // line 72
        echo "    ";
        ob_start();
        // line 73
        echo "        ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
        <script type=\"text/javascript\">
            jQuery(function (\$) {
                var \$startDateTimePicker = \$('#";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["startId"]) ? $context["startId"] : null), "html", null, true);
        echo "');
                var \$endDateTimePicker = \$('#";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["endId"]) ? $context["endId"] : null), "html", null, true);
        echo "');
                \$startDateTimePicker.on(\"dp.change\", function (e) {
                    \$endDateTimePicker.data(\"DateTimePicker\").setMinDate(e.date);
                });
                \$endDateTimePicker.on(\"dp.change\", function (e) {
                    \$startDateTimePicker.data(\"DateTimePicker\").setMaxDate(e.date);
                });
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 89
    public function block_sonata_type_datetime_range_picker_widget($context, array $blocks = [])
    {
        // line 90
        echo "    ";
        $context["startId"] = ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", []), "start", []), "vars", []), "datepicker_use_button", [])) ? ("dtp_") : ("")) . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", []), "start", []), "vars", []), "id", []));
        // line 91
        echo "    ";
        $context["endId"] = ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", []), "end", []), "vars", []), "datepicker_use_button", [])) ? ("dtp_") : ("")) . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", []), "end", []), "vars", []), "id", []));
        // line 92
        echo "    ";
        $this->displayBlock("sonata_type_datetime_range_script_block", $context, $blocks);
        echo "
";
    }

    // line 95
    public function block_sonata_type_date_range_picker_widget($context, array $blocks = [])
    {
        // line 96
        echo "    ";
        $context["startId"] = ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", []), "start", []), "vars", []), "datepicker_use_button", [])) ? ("dp_") : ("")) . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", []), "start", []), "vars", []), "id", []));
        // line 97
        echo "    ";
        $context["endId"] = ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", []), "end", []), "vars", []), "datepicker_use_button", [])) ? ("dp_") : ("")) . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", []), "end", []), "vars", []), "id", []));
        // line 98
        echo "    ";
        $this->displayBlock("sonata_type_datetime_range_script_block", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:Form:datepicker.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  268 => 98,  265 => 97,  262 => 96,  259 => 95,  252 => 92,  249 => 91,  246 => 90,  243 => 89,  228 => 77,  224 => 76,  217 => 73,  214 => 72,  211 => 71,  199 => 65,  195 => 63,  189 => 61,  183 => 58,  180 => 57,  177 => 56,  174 => 55,  171 => 54,  158 => 48,  155 => 47,  153 => 46,  148 => 45,  145 => 44,  135 => 42,  132 => 41,  129 => 40,  117 => 34,  113 => 32,  107 => 30,  101 => 27,  98 => 26,  95 => 25,  92 => 24,  89 => 23,  82 => 18,  80 => 17,  75 => 16,  72 => 15,  66 => 13,  63 => 12,  60 => 11,  56 => 95,  53 => 94,  51 => 89,  48 => 88,  46 => 71,  43 => 70,  41 => 54,  38 => 53,  36 => 40,  33 => 39,  31 => 23,  28 => 22,  26 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataCoreBundle:Form:datepicker.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/views/Form/datepicker.html.twig");
    }
}
