<?php

/* genus/bibi.html.twig */
class __TwigTemplate_03606bf4a4fe49a8cae81018052b0c6114d56858115dca3e346b50110c12197b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
            'stylesheet' => array($this, 'block_stylesheet'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_648fdc3f8a3a28650cb4c95f64099fd0f5dcece6c223ca75356db1df02b4d5a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_648fdc3f8a3a28650cb4c95f64099fd0f5dcece6c223ca75356db1df02b4d5a7->enter($__internal_648fdc3f8a3a28650cb4c95f64099fd0f5dcece6c223ca75356db1df02b4d5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "genus/bibi.html.twig"));

        $__internal_e12a5aef5bb56121343f20b552e6b9b370b9aa64bbe79e82c45a65175e4a8f16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e12a5aef5bb56121343f20b552e6b9b370b9aa64bbe79e82c45a65175e4a8f16->enter($__internal_e12a5aef5bb56121343f20b552e6b9b370b9aa64bbe79e82c45a65175e4a8f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "genus/bibi.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html xmlns=\"http://www.w3.org/1999/html\">

<head>

  <title>bienvenue sur le site de venansol</title>

  <meta charset=\"utf-8\">

  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">

  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>

  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    ";
        // line 18
        $this->displayBlock('javascript', $context, $blocks);
        // line 21
        echo "    ";
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 24
        echo "  <script type=\"text/javascript\" src=\"JS/venansol.js\"></script>

</head>

<body>

<nav class=\"navbar navbar-default navbar-fixed-top\"  >

  <div class=\"container-fluid\">

    <div class=\"navbar-header\">

        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">

          <span class=\"icon-bar\"></span>

          <span class=\"icon-bar\"></span>

          <span class=\"icon-bar\"></span>                        

      </button>

\t<a class=\"navbar-brand\" href=\"#\">
\t  <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logobar.png"), "html", null, true);
        echo "\" alt=\"Example\" width=\"150px\" />



      </a>

    </div>

    <div>

      <div class=\"collapse navbar-collapse\" id=\"myNavbar\">

        <ul class=\"nav navbar-nav navbar-right\">

          <li><a href=\"#accueil\">accueil</a></li>              

          <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#section\">cours</a>

            <ul class=\"dropdown-menu\">

              <li ><a href=\"#coursindividuelle\">cours individuel</a></li>

              <li><a href=\"#courscollectif\">cours collectif</a></li>

              <li><a href=\"#section3\">atelier</a></li>    

            </ul>          

          <li><a href=\"#partenaire\">le bureau</a></li>

          <li><a href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("prof");
        echo "\">l'école</a></li>

          <li><a href=\"#section42\">partenaire</a></li>

          <li><a href=\"#section42\">contact</a></li>
      <!--    <li><a href=\"form.html\">inscription</a></li> -->


        </ul>

      </div>

    </div>

  </div>

</nav>    



<div id=\"accueil\" class=\"container-fluid\">

  <div class=\"row\">

  <div class=\"col-sm-6\">

      <h1>note du bureau</h1>

<h3>le nouveau site de venan'sol vous accueille pour l'année 2017-2018 <br>
retrouvez toutes les informations de l'assemblée générale du 7 septembre 2017 sur notre page Facebook
</h3>
      <a href=\"https://www.facebook.com/ecoleVenansol/\"><img src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/facebook.svg"), "html", null, true);
        echo "\" width=\"100px\"></a>
  </div>

  <div class=\"col-sm-6\" >

      <h1>bienvenue sur le site de venansol</h1>

  <img class=\"brand\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo.gif"), "html", null, true);
        echo "\" width=\"350px\">

  </div>

</div>


</div>
<div id=\"coursindividuelle\" class=\"container-fluid\">

  <div class=\"row\">

  <div class=\"col-sm-6\" >

      <h1>cours individuel</h1>

