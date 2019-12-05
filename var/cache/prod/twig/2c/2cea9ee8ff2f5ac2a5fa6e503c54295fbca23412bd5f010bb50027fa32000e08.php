<?php

/* SonataAdminBundle:CRUD:list_boolean.html.twig */
class __TwigTemplate_19dcc252e97733b80fb0608ec75f21c9c9734e939a25b47b3547661170a1f053 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'field_span_attributes' => [$this, 'block_field_span_attributes'],
            'field' => [$this, 'block_field'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->env->getExtension('Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension')->getAdminTemplate("base_list_field", $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "code", [])), "SonataAdminBundle:CRUD:list_boolean.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 14
        $context["isEditable"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", [], "any", false, true), "editable", [], "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", []), "editable", [])) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasAccess", [0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : null)], "method"));
        // line 15
        $context["xEditableType"] = $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getXEditableType($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "type", []));
        // line 17
        if (((isset($context["isEditable"]) ? $context["isEditable"] : null) && (isset($context["xEditableType"]) ? $context["xEditableType"] : null))) {
        }
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_field_span_attributes($context, array $blocks = [])
    {
        // line 19
        echo "        ";
        ob_start();
        // line 20
        echo "            ";
        $this->displayParentBlock("field_span_attributes", $context, $blocks);
        echo "
            data-source=\"[{value: 0, text: '";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_no", [], "SonataAdminBundle");
        echo "'},{value: 1, text: '";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_yes", [], "SonataAdminBundle");
        echo "'}]\"
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 23
        echo "    ";
    }

    // line 26
    public function block_field($context, array $blocks = [])
    {
        // line 27
        $this->loadTemplate("@SonataAdmin/CRUD/display_boolean.html.twig", "SonataAdminBundle:CRUD:list_boolean.html.twig", 27)->display($context);
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 27,  58 => 26,  54 => 23,  47 => 21,  42 => 20,  39 => 19,  36 => 18,  32 => 12,  29 => 17,  27 => 15,  25 => 14,  19 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:CRUD:list_boolean.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/list_boolean.html.twig");
    }
}
