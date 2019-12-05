<?php

/* :default:trustpilotGenerator.html.twig */
class __TwigTemplate_98535f6da8a1706d67be9fbf7b7777b0f853c2c040838f5b892a742d14f3ad99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:trustpilotGenerator.html.twig", 1);
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

    // line 2
    public function block_body($context, array $blocks = [])
    {
        // line 3
        echo "    <div class=\"box box-primary\">
        <div class=\"container\">
            <h1>Trustpilot link generator</h1>

            <form>
                <div class=\"row\">
                    <div class=\"col-md-8 col-offset-md-2\">
                        <div class=\"row\">
                            <div class=\"col-md-3\">
                                <input type=\"nom\" id=\"nom\" class=\"form-control\" placeholder=\"nom ...\">

                            </div>
                            <div class=\"col-md-3\">
                                <input type=\"prenom\" id=\"prenom\" class=\"form-control\" placeholder=\"prenom ...\">
                            </div>
                            <div class=\"col-md-6 \">
                                <div class=\"input-group\">
                                    <input type=\"email\" id=\"email\" class=\"form-control\"
                                           placeholder=\"Email pour trustpilot ...\">

                              <span class=\"input-group-btn\">
                                <button id=\"submit_btn\" class=\"btn btn-default\" type=\"button\">Go!</button>
                              </span>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class=\"row\">

                        </div>
                        <!-- /input-group -->
                        <div id=\"result\" class=\"bs-callout bs-collout-info hidden\">
                            <label>Lien trust pilot :</label>

                            <div class=\"input-group\">

                                <input type=\"text\" id=\"tp_link\" class=\"form-control\"/>
                              <span class=\"input-group-btn\">
                                <button class=\"btn btn-primary clipboardBtn \" data-clipboard-target=\"#tp_link\"
                                        title=\"copier\" type=\"button\"><i class=\"glyphicon glyphicon-copy\"></i></button>
                              </span>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class=\"spacer\"></div>
    </div>
    <div class=\"spacer\"></div>
";
    }

    // line 57
    public function block_javascripts($context, array $blocks = [])
    {
        // line 58
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        <script src=\"https://cdn.jsdelivr.net/npm/clipboard@2/dist/clipboard.min.js\"></script>
        <script type=\"text/javascript\">
            \$('document').ready(function () {
                console.log('ready');
                var clipboard = new ClipboardJS('.clipboardBtn');
                clipboard.on('success', function (e) {
                    console.info('Action:', e.action);
                    console.info('Text:', e.text);
                    console.info('Trigger:', e.trigger);

                    e.clearSelection();
                });
                \$('form').submit(function (e) {
                    e.preventDefault();
                    generateTPLINK();
                });
                \$('#submit_btn').click(function (e) {
                    e.preventDefault();
                    generateTPLINK();
                });
            });

            function generateTPLINK() {
                var url = '";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("generate_tp_link");
        echo "';
                \$.post(url, {
                            nom: \$('#nom').val(),
                            prenom: \$('#prenom').val(),
                            email: \$('#email').val()
                        }, function (data) {
                            \$('#result').removeClass('hidden');
                            \$('#tp_link').val(data.tp_link);
                        }
                );
            }

        </script>
    ";
    }

    // line 96
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 97
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style >
        .spacer{
            padding: 20px;
        }
    </style>
";
    }

    public function getTemplateName()
    {
        return ":default:trustpilotGenerator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 97,  137 => 96,  119 => 82,  91 => 58,  88 => 57,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:trustpilotGenerator.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/app/Resources/views/default/trustpilotGenerator.html.twig");
    }
}