<p> Instruments et chant: les cours  proposés sont  hebdomadaires, d’une durée de
    30 min. (30 cours /an)
    L'école  vous propose des cours de
    guitare,piano, saxophone , batterie et chant aux enfants
    comme aux adultes et
    ils sont adaptés en fonction du niveau de chacun, du débutant à l'expert.
    <br> un travail direct avec le professeur favorisant l'écoute  et l'autonomie</P>

      <a href=\" ";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/reglement.pdf"), "html", null, true);
        echo "\" download style=\"color:white;\"><strong><p>règlement interieur 2017 2018</p></strong></a>
  </div>

  <div class=\"col-sm-6\" >

     
<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\" height=\"3333\" >
  <!-- Indicators -->
  <ol class=\"carousel-indicators\">
    <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
    <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class=\"carousel-inner\">
    <div class=\"item active\">
      <img src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/piani.JPG"), "html", null, true);
        echo "\" alt=\"\" >
    </div>

    <div class=\"item\">
      <img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/piani2.JPG"), "html", null, true);
        echo "\" alt=\"\" >
    </div>

    <div class=\"item\">
      <img src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/saxo.jpg"), "html", null, true);
        echo "\" alt=\"\" >
    </div>
      <div class=\"item\">
          <img src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/piano.JPG"), "html", null, true);
        echo "\" alt=\"\" >
      </div>
  </div>

  <!-- Left and right controls -->
  <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
    <span class=\"glyphicon glyphicon-chevron-left\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
    <span class=\"glyphicon glyphicon-chevron-right\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>
  
  </div>

  </div>

</div>



<div id=\"courscollectif\" class=\"container-fluid\">

<div class=\"row\">

  <div class=\"col-sm-6\">


      <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
          <!-- Indicators -->
          <ol class=\"carousel-indicators\">
              <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
   <!--           <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li> -->
              <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class=\"carousel-inner\">
              <div class=\"item active\">
                  <img src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/chant.JPG"), "html", null, true);
        echo "\" alt=\"Los Angeles\">
              </div>
<!--
              <div class=\"item \">
                  <img src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/venansol1.jpg"), "html", null, true);
        echo "\" alt=\"Chicago\">
              </div>
-->
              <div class=\"item \">
                  <img src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/enfant.jfif"), "html", null, true);
        echo "\" alt=\"New York\">
              </div>
          </div>

          <!-- Left and right controls -->
          <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
              <span class=\"glyphicon glyphicon-chevron-left\"></span>
              <span class=\"sr-only\">Previous</span>
          </a>
          <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
              <span class=\"glyphicon glyphicon-chevron-right\"></span>
              <span class=\"sr-only\">Next</span>
          </a>
      </div>
  </div>

  <div class=\"col-sm-6\" >

      <h1>les cours collectif</h1>

      <p>   <strong>Formation musicale</strong> : obligatoire la première année de l’instrument
    Les cours sont collectifs, hebdomadaires, d’une durée de 35 min. (20 cours /an) pour apprivoiser sereinement votre instrument </P>

      <p>   <strong>L'éveil musical</strong>  se fait par petits groupes hebdomadaires, d’une durée de 35 min,
          ce qui permet une écoute et un suivi individualisés. Le rythme de chaque enfant est ainsi respecté
          et permet de s'approprier la musique à leur rythme. </P>

      <p>      <strong>Ensemble Vocal</strong> : Propisce à l'entraide et la bonne ambiance
          il se réunit 1 fois par semaine pour une durée de 1h pour les
          jeunes, 1h30 pour les adultes (30 cours /an)
      </p>

      <a href=\" ";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/reglement.pdf"), "html", null, true);
        echo "\" download style=\"color:white;\"><strong><p>règlement interieur 2017 2018</p></strong></a>

  </div>
  


  </div>

  </div>

<div id=\"section3\" class=\"container-fluid\">

<div class=\"row\">

  <div class=\"col-sm-6\" >

      <h1>atelier</h1>

<p>
        Les ateliers (musique actuelle, soul and jazz, percussions) se réunissent tous les 15
    jours (15 séances / an)

    Jouez dans un groupe encadré par des musiciens professionnels. Choisissez votre répertoire.

    Rigueur individuelle et plaisir collectif pour une expression musicale épanouissante !

    Ouvert à tous types d'instruments et chanteurs/euses. </p>
      <a href=\" ";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/reglement.pdf"), "html", null, true);
        echo "\" download style=\"color:white;\"><strong><p>règlement interieur 2017 2018</p></strong></a>

  </div>

  <div class=\"col-sm-6\">
      <img src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/venansol1.jpg"), "html", null, true);
        echo "\" alt=\"New York\" width=\"500px\" height= 250px\">
  </div>
  </div>
