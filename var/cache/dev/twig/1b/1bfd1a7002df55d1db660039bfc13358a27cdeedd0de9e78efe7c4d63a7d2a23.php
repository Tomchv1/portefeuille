<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* entete.html.twig */
class __TwigTemplate_4ffea71a7f890a470d09e9cb175b82011186f6c4c66aef503e747eb79406e73b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entete.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
  <head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css\" integrity=\"sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2\" crossorigin=\"anonymous\">

    <title>Profil</title>
    <div class=\"jumbotron p-3 mb-n3 text-white\" style=\"background-color: #2980b9;\">

          <div class=\"row\">
            <div class=\"col-md-2\">
            </div>
            <div class=\"col-md-8\">
              <h1 class=\"display-2 text-center\">SuiviSIO</h1>
                <p class=\"lead text-center\">Suivi individuel des compétences BTS SIO</p>
            </div>
            <div class=\"col-md-2\">

            </div>



      </div>
    </div>
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
  <a class=\"navbar-brand\" href=\"/Accueil\">Accueil</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav mr-auto\">

      <li class=\"nav-item dropdown\">
        <a class=\"navbar-brand dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Réalisation professionnelle
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
          <a class=\"dropdown-item\" href=\"\">Nouvelle Réalisation</a>
          <a class=\"dropdown-item\" href=\"#\">Gestion Réalisation</a>
          <a class=\"dropdown-item\" href=\"../../../etudiant/rp/listerMesRP/1\">Lister mes réalisations (etudiant)</a>
          <a class=\"dropdown-item\" href=\"../../../enseignant/rp/listerLesRPaCommenter/1\">Lister les réalisations à commenter (prof)</a>
        </div>
      </li>

      <li class=\"nav-item dropdown\">
        <a class=\"navbar-brand dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Synthèse
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
          <a class=\"dropdown-item\" href=\"#\">Bilan individuel</a>
          <a class=\"dropdown-item\" href=\"#\">Tableau de synthèse</a>
          <a class=\"dropdown-item\" href=\"#\">Tableur Excel</a>
        </div>
      </li>

      <li class=\"nav-item dropdown\">
        <a class=\"navbar-brand dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Stages
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
          <a class=\"dropdown-item\" href=\"#\">Carnet de bord 1è année</a>
          <a class=\"dropdown-item\" href=\"#\">Carnet de bord 2è année</a>
          <a class=\"dropdown-item\" href=\"#\">Infos anciens stages</a>
          <a class=\"dropdown-item\" href=\"../../../etudiant/stage/consulter/1\">Consulter Stage (prof/etudiant)</a>
          <a class=\"dropdown-item\" href=\"../../../enseignant/stage/ListerStagesAffect/1\">Lister Stage affectés (prof)</a>
        </div>
      </li>

      <li class=\"nav-item dropdown\">
        <a class=\"navbar-brand dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Divers
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
          <a class=\"dropdown-item\" href=\"https://wiki.sio.bts/doku.php\">Wiki section (interne)</a>
          <a class=\"dropdown-item\" href=\"https://wiki.inforostand14.net/doku.php\">Wiki section (externe)</a>
          <div class=\"dropdown-divider\"></div>
          <a class=\"dropdown-item\" href=\"#\">Sauvegarde</a>
          <a class=\"dropdown-item\" href=\"#\">Paramètres</a>
          <div class=\"dropdown-divider\"></div>
          <a class=\"dropdown-item\" href=\"mailto:btsinfo.rostand@laposte.net?subject=[portefeuille]\">Contact admin</a>
        </div>
      </li>
    </ul>
    <form class=\"form-inline my-2 my-lg-0\">
      <button class=\"btn btn-outline-info my-2 my-sm-0\" type=\"submit\">Déconnexion</button>
    </form>
  </div>
</nav>
  </head>
