<?php

/* SonataAdminBundle:CRUD:batch_confirmation.html.twig */
class __TwigTemplate_c9bee4270e75ea6df7e5db7d30820c15065c8abbf7e774e1f891a555e414b3cd extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : null), "SonataAdminBundle:CRUD:batch_confirmation.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = [])
    {
        // line 15
        $this->loadTemplate("@SonataAdmin/CRUD/action_buttons.html.twig", "SonataAdminBundle:CRUD:batch_confirmation.html.twig", 15)->display($context);
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
                ";
        // line 29
        if ( !((isset($context["batch_translation_domain"]) ? $context["batch_translation_domain"] : null) === false)) {
            // line 30
            echo "                    ";
            $context["action_label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["action_label"]) ? $context["action_label"] : null), [], (isset($context["batch_translation_domain"]) ? $context["batch_translation_domain"] : null));
            // line 31
            echo "                ";
        }
        // line 32
        echo "                <h4 class=\"box-title\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("title_batch_confirmation", ["%action%" => (isset($context["action_label"]) ? $context["action_label"] : null)], "SonataAdminBundle");
        echo "</h4>
            </div>
            <div class=\"box-body\">
                ";
        // line 35
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "all_elements", [])) {
            // line 36
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message_batch_all_confirmation", [], "SonataAdminBundle"), "html", null, true);
            echo "
                ";
        } else {
            // line 38
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("message_batch_confirmation", twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "idx", [])), ["%count%" => twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "idx", []))], "SonataAdminBundle");
            // line 39
            echo "                ";
        }
        // line 40
        echo "            </div>
            <div class=\"box-footer clearfix\">
                <form action=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", [0 => "batch", 1 => ["filter" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "filterParameters", [])]], "method"), "html", null, true);
        echo "\" method=\"POST\">
                    <input type=\"hidden\" name=\"confirmation\" value=\"ok\">
                    <input type=\"hidden\" name=\"data\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["data"]) ? $context["data"] : null)), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\">

                    <div style=\"display: none\">
                        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
                    </div>

                    <button type=\"submit\" class=\"btn btn-danger\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_execute_batch_action", [], "SonataAdminBundle"), "html", null, true);
        echo "</button>

                    ";
        // line 53
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", [0 => "list"], "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasAccess", [0 => "list"], "method"))) {
            // line 54
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_or", [], "SonataAdminBundle"), "html", null, true);
            echo "

                        <a class=\"btn btn-success\" href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", [0 => "list"], "method"), "html", null, true);
            echo "\">
                            <i class=\"fa fa-th-list\" aria-hidden=\"true\"></i> ";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_list", [], "SonataAdminBundle"), "html", null, true);
            echo "
                        </a>
                    ";
        }
        // line 60
        echo "                </form>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:batch_confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 60,  122 => 57,  118 => 56,  112 => 54,  110 => 53,  105 => 51,  99 => 48,  93 => 45,  89 => 44,  84 => 42,  80 => 40,  77 => 39,  74 => 38,  68 => 36,  66 => 35,  59 => 32,  56 => 31,  53 => 30,  51 => 29,  46 => 26,  43 => 25,  39 => 19,  36 => 18,  32 => 15,  29 => 14,  20 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:CRUD:batch_confirmation.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/batch_confirmation.html.twig");
    }
}
