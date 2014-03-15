<?php

/* ::base.html.twig */
class __TwigTemplate_2c49129e2dc1d269bff577973797d5a8c3cf9d8f28509b10b12bd708450d8f68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'blog_title' => array($this, 'block_blog_title'),
            'blog_tagline' => array($this, 'block_blog_tagline'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.png"), "html", null, true);
        echo "\" />

    </head>
    <body>
        

        ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 25
            echo "              ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["key"] => $context["message"]) {
                // line 26
                echo "        <div class=\"flash-";
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
                echo "\">
                        ";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), "FOSUserBundle"), "html", null, true);
                echo "
            </div>
           ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "

        <section id=\"wrapper\">
            <header id=\"header\">
              
                <div class=\"top\" style=\" background-color: transparent;  background: no-repeat\">
                    ";
        // line 37
        $this->displayBlock('navigation', $context, $blocks);
        // line 61
        echo "                    
                </div>
                <center>
                    ";
        // line 64
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "f6f87d4_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f6f87d4_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/f6f87d4_cabezera_1.jpg");
            // line 65
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
                    ";
        } else {
            // asset "f6f87d4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f6f87d4") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/f6f87d4.jpg");
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
                    ";
        }
        unset($context["asset_url"]);
        // line 67
        echo "                    
                </center>
               <!-- <hgroup>
                    
                    <h2>";
        // line 71
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
                    <h3>";
        // line 72
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
                </hgroup>-->
            </header>
                
            <section class=\"main-col\">
                ";
        // line 77
        $this->displayBlock('body', $context, $blocks);
        // line 78
        echo "            </section>
            <aside class=\"sidebar\">
                ";
        // line 80
        $this->displayBlock('sidebar', $context, $blocks);
        // line 81
        echo "            </aside>

                <div id=\"footer\" >
                    
                ";
        // line 85
        $this->displayBlock('footer', $context, $blocks);
        // line 90
        echo "            </div>
        </section>

        ";
        // line 93
        $this->displayBlock('javascripts', $context, $blocks);
        // line 96
        echo "            
   
    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "TodoCerdo";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=Bowlby+One' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=Quattrocento+Sans' rel='stylesheet' type='text/css'>
 
            
        ";
    }

    // line 37
    public function block_navigation($context, array $blocks = array())
    {
        // line 38
        echo "                        <nav>
                            <div id=\"wrap\" class=\"navigation\">
        
                            
                            <ul id=\"menu\">
                                <li> <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("TodoCerdoTodoCerdoBundle_homepage");
        echo "\">Home</a> </li>
                                <li> <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("TodoCerdoTodoCerdoBundle_about");
        echo "\">Sobre</a> </li>
                                <li> <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("TodoCerdoTodoCerdoBundle_productos");
        echo "\">Productos</a> </li>
                                <li> <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("receta");
        echo "\">Receta</a> </li>
                                <li> <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("TodoCerdoTodoCerdoBundle_faq");
        echo "\">Preguntas Frecuentes</a> </li>
                                <li> <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("TodoCerdoTodoCerdoBundle_contact");
        echo "\">Contacto</a> </li>
                                <li>";
        // line 49
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 50
            echo "                                    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" > ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username")), "FOSUserBundle"), "html", null, true);
            echo " |
                                    ";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                                    </a>
                                ";
        } else {
            // line 54
            echo "                                    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\" >";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                                ";
        }
        // line 56
        echo "                                </li>
                            </ul>                        
                        </div>
                        </nav>
                    ";
    }

    // line 71
    public function block_blog_title($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("TodoCerdoTodoCerdoBundle_homepage");
        echo "\">Todo Cerdo</a>";
    }

    // line 72
    public function block_blog_tagline($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("TodoCerdoTodoCerdoBundle_homepage");
        echo "\">Delivery</a>";
    }

    // line 77
    public function block_body($context, array $blocks = array())
    {
    }

    // line 80
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 85
    public function block_footer($context, array $blocks = array())
    {
        // line 86
        echo "                    Copyright © 2012 Todos los Derechos Reservados-Santa Fe, Argentina


                ";
    }

    // line 93
    public function block_javascripts($context, array $blocks = array())
    {
        // line 94
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 94,  285 => 93,  278 => 86,  275 => 85,  270 => 80,  265 => 77,  257 => 72,  249 => 71,  241 => 56,  233 => 54,  227 => 51,  220 => 50,  218 => 49,  214 => 48,  206 => 46,  202 => 45,  198 => 44,  194 => 43,  165 => 6,  157 => 96,  155 => 93,  150 => 90,  148 => 85,  142 => 81,  140 => 80,  136 => 78,  134 => 77,  126 => 72,  116 => 67,  102 => 65,  93 => 61,  91 => 37,  83 => 31,  68 => 27,  58 => 25,  35 => 6,  28 => 1,  231 => 47,  217 => 45,  213 => 44,  210 => 47,  196 => 41,  192 => 40,  187 => 38,  184 => 37,  179 => 35,  176 => 34,  174 => 11,  171 => 10,  163 => 28,  160 => 27,  153 => 28,  147 => 27,  144 => 26,  138 => 24,  135 => 23,  128 => 24,  122 => 71,  119 => 22,  105 => 20,  101 => 19,  98 => 64,  80 => 15,  77 => 30,  63 => 26,  59 => 11,  56 => 10,  42 => 10,  84 => 16,  82 => 20,  79 => 19,  74 => 17,  72 => 16,  69 => 15,  66 => 13,  60 => 9,  54 => 24,  51 => 6,  44 => 18,  38 => 7,  33 => 6,  30 => 5,);
    }
}
