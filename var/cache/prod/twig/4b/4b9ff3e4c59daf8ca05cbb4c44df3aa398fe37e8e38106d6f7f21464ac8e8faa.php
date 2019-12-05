<?php

/* @SonataAdmin/CRUD/base_edit.html.twig */
class __TwigTemplate_5210f88c1dbb9f31b364b366c1f30bcecd0e506dfc01f6809eeffc71c44f237c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("@SonataAdmin/CRUD/base_edit_form.html.twig", "@SonataAdmin/CRUD/base_edit.html.twig", 38);
        // line 38
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."@SonataAdmin/CRUD/base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "@SonataAdmin/CRUD/base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'title' => [$this, 'block_title'],
                'navbar_title' => [$this, 'block_navbar_title'],
                'actions' => [$this, 'block_actions'],
                'tab_menu' => [$this, 'block_tab_menu'],
                'form' => [$this, 'block_form'],
            ]
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : null), "@SonataAdmin/CRUD/base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        // line 15
        echo "    ";
        // line 16
        echo "    ";
        if ( !(null === (((isset($context["objectId"]) || array_key_exists("objectId", $context))) ? (_twig_default_filter((isset($context["objectId"]) ? $context["objectId"] : null), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", [0 => (isset($context["object"]) ? $context["object"] : null)], "method"))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", [0 => (isset($context["object"]) ? $context["object"] : null)], "method"))))) {
            // line 17
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", ["%name%" => twig_truncate_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "toString", [0 => (isset($context["object"]) ? $context["object"] : null)], "method"), 15)], "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 19
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_create", [], "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
    }

    // line 23
    public function block_navbar_title($context, array $blocks = [])
    {
        // line 24
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
    }

    // line 27
    public function block_actions($context, array $blocks = [])
    {
        // line 28
        $this->loadTemplate("@SonataAdmin/CRUD/action_buttons.html.twig", "@SonataAdmin/CRUD/base_edit.html.twig", 28)->display($context);
    }

    // line 31
    public function block_tab_menu($context, array $blocks = [])
    {
        // line 32
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "sidemenu", [0 => (isset($context["action"]) ? $context["action"] : null)], "method"), ["currentClass" => "active", "template" => $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension')->getGlobalTemplate("tab_menu_template")], "twig");
    }

    // line 40
    public function block_form($context, array $blocks = [])
    {
        // line 41
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 41,  95 => 40,  91 => 32,  88 => 31,  84 => 28,  81 => 27,  74 => 24,  71 => 23,  63 => 19,  57 => 17,  54 => 16,  52 => 15,  49 => 14,  40 => 12,  12 => 38,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SonataAdmin/CRUD/base_edit.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_edit.html.twig");
    }
}
