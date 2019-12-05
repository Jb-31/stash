<?php

/* SonataAdminBundle:CRUD:delete.html.twig */
class __TwigTemplate_137073f6780b74d00be0ab9267bf33e26d1d1fe72edc0b1f1d3142494c7183a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'actions' => [$this, 'block_actions'],
            'tab_menu' => [$this, 'block_tab_menu'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : null), "SonataAdminBundle:CRUD:delete.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = [])
    {
        // line 15
        $this->loadTemplate("@SonataAdmin/CRUD/action_buttons.html.twig", "SonataAdminBundle:CRUD:delete.html.twig", 15)->display($context);
    }

    // line 18
    public function block_tab_menu($context, array $blocks = [])
    {
        // line 19
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "sidemenu", [0 => (isset($context["action"]) ? $context["action"] : null)], "method"), ["currentClass" => "active", "template" => $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension')->getGlobalTemplate("tab_menu_template")], "twig");
    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        // line 26
        echo "    <div class=\"sonata-ba-delete\">

        <div class=\"box box-danger\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_delete", [], "SonataAdminBundle"), "html", null, true);
        echo "</h3>
            </div>
            <div class=\"box-body\">
                ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message_delete_confirmation", ["%object%" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "toString", [0 => (isset($context["object"]) ? $context["object"] : null)], "method")], "SonataAdminBundle"), "html", null, true);
        echo "
            </div>
            <div class=\"box-footer clearfix\">
                <form method=\"POST\" action=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", [0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : null)], "method"), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\">

                    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i> ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_delete", [], "SonataAdminBundle"), "html", null, true);
        echo "</button>
                    ";
        // line 41
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", [0 => "edit"], "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasAccess", [0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : null)], "method"))) {
            // line 42
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_or", [], "SonataAdminBundle"), "html", null, true);
            echo "

                        <a class=\"btn btn-success\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", [0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : null)], "method"), "html", null, true);
            echo "\">
                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                            ";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_edit", [], "SonataAdminBundle"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 48
        echo "                </form>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 48,  91 => 46,  86 => 44,  80 => 42,  78 => 41,  74 => 40,  69 => 38,  64 => 36,  58 => 33,  52 => 30,  46 => 26,  43 => 25,  39 => 19,  36 => 18,  32 => 15,  29 => 14,  20 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:CRUD:delete.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/delete.html.twig");
    }
}
