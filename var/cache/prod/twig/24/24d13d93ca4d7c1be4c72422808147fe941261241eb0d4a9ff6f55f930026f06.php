<?php

/* base.html.twig */
class __TwigTemplate_00cb27cbcd1c67635f41edbf4e67219cde0b361808e42d32e3c41c13574c1084 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 35
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        echo "GRC-Management";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 7
        echo "            <!-- Latest compiled and minified CSS -->
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

            <!-- Optional theme -->
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

            <link href=\"https://fonts.googleapis.com/css?family=Julius+Sans+One\" rel=\"stylesheet\">

            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/base.css"), "html", null, true);
        echo "\" >
        ";
    }

    // line 21
    public function block_header($context, array $blocks = [])
    {
        // line 22
        echo "         <div id=\"header\" class=\"container-fluid\">
             <div class=\"row\">
                <div class=\"text-center\">
                    <h1><a href=\"/\" class=\"color-white\">GRC - Eternity plateform</a></h1>
                </div>
                 <div class=\"text-right\">
                     <a class=\"color-white tp_link\" href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("trustpilotgenerator");
        echo "\"> <i class=\"glyphicon glyphicon-heart\"></i> lien  Trustpilot</a> |
                     <a class=\"color-white new_demand\" href=\"/\"> <i class=\"glyphicon glyphicon-plus\"></i> Nouvelle demande</a>  |
                    <a id=\"logout-link\" href=\"/logout\" class=\"color-white logout\"> <i class=\"glyphicon glyphicon-log-out color-white\"> </i> Deconnexion</a>
                 </div>
             </div>
        </div>
        ";
    }

    // line 35
    public function block_body($context, array $blocks = [])
    {
        // line 36
        echo "
        ";
    }

    // line 38
    public function block_javascripts($context, array $blocks = [])
    {
        // line 39
        echo "            <script
                    src=\"https://code.jquery.com/jquery-3.3.1.min.js\"
                    integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\"
                    crossorigin=\"anonymous\"></script>
            <!-- Latest compiled and minified JavaScript -->
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 39,  114 => 38,  109 => 36,  106 => 35,  95 => 28,  87 => 22,  84 => 21,  78 => 15,  68 => 7,  65 => 6,  59 => 5,  53 => 46,  50 => 38,  47 => 35,  45 => 21,  39 => 18,  36 => 17,  34 => 6,  30 => 5,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/app/Resources/views/base.html.twig");
    }
}
