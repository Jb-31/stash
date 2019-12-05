<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_5d4327e13f7975a8007544c27cfc313d62b8d5a0737d8fb3215df622bf755431 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 4
            echo "    <div class=\"message-div\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", []), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", []), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form-horizontal\" id=\"login\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />

    <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\" for=\"username\">Votre email</label>
        <div class=\"col-sm-3 col-md-6\">
            <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" required=\"required\" />
        </div>
    </div>
    <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\" for=\"password\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", [], "FOSUserBundle"), "html", null, true);
        echo "</label>
        <div class=\"col-sm-3 col-md-6\">
            <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
            <p><a href=\"/resetting/request\">Mot de passe oublié</a></p>
        </div>
    </div>
    <div class=\"form-group\">
        <div class=\"col-sm-offset-2 col-sm-10\">
            <input type=\"submit\" class=\"btn btn-primary\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\" />
        </div>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 24,  47 => 16,  35 => 7,  30 => 6,  24 => 4,  22 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Security:login_content.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