<div id=\"content\">";
        // line 95
        $this->displayBlock('content', $context, $blocks);
        echo "</div>



    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
    </script>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\" integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx\" crossorigin=\"anonymous\"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\" integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js\" integrity=\"sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js\" integrity=\"sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s\" crossorigin=\"anonymous\"></script>
    -->
  </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "entete.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  137 => 95,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
  <head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css\" integrity=\"sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2\" crossorigin=\"anonymous\">

    <title>Profil</title>
    <div class=\"jumbotron p-3 mb-n3 text-white\" style=\"background-color: #2980b9;\">

          <div class=\"row\">
            <div class=\"col-md-2\">
            </div>
            <div class=\"col-md-8\">
              <h1 class=\"display-2 text-center\">SuiviSIO</h1>
                <p class=\"lead text-center\">Suivi individuel des compétences BTS SIO</p>
            </div>
            <div class=\"col-md-2\">

            </div>



      </div>
    </div>
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
  <a class=\"navbar-brand\" href=\"/Accueil\">Accueil</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav mr-auto\">

      <li class=\"nav-item dropdown\">
        <a class=\"navbar-brand dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Réalisation professionnelle
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
          <a class=\"dropdown-item\" href=\"\">Nouvelle Réalisation</a>
          <a class=\"dropdown-item\" href=\"#\">Gestion Réalisation</a>
          <a class=\"dropdown-item\" href=\"../../../etudiant/rp/listerMesRP/1\">Lister mes réalisations (etudiant)</a>
          <a class=\"dropdown-item\" href=\"../../../enseignant/rp/listerLesRPaCommenter/1\">Lister les réalisations à commenter (prof)</a>
        </div>
      </li>

      <li class=\"nav-item dropdown\">
        <a class=\"navbar-brand dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Synthèse
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
          <a class=\"dropdown-item\" href=\"#\">Bilan individuel</a>
          <a class=\"dropdown-item\" href=\"#\">Tableau de synthèse</a>
          <a class=\"dropdown-item\" href=\"#\">Tableur Excel</a>
        </div>
      </li>

      <li class=\"nav-item dropdown\">
        <a class=\"navbar-brand dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Stages
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
          <a class=\"dropdown-item\" href=\"#\">Carnet de bord 1è année</a>
          <a class=\"dropdown-item\" href=\"#\">Carnet de bord 2è année</a>
          <a class=\"dropdown-item\" href=\"#\">Infos anciens stages</a>
          <a class=\"dropdown-item\" href=\"../../../etudiant/stage/consulter/1\">Consulter Stage (prof/etudiant)</a>
          <a class=\"dropdown-item\" href=\"../../../enseignant/stage/ListerStagesAffect/1\">Lister Stage affectés (prof)</a>
        </div>
      </li>

      <li class=\"nav-item dropdown\">
        <a class=\"navbar-brand dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Divers
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
          <a class=\"dropdown-item\" href=\"https://wiki.sio.bts/doku.php\">Wiki section (interne)</a>
          <a class=\"dropdown-item\" href=\"https://wiki.inforostand14.net/doku.php\">Wiki section (externe)</a>
          <div class=\"dropdown-divider\"></div>
          <a class=\"dropdown-item\" href=\"#\">Sauvegarde</a>
          <a class=\"dropdown-item\" href=\"#\">Paramètres</a>
          <div class=\"dropdown-divider\"></div>
          <a class=\"dropdown-item\" href=\"mailto:btsinfo.rostand@laposte.net?subject=[portefeuille]\">Contact admin</a>
        </div>
      </li>
    </ul>
    <form class=\"form-inline my-2 my-lg-0\">
      <button class=\"btn btn-outline-info my-2 my-sm-0\" type=\"submit\">Déconnexion</button>
    </form>
  </div>
</nav>
  </head>
<div id=\"content\">{% block content %}{% endblock %}</div>



    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
    </script>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\" integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx\" crossorigin=\"anonymous\"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\" integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js\" integrity=\"sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js\" integrity=\"sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s\" crossorigin=\"anonymous\"></script>
    -->
  </body>
</html>
", "entete.html.twig", "D:\\wamp64\\www\\portefeuille\\templates\\entete.html.twig");
    }
}