</div>
<div id=\"partenaire\" class=\"container-fluid\">

 <h1>le bureau</h1>

 <div class=\"row\">

       <div class=\"col-lg-3 col-md-4 col-sm-6 portfolio-item hidden \">

           <div class=\"card h-100\">

             <a href=\"#\"><img class=\"card-img-top\" src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bureaut.jpg"), "html", null, true);
        echo "\"  width=\"200px\"alt=\"\"></a>

             <div class=\"card-body\">

               <h4 class=\"card-title\">

                <h2>Lorem Ipsum</h2>

               </h4>

               <p class=\"card-text\">, illum tempora ex quae? Nihil, dolorem!</p>
                    <p class=\"card-block\" >
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam velit quisquam veniam excepturi temporibus inventore corporis dicta sit
                    </p>
             </div>

           </div>

         </div>
       <div class=\"col-lg-3 col-md-4 col-sm-6 portfolio-item \">

           <div class=\"card h-100\">

             <a href=\"#\"><img class=\"card-img-top\" src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bureau2.jpg"), "html", null, true);
        echo "\"  width=\"200px\"alt=\"\"></a>
               <div class=\"card-body\">


               <h4 class=\"card-title\">

                <h2>véronique barré</h2>

               </h4>

               <p class=\"card-text\"></p>
                    <p class=\"card-block\" >
                    la présidente de l'association venansol</p>
             </div>

           </div>

         </div>
       <div class=\"col-lg-3 col-md-4 col-sm-6 portfolio-item \">

           <div class=\"card h-100\">

             <a href=\"#\"><img class=\"card-img-top\" src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bureau.jpg"), "html", null, true);
        echo "\"  width=\"200px\"alt=\"\"></a>

             <div class=\"card-body\">

               <h4 class=\"card-title\">

                <h2>Anne-marie Zouré </h2>

               </h4>

               <p class=\"card-text\"></p>
                    <p class=\"card-block\" >
                  la secretaire de l'association   </p>
             </div>

           </div>

         </div>
       <div class=\"col-lg-3 col-md-4 col-sm-6 portfolio-item \">

           <div class=\"card h-100\">

             <a href=\"#\"><img class=\"card-img-top\" src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bureau1.jpg"), "html", null, true);
        echo "\"  width=\"200px\"alt=\"\"></a>

             <div class=\"card-body\">

               <h4 class=\"card-title\">

                <h2>Véronique Bouquin</h2>

               </h4>

               <p class=\"card-text\"></p>
                    <p class=\"card-block\" >
                    trésoriere de l'association </p>
             </div>

           </div>

         </div>



</div>

</div>

<div id=\"section42\" class=\"container-fluid\">

  <h1>partenaire</h1>
    <p>                                         </p>
    <a href=\"https://www.ancv.com/\"><img src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/ancv.png"), "html", null, true);
        echo "\"></a>
    <a href=\"http://www.venansault.com/\" > <img src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/Venansault.svg"), "html", null, true);
        echo "\" width=\"300px\" > </a>
    <a href=\"http://www.vendee.fr/\"> <img src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/vende.png"), "html", null, true);
        echo "\" height=\"200px\" border-raduis=\"0px\"></a>
    <a href=\"http://www.vendee.fr/\"> <img src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/venem.png"), "html", null, true);
        echo "\" height=\"150px\" border-raduis=\"0px\"></a>

</div>



<div id=\"contact\" class=\"container-fluid\">

<div class=\"row\">

  <div class=\"col-sm-6\">


  <h1>contact</h1>
      <h2> école de musique Venan'sol ,<br>
      îlot des Arts 1 place de la Billardière

      85190 VENANSAULT
          <br>
          courriel : ecole.venansol@gmail.com
          <br>
     telephone:0676842925
      </h2>
  </div>


  <div class=\"col-sm-6\" >

