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
        if ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "name")) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "name"), "html", null, true);
            echo "\" ";
        }
        echo " >
                        <select class=\"select2-choice\" name=\"hospital_id\" id=\"hospital_id\">
                            <option value=\"\">All Hospitals</option>
                            ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hospitals"]) ? $context["hospitals"] : $this->getContext($context, "hospitals")));
        foreach ($context['_seq'] as $context["_key"] => $context["hospital"]) {
            // line 14
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hospital"]) ? $context["hospital"] : $this->getContext($context, "hospital")), "id"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "hospital_id") == $this->getAttribute((isset($context["hospital"]) ? $context["hospital"] : $this->getContext($context, "hospital")), "id"))) {
                echo " selected=\"yes\" ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hospital"]) ? $context["hospital"] : $this->getContext($context, "hospital")), "name"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["key"] => $context["entity"]) {
            // line 45
            echo "                    <tr>
                        <td>";
            // line 46
            echo twig_escape_filter($this->env, ((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) + 1), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("patients_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
            echo "</td>
                        <td>";
            // line 48
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "birthdate")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "birthdate"), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                        <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "phone"), "html", null, true);
            echo "</td>
                        <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "address"), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hospital_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "hospital"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "hospital"), "name"), "html", null, true);
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
        return array (  146 => 54,  135 => 51,  131 => 50,  127 => 49,  121 => 48,  115 => 47,  111 => 46,  108 => 45,  104 => 44,  80 => 23,  71 => 16,  56 => 14,  52 => 13,  42 => 10,  37 => 8,  31 => 4,  28 => 3,);
    }
}
