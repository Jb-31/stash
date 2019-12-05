<?php

/* :ticket:userView.html.twig */
class __TwigTemplate_1019e376b7b227f0ab20858f7cb5e09b66cdb189a74536c5f929350b925feeef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":ticket:userView.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        <div id=\"container\" class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-10 col-md-offset-1\">
                    <nav class=\"navbar\">
                        <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ticket_home");
        echo "\"  class=\"btn btn-sm btn-default \"> Retour Home GRC </a>

                    </nav>
                    <div class=\"bs-callout bs-callout-default\">
                        <h4>Informations utilisateur</h4>

                        <table id=\"userView\" class=\"table \">
                            <tr>
                                <td class=\"bold\"> #id</td>
                                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["userInfos"]) ? $context["userInfos"] : null), "user", []), "id", []), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td class=\"bold\" >Email</td>
                                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["userInfos"]) ? $context["userInfos"] : null), "user", []), "email", []), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td class=\"bold\" >Téléphone</td>
                                <td>";
        // line 26
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["userInfos"]) ? $context["userInfos"] : null), "user", [], "any", false, true), "phoneNumber", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["userInfos"]) ? $context["userInfos"] : null), "user", [], "any", false, true), "phoneNumber", []), "-")) : ("-")), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td class=\"bold\" >Date inscription</td>
                                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["userInfos"]) ? $context["userInfos"] : null), "user", []), "created_at", []), "date", []), "d/m/Y H:i:s"), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td class=\"bold\" >Désabonné ?</td>
                                <td>";
        // line 34
        echo $this->env->getExtension('AppBundle\Twig\AppExtension')->booleanFilter($this->getAttribute($this->getAttribute((isset($context["userInfos"]) ? $context["userInfos"] : null), "user", []), "cancelled", []));
        echo "</td>
                            </tr>
                            ";
        // line 36
        if ($this->getAttribute($this->getAttribute((isset($context["userInfos"]) ? $context["userInfos"] : null), "user", []), "cancelled", [])) {
            // line 37
            echo "                            <tr>
                                <td class=\"bold\" >Date désabo</td>
                                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["userInfos"]) ? $context["userInfos"] : null), "user", []), "cancelled_at", []), "date", []), "d/m/Y H:i:s"), "html", null, true);
            echo "</td>
                            </tr>
                            ";
        }
        // line 42
        echo "
                            <tr>
                                <td class=\"bold\" >Compte gelé ?</td>
                                <td>";
        // line 45
        echo $this->env->getExtension('AppBundle\Twig\AppExtension')->booleanFilter($this->getAttribute($this->getAttribute((isset($context["userInfos"]) ? $context["userInfos"] : null), "user", []), "isFrozen", []));
        echo "</td>
                            </tr>
                            ";
        // line 47
        if (($this->getAttribute($this->getAttribute((isset($context["userInfos"]) ? $context["userInfos"] : null), "user", []), "cancelled", []) == 0)) {
            // line 48
            echo "                            <tr>
                                <td class=\"bold\"> Outils</td>
                                <td>
                                    <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grc_api_user_unsuscribe", ["user" => $this->env->getExtension('AppBundle\Twig\AppExtension')->encode64($this->getAttribute($this->getAttribute((isset($context["userInfos"]) ? $context["userInfos"] : null), "user", []), "id", [])), "ticket" => $this->env->getExtension('AppBundle\Twig\AppExtension')->encode64($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id", []))]), "html", null, true);
            echo "\" class=\"btn btn-warning action-button\">Désabonner</a>
                                    <a class=\"refresh_button btn btn-default\"> <i class=\"glyphicon glyphicon-refresh\"></i> Raffraichir la page</a>
                                </td>
                            </tr>
                            ";
        }
        // line 56
        echo "                        </table>
                    </div>
                    <div class=\"bs-callout bs-callout-default\">
                        <h4>Souscriptions </h4>
                    ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["userInfos"]) ? $context["userInfos"] : null), "user", []), "subscriptions", []));
        foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
            // line 61
            echo "                        <div class=\"bs-callout ";
            if ($this->getAttribute($context["sub"], "isActive", [])) {
                echo "bs-callout-success ";
            } else {
                echo " bs-callout-default ";
            }
            echo "\">
                            <table class=\"table \">
                                <tr>
                                    <th>id</th>
                                    <th>creation</th>
                                    <th>fin trial</th>
                                    <th>etape de renouvellement</th>
                                    <th>active ?</th>
                                    <th>expiration</th>
                                    <th>désabonné ?</th>
                                    <th>étape de relance</th>
                                    <th>plan</th>
                                    <th>Outils</th>
                                </tr>
                                <tr>
                                    <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "id", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["sub"], "createdAt", []), "date", []), "d/m/Y H:i:s"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["sub"], "trialEndAt", []), "date", []), "d/m/Y H:i:s"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "stepRenewal", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 80
            echo $this->env->getExtension('AppBundle\Twig\AppExtension')->booleanFilter($this->getAttribute($context["sub"], "isActive", []));
            echo "</td>
                                    <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["sub"], "expiresAt", []), "date", []), "d/m/Y H:i:s"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 82
            if ( !(null === $this->getAttribute($context["sub"], "cancelledAt", []))) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["sub"], "cancelledAt", []), "date", []), "d/m/Y H:i:s"), "html", null, true);
            } else {
                echo " ";
                echo $this->env->getExtension('AppBundle\Twig\AppExtension')->booleanFilter(0);
                echo " ";
            }
            echo "</td>
                                    <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "stepRetry", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "plan_desc", []), "html", null, true);
            echo "</td>
                                    <td><a  href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grc_api_sub_message", ["sub" => $this->env->getExtension('AppBundle\Twig\AppExtension')->encode64($this->getAttribute($context["sub"], "id", [])), "ticket" => $this->env->getExtension('AppBundle\Twig\AppExtension')->encode64($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id", []))]), "html", null, true);
            echo "\" class=\"btn btn-info ajax-action template_email\"><i class=\"glyphicon glyphicon-comment\"></i> modèle email</a>
                                       <br> <br><a class=\"refresh_button btn btn-sm btn-default\"> <i class=\"glyphicon glyphicon-refresh\"></i> Raffraichir la page</a>
                                    </td>
                                </tr>
                            </table>
                            <h4> transactions liées <a class=\"refresh_button btn btn-sm btn-default\"> <i class=\"glyphicon glyphicon-refresh\"></i> Raffraichir la page</a></h4>
                            <div class=\"bs-callout bs-callout-default\">
                                <table class=\"table \">
                                    <tr>
                                        <th>id</th>
                                        <th>création</th>
                                        <th>montant</th>
                                        <th>remboursé</th>
                                        <th>status hipay</th>
                                        <th>etape</th>
                                        <th>categorie</th>
                                        <th>Outils</th>
                                    </tr>
                                    ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["sub"], "transactions", []));
            foreach ($context['_seq'] as $context["_key"] => $context["tr"]) {
                // line 104
                echo "                                        <tr class=\"";
                if (($this->getAttribute($context["tr"], "refunded_amount", []) != 0)) {
                    echo " warning ";
                } else {
                    echo " ";
                    if (($this->getAttribute($context["tr"], "hipay_status", []) == "Captured")) {
                        echo " success ";
                    }
                    echo " ";
                    if ((($this->getAttribute($context["tr"], "hipay_status", []) == "Authorization Refused") || ($this->getAttribute($context["tr"], "hipay_status", []) == "Refused"))) {
                        echo " danger ";
                    }
                }
                echo "\">
                                            <td>";
                // line 105
                echo twig_escape_filter($this->env, $this->getAttribute($context["tr"], "id", []), "html", null, true);
                echo "</td>
                                            <td>";
                // line 106
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["tr"], "created_at", []), "date", []), "d/m/Y H:i:s"), "html", null, true);
                echo "</td>
                                            <td>";
                // line 107
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->amountFilter($this->getAttribute($context["tr"], "amount", [])), "html", null, true);
                echo "€</td>
                                            <td>";
                // line 108
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->amountFilter($this->getAttribute($context["tr"], "refunded_amount", [])), "html", null, true);
                echo "€</td>
                                            <td>";
                // line 109
                echo twig_escape_filter($this->env, $this->getAttribute($context["tr"], "hipay_status", []), "html", null, true);
                echo "</td>
                                            <td>";
                // line 110
                echo twig_escape_filter($this->env, $this->getAttribute($context["tr"], "step", []), "html", null, true);
                echo "</td>
                                            <td>";
                // line 111
                echo $this->env->getExtension('AppBundle\Twig\AppExtension')->transactionCategoryFilter($this->getAttribute($context["tr"], "transactionCategory", []));
                echo "</td>
                                            <td> ";
                // line 112
                if (((($this->getAttribute($context["tr"], "refunded_amount", []) == 0) && ($this->getAttribute($context["tr"], "hipay_status", []) == "Captured")) || ($this->getAttribute($context["tr"], "hipay_status", []) == "Authorized"))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grc_api_tr_refund", ["ticket" => $this->env->getExtension('AppBundle\Twig\AppExtension')->encode64($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id", [])), "transaction" => $this->env->getExtension('AppBundle\Twig\AppExtension')->encode64($this->getAttribute($context["tr"], "id", [])), "amount" => $this->getAttribute($context["tr"], "amount", [])]), "html", null, true);
                    echo "\" class=\"btn btn-warning btn-sm action-button\"> Rembourser</a> ";
                }
                echo " </td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tr'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "                                 </table>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "                        <nav class=\"navbar\">
                            <a href=\"";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ticket_home");
        echo "\" class=\"btn btn-sm btn-default\"> Retour Home GRC </a>
                            <a class=\"refresh_button btn btn-sm btn-default\"> <i class=\"glyphicon glyphicon-refresh\"></i> Raffraichir la page</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"modal_message\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Service Client</h4>
                </div>
                <div id=\"text-rbt\" class=\"modal-body\">

                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default clipboardBtn\" data-clipboard-target=\"#text-rbt\">copier</button>
                    <button type=\"button\" class=\"btn btn-default \" data-dismiss=\"modal\">Close</button>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 147
    public function block_javascripts($context, array $blocks = [])
    {
        // line 148
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"https://cdn.jsdelivr.net/npm/clipboard@2/dist/clipboard.min.js\"></script>
    <script type=\"text/javascript\">
        \$('document').ready(function(){
            \$('.action-button').click(function(e){
                e.stopPropagation();
                var url = \$(this).attr('href');
                \$.ajax(url);
                window.location.reload();
                return false;
            });

            \$('.template_email').click(function(e){
                e.stopPropagation();
                var url = \$(this).attr('href');
                \$.ajax(url).done(function(data)
                {
                    var html = data.html;
                    \$('#text-rbt').html(html);
                    \$('#modal_message').modal();
                });

                return false;
            });

            var clipboard = new ClipboardJS('.clipboardBtn');
            clipboard.on('success', function (e) {
                console.info('Action:', e.action);
                console.info('Text:', e.text);
                console.info('Trigger:', e.trigger);

                e.clearSelection();
            });

            \$('.refresh_button').click(function(){
                window.location.reload();
            });
        });
    </script>

";
    }

    public function getTemplateName()
    {
        return ":ticket:userView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 148,  320 => 147,  290 => 120,  287 => 119,  278 => 115,  265 => 112,  261 => 111,  257 => 110,  253 => 109,  249 => 108,  245 => 107,  241 => 106,  237 => 105,  221 => 104,  217 => 103,  196 => 85,  192 => 84,  188 => 83,  178 => 82,  174 => 81,  170 => 80,  166 => 79,  162 => 78,  158 => 77,  154 => 76,  131 => 61,  127 => 60,  121 => 56,  113 => 51,  108 => 48,  106 => 47,  101 => 45,  96 => 42,  90 => 39,  86 => 37,  84 => 36,  79 => 34,  72 => 30,  65 => 26,  58 => 22,  51 => 18,  39 => 9,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":ticket:userView.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/app/Resources/views/ticket/userView.html.twig");
    }
}
