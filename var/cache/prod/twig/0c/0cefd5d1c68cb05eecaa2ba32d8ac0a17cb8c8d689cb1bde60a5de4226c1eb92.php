<?php

/* SonataBlockBundle:Profiler:block.html.twig */
class __TwigTemplate_f452b00161893ac73692cb3fdb46081dac4f74be628a786c06ac9025e07a2b11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "SonataBlockBundle:Profiler:block.html.twig", 1);
        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
            'table' => [$this, 'block_table'],
            'table_v2' => [$this, 'block_table_v2'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        // line 4
        echo "    <div class=\"sf-toolbar-block\">
        <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", ["token" => (isset($context["token"]) ? $context["token"] : null), "panel" => (isset($context["name"]) ? $context["name"] : null)]), "html", null, true);
        echo "\">
            <div class=\"sf-toolbar-icon\">
                ";
        // line 7
        echo twig_include($this->env, $context, "@SonataBlock/Profiler/icon.svg");
        echo "
                <span class=\"sf-toolbar-value\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "getTotalBlock", [], "method"), "html", null, true);
        echo "</span>
            </div>
        </a>

        <div class=\"sf-toolbar-info\">
            <div class=\"sf-toolbar-info-piece\">
                <b>Real Blocks</b>
                <span>";
        // line 15
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "realBlocks", [])), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Containers</b>
                <span>";
        // line 19
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "containers", [])), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Events</b>
                <span>";
        // line 23
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "events", [])), "html", null, true);
        echo "</span>
            </div>
        </div>
    </div>
";
    }

    // line 29
    public function block_menu($context, array $blocks = [])
    {
        // line 30
        echo "    <span class=\"label\">
        <span class=\"icon\">
            ";
        // line 32
        echo twig_include($this->env, $context, "@SonataBlock/Profiler/icon.svg");
        echo "
        </span>
        <strong>Blocks";
        // line 34
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "events", [])) > 0)) {
            echo "<strong>*</strong>";
        }
        echo "</strong>
        <span class=\"count\">
            <span>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "getTotalBlock", [], "method"), "html", null, true);
        echo "</span>
        </span>
    </span>
";
    }

    // line 41
    public function block_panel($context, array $blocks = [])
    {
        // line 42
        echo "    <h2>Events Blocks</h2>
    <table>
        <tr>
            <th>code name</th>
            <th>listener tag</th>
            <th>Block types</th>
            <th>Listeners</th>
        </tr>

        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "events", []));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 52
            echo "            <tr>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "template_code", [], "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "event_name", [], "array"), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["event"], "blocks", [], "array"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 57
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["type"], 1, []), "html", null, true);
                echo " (id:";
                echo twig_escape_filter($this->env, $this->getAttribute($context["type"], 0, []), "html", null, true);
                echo ")
                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 59
                echo "                        no block returned
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "                </td>
                <td>
                    ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["event"], "listeners", [], "array"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                // line 64
                echo "                        ";
                echo twig_escape_filter($this->env, $context["listener"], "html", null, true);
                echo "
                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 66
                echo "                        no listener registered
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "    </table>

    <h2>Real Blocks</h2>
    ";
        // line 74
        $context["blocks"] = $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "realBlocks", []);
        // line 75
        echo "    <div class=\"tab-content\">
        ";
        // line 76
        $this->displayBlock("table_v2", $context, $blocks);
        echo "
    </div>

    <h2>Containers Blocks</h2>
    ";
        // line 80
        $context["blocks"] = $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "containers", []);
        // line 81
        echo "    <div class=\"tab-content\">
        ";
        // line 82
        $this->displayBlock("table_v2", $context, $blocks);
        echo "
    </div>
