<?php

/* @SonataAdmin/Form/filter_admin_fields.html.twig */
class __TwigTemplate_796add52554b8d4ff2944631b4d80ae17727f4a3045f6085b30ae5195506773a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "@SonataAdmin/Form/filter_admin_fields.html.twig", 12);
        $this->blocks = [
            'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
            'textarea_widget' => [$this, 'block_textarea_widget'],
            'form_widget_simple' => [$this, 'block_form_widget_simple'],
            'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
            'checkbox_widget' => [$this, 'block_checkbox_widget'],
            'sonata_type_model_autocomplete_widget' => [$this, 'block_sonata_type_model_autocomplete_widget'],
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

    // line 18
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        // line 19
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), ["class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", []), "")) : ("")) . " form-control")]);
        // line 20
        echo "    ";
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        echo "
";
    }

    // line 23
    public function block_textarea_widget($context, array $blocks = [])
    {
        // line 24
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), ["class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", []), "")) : ("")) . " form-control")]);
        // line 25
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
";
    }

    // line 28
    public function block_form_widget_simple($context, array $blocks = [])
    {
        // line 29
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), ["class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", []), "")) : ("")) . " form-control")]);
        // line 30
        echo "    ";
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
";
    }

    // line 33
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        // line 34
        echo "    ";
        ob_start();
        // line 35
        echo "        ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), ["class" => (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", []), "")) : (""))]);
        // line 36
        echo "        ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), ["class" => (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", []) . " ") . ((((isset($context["widget_type"]) || array_key_exists("widget_type", $context)) && ((isset($context["widget_type"]) ? $context["widget_type"] : null) != ""))) ? ((((((isset($context["multiple"]) ? $context["multiple"] : null)) ? ("checkbox") : ("radio")) . "-") . (isset($context["widget_type"]) ? $context["widget_type"] : null))) : ("")))]);
        // line 37
        echo "        ";
        if ((isset($context["expanded"]) ? $context["expanded"] : null)) {
            // line 38
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), ["class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", []), "")) : (""))]);
            // line 39
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
        ";
        }
        // line 41
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 42
            echo "            ";
            if (((isset($context["widget_type"]) || array_key_exists("widget_type", $context)) && ((isset($context["widget_type"]) ? $context["widget_type"] : null) != "inline"))) {
                // line 43
                echo "                <div class=\"";
                echo (((isset($context["multiple"]) ? $context["multiple"] : null)) ? ("checkbox") : ("radio"));
                echo "\">
            ";
            }
            // line 45
            echo "            <label";
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
            // line 46
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => ["class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", []), "")) : (""))]]);
            echo "
            ";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($context["child"], "vars", []), "label", []), [], (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
            echo "
            </label>
            ";
            // line 49
            if (((isset($context["widget_type"]) || array_key_exists("widget_type", $context)) && ((isset($context["widget_type"]) ? $context["widget_type"] : null) != "inline"))) {
                // line 50
                echo "                </div>
            ";
            }
            // line 52
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        ";
        if (        $this->hasBlock("form_message", $context, $blocks)) {
            // line 54
            echo "            ";
            $this->displayBlock("form_message", $context, $blocks);
            echo "
        ";
        }
        // line 56
        echo "        ";
        if ((isset($context["expanded"]) ? $context["expanded"] : null)) {
            // line 57
            echo "            </div>
        ";
        }
        // line 59
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 62
    public function block_checkbox_widget($context, array $blocks = [])
    {
        // line 63
        echo "    ";
        ob_start();
        // line 64
        echo "        ";
        if (( !((isset($context["label"]) ? $context["label"] : null) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : null)))) {
            // line 65
            echo "            ";
            $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : null));
            // line 66
            echo "        ";
        }
        // line 67
        echo "        ";
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", []) != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", []), "vars", []), "block_prefixes", [])))) {
            // line 68
            echo "            <div class=\"checkbox\">
        ";
        }
        // line 70
        echo "
        ";
        // line 71
        if (((($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", []) != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", []), "vars", []), "block_prefixes", []))) && (isset($context["label_render"]) || array_key_exists("label_render", $context)))) {
            // line 72
            echo "            <label class=\"";
            if (((isset($context["inline"]) || array_key_exists("inline", $context)) && (isset($context["inline"]) ? $context["inline"] : null))) {
                echo "checkbox-inline";
            }
            echo "\">
        ";
        }
        // line 74
        echo "
        <input type=\"checkbox\" ";
        // line 75
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["value"]) || array_key_exists("value", $context))) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : null)) {
            echo " checked=\"checked\"";
        }
        echo "/>
        ";
        // line 76
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", []) != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", []), "vars", []), "block_prefixes", [])))) {
            // line 77
            echo "            ";
            if (((isset($context["label_render"]) || array_key_exists("label_render", $context)) && twig_in_filter((isset($context["widget_checkbox_label"]) ? $context["widget_checkbox_label"] : null), [0 => "both", 1 => "widget"]))) {
                // line 78
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : null), [], (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                echo "
                </label>
            ";
            }
            // line 81
            echo "        ";
        }
        // line 82
        echo "        ";
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", []) != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", []), "vars", []), "block_prefixes", [])))) {
            // line 83
            echo "            </div>
            ";
            // line 84
            if (            $this->hasBlock("form_message", $context, $blocks)) {
                // line 85
                echo "                ";
                $this->displayBlock("form_message", $context, $blocks);
                echo "
            ";
            }
            // line 87
            echo "        ";
        }
        // line 88
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 91
    public function block_sonata_type_model_autocomplete_widget($context, array $blocks = [])
    {
        // line 92
        echo "    ";
        $this->loadTemplate((isset($context["template"]) ? $context["template"] : null), "@SonataAdmin/Form/filter_admin_fields.html.twig", 92)->display($context);
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Form/filter_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 92,  255 => 91,  250 => 88,  247 => 87,  241 => 85,  239 => 84,  236 => 83,  233 => 82,  230 => 81,  223 => 78,  220 => 77,  218 => 76,  206 => 75,  203 => 74,  195 => 72,  193 => 71,  190 => 70,  186 => 68,  183 => 67,  180 => 66,  177 => 65,  174 => 64,  171 => 63,  168 => 62,  163 => 59,  159 => 57,  156 => 56,  150 => 54,  147 => 53,  141 => 52,  137 => 50,  135 => 49,  130 => 47,  126 => 46,  110 => 45,  104 => 43,  101 => 42,  96 => 41,  90 => 39,  87 => 38,  84 => 37,  81 => 36,  78 => 35,  75 => 34,  72 => 33,  65 => 30,  62 => 29,  59 => 28,  52 => 25,  49 => 24,  46 => 23,  39 => 20,  36 => 19,  33 => 18,  11 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SonataAdmin/Form/filter_admin_fields.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/admin-bundle/src/Resources/views/Form/filter_admin_fields.html.twig");
    }
}
