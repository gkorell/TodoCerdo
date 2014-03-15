<?php

/* TodoCerdoTodoCerdoBundle:Producto:index.html.twig */
class __TwigTemplate_10ede12ffb1ef67127ac929012ce63c795df6eeb95c936ecbea7062c6c630f24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TodoCerdoTodoCerdoBundle::layout.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
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
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "54be4f3_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_54be4f3_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/54be4f3_productos_1.css");
            // line 7
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "54be4f3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_54be4f3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/54be4f3.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 9
        echo "
";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "<h1>Nuestros Productos</h1>

 <ul class=\"column-190_prod paging\">
    ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tipoProductos"]) ? $context["tipoProductos"] : $this->getContext($context, "tipoProductos")));
        foreach ($context['_seq'] as $context["_key"] => $context["tipoProducto"]) {
            // line 17
            echo "          <li>
            <div class=\"highlight-one\">
                <div class=\"prod-title\"><label>L&iacute;nea de ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipoProducto"]) ? $context["tipoProducto"] : $this->getContext($context, "tipoProducto")), "nombre"), "html", null, true);
            echo "</label></div>
                <hr class=\"prod-line\">
                <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("TodoCerdoTodoCerdoBundle_listproductos", array("idTipo" => $this->getAttribute((isset($context["tipoProducto"]) ? $context["tipoProducto"] : $this->getContext($context, "tipoProducto")), "id"))), "html", null, true);
            echo "\">
                    ";
            // line 22
            if (($this->getAttribute((isset($context["tipoProducto"]) ? $context["tipoProducto"] : $this->getContext($context, "tipoProducto")), "id") == "1")) {
                // line 23
                echo "                        ";
                if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                    // asset "4f63c61_0"
                    $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4f63c61_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/4f63c61_bondiola1_1.jpg");
                    // line 24
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
                    echo "\" height=\"135\" width=\"186\"/>
                        ";
                } else {
                    // asset "4f63c61"
                    $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4f63c61") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/4f63c61.jpg");
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
                    echo "\" height=\"135\" width=\"186\"/>
                        ";
                }
                unset($context["asset_url"]);
                // line 26
                echo "                        
                    ";
            } elseif (($this->getAttribute((isset($context["tipoProducto"]) ? $context["tipoProducto"] : $this->getContext($context, "tipoProducto")), "id") == "2")) {
                // line 28
                echo "                        ";
                if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                    // asset "a1dd853_0"
                    $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a1dd853_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/a1dd853_lomitocurado1_1.jpg");
                    // line 29
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
                    echo "\" height=\"135\" width=\"186\"/>
                        ";
                } else {
                    // asset "a1dd853"
                    $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a1dd853") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/a1dd853.jpg");
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
                    echo "\" height=\"135\" width=\"186\"/>
                        ";
                }
                unset($context["asset_url"]);
                // line 31
                echo "                        
                    ";
            } else {
                // line 33
                echo "                        ";
                if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                    // asset "26abfbc_0"
                    $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_26abfbc_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/26abfbc_chori1_1.jpg");
                    // line 34
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
                    echo "\" height=\"135\" width=\"186\"/>
                        ";
                } else {
                    // asset "26abfbc"
                    $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_26abfbc") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/26abfbc.jpg");
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
                    echo "\" height=\"135\" width=\"186\"/>
                        ";
                }
                unset($context["asset_url"]);
                // line 36
                echo "                        
                    ";
            }
            // line 38
            echo "                </a>
            </div>
          </li>        
    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipoProducto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "          
 </ul>  
";
        // line 45
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 46
            echo "        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("TodoCerdoTodoCerdoBundle_newproducto");
            echo "\">Agregar un producto</a>
        ";
        }
    }

    public function getTemplateName()
    {
        return "TodoCerdoTodoCerdoBundle:Producto:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 46,  169 => 45,  165 => 43,  155 => 38,  151 => 36,  137 => 34,  132 => 33,  128 => 31,  114 => 29,  109 => 28,  105 => 26,  91 => 24,  86 => 23,  84 => 22,  80 => 21,  75 => 19,  71 => 17,  67 => 16,  62 => 13,  59 => 12,  54 => 9,  40 => 7,  36 => 6,  32 => 5,  29 => 4,);
    }
}