";
    }

    // line 86
    public function block_table($context, array $blocks = [])
    {
        // line 87
        echo "    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Type</th>
            <th>Mem. (diff)</th>
            <th>Mem. (peak)</th>
            <th>Duration</th>
        </tr>
        ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : null));
        foreach ($context['_seq'] as $context["id"] => $context["block"]) {
            // line 97
            echo "
            ";
            // line 98
            $context["rowspan"] = 1;
            // line 99
            echo "            ";
            if ($this->getAttribute($this->getAttribute($context["block"], "cache", []), "handler", [])) {
                // line 100
                echo "                ";
                $context["rowspan"] = ((isset($context["rowspan"]) ? $context["rowspan"] : null) + 1);
                // line 101
                echo "            ";
            }
            // line 102
            echo "
            ";
            // line 103
            if (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["block"], "assets", []), "js", [])) > 0) || (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["block"], "assets", []), "css", [])) > 0))) {
                // line 104
                echo "                ";
                $context["rowspan"] = ((isset($context["rowspan"]) ? $context["rowspan"] : null) + 1);
                // line 105
                echo "            ";
            }
            // line 106
            echo "            <tr>
                <th style=\"vertical-align: top\" rowspan=\"";
            // line 107
            echo twig_escape_filter($this->env, (isset($context["rowspan"]) ? $context["rowspan"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "</th>
                <td>";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "name", []), "html", null, true);
            echo "</td>
                <td>";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "type", []), "html", null, true);
            echo "</td>
                <td>";
            // line 110
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($this->getAttribute($context["block"], "memory_end", []) - $this->getAttribute($context["block"], "memory_start", [])) / 1000), 0), "html", null, true);
            echo " Kb</td>
                <td>";
            // line 111
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute($context["block"], "memory_peak", []) / 1000), 0), "html", null, true);
            echo " Kb</td>
                <td>";
            // line 112
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["block"], "duration", []), 2), "html", null, true);
            echo " ms</td>
            </tr>

            ";
            // line 115
            if ($this->getAttribute($this->getAttribute($context["block"], "cache", []), "handler", [])) {
                // line 116
                echo "                <tr style=\"vertical-align: top\">
                    <td colspan=\"3\">
                        Cache Keys: <pre>";
                // line 118
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getAttribute($context["block"], "cache", []), "keys", [])), "html", null, true);
                echo "</pre> <br />
                        Contextual Keys: <pre>";
                // line 119
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getAttribute($context["block"], "cache", []), "contextual_keys", [])), "html", null, true);
                echo "</pre>
                    </td>
                    <td colspan=\"2\">
                        TTL: ";
                // line 122
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["block"], "cache", []), "ttl", []), "html", null, true);
                echo "s. <br />
                        Lifetime: ";
                // line 123
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["block"], "cache", []), "lifetime", []), "html", null, true);
                echo "s. <br />
                        Backend: ";
                // line 124
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["block"], "cache", []), "handler", []), "html", null, true);
                echo " <br />
                        Loading from cache: ";
                // line 125
                if ($this->getAttribute($this->getAttribute($context["block"], "cache", []), "from_cache", [])) {
                    echo "YES";
                } else {
                    echo "NO";
                }
                echo " <br />
                    </td>
                </tr>
            ";
            }
            // line 129
            echo "
            ";
            // line 130
            if (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["block"], "assets", []), "js", [])) > 0) || (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["block"], "assets", []), "css", [])) > 0))) {
                // line 131
                echo "                <tr>
                    <td colspan=\"5\">
                        Javascripts: <pre>";
                // line 133
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getAttribute($context["block"], "assets", []), "js", [])), "html", null, true);
                echo "</pre><br />
                        Stylesheets: <pre>";
                // line 134
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getAttribute($context["block"], "assets", []), "css", [])), "html", null, true);
                echo "</pre>
                    </td>
                </tr>
            ";
            }
            // line 138
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "    </table>
";
    }

    // line 143
    public function block_table_v2($context, array $blocks = [])
    {
        // line 144
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : null));
        foreach ($context['_seq'] as $context["id"] => $context["block"]) {
            // line 145
            echo "        <table>
            <thead>
            <tr>
                <th colspan=\"2\">Block ";
            // line 148
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th>Name</th>
                <td>";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "name", []), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "type", []), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Mem. diff / Mem. peak / Duration</th>
                <td>";
            // line 162
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($this->getAttribute($context["block"], "memory_end", []) - $this->getAttribute($context["block"], "memory_start", [])) / 1000), 0), "html", null, true);
            echo " Kb / ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute($context["block"], "memory_peak", []) / 1000), 0), "html", null, true);
            echo " Kb / ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["block"], "duration", []), 2), "html", null, true);
            echo " ms</td>
            </tr>

            ";
            // line 165
            if ($this->getAttribute($this->getAttribute($context["block"], "cache", []), "handler", [])) {
                // line 166
                echo "                <tr>
                    <th>Cache backend</th>
                    <td>
                        ";
                // line 169
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["block"], "cache", []), "handler", []), "html", null, true);
                echo " - Loading from cache: ";
                if ($this->getAttribute($this->getAttribute($context["block"], "cache", []), "from_cache", [])) {
                    echo "YES";
                } else {
                    echo "NO";
                }
                // line 170
                echo "                    </td>
                </tr>
                <tr>
                    <th>Cache TTL / Lifetime</th>
                    <td>
                        ";
                // line 175
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["block"], "cache", []), "ttl", []), "html", null, true);
                echo "s. / ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["block"], "cache", []), "lifetime", []), "html", null, true);
                echo "s
                    </td>
                </tr>
                <tr>
                    <th>
                        Cache Informations
                    </th>
                    <td>
                        Cache Keys: <pre>";
                // line 183
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getAttribute($context["block"], "cache", []), "keys", [])), "html", null, true);
                echo "</pre> <br />
                        Contextual Keys: <pre>";
                // line 184
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getAttribute($context["block"], "cache", []), "contextual_keys", [])), "html", null, true);
                echo "</pre> <br />
                    </td>
                </tr>
            ";
            }
            // line 188
            echo "
            ";
            // line 189
            if (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["block"], "assets", []), "js", [])) > 0) || (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["block"], "assets", []), "css", [])) > 0))) {
                // line 190
                echo "                <tr>
                    <th>Assets</th>
                    <td>
                        Javascripts: <pre>";
                // line 193
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getAttribute($context["block"], "assets", []), "js", [])), "html", null, true);
                echo "</pre><br />
                        Stylesheets: <pre>";
                // line 194
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getAttribute($context["block"], "assets", []), "css", [])), "html", null, true);
                echo "</pre>
                    </td>
                </tr>
            ";
            }
            // line 198
            echo "            </tbody>
        </table>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Profiler:block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  478 => 198,  471 => 194,  467 => 193,  462 => 190,  460 => 189,  457 => 188,  450 => 184,  446 => 183,  433 => 175,  426 => 170,  418 => 169,  413 => 166,  411 => 165,  401 => 162,  394 => 158,  387 => 154,  378 => 148,  373 => 145,  368 => 144,  365 => 143,  360 => 140,  353 => 138,  346 => 134,  342 => 133,  338 => 131,  336 => 130,  333 => 129,  322 => 125,  318 => 124,  314 => 123,  310 => 122,  304 => 119,  300 => 118,  296 => 116,  294 => 115,  288 => 112,  284 => 111,  280 => 110,  276 => 109,  272 => 108,  266 => 107,  263 => 106,  260 => 105,  257 => 104,  255 => 103,  252 => 102,  249 => 101,  246 => 100,  243 => 99,  241 => 98,  238 => 97,  234 => 96,  223 => 87,  220 => 86,  213 => 82,  210 => 81,  208 => 80,  201 => 76,  198 => 75,  196 => 74,  191 => 71,  183 => 68,  176 => 66,  168 => 64,  163 => 63,  159 => 61,  152 => 59,  142 => 57,  137 => 56,  132 => 54,  128 => 53,  125 => 52,  121 => 51,  110 => 42,  107 => 41,  99 => 36,  92 => 34,  87 => 32,  83 => 30,  80 => 29,  71 => 23,  64 => 19,  57 => 15,  47 => 8,  43 => 7,  38 => 5,  35 => 4,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataBlockBundle:Profiler:block.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/block-bundle/src/Resources/views/Profiler/block.html.twig");
    }
}
