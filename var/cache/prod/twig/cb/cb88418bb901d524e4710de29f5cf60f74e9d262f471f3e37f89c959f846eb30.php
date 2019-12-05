<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_0a57a37ddff4f4577e71fe2f65b973fd8bfbc51b9247d3c2a3e256f51717ba4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'sonata_header' => [$this, 'block_sonata_header'],
            'sonata_left_side' => [$this, 'block_sonata_left_side'],
            'sonata_nav' => [$this, 'block_sonata_nav'],
            'sonata_breadcrumb' => [$this, 'block_sonata_breadcrumb'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'sonata_wrapper' => [$this, 'block_sonata_wrapper'],
            'sonata_page_content' => [$this, 'block_sonata_page_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->env->getExtension('Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension')->getGlobalTemplate("layout"), "SonataAdminBundle::empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_sonata_header($context, array $blocks = [])
    {
    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = [])
    {
    }

    // line 16
    public function block_sonata_nav($context, array $blocks = [])
    {
    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = [])
    {
    }

    // line 19
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>
";
    }

    // line 30
    public function block_sonata_wrapper($context, array $blocks = [])
    {
        // line 31
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
    }

    public function block_sonata_page_content($context, array $blocks = [])
    {
        // line 32
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 32,  73 => 31,  70 => 30,  56 => 20,  53 => 19,  48 => 17,  43 => 16,  38 => 15,  33 => 14,  24 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle::empty_layout.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/admin-bundle/src/Resources/views/empty_layout.html.twig");
    }
}
