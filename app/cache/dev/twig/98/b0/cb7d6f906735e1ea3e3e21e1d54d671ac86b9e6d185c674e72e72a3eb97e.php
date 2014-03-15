<?php

/* TodoCerdoTodoCerdoBundle:Page:index.html.twig */
class __TwigTemplate_98b0cb7d6f906735e1ea3e3e21e1d54d671ac86b9e6d185c674e72e72a3eb97e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TodoCerdoTodoCerdoBundle::layout.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TodoCerdoTodoCerdoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5ff4048_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5ff4048_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/5ff4048_style1_1.css");
            echo " 
        <link rel=\"stylesheet\" href=\"";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "5ff4048"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5ff4048") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/5ff4048.css");
            // line 6
            echo " 
        <link rel=\"stylesheet\" href=\"";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 9
        echo "    
    
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "    
   ";
        // line 16
        $this->env->loadTemplate("TodoCerdoTodoCerdoBundle:Page:slide1.html.twig")->display($context);
        // line 17
        echo "    
";
    }

    // line 19
    public function block_sidebar($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        // line 21
        echo "   ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "TodoCerdoTodoCerdoBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 21,  82 => 20,  79 => 19,  74 => 17,  72 => 16,  69 => 15,  66 => 13,  60 => 9,  54 => 7,  51 => 6,  44 => 7,  38 => 6,  33 => 5,  30 => 4,);
    }
}
