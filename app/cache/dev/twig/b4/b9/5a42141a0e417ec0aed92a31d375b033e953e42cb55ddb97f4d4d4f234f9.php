<?php

/* TodoCerdoTodoCerdoBundle::layout.html.twig */
class __TwigTemplate_b4b95a42141a0e417ec0aed92a31d375b033e953e42cb55ddb97f4d4d4f234f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1e6974e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1e6974e_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/1e6974e_screen_1.css");
            // line 8
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "1e6974e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1e6974e") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/1e6974e.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 10
        echo "
    ";
        // line 11
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5642938_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5642938_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/5642938_menu_1.css");
            // line 12
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "5642938"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5642938") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/5642938.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 14
        echo "        
    ";
        // line 15
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1f38064_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1f38064_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/1f38064_forms_1.css");
            // line 16
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "1f38064"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1f38064") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/1f38064.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 18
        echo "        
    ";
        // line 19
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b1af6fb_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b1af6fb_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/b1af6fb_boton_1.css");
            // line 20
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "b1af6fb"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b1af6fb") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/b1af6fb.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 22
        echo "    
    ";
        // line 23
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c606c95_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c606c95_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c606c95_sidebar_1.css");
            echo "    
        <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "c606c95"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c606c95") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c606c95.css");
            // line 23
            echo "    
        <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 26
        echo "        
    ";
        // line 27
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "53ecf78_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_53ecf78_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/53ecf78_cart_1.css");
            echo " 
        <link rel=\"stylesheet\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "53ecf78"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_53ecf78") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/53ecf78.css");
            // line 27
            echo " 
        <link rel=\"stylesheet\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
    }

    // line 32
    public function block_sidebar($context, array $blocks = array())
    {
        // line 33
        echo "   ";
        // line 34
        echo "   ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("TodoCerdoTodoCerdoBundle:Page:sidebar"), array());
        // line 35
        echo "   
";
    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        // line 39
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 40
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b8f18bb_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b8f18bb_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/b8f18bb_jquery-1.7.2_1.js");
            // line 41
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "b8f18bb"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b8f18bb") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/b8f18bb.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 43
        echo "    
    ";
        // line 44
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "f73b9e2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f73b9e2_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/f73b9e2_jquery.reveal_1.js");
            // line 45
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "f73b9e2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f73b9e2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/f73b9e2.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 47
        echo "     
     

";
    }

    public function getTemplateName()
    {
        return "TodoCerdoTodoCerdoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 47,  217 => 45,  213 => 44,  210 => 43,  196 => 41,  192 => 40,  187 => 39,  184 => 38,  179 => 35,  176 => 34,  174 => 33,  171 => 32,  163 => 28,  160 => 27,  153 => 28,  147 => 27,  144 => 26,  138 => 24,  135 => 23,  128 => 24,  122 => 23,  119 => 22,  105 => 20,  101 => 19,  98 => 18,  80 => 15,  77 => 14,  63 => 12,  59 => 11,  56 => 10,  42 => 8,  84 => 16,  82 => 20,  79 => 19,  74 => 17,  72 => 16,  69 => 15,  66 => 13,  60 => 9,  54 => 7,  51 => 6,  44 => 7,  38 => 7,  33 => 6,  30 => 5,);
    }
}
