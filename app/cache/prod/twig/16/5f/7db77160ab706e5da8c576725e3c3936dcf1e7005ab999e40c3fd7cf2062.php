<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_165f7db77160ab706e5da8c576725e3c3936dcf1e7005ab999e40c3fd7cf2062 extends Twig_Template
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
        $this->env->loadTemplate("TwigBundle:Exception:error.xml.twig")->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : null))));
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 40,  93 => 9,  88 => 6,  78 => 40,  40 => 8,  38 => 13,  43 => 8,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 73,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  91 => 31,  69 => 25,  62 => 23,  49 => 19,  101 => 39,  94 => 22,  89 => 20,  85 => 19,  79 => 18,  75 => 17,  68 => 14,  56 => 9,  50 => 8,  24 => 3,  32 => 6,  87 => 20,  72 => 16,  66 => 24,  55 => 13,  46 => 10,  41 => 5,  44 => 9,  35 => 4,  27 => 4,  25 => 5,  21 => 2,  31 => 5,  29 => 4,  26 => 3,  22 => 1,  19 => 1,  209 => 82,  203 => 78,  199 => 91,  193 => 73,  189 => 71,  187 => 84,  182 => 68,  176 => 64,  173 => 74,  168 => 72,  164 => 60,  162 => 59,  154 => 54,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 38,  122 => 37,  116 => 36,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 30,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 41,  73 => 19,  64 => 12,  60 => 13,  57 => 12,  54 => 11,  51 => 15,  48 => 9,  45 => 8,  42 => 14,  39 => 16,  36 => 7,  33 => 4,  30 => 3,);
    }
}
