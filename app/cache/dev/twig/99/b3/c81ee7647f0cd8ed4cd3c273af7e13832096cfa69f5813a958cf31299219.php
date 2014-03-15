<?php

/* TodoCerdoTodoCerdoBundle:Page:sidebar.html.twig */
class __TwigTemplate_99b3c81ee7647f0cd8ed4cd3c273af7e13832096cfa69f5813a958cf31299219 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        echo "
<section class=\"section\">
  


        <div class=\"carro\">


            <p>Mi carrito</p>
            
             <div class=\"subtotal\">
                     (";
        // line 14
        echo twig_escape_filter($this->env, ((array_key_exists("cantidadTotal", $context)) ? (_twig_default_filter((isset($context["cantidadTotal"]) ? $context["cantidadTotal"] : $this->getContext($context, "cantidadTotal")), "0")) : ("0")), "html", null, true);
        echo ") Subtotal:
                     <span>\$ ";
        // line 15
        echo twig_escape_filter($this->env, _twig_default_filter(twig_number_format_filter($this->env, (isset($context["precioTotal"]) ? $context["precioTotal"] : $this->getContext($context, "precioTotal")), 2, ".", ","), "0.00"), "html", null, true);
        echo "</span>
            </div>
           
            <div class=\"boton-carro\">
                
                <p  class=\"boton-link\">Finalizar Compra</p>
            </div>
            <div class=\"boton-carro\">
                <p  class=\"boton-link\">
                    <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("TodoCerdoTodoCerdoBundle_detalleCarrito");
        echo "\">Ver Carrito</a>
                </p>
            </div>

            
            </div>
            

        </div>
           
       
            
       
       
       
    
</section>
   ";
    }

    public function getTemplateName()
    {
        return "TodoCerdoTodoCerdoBundle:Page:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 24,  36 => 15,  32 => 14,  19 => 3,  24 => 4,  20 => 2,  288 => 94,  285 => 93,  278 => 86,  275 => 85,  270 => 80,  265 => 77,  257 => 72,  249 => 71,  241 => 56,  233 => 54,  227 => 51,  220 => 50,  218 => 49,  214 => 48,  206 => 46,  202 => 45,  198 => 44,  194 => 43,  165 => 6,  157 => 96,  155 => 93,  150 => 90,  148 => 85,  142 => 81,  140 => 80,  136 => 78,  134 => 77,  126 => 72,  116 => 67,  102 => 65,  93 => 61,  91 => 37,  83 => 31,  68 => 27,  58 => 25,  35 => 6,  28 => 1,  231 => 47,  217 => 45,  213 => 44,  210 => 47,  196 => 41,  192 => 40,  187 => 38,  184 => 37,  179 => 35,  176 => 34,  174 => 11,  171 => 10,  163 => 28,  160 => 27,  153 => 28,  147 => 27,  144 => 26,  138 => 24,  135 => 23,  128 => 24,  122 => 71,  119 => 22,  105 => 20,  101 => 19,  98 => 64,  80 => 15,  77 => 30,  63 => 26,  59 => 11,  56 => 10,  42 => 10,  84 => 16,  82 => 20,  79 => 19,  74 => 17,  72 => 16,  69 => 15,  66 => 13,  60 => 9,  54 => 24,  51 => 6,  44 => 18,  38 => 7,  33 => 6,  30 => 6,);
    }
}
