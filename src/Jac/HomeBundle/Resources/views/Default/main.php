{% extends '::base.html.twig' %}

{% block title %}Juntas de Alta Calidad | Inicio{% endblock %}

{% block stylesheets %}
    <link rel="stylesheet" type="text/css" href="{{ asset('bundles/jachome/css/fonts.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('bundles/jachome/css/main.css') }}" />
{% endblock %}

{% block body %}
    <header>
        <section>
            <nav id="top-navigation">
                <ul class="top-navigation-items">
                    <li id="languages">
                        <a href="">
                            <span>Idioma</span>
                        </a>
                        <ul id="language-items">
                            <li><a href="">English</a></li>
                            <li><a href="">Español</a></li>
                        </ul>
                    </li>
                    <li id="top-navigation-twitter">
                        <a href="">Twitter</a>
                    </li>
                </ul>
            </nav>
            <h1>
                <a href="/">Juntas de Alta Calidad</a>
            </h1>
            <nav id="main-navigation">
                <h2>JUNTAS DE ALTA CALIDAD</h2>
                <span class="separator"></span>
                <ul>
                    <li id="main-navigation-home"><a href="">Inicio</a></li>
                    <li id="main-navigation-about-us"><a href="">Nosotros</a></li>
                    <li id="main-navigation-products"><a href="">Productos</a></li>
                    <li id="main-navigation-contact"><a href="">Contacto</a></li>
                </ul>
            </nav>
        </section>
    </header>
    {% block content %}{% endblock %}
    <footer>
        <div class="content">
            <p id="copyright">
                Copyright &#169; 2103. Todos los derechos reservados.
            </p>
            <ul id="footer-contact-info">
                <li><a href="mailto:contacto@juntasdecalidad.com.mx">contacto@juntasdecalidad.com.mx</a></li>
                <li>+52 01 55 5686-2612 / +52 01 55 5686-9041</li>
                <li><a href="">Aviso de privacidad</a></li>
            </ul>
        </div>
    </footer>
{% endblock %}
{% block javascripts %}
    <script src="{{ asset('bundles/jachome/js/jquery-1.10.2.min.js') }}"></script>
    <script src="{{ asset('bundles/jachome/js/main.ui.js') }}"></script>
{% endblock %}