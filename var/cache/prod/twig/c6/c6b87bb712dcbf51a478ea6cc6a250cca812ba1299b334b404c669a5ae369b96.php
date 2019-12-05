<?php

/* :ticket:home.html.twig */
class __TwigTemplate_68b2f4b4172c28eb9710725433d3f13a468297df2cc7e99282abf62ec0529671 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":ticket:home.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            <div class=\"col-md-8 col-md-offset-2\">
                <h2>Gestion Demande Client</h2>

                <div class=\"col-md-8  col-md-offset-2\">
                    <form method=\"post\">
                        <div class=\"bs-callout bs-callout-info\">
                            <h4> Demande client reçue depuis :</h4>
                            <select id=\"demand_from\" class=\"form-control\" name=\"demand_from\">
                                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["demand_from"]) ? $context["demand_from"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["from"]) {
            // line 15
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["from"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
            echo ". ";
            echo twig_escape_filter($this->env, $context["from"], "html", null, true);
            echo "</option>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['from'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "                            </select>

                            <h4> Site concerné</h4>
                            <select id=\"et_plateform\" class=\"form-control\" name=\"eternity_platform\">
                                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["eternity_list"]) ? $context["eternity_list"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["et"]) {
            // line 22
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["et"], "id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
            echo ". ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["et"], "name", []), "html", null, true);
            echo "</option>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['et'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                            </select>

                            <div class=\"row\">
                                <div class=\"col-sm-5\">
                                    <h4>Email utilisé</h4>
                                    <input type=\"text\" name=\"email\" class=\"form-control\" placeholder=\"email@gmail.fr\"
                                           value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "email", []), "html", null, true);
        echo "\">
                                </div>
                                <div class=\"col-sm-2\">
                                    <h4>Ou</h4>
                                </div>
                                <div class=\"col-sm-5\">
                                    <h4>4 derniers chiffres CB</h4>
                                    <input type=\"text\" name=\"pan\" class=\"form-control\" placeholder=\"1234\" maxlength=\"4\"
                                           value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "cbLastNumbers", []), "html", null, true);
        echo "\">
                                </div>
                            </div>
                            <h4>Commentaires</h4>
                            <textarea name=\"comments\" class=\"form-control\"
                                      placeholder=\"commentaires\">";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "comments", []), "html", null, true);
        echo "</textarea>
                            <br>
                            <input type=\"hidden\" name=\"ticket\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id", []), "html", null, true);
        echo "\" />
                            <div class=\"text-center\">
                                <input type=\"submit\" class=\"btn btn-info \" value=\"Rechercher\">
                            </div>
                        </div>


                    </form>
                </div>
            </div>
            ";
        // line 55
        if ( !(null === (isset($context["results"]) ? $context["results"] : null))) {
            // line 56
            echo "                ";
            // line 57
            echo "                ";
            // line 58
            echo "                <div class=\"col-md-8 col-md-offset-2\">
                    <div class=\"bs-callout bs-callout-info\">
                        <h4>Resultats</h4>
                        ";
            // line 61
            if (( !(null === $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "email", [])) && ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "email", []) != ""))) {
                // line 62
                echo "                            <h5> Utilisateurs </h5>
                            ";
                // line 63
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["results"]) ? $context["results"] : null), "users", [])) > 0)) {
                    // line 64
                    echo "                                <table class=\"table\">
                                    <tr>
                                        <th>#Id</th>
                                        <th>Email</th>
                                        <th>Création du compte</th>
                                        <th>Encore actif ?</th>
                                        <th>Désabonné ?</th>
                                        <th>Date du désabo</th>
                                        <th>outils</th>
                                    </tr>
                                    ";
                    // line 74
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["results"]) ? $context["results"] : null), "users", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                        // line 75
                        echo "                                        <tr class=\"";
                        if (($this->getAttribute($context["u"], "isCancelled", []) == 0)) {
                            echo " success ";
                        }
                        echo "\">
                                            <td>";
                        // line 76
                        echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", []), "html", null, true);
                        echo "</td>
                                            <td>";
                        // line 77
                        echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "email", []), "html", null, true);
                        echo "</td>
                                            <td>";
                        // line 78
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "created_at", []), "date", []), "d/m/Y H:i:s"), "html", null, true);
                        echo "</td>
                                            <td>";
                        // line 79
                        if ($this->getAttribute($context["u"], "isActive", [])) {
                            echo " oui ";
                        } else {
                            echo "  non ";
                        }
                        echo "</td>
                                            <td>";
                        // line 80
                        if ($this->getAttribute($context["u"], "isCancelled", [])) {
                            echo " oui ";
                        } else {
                            echo "  non ";
                        }
                        echo "</td>
                                            <td>";
                        // line 81
                        if ($this->getAttribute($context["u"], "isCancelled", [])) {
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "CancelledAt", []), "date", []), "d/m/Y H:i:s"), "html", null, true);
                            echo " ";
                        } else {
                            echo " - ";
                        }
                        echo "</td>
                                            <td><a href=\"";
                        // line 82
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grc_api_user_details", ["id64" => $this->env->getExtension('AppBundle\Twig\AppExtension')->encode64($this->getAttribute($context["u"], "id", [])), "ticketId64" => $this->env->getExtension('AppBundle\Twig\AppExtension')->encode64($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id", []))]), "html", null, true);
                        echo "\" class=\"btn btn-default btn-sm\"
                                                   title=\"Voir la fiche utilisateur\"><i
                                                            class=\"glyphicon glyphicon-user\"></i> </a></td>
                                        </tr>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 87
                    echo "                                </table>
                            ";
                } else {
                    // line 89
                    echo "                                <div class=\"bs-callout bs-callout-warning\">
                                    <p>Aucun utilisateur n'a été trouvé avec \"";
                    // line 90
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "email", []), "html", null, true);
                    echo "\" dans son email.</p>
                                </div>
                            ";
                }
                // line 93
                echo "                        ";
            }
            // line 94
            echo "                        ";
            if (( !(null === $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "cbLastNumbers", [])) && ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "cbLastNumbers", []) != ""))) {
                // line 95
                echo "                            <h5> CB </h5>
                            ";
                // line 96
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["results"]) ? $context["results"] : null), "cards", [])) > 0)) {
                    // line 97
                    echo "                                <table class=\"table table-striped\">
                                    <tr>
                                        <th>#Id</th>
                                        <th>#Id User</th>
                                        <th>Pan</th>
                                        <th>expiration</th>
                                        <th>Type</th>
                                        <th>Banque</th>
                                        <th>outils</th>
                                    </tr>
                                    ";
                    // line 107
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["results"]) ? $context["results"] : null), "cards", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                        // line 108
                        echo "                                        <tr>
                                            <td>";
                        // line 109
                        echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", []), "html", null, true);
                        echo "</td>
                                            <td>";
                        // line 110
                        echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "userId", []), "html", null, true);
                        echo "</td>
                                            <td>";
                        // line 111
                        echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "pan", []), "html", null, true);
                        echo "</td>
                                            <td>";
                        // line 112
                        echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "exp_month", []), "html", null, true);
                        echo " / ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "exp_year", []), "html", null, true);
                        echo "</td>
                                            <td>";
                        // line 113
                        echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "brand", []), "html", null, true);
                        echo "</td>
                                            <td>";
                        // line 114
                        echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "issuer", []), "html", null, true);
                        echo "</td>
                                            <td><a href=\"";
                        // line 115
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grc_api_user_details", ["id64" => $this->env->getExtension('AppBundle\Twig\AppExtension')->encode64($this->getAttribute($context["c"], "userId", [])), "ticketId64" => $this->env->getExtension('AppBundle\Twig\AppExtension')->encode64($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id", []))]), "html", null, true);
                        echo "\" class=\"btn btn-default btn-sm\"
                                                   title=\"Voir la fiche utilisateur\"><i
                                                            class=\"glyphicon glyphicon-user\"></i> </a></td>
                                        </tr>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 120
                    echo "                                </table>
                            ";
                } else {
                    // line 122
                    echo "
                                <div class=\"bs-callout bs-callout-warning\">
                                    <p>Aucune Carte n'a été trouvée</p>
                                </div>
                            ";
                }
                // line 127
                echo "                        ";
            }
            // line 128
            echo "                    </div>
                </div>
            ";
        }
        // line 131
        echo "        </div>
    </div>
