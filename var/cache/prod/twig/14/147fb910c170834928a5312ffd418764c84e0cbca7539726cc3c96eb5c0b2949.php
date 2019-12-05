<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_518c5b5e32c5d3721e58975bea65fa3a24918167687aab88aa249af5ff2f77c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'html_attributes' => [$this, 'block_html_attributes'],
            'meta_tags' => [$this, 'block_meta_tags'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'sonata_javascript_config' => [$this, 'block_sonata_javascript_config'],
            'sonata_javascript_pool' => [$this, 'block_sonata_javascript_pool'],
            'sonata_head_title' => [$this, 'block_sonata_head_title'],
            'body_attributes' => [$this, 'block_body_attributes'],
            'sonata_header' => [$this, 'block_sonata_header'],
            'sonata_header_noscript_warning' => [$this, 'block_sonata_header_noscript_warning'],
            'logo' => [$this, 'block_logo'],
            'sonata_nav' => [$this, 'block_sonata_nav'],
            'sonata_breadcrumb' => [$this, 'block_sonata_breadcrumb'],
            'sonata_top_nav_menu' => [$this, 'block_sonata_top_nav_menu'],
            'sonata_top_nav_menu_add_block' => [$this, 'block_sonata_top_nav_menu_add_block'],
            'sonata_top_nav_menu_user_block' => [$this, 'block_sonata_top_nav_menu_user_block'],
            'sonata_wrapper' => [$this, 'block_sonata_wrapper'],
            'sonata_left_side' => [$this, 'block_sonata_left_side'],
            'sonata_side_nav' => [$this, 'block_sonata_side_nav'],
            'sonata_sidebar_search' => [$this, 'block_sonata_sidebar_search'],
            'side_bar_before_nav' => [$this, 'block_side_bar_before_nav'],
            'side_bar_nav' => [$this, 'block_side_bar_nav'],
            'side_bar_after_nav' => [$this, 'block_side_bar_after_nav'],
            'side_bar_after_nav_content' => [$this, 'block_side_bar_after_nav_content'],
            'sonata_page_content' => [$this, 'block_sonata_page_content'],
            'sonata_page_content_header' => [$this, 'block_sonata_page_content_header'],
            'sonata_page_content_nav' => [$this, 'block_sonata_page_content_nav'],
            'tab_menu_navbar_header' => [$this, 'block_tab_menu_navbar_header'],
            'sonata_admin_content_actions_wrappers' => [$this, 'block_sonata_admin_content_actions_wrappers'],
            'sonata_admin_content' => [$this, 'block_sonata_admin_content'],
            'notice' => [$this, 'block_notice'],
            'bootlint' => [$this, 'block_bootlint'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 12
        $context["_preview"] = ((        $this->hasBlock("preview", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("preview", $context, $blocks))) : (null));
        // line 13
        $context["_form"] = ((        $this->hasBlock("form", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("form", $context, $blocks))) : (null));
        // line 14
        $context["_show"] = ((        $this->hasBlock("show", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("show", $context, $blocks))) : (null));
        // line 15
        $context["_list_table"] = ((        $this->hasBlock("list_table", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_table", $context, $blocks))) : (null));
        // line 16
        $context["_list_filters"] = ((        $this->hasBlock("list_filters", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters", $context, $blocks))) : (null));
        // line 17
        $context["_tab_menu"] = ((        $this->hasBlock("tab_menu", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("tab_menu", $context, $blocks))) : (null));
        // line 18
        $context["_content"] = ((        $this->hasBlock("content", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("content", $context, $blocks))) : (null));
        // line 19
        $context["_title"] = ((        $this->hasBlock("title", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("title", $context, $blocks))) : (null));
        // line 20
        $context["_breadcrumb"] = ((        $this->hasBlock("breadcrumb", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("breadcrumb", $context, $blocks))) : (null));
        // line 21
        $context["_actions"] = ((        $this->hasBlock("actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("actions", $context, $blocks))) : (null));
        // line 22
        $context["_navbar_title"] = ((        $this->hasBlock("navbar_title", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("navbar_title", $context, $blocks))) : (null));
        // line 23
        $context["_list_filters_actions"] = ((        $this->hasBlock("list_filters_actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters_actions", $context, $blocks))) : (null));
        // line 25
        echo "<!DOCTYPE html>
<html ";
        // line 26
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        ";
        // line 28
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 33
        echo "
        <meta data-sonata-admin='";
        // line 34
        echo twig_jsonencode_filter(["config" => ["CONFIRM_EXIT" => $this->getAttribute($this->getAttribute(        // line 36
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "adminPool", []), "getOption", [0 => "confirm_exit"], "method"), "USE_SELECT2" => $this->getAttribute($this->getAttribute(        // line 37
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "adminPool", []), "getOption", [0 => "use_select2"], "method"), "USE_ICHECK" => $this->getAttribute($this->getAttribute(        // line 38
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "adminPool", []), "getOption", [0 => "use_icheck"], "method"), "USE_STICKYFORMS" => $this->getAttribute($this->getAttribute(        // line 39
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "adminPool", []), "getOption", [0 => "use_stickyforms"], "method"), "DEBUG" => $this->getAttribute($this->getAttribute(        // line 40
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "adminPool", []), "getOption", [0 => "js_debug"], "method")], "translations" => ["CONFIRM_EXIT" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("confirm_exit", [], "SonataAdminBundle")]]);
        // line 45
        echo "'
        >

        ";
        // line 48
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 53
        echo "
        ";
        // line 54
        $this->displayBlock('javascripts', $context, $blocks);
        // line 82
        echo "
        <title>
        ";
        // line 84
        $this->displayBlock('sonata_head_title', $context, $blocks);
        // line 110
        echo "        </title>
    </head>
    <body
            ";
        // line 113
        $this->displayBlock('body_attributes', $context, $blocks);
        // line 119
        echo ">

    <div class=\"wrapper\">

        ";
        // line 123
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 223
        echo "
        ";
        // line 224
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 362
        echo "    </div>

    ";
        // line 364
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "adminPool", []), "getOption", [0 => "use_bootlint"], "method")) {
            // line 365
            echo "        ";
            $this->displayBlock('bootlint', $context, $blocks);
            // line 371
            echo "    ";
        }
        // line 372
        echo "
    </body>
</html>
";
    }

    // line 26
    public function block_html_attributes($context, array $blocks = [])
    {
        echo "class=\"no-js\"";
    }

    // line 28
    public function block_meta_tags($context, array $blocks = [])
    {
        // line 29
        echo "            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
    }

    // line 48
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 49
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "adminPool", []), "getOption", [0 => "stylesheets", 1 => []], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 50
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["stylesheet"]), "html", null, true);
            echo "\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        ";
    }

    // line 54
    public function block_javascripts($context, array $blocks = [])
    {
        // line 55
        echo "            ";
        $this->displayBlock('sonata_javascript_config', $context, $blocks);
        // line 57
        echo "
            ";
        // line 58
        $this->displayBlock('sonata_javascript_pool', $context, $blocks);
        // line 63
        echo "
            ";
        // line 65
        echo "            ";
        $context["localeForMoment"] = $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getCanonicalizedLocaleForMoment($context);
        // line 66
        echo "            ";
        if ((isset($context["localeForMoment"]) ? $context["localeForMoment"] : null)) {
            // line 67
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/moment/locale/" .             // line 69
(isset($context["localeForMoment"]) ? $context["localeForMoment"] : null)) . ".js")), "html", null, true);
            // line 71
            echo "\"></script>
            ";
        }
        // line 73
        echo "
            ";
        // line 75
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "adminPool", []), "getOption", [0 => "use_select2"], "method")) {
            // line 76
            echo "                ";
            $context["localeForSelect2"] = $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getCanonicalizedLocaleForSelect2($context);
            // line 77
            echo "                ";
            if ((isset($context["localeForSelect2"]) ? $context["localeForSelect2"] : null)) {
                // line 78
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/select2/select2_locale_" . (isset($context["localeForSelect2"]) ? $context["localeForSelect2"] : null)) . ".js")), "html", null, true);
                echo "\"></script>
                ";
            }
            // line 80
            echo "            ";
        }
        // line 81
        echo "        ";
    }

    // line 55
    public function block_sonata_javascript_config($context, array $blocks = [])
    {
        // line 56
        echo "            ";
    }

    // line 58
    public function block_sonata_javascript_pool($context, array $blocks = [])
    {
        // line 59
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "adminPool", []), "getOption", [0 => "javascripts", 1 => []], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 60
            echo "                    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["javascript"]), "html", null, true);
            echo "\"></script>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "            ";
    }

    // line 84
    public function block_sonata_head_title($context, array $blocks = [])
    {
        // line 85
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Admin", [], "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 87
        if ( !twig_test_empty((isset($context["_title"]) ? $context["_title"] : null))) {
            // line 88
            echo "                ";
            echo strip_tags((isset($context["_title"]) ? $context["_title"] : null));
            echo "
            ";
        } else {
            // line 90
            echo "                ";
            if ((isset($context["action"]) || array_key_exists("action", $context))) {
                // line 91
                echo "                    -
                    ";
                // line 92
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["breadcrumbs_builder"]) ? $context["breadcrumbs_builder"] : null), "breadcrumbs", [0 => (isset($context["admin"]) ? $context["admin"] : null), 1 => (isset($context["action"]) ? $context["action"] : null)], "method"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 93
                    echo "                        ";
                    if ( !$this->getAttribute($context["loop"], "first", [])) {
                        // line 94
                        echo "                            ";
                        if (($this->getAttribute($context["loop"], "index", []) != 2)) {
                            // line 95
                            echo "                                &gt;
                            ";
                        }
                        // line 98
                        $context["translation_domain"] = $this->getAttribute($context["menu"], "extra", [0 => "translation_domain", 1 => "messages"], "method");
                        // line 99
                        $context["label"] = $this->getAttribute($context["menu"], "label", []);
                        // line 100
                        if ( !((isset($context["translation_domain"]) ? $context["translation_domain"] : null) === false)) {
                            // line 101
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : null), $this->getAttribute($context["menu"], "extra", [0 => "translation_params", 1 => []], "method"), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
                        }
                        // line 104
                        echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                        echo "
                        ";
                    }
                    // line 106
                    echo "                    ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                echo "                ";
            }
            // line 108
            echo "            ";
        }
        // line 109
        echo "        ";
    }

    // line 113
    public function block_body_attributes($context, array $blocks = [])
    {
        // line 114
        echo "class=\"sonata-bc skin-black fixed
                ";
        // line 115
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "cookies", []), "get", [0 => "sonata_sidebar_hide"], "method")) {
            // line 116
            echo "sidebar-collapse";
        }
        // line 117
        echo "\"";
    }

    // line 123
    public function block_sonata_header($context, array $blocks = [])
    {
        // line 124
        echo "            <header class=\"main-header\">
                ";
        // line 125
        $this->displayBlock('sonata_header_noscript_warning', $context, $blocks);
        // line 132
        echo "                ";
        $this->displayBlock('logo', $context, $blocks);
        // line 144
        echo "                ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 221
        echo "            </header>
        ";
    }

    // line 125
    public function block_sonata_header_noscript_warning($context, array $blocks = [])
    {
        // line 126
        echo "                    <noscript>
                        <div class=\"noscript-warning\">
                            ";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("noscript_warning", [], "SonataAdminBundle"), "html", null, true);
        echo "
                        </div>
                    </noscript>
                ";
    }

    // line 132
    public function block_logo($context, array $blocks = [])
    {
        // line 133
        echo "                    ";
        ob_start();
        // line 134
        echo "                        <a class=\"logo\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_dashboard");
        echo "\">
                            ";
        // line 135
        if ((("single_image" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "adminPool", []), "getOption", [0 => "title_mode"], "method")) || ("both" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "adminPool", []), "getOption", [0 => "title_mode"], "method")))) {
            // line 136
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "adminPool", []), "titlelogo", [])), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "adminPool", []), "title", []), "html", null, true);
            echo "\">
                            ";
        }
        // line 138
        echo "                            ";
        if ((("single_text" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "adminPool", []), "getOption", [0 => "title_mode"], "method")) || ("both" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "adminPool", []), "getOption", [0 => "title_mode"], "method")))) {
            // line 139
            echo "                                <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "adminPool", []), "title", []), "html", null, true);
            echo "</span>
                            ";
        }
        // line 141
        echo "                        </a>
                    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 143
        echo "                ";
    }

    // line 144
    public function block_sonata_nav($context, array $blocks = [])
    {
        // line 145
        echo "                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" 
                           role=\"button\" title=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("toggle_navigation", [], "SonataAdminBundle"), "html", null, true);
        echo "\">
                            <span class=\"sr-only\">";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("toggle_navigation", [], "SonataAdminBundle"), "html", null, true);
        echo "</span>
                        </a>

                        <div class=\"navbar-left\">
                            ";
        // line 152
        $this->displayBlock('sonata_breadcrumb', $context, $blocks);
        // line 191
        echo "                        </div>

                        ";
        // line 193
        $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
        // line 219
        echo "                    </nav>
                ";
    }

    // line 152
    public function block_sonata_breadcrumb($context, array $blocks = [])
    {
        // line 153
        echo "                                <div class=\"hidden-xs\">
                                    ";
        // line 154
        if (( !twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : null)) || (isset($context["action"]) || array_key_exists("action", $context)))) {
            // line 155
            echo "                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            ";
            // line 156
            if (twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : null))) {
                // line 157
                echo "                                                ";
                if ((isset($context["action"]) || array_key_exists("action", $context))) {
                    // line 158
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["breadcrumbs_builder"]) ? $context["breadcrumbs_builder"] : null), "breadcrumbs", [0 => (isset($context["admin"]) ? $context["admin"] : null), 1 => (isset($context["action"]) ? $context["action"] : null)], "method"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 159
                        $context["translation_domain"] = $this->getAttribute($context["menu"], "extra", [0 => "translation_domain", 1 => "messages"], "method");
                        // line 160
                        $context["label"] = $this->getAttribute($context["menu"], "label", []);
                        // line 161
                        if ( !((isset($context["translation_domain"]) ? $context["translation_domain"] : null) === false)) {
                            // line 162
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : null), $this->getAttribute($context["menu"], "extra", [0 => "translation_params", 1 => []], "method"), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
                        }
                        // line 165
                        if ( !$this->getAttribute($context["loop"], "last", [])) {
                            // line 166
                            echo "                                                            <li>
                                                                ";
                            // line 167
                            if ( !twig_test_empty($this->getAttribute($context["menu"], "uri", []))) {
                                // line 168
                                echo "                                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "uri", []), "html", null, true);
                                echo "\">
                                                                        ";
                                // line 169
                                if ($this->getAttribute($context["menu"], "extra", [0 => "safe_label", 1 => true], "method")) {
                                    // line 170
                                    echo (isset($context["label"]) ? $context["label"] : null);
                                } else {
                                    // line 172
                                    echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                                }
                                // line 174
                                echo "                                                                    </a>
                                                                ";
                            } else {
                                // line 176
                                echo "                                                                    <span>";
                                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                                echo "</span>
                                                                ";
                            }
                            // line 178
                            echo "                                                            </li>
                                                        ";
                        } else {
                            // line 180
                            echo "                                                            <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                            echo "</span></li>
                                                        ";
                        }
                        // line 182
                        echo "                                                    ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 183
                    echo "                                                ";
                }
                // line 184
                echo "                                            ";
            } else {
                // line 185
                echo "                                                ";
                echo (isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : null);
                echo "
                                            ";
            }
            // line 187
            echo "                                        </ol>
                                    ";
        }
        // line 189
        echo "                                </div>
                            ";
    }

    // line 193
    public function block_sonata_top_nav_menu($context, array $blocks = [])
    {
        // line 194
        echo "                            ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", []) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "adminPool", []), "getOption", [0 => "role_admin"], "method")))) {
            // line 195
            echo "                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        ";
            // line 197
            $this->displayBlock('sonata_top_nav_menu_add_block', $context, $blocks);
            // line 205
            echo "                                        ";
            $this->displayBlock('sonata_top_nav_menu_user_block', $context, $blocks);
            // line 215
            echo "                                    </ul>
                                </div>
                            ";
        }
        // line 218
        echo "                        ";
    }

    // line 197
    public function block_sonata_top_nav_menu_add_block($context, array $blocks = [])
    {
        // line 198
        echo "                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                ";
        // line 202
        $this->loadTemplate($this->env->getExtension('Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension')->getGlobalTemplate("add_block"), "SonataAdminBundle::standard_layout.html.twig", 202)->display($context);
        // line 203
        echo "                                            </li>
                                        ";
    }

    // line 205
    public function block_sonata_top_nav_menu_user_block($context, array $blocks = [])
    {
        // line 206
        echo "                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    ";
        // line 211
        $this->loadTemplate($this->env->getExtension('Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension')->getGlobalTemplate("user_block"), "SonataAdminBundle::standard_layout.html.twig", 211)->display($context);
        // line 212
        echo "                                                </ul>
                                            </li>
                                        ";
    }

    // line 224
    public function block_sonata_wrapper($context, array $blocks = [])
    {
        // line 225
        echo "            ";
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 258
        echo "
            <div class=\"content-wrapper\">
                ";
        // line 260
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 360
        echo "            </div>
        ";
    }

    // line 225
    public function block_sonata_left_side($context, array $blocks = [])
    {
        // line 226
        echo "                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        ";
        // line 228
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 255
        echo "                    </section>
                </aside>
            ";
    }

    // line 228
    public function block_sonata_side_nav($context, array $blocks = [])
    {
        // line 229
        echo "                            ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 243
        echo "
                            ";
        // line 244
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 245
        echo "                            ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 248
        echo "                            ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 254
        echo "                        ";
    }

    // line 229
    public function block_sonata_sidebar_search($context, array $blocks = [])
    {
        // line 230
        echo "                                ";
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "adminPool", []), "getOption", [0 => "search"], "method")) {
            // line 231
            echo "                                    <form action=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_search");
            echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                        <div class=\"input-group custom-search-form\">
                                            <input type=\"text\" name=\"q\" value=\"";
            // line 233
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "get", [0 => "q"], "method"), "html", null, true);
            echo "\" class=\"form-control\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("search_placeholder", [], "SonataAdminBundle"), "html", null, true);
            echo "\">
                                            <span class=\"input-group-btn\">
                                                <button class=\"btn btn-flat\" type=\"submit\">
                                                    <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </form>
                                ";
        }
        // line 242
        echo "                            ";
    }

    // line 244
    public function block_side_bar_before_nav($context, array $blocks = [])
    {
        echo " ";
    }

    // line 245
    public function block_side_bar_nav($context, array $blocks = [])
    {
        // line 246
        echo "                                ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("sonata_admin_sidebar", ["template" => $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension')->getGlobalTemplate("knp_menu_template")]);
        echo "
                            ";
    }

    // line 248
    public function block_side_bar_after_nav($context, array $blocks = [])
    {
        // line 249
        echo "                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    ";
        // line 250
        $this->displayBlock('side_bar_after_nav_content', $context, $blocks);
        // line 252
        echo "                                </p>
                            ";
    }

    // line 250
    public function block_side_bar_after_nav_content($context, array $blocks = [])
    {
        // line 251
        echo "                                    ";
    }

    // line 260
    public function block_sonata_page_content($context, array $blocks = [])
    {
        // line 261
        echo "                    <section class=\"content-header\">

                        ";
        // line 263
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 321
        echo "                    </section>

                    <section class=\"content\">
                        ";
        // line 324
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 358
        echo "                    </section>
                ";
    }

    // line 263
    public function block_sonata_page_content_header($context, array $blocks = [])
    {
        // line 264
        echo "                            ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 320
        echo "                        ";
    }

    // line 264
    public function block_sonata_page_content_nav($context, array $blocks = [])
    {
        // line 265
        echo "                                ";
        if (((( !twig_test_empty((isset($context["_navbar_title"]) ? $context["_navbar_title"] : null)) ||  !twig_test_empty(        // line 266
(isset($context["_tab_menu"]) ? $context["_tab_menu"] : null))) ||  !twig_test_empty(        // line 267
(isset($context["_actions"]) ? $context["_actions"] : null))) ||  !twig_test_empty(        // line 268
(isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : null)))) {
            // line 270
            echo "                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            ";
            // line 272
            $this->displayBlock('tab_menu_navbar_header', $context, $blocks);
            // line 279
            echo "
                                            <div class=\"navbar-collapse\">
                                                ";
            // line 281
            if ( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : null))) {
                // line 282
                echo "                                                    <div class=\"navbar-left\">
                                                        ";
                // line 283
                echo (isset($context["_tab_menu"]) ? $context["_tab_menu"] : null);
                echo "
                                                    </div>
                                                ";
            }
            // line 286
            echo "
                                                ";
            // line 287
            if (((((isset($context["admin"]) || array_key_exists("admin", $context)) && (isset($context["action"]) || array_key_exists("action", $context))) && ((isset($context["action"]) ? $context["action"] : null) == "list")) && (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "listModes", [])) > 1))) {
                // line 288
                echo "                                                    <div class=\"nav navbar-right btn-group\">
                                                        ";
                // line 289
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "listModes", []));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 290
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", [0 => "list", 1 => twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "query", []), "all", []), ["_list_mode" => $context["mode"]])], "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getListMode", [], "method") == $context["mode"])) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["settings"], "class", []), "html", null, true);
                    echo "\"></i></a>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 292
                echo "                                                    </div>
                                                ";
            }
            // line 294
            echo "
                                                ";
            // line 295
            $this->displayBlock('sonata_admin_content_actions_wrappers', $context, $blocks);
            // line 311
            echo "
                                                ";
            // line 312
            if ( !twig_test_empty((isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : null))) {
                // line 313
                echo "                                                    ";
                echo (isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : null);
                echo "
                                                ";
            }
            // line 315
            echo "                                            </div>
                                        </div>
                                    </nav>
                                ";
        }
        // line 319
        echo "                            ";
    }

    // line 272
    public function block_tab_menu_navbar_header($context, array $blocks = [])
    {
        // line 273
        echo "                                                ";
        if ( !twig_test_empty((isset($context["_navbar_title"]) ? $context["_navbar_title"] : null))) {
            // line 274
            echo "                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">";
            // line 275
            echo (isset($context["_navbar_title"]) ? $context["_navbar_title"] : null);
            echo "</a>
                                                    </div>
                                                ";
        }
        // line 278
        echo "                                            ";
    }

    // line 295
    public function block_sonata_admin_content_actions_wrappers($context, array $blocks = [])
    {
        // line 296
        echo "                                                    ";
        if ( !twig_test_empty(twig_trim_filter(twig_replace_filter((isset($context["_actions"]) ? $context["_actions"] : null), ["<li>" => "", "</li>" => ""])))) {
            // line 297
            echo "                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        ";
            // line 298
            if ((twig_length_filter($this->env, twig_split_filter($this->env, (isset($context["_actions"]) ? $context["_actions"] : null), "</a>")) > 2)) {
                // line 299
                echo "                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 300
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_actions", [], "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    ";
                // line 302
                echo (isset($context["_actions"]) ? $context["_actions"] : null);
                echo "
                                                                </ul>
                                                            </li>
                                                        ";
            } else {
                // line 306
                echo "                                                            ";
                echo (isset($context["_actions"]) ? $context["_actions"] : null);
                echo "
                                                        ";
            }
            // line 308
            echo "                                                        </ul>
                                                    ";
        }
        // line 310
        echo "                                                ";
    }

    // line 324
    public function block_sonata_admin_content($context, array $blocks = [])
    {
        // line 325
        echo "
                            ";
        // line 326
        $this->displayBlock('notice', $context, $blocks);
        // line 329
        echo "
                            ";
        // line 330
        if ( !twig_test_empty((isset($context["_preview"]) ? $context["_preview"] : null))) {
            // line 331
            echo "                                <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) ? $context["_preview"] : null);
            echo "</div>
                            ";
        }
        // line 333
        echo "
                            ";
        // line 334
        if ( !twig_test_empty((isset($context["_content"]) ? $context["_content"] : null))) {
            // line 335
            echo "                                <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) ? $context["_content"] : null);
            echo "</div>
                            ";
        }
        // line 337
        echo "
                            ";
        // line 338
        if ( !twig_test_empty((isset($context["_show"]) ? $context["_show"] : null))) {
            // line 339
            echo "                                <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) ? $context["_show"] : null);
            echo "</div>
                            ";
        }
        // line 341
        echo "
                            ";
        // line 342
        if ( !twig_test_empty((isset($context["_form"]) ? $context["_form"] : null))) {
            // line 343
            echo "                                <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) ? $context["_form"] : null);
            echo "</div>
                            ";
        }
        // line 345
        echo "
                            ";
        // line 346
        if ( !twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : null))) {
            // line 347
            echo "                                <div class=\"row\">
                                    ";
            // line 348
            echo (isset($context["_list_filters"]) ? $context["_list_filters"] : null);
            echo "
                                </div>
                            ";
        }
        // line 351
        echo "
                            ";
        // line 352
        if ( !twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : null))) {
            // line 353
            echo "                                <div class=\"row\">
                                    ";
            // line 354
            echo (isset($context["_list_table"]) ? $context["_list_table"] : null);
            echo "
                                </div>
                            ";
        }
        // line 357
        echo "                        ";
    }

    // line 326
    public function block_notice($context, array $blocks = [])
    {
        // line 327
        echo "                                ";
        $this->loadTemplate("@SonataCore/FlashMessage/render.html.twig", "SonataAdminBundle::standard_layout.html.twig", 327)->display($context);
        // line 328
        echo "                            ";
    }

    // line 365
    public function block_bootlint($context, array $blocks = [])
    {
        // line 366
        echo "            ";
        // line 367
        echo "            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1047 => 367,  1045 => 366,  1042 => 365,  1038 => 328,  1035 => 327,  1032 => 326,  1028 => 357,  1022 => 354,  1019 => 353,  1017 => 352,  1014 => 351,  1008 => 348,  1005 => 347,  1003 => 346,  1000 => 345,  994 => 343,  992 => 342,  989 => 341,  983 => 339,  981 => 338,  978 => 337,  972 => 335,  970 => 334,  967 => 333,  961 => 331,  959 => 330,  956 => 329,  954 => 326,  951 => 325,  948 => 324,  944 => 310,  940 => 308,  934 => 306,  927 => 302,  922 => 300,  919 => 299,  917 => 298,  914 => 297,  911 => 296,  908 => 295,  904 => 278,  898 => 275,  895 => 274,  892 => 273,  889 => 272,  885 => 319,  879 => 315,  873 => 313,  871 => 312,  868 => 311,  866 => 295,  863 => 294,  859 => 292,  844 => 290,  840 => 289,  837 => 288,  835 => 287,  832 => 286,  826 => 283,  823 => 282,  821 => 281,  817 => 279,  815 => 272,  811 => 270,  809 => 268,  808 => 267,  807 => 266,  805 => 265,  802 => 264,  798 => 320,  795 => 264,  792 => 263,  787 => 358,  785 => 324,  780 => 321,  778 => 263,  774 => 261,  771 => 260,  767 => 251,  764 => 250,  759 => 252,  757 => 250,  754 => 249,  751 => 248,  744 => 246,  741 => 245,  735 => 244,  731 => 242,  717 => 233,  711 => 231,  708 => 230,  705 => 229,  701 => 254,  698 => 248,  695 => 245,  693 => 244,  690 => 243,  687 => 229,  684 => 228,  678 => 255,  676 => 228,  672 => 226,  669 => 225,  664 => 360,  662 => 260,  658 => 258,  655 => 225,  652 => 224,  646 => 212,  644 => 211,  637 => 206,  634 => 205,  629 => 203,  627 => 202,  621 => 198,  618 => 197,  614 => 218,  609 => 215,  606 => 205,  604 => 197,  600 => 195,  597 => 194,  594 => 193,  589 => 189,  585 => 187,  579 => 185,  576 => 184,  573 => 183,  559 => 182,  553 => 180,  549 => 178,  543 => 176,  539 => 174,  536 => 172,  533 => 170,  531 => 169,  526 => 168,  524 => 167,  521 => 166,  519 => 165,  516 => 162,  514 => 161,  512 => 160,  510 => 159,  492 => 158,  489 => 157,  487 => 156,  484 => 155,  482 => 154,  479 => 153,  476 => 152,  471 => 219,  469 => 193,  465 => 191,  463 => 152,  456 => 148,  452 => 147,  448 => 145,  445 => 144,  441 => 143,  437 => 141,  431 => 139,  428 => 138,  420 => 136,  418 => 135,  413 => 134,  410 => 133,  407 => 132,  399 => 128,  395 => 126,  392 => 125,  387 => 221,  384 => 144,  381 => 132,  379 => 125,  376 => 124,  373 => 123,  369 => 117,  366 => 116,  364 => 115,  361 => 114,  358 => 113,  354 => 109,  351 => 108,  348 => 107,  334 => 106,  329 => 104,  326 => 101,  324 => 100,  322 => 99,  320 => 98,  316 => 95,  313 => 94,  310 => 93,  293 => 92,  290 => 91,  287 => 90,  281 => 88,  279 => 87,  273 => 85,  270 => 84,  266 => 62,  257 => 60,  252 => 59,  249 => 58,  245 => 56,  242 => 55,  238 => 81,  235 => 80,  229 => 78,  226 => 77,  223 => 76,  220 => 75,  217 => 73,  213 => 71,  211 => 69,  209 => 67,  206 => 66,  203 => 65,  200 => 63,  198 => 58,  195 => 57,  192 => 55,  189 => 54,  185 => 52,  176 => 50,  171 => 49,  168 => 48,  161 => 29,  158 => 28,  152 => 26,  145 => 372,  142 => 371,  139 => 365,  137 => 364,  133 => 362,  131 => 224,  128 => 223,  126 => 123,  120 => 119,  118 => 113,  113 => 110,  111 => 84,  107 => 82,  105 => 54,  102 => 53,  100 => 48,  95 => 45,  93 => 40,  92 => 39,  91 => 38,  90 => 37,  89 => 36,  88 => 34,  85 => 33,  83 => 28,  78 => 26,  75 => 25,  73 => 23,  71 => 22,  69 => 21,  67 => 20,  65 => 19,  63 => 18,  61 => 17,  59 => 16,  57 => 15,  55 => 14,  53 => 13,  51 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle::standard_layout.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/admin-bundle/src/Resources/views/standard_layout.html.twig");
    }
}