<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2737.040559535974!2d-1.515199884401229!3d46.685200479134366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480430c3d025e367%3A0xb30b99e73b7ffec6!2sMairie!5e0!3m2!1sfr!2sfr!4v1503292094616\" 
 
 width=\"500\" height=\"270\" frameborder=\"1\" style=\"border:0 ;border-radius:15px\" allowfullscreen></iframe>

  </div>

  </div>

   </div>





</body>

</html>
";
        
        $__internal_648fdc3f8a3a28650cb4c95f64099fd0f5dcece6c223ca75356db1df02b4d5a7->leave($__internal_648fdc3f8a3a28650cb4c95f64099fd0f5dcece6c223ca75356db1df02b4d5a7_prof);

        
        $__internal_e12a5aef5bb56121343f20b552e6b9b370b9aa64bbe79e82c45a65175e4a8f16->leave($__internal_e12a5aef5bb56121343f20b552e6b9b370b9aa64bbe79e82c45a65175e4a8f16_prof);

    }

    // line 18
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_c15de6102d4dacbc2cbd7d9aee4a4eeb8aa698a1f494f2b47e8cef1a85c80236 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c15de6102d4dacbc2cbd7d9aee4a4eeb8aa698a1f494f2b47e8cef1a85c80236->enter($__internal_c15de6102d4dacbc2cbd7d9aee4a4eeb8aa698a1f494f2b47e8cef1a85c80236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_42fc92fd653340e7781d52e30267df235acffdab5b18b90f51b41bbc2021fa72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42fc92fd653340e7781d52e30267df235acffdab5b18b90f51b41bbc2021fa72->enter($__internal_42fc92fd653340e7781d52e30267df235acffdab5b18b90f51b41bbc2021fa72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 19
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("JS/index.js"), "html", null, true);
        echo "\";></script>
   ";
        
        $__internal_42fc92fd653340e7781d52e30267df235acffdab5b18b90f51b41bbc2021fa72->leave($__internal_42fc92fd653340e7781d52e30267df235acffdab5b18b90f51b41bbc2021fa72_prof);

        
        $__internal_c15de6102d4dacbc2cbd7d9aee4a4eeb8aa698a1f494f2b47e8cef1a85c80236->leave($__internal_c15de6102d4dacbc2cbd7d9aee4a4eeb8aa698a1f494f2b47e8cef1a85c80236_prof);

    }

    // line 21
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_a9d382ea437c0e79e94d7d0996f325986d9a2bb12a2c477544d1d9f8a06437aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9d382ea437c0e79e94d7d0996f325986d9a2bb12a2c477544d1d9f8a06437aa->enter($__internal_a9d382ea437c0e79e94d7d0996f325986d9a2bb12a2c477544d1d9f8a06437aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_e5d4a07111a99d2b841aada64f5cff90341d457c2d97d1bad04a7f01c016cbac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5d4a07111a99d2b841aada64f5cff90341d457c2d97d1bad04a7f01c016cbac->enter($__internal_e5d4a07111a99d2b841aada64f5cff90341d457c2d97d1bad04a7f01c016cbac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 22
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("CSS/cssvenansol/venansol.css"), "html", null, true);
        echo "\">
 ";
        
        $__internal_e5d4a07111a99d2b841aada64f5cff90341d457c2d97d1bad04a7f01c016cbac->leave($__internal_e5d4a07111a99d2b841aada64f5cff90341d457c2d97d1bad04a7f01c016cbac_prof);

        
        $__internal_a9d382ea437c0e79e94d7d0996f325986d9a2bb12a2c477544d1d9f8a06437aa->leave($__internal_a9d382ea437c0e79e94d7d0996f325986d9a2bb12a2c477544d1d9f8a06437aa_prof);

    }

    public function getTemplateName()
    {
        return "genus/bibi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  576 => 22,  567 => 21,  554 => 19,  545 => 18,  489 => 394,  485 => 393,  481 => 392,  477 => 391,  445 => 362,  420 => 340,  395 => 318,  369 => 295,  352 => 281,  344 => 276,  314 => 249,  279 => 217,  272 => 213,  265 => 209,  221 => 168,  215 => 165,  208 => 161,  201 => 157,  180 => 139,  153 => 115,  143 => 108,  109 => 77,  76 => 47,  51 => 24,  48 => 21,  46 => 18,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

<html xmlns=\"http://www.w3.org/1999/html\">

<head>

  <title>bienvenue sur le site de venansol</title>

  <meta charset=\"utf-8\">

  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">

  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>

  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    {% block javascript %}
  <script src=\"{{ asset (\"JS/index.js\") }}\";></script>
   {% endblock %}
    {% block stylesheet  %}
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset (\"CSS/cssvenansol/venansol.css\") }}\">
 {% endblock %}
  <script type=\"text/javascript\" src=\"JS/venansol.js\"></script>

</head>

<body>

<nav class=\"navbar navbar-default navbar-fixed-top\"  >

  <div class=\"container-fluid\">

    <div class=\"navbar-header\">

        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">

          <span class=\"icon-bar\"></span>

          <span class=\"icon-bar\"></span>

          <span class=\"icon-bar\"></span>                        

      </button>

\t<a class=\"navbar-brand\" href=\"#\">
\t  <img src=\"{{ asset ('img/logobar.png') }}\" alt=\"Example\" width=\"150px\" />



      </a>

    </div>

    <div>

      <div class=\"collapse navbar-collapse\" id=\"myNavbar\">

        <ul class=\"nav navbar-nav navbar-right\">

          <li><a href=\"#accueil\">accueil</a></li>              

          <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#section\">cours</a>

            <ul class=\"dropdown-menu\">

              <li ><a href=\"#coursindividuelle\">cours individuel</a></li>

              <li><a href=\"#courscollectif\">cours collectif</a></li>

              <li><a href=\"#section3\">atelier</a></li>    

            </ul>          

          <li><a href=\"#partenaire\">le bureau</a></li>

          <li><a href=\"{{path('prof')}}\">l'école</a></li>

          <li><a href=\"#section42\">partenaire</a></li>

          <li><a href=\"#section42\">contact</a></li>
      <!--    <li><a href=\"form.html\">inscription</a></li> -->


        </ul>

      </div>

    </div>

  </div>

</nav>    



<div id=\"accueil\" class=\"container-fluid\">

  <div class=\"row\">

  <div class=\"col-sm-6\">

      <h1>note du bureau</h1>

<h3>le nouveau site de venan'sol vous accueille pour l'année 2017-2018 <br>
retrouvez toutes les informations de l'assemblée générale du 7 septembre 2017 sur notre page Facebook
</h3>
      <a href=\"https://www.facebook.com/ecoleVenansol/\"><img src=\"{{ asset (\"img/facebook.svg\")  }}\" width=\"100px\"></a>
  </div>

  <div class=\"col-sm-6\" >

      <h1>bienvenue sur le site de venansol</h1>

  <img class=\"brand\" src=\"{{ asset ('img/logo.gif')}}\" width=\"350px\">

  </div>

</div>


</div>
<div id=\"coursindividuelle\" class=\"container-fluid\">

  <div class=\"row\">

  <div class=\"col-sm-6\" >

      <h1>cours individuel</h1>

<p> Instruments et chant: les cours  proposés sont  hebdomadaires, d’une durée de
    30 min. (30 cours /an)
    L'école  vous propose des cours de
    guitare,piano, saxophone , batterie et chant aux enfants
    comme aux adultes et
    ils sont adaptés en fonction du niveau de chacun, du débutant à l'expert.
    <br> un travail direct avec le professeur favorisant l'écoute  et l'autonomie</P>

      <a href=\" {{ asset(\"img/reglement.pdf\") }}\" download style=\"color:white;\"><strong><p>règlement interieur 2017 2018</p></strong></a>
  </div>

  <div class=\"col-sm-6\" >

     
<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\" height=\"3333\" >
  <!-- Indicators -->
  <ol class=\"carousel-indicators\">
    <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
    <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class=\"carousel-inner\">
    <div class=\"item active\">
      <img src=\"{{ asset ('img/piani.JPG')}}\" alt=\"\" >
    </div>

    <div class=\"item\">
      <img src=\"{{ asset ('img/piani2.JPG')}}\" alt=\"\" >
    </div>

    <div class=\"item\">
      <img src=\"{{ asset ('img/saxo.jpg')}}\" alt=\"\" >
    </div>
      <div class=\"item\">
          <img src=\"{{ asset ('img/piano.JPG')}}\" alt=\"\" >
      </div>
  </div>

  <!-- Left and right controls -->
  <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
    <span class=\"glyphicon glyphicon-chevron-left\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
    <span class=\"glyphicon glyphicon-chevron-right\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>
  
  </div>

  </div>

</div>



<div id=\"courscollectif\" class=\"container-fluid\">

<div class=\"row\">

  <div class=\"col-sm-6\">


      <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
          <!-- Indicators -->
          <ol class=\"carousel-indicators\">
              <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
   <!--           <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li> -->
              <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class=\"carousel-inner\">
              <div class=\"item active\">
                  <img src=\"{{ asset ('img/chant.JPG')}}\" alt=\"Los Angeles\">
              </div>
<!--
              <div class=\"item \">
                  <img src=\"{{ asset ('img/venansol1.jpg')}}\" alt=\"Chicago\">
              </div>
-->
              <div class=\"item \">
                  <img src=\"{{ asset ('img/enfant.jfif')}}\" alt=\"New York\">
              </div>
          </div>

          <!-- Left and right controls -->
          <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
              <span class=\"glyphicon glyphicon-chevron-left\"></span>
              <span class=\"sr-only\">Previous</span>
          </a>
          <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
              <span class=\"glyphicon glyphicon-chevron-right\"></span>
              <span class=\"sr-only\">Next</span>
          </a>
      </div>
  </div>

  <div class=\"col-sm-6\" >

      <h1>les cours collectif</h1>

      <p>   <strong>Formation musicale</strong> : obligatoire la première année de l’instrument
    Les cours sont collectifs, hebdomadaires, d’une durée de 35 min. (20 cours /an) pour apprivoiser sereinement votre instrument </P>

      <p>   <strong>L'éveil musical</strong>  se fait par petits groupes hebdomadaires, d’une durée de 35 min,
          ce qui permet une écoute et un suivi individualisés. Le rythme de chaque enfant est ainsi respecté
          et permet de s'approprier la musique à leur rythme. </P>

      <p>      <strong>Ensemble Vocal</strong> : Propisce à l'entraide et la bonne ambiance
          il se réunit 1 fois par semaine pour une durée de 1h pour les
          jeunes, 1h30 pour les adultes (30 cours /an)
      </p>

      <a href=\" {{ asset(\"img/reglement.pdf\") }}\" download style=\"color:white;\"><strong><p>règlement interieur 2017 2018</p></strong></a>

  </div>
  


  </div>

  </div>

<div id=\"section3\" class=\"container-fluid\">

<div class=\"row\">

  <div class=\"col-sm-6\" >

      <h1>atelier</h1>

<p>
        Les ateliers (musique actuelle, soul and jazz, percussions) se réunissent tous les 15
    jours (15 séances / an)

    Jouez dans un groupe encadré par des musiciens professionnels. Choisissez votre répertoire.

    Rigueur individuelle et plaisir collectif pour une expression musicale épanouissante !

    Ouvert à tous types d'instruments et chanteurs/euses. </p>
      <a href=\" {{ asset(\"img/reglement.pdf\") }}\" download style=\"color:white;\"><strong><p>règlement interieur 2017 2018</p></strong></a>

  </div>

  <div class=\"col-sm-6\">
      <img src=\"{{ asset ('img/venansol1.jpg')}}\" alt=\"New York\" width=\"500px\" height= 250px\">
  </div>
  </div>
</div>
<div id=\"partenaire\" class=\"container-fluid\">

 <h1>le bureau</h1>

 <div class=\"row\">

       <div class=\"col-lg-3 col-md-4 col-sm-6 portfolio-item hidden \">

           <div class=\"card h-100\">

             <a href=\"#\"><img class=\"card-img-top\" src=\"{{ asset ('img/bureaut.jpg')}}\"  width=\"200px\"alt=\"\"></a>

             <div class=\"card-body\">

               <h4 class=\"card-title\">

                <h2>Lorem Ipsum</h2>

               </h4>

               <p class=\"card-text\">, illum tempora ex quae? Nihil, dolorem!</p>
                    <p class=\"card-block\" >
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam velit quisquam veniam excepturi temporibus inventore corporis dicta sit
                    </p>
             </div>

           </div>

         </div>
       <div class=\"col-lg-3 col-md-4 col-sm-6 portfolio-item \">

           <div class=\"card h-100\">

             <a href=\"#\"><img class=\"card-img-top\" src=\"{{ asset ('img/bureau2.jpg')}}\"  width=\"200px\"alt=\"\"></a>
               <div class=\"card-body\">


               <h4 class=\"card-title\">

                <h2>véronique barré</h2>

               </h4>

               <p class=\"card-text\"></p>
                    <p class=\"card-block\" >
                    la présidente de l'association venansol</p>
             </div>

           </div>

         </div>
       <div class=\"col-lg-3 col-md-4 col-sm-6 portfolio-item \">

           <div class=\"card h-100\">

             <a href=\"#\"><img class=\"card-img-top\" src=\"{{ asset ('img/bureau.jpg')}}\"  width=\"200px\"alt=\"\"></a>

             <div class=\"card-body\">

               <h4 class=\"card-title\">

                <h2>Anne-marie Zouré </h2>

               </h4>

               <p class=\"card-text\"></p>
                    <p class=\"card-block\" >
                  la secretaire de l'association   </p>
             </div>

           </div>

         </div>
       <div class=\"col-lg-3 col-md-4 col-sm-6 portfolio-item \">

           <div class=\"card h-100\">

             <a href=\"#\"><img class=\"card-img-top\" src=\"{{ asset ('img/bureau1.jpg')}}\"  width=\"200px\"alt=\"\"></a>

             <div class=\"card-body\">

               <h4 class=\"card-title\">

                <h2>Véronique Bouquin</h2>

               </h4>

               <p class=\"card-text\"></p>
                    <p class=\"card-block\" >
                    trésoriere de l'association </p>
             </div>

           </div>

         </div>



</div>

</div>

<div id=\"section42\" class=\"container-fluid\">

  <h1>partenaire</h1>
    <p>                                         </p>
    <a href=\"https://www.ancv.com/\"><img src=\"{{  asset (\"img/ancv.png\")}}\"></a>
    <a href=\"http://www.venansault.com/\" > <img src=\"{{  asset (\"img/Venansault.svg\")}}\" width=\"300px\" > </a>
    <a href=\"http://www.vendee.fr/\"> <img src=\"{{  asset (\"img/vende.png\")}}\" height=\"200px\" border-raduis=\"0px\"></a>
    <a href=\"http://www.vendee.fr/\"> <img src=\"{{  asset (\"img/venem.png\")}}\" height=\"150px\" border-raduis=\"0px\"></a>

</div>



<div id=\"contact\" class=\"container-fluid\">

<div class=\"row\">

  <div class=\"col-sm-6\">


  <h1>contact</h1>
      <h2> école de musique Venan'sol ,<br>
      îlot des Arts 1 place de la Billardière

      85190 VENANSAULT
          <br>
          courriel : ecole.venansol@gmail.com
          <br>
     telephone:0676842925
      </h2>
  </div>


  <div class=\"col-sm-6\" >

<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2737.040559535974!2d-1.515199884401229!3d46.685200479134366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480430c3d025e367%3A0xb30b99e73b7ffec6!2sMairie!5e0!3m2!1sfr!2sfr!4v1503292094616\" 
 
 width=\"500\" height=\"270\" frameborder=\"1\" style=\"border:0 ;border-radius:15px\" allowfullscreen></iframe>

  </div>

  </div>

   </div>





</body>

</html>
", "genus/bibi.html.twig", "/home/irvin/venansol/app/Resources/views/genus/bibi.html.twig");
    }
}
