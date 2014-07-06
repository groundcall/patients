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
        echo "<h1>Patient list</h1>
    <div>
        <form name=\"input\" action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("patients");
        echo "\" method=\"get\">
            Name: <input type=\"text\" name=\"name\" ";
        // line 7
        if ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "name")) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "name"), "html", null, true);
            echo "\" ";
        }
        echo " >
            <select name=\"hospital_id\" id=\"hospital_id\">
                <option value=\"\">All Hospitals</option>
                ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hospitals"]) ? $context["hospitals"] : $this->getContext($context, "hospitals")));
        foreach ($context['_seq'] as $context["_key"] => $context["hospital"]) {
            // line 11
            echo "                    <option value=\"";
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
        // line 13
        echo "            </select>
            <input type=\"submit\" name=\"Submit\">
        </form>
    </div>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Number</th>
                <th>Name</th>
                <th>Birthdate</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Hospital</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["key"] => $context["entity"]) {
            // line 32
            echo "                <tr>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, ((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) + 1), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("patients_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
            echo "</td>
                    <td>";
            // line 35
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "birthdate")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "birthdate"), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "phone"), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "address"), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hospital_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "hospital"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "hospital"), "name"), "html", null, true);
            echo "</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("patients_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Show Patient</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("patients_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Edit Patient</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("patients_new");
        echo "\">
                Add a new Patient
            </a>
        </li>
    </ul>
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
        return array (  153 => 56,  146 => 51,  134 => 45,  128 => 42,  119 => 38,  115 => 37,  111 => 36,  105 => 35,  99 => 34,  95 => 33,  92 => 32,  88 => 31,  68 => 13,  53 => 11,  49 => 10,  39 => 7,  35 => 6,  31 => 4,  28 => 3,);
    }
}
