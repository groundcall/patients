<?php

/* AlexUsersBundle:Patient:index.html.twig */
class __TwigTemplate_a32ae644e8c618c20e558326fbef47cf7fca8b936b948bf0ad4e0c28c4880d24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"row\">
        <div class=\"col-lg-4\">
            <h2>Patient list</h2>
            <div>
                <form class=\"btn\" name=\"input\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("patients");
        echo "\" method=\"get\">
                    <div class=\"form-group\">
                        Name: <input class=\"input-large\" type=\"text\" name=\"name\" ";
        // line 10
        if ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "name")) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "name"), "html", null, true);
            echo "\" ";
        }
        echo " >
                        <select class=\"select2-choice\" name=\"hospital_id\" id=\"hospital_id\">
                            <option value=\"\">All Hospitals</option>
                            ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hospitals"]) ? $context["hospitals"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["hospital"]) {
            // line 14
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hospital"]) ? $context["hospital"] : null), "id"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "hospital_id") == $this->getAttribute((isset($context["hospital"]) ? $context["hospital"] : null), "id"))) {
                echo " selected=\"yes\" ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hospital"]) ? $context["hospital"] : null), "name"), "html", null, true);
            echo "  </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hospital'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "                        </select>
                        <input  type=\"submit\" name=\"Submit\">
                    </div>
                </form>
                <div>   
                    <ul>
                        <li>
                            <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("patients_new");
        echo "\">
                                Add a new Patient
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <table class=\"table table-striped table-bordered table-condensed table-hover\">
            <thead>
                <tr>
                    <th>Number</th>
                    <th>Name</th>
                    <th>Birthdate</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Hospital</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["entity"]) {
            // line 45
            echo "                    <tr>
                        <td>";
            // line 46
            echo twig_escape_filter($this->env, ((isset($context["key"]) ? $context["key"] : null) + 1), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("patients_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "name"), "html", null, true);
            echo "</td>
                        <td>";
            // line 48
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "birthdate")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "birthdate"), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                        <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "phone"), "html", null, true);
            echo "</td>
                        <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "address"), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hospital_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "hospital"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "hospital"), "name"), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            </tbody>
        </table>


    </div>
";
    }

    public function getTemplateName()
    {
        return "AlexUsersBundle:Patient:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 54,  127 => 49,  104 => 44,  52 => 13,  37 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 46,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 51,  131 => 50,  119 => 42,  108 => 45,  102 => 32,  71 => 16,  67 => 15,  63 => 15,  59 => 14,  47 => 9,  38 => 6,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 48,  117 => 44,  115 => 47,  105 => 40,  91 => 27,  69 => 25,  62 => 23,  49 => 19,  28 => 3,  87 => 25,  66 => 24,  55 => 15,  25 => 5,  21 => 2,  31 => 4,  29 => 3,  43 => 6,  101 => 32,  94 => 28,  89 => 20,  85 => 25,  79 => 18,  75 => 17,  72 => 16,  68 => 14,  56 => 14,  50 => 10,  41 => 5,  24 => 4,  35 => 5,  26 => 6,  19 => 1,  98 => 31,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  44 => 12,  40 => 7,  32 => 4,  27 => 4,  22 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 23,  73 => 19,  64 => 17,  60 => 13,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 8,  42 => 10,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
