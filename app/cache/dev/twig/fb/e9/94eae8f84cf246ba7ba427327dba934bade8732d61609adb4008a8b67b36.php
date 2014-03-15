<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_fbe994eae8f84cf246ba7ba427327dba934bade8732d61609adb4008a8b67b36 extends Twig_Template
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
        // line 1
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script>/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "');
                }
            }
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 28,  70 => 26,  62 => 24,  50 => 15,  46 => 14,  26 => 3,  48 => 24,  36 => 15,  32 => 6,  19 => 1,  24 => 2,  20 => 2,  288 => 94,  285 => 93,  278 => 86,  275 => 85,  270 => 80,  265 => 77,  257 => 72,  249 => 71,  241 => 56,  233 => 54,  227 => 51,  220 => 50,  218 => 49,  214 => 48,  206 => 46,  202 => 45,  198 => 44,  194 => 43,  165 => 6,  157 => 96,  155 => 93,  150 => 90,  148 => 85,  142 => 81,  140 => 80,  136 => 78,  134 => 77,  126 => 72,  116 => 67,  102 => 65,  93 => 61,  91 => 35,  83 => 30,  68 => 27,  58 => 25,  35 => 6,  28 => 1,  231 => 47,  217 => 45,  213 => 44,  210 => 47,  196 => 41,  192 => 40,  187 => 38,  184 => 37,  179 => 35,  176 => 34,  174 => 11,  171 => 10,  163 => 28,  160 => 27,  153 => 28,  147 => 27,  144 => 26,  138 => 24,  135 => 23,  128 => 24,  122 => 71,  119 => 22,  105 => 20,  101 => 19,  98 => 64,  80 => 15,  77 => 30,  63 => 26,  59 => 11,  56 => 10,  42 => 12,  84 => 16,  82 => 20,  79 => 29,  74 => 17,  72 => 16,  69 => 15,  66 => 25,  60 => 9,  54 => 24,  51 => 6,  44 => 18,  38 => 7,  33 => 6,  30 => 5,);
    }
}