";
    }

    // line 135
    public function block_javascripts($context, array $blocks = [])
    {
        // line 136
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$('document').ready(function () {
            setPreviousValues();
        });

        function setPreviousValues() {
            ";
        // line 144
        if (( !(null === (isset($context["ticket"]) ? $context["ticket"] : null)) &&  !(null === $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "eternity", [])))) {
            // line 145
            echo "            \$('#et_plateform').val(";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "eternity", []), "id", []), "html", null, true);
            echo ");
            \$('#demand_from').val('";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "source", []), "html", null, true);
            echo "');
            ";
        }
        // line 148
        echo "        }
    </script>
";
    }

    // line 152
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 153
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return ":ticket:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  402 => 153,  399 => 152,  393 => 148,  388 => 146,  383 => 145,  381 => 144,  369 => 136,  366 => 135,  360 => 131,  355 => 128,  352 => 127,  345 => 122,  341 => 120,  330 => 115,  326 => 114,  322 => 113,  316 => 112,  312 => 111,  308 => 110,  304 => 109,  301 => 108,  297 => 107,  285 => 97,  283 => 96,  280 => 95,  277 => 94,  274 => 93,  268 => 90,  265 => 89,  261 => 87,  250 => 82,  241 => 81,  233 => 80,  225 => 79,  221 => 78,  217 => 77,  213 => 76,  206 => 75,  202 => 74,  190 => 64,  188 => 63,  185 => 62,  183 => 61,  178 => 58,  176 => 57,  174 => 56,  172 => 55,  159 => 45,  154 => 43,  146 => 38,  135 => 30,  127 => 24,  106 => 22,  89 => 21,  83 => 17,  62 => 15,  45 => 14,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":ticket:home.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/app/Resources/views/ticket/home.html.twig");
    }
}
