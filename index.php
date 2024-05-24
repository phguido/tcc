<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/responsividade.css">
    <link rel="stylesheet" href="assets/css/style.css">
   
    <link rel="shortcut icon" href="assets/img/favicon_io/android-chrome-512x512.png" type="image/x-icon">
    <title>Agro & Tech</title>


</head>
<style>

@media (orientation: portrait) {
    body {
        background-image: url(assets/img/1.png) center center repeat fixed;
        background-size: 500vw;
    }
}

</style>

<body>
    <img class="logo" href="index.php" src="assets/img/pngwing.com.png" alt="Logo">

    <header id="menu">

        <nav>
            <ul class="lista">
                <li><a href="index.php">INICIO</a></li>
                <li><a href="login.php">LOGIN</a></li>
                <li><a href="sobrenos.php">SOBRE NÓS</a></li>
                <li><a href="faleconosco.php">FAQ</a></li>
                <li><a href="botanica.php">BOTÂNICA</a></li>

            </ul>
        </nav>

    </header>
    <div class="menu-mobile" id="botadao-responsivo">
        <div class="line1 linha"></div>
        <div class="line2 linha"></div>
        <div class="line3 linha"></div>
    </div>
    <main>
        <section class="inicio" id="inicio">
            <div class="container=inicio">
                <div class="inicio-introducao">
                    <div class="h1">
                        <h1>SOLO</h1>
                    </div>
                    <div class="h2">
                        <h1>TECH</h1>
                    </div>
                    <div class="frase"> <strong>"Da terra ao toque. Nutrientes e umidade controlados na palma da sua mão, cultivando o futuro com nosso vaso inteligente!"</strong>
                    </div>

                    <div class="solucao">
                        <p>YOUR SOLUTION</p>
                    </div>

                    <div class="ancora-info">
                        <a href="servicos.html" target="_blank" class="btn-amarelo">Nossos serviços</a>
                    </div>
        </section>

        <div class="container-sobre">
            <abbr title="Bora regar a plantinha ? :D"><img class="imagem" src="assets/img/app.png" alt="SoloTech."></abbr>
            <article class="info-sobre">
                <h1>SOLOTECH</h1>
                <p>
                    Ao integrar tecnologia e botânica, esperamos contribuir significativamente para a promoção de práticas agrícolas mais eficientes e ecologicamente sustentáveis. Através do acesso a informações precisas e atualizadas sobre as condições do solo, os usuários
                    poderão tomar decisões informadas sobre a irrigação e a aplicação de nutrientes, maximizando o crescimento saudável das plantas e minimizando o desperdício de recursos.
                </p>
                <div class="ancora-info">
                    <a href="https://play.google.com/store/apps?hl=pt_BR&gl=US" target="_blank" class="btn-amarelo">Veja mais</a>
                </div>
            </article>
        </div>
        </section>

        <footer>
            <div class="rodape">
                <div class="mano">
                    <p>&copy; 2023 SoloTech. Todos os direitos reservados.</p>
                    <ul>
                        <li><a href="polipriv.php">Política de Privacidade</a></li>
                        <li><a href="termos.php">Termos e Condições</a></li>
                    </ul>
                </div>
            </div>
        </footer>

        <style>
            .cookieConsentContainer {
                z-index: 999;
                width: 350px;
                min-height: 20px;
                box-sizing: border-box;
                padding: 30px 30px 30px 30px;
                background: #232323;
                overflow: hidden;
                position: fixed;
                bottom: 30px;
                right: 30px;
                display: none
            }

            .cookieConsentContainer .cookieTitle a {
                font-family: OpenSans, arial, sans-serif;
                color: #fff;
                font-size: 22px;
                line-height: 20px;
                display: block
            }

            .cookieConsentContainer .cookieDesc p {
                margin: 0;
                padding: 0;
                font-family: OpenSans, arial, sans-serif;
                color: #fff;
                font-size: 13px;
                line-height: 20px;
                display: block;
                margin-top: 10px
            }

            .cookieConsentContainer .cookieDesc a {
                font-family: OpenSans, arial, sans-serif;
                color: #fff;
                text-decoration: underline
            }

            .cookieConsentContainer .cookieButton a {
                display: inline-block;
                font-family: OpenSans, arial, sans-serif;
                color: #fff;
                font-size: 14px;
                font-weight: 700;
                margin-top: 14px;
                background: #000;
                box-sizing: border-box;
                padding: 15px 24px;
                text-align: center;
                transition: background .3s
            }

            .cookieConsentContainer .cookieButton a:hover {
                cursor: pointer;
                background: #3e9b67
            }

            @media (max-width:980px) {
                .cookieConsentContainer {
                    bottom: 0 !important;
                    left: 0 !important;
                    width: 100% !important
                }
            }
        </style>
        <script>
            var purecookieTitle = "Cookies e Termos",
                purecookieDesc = "Nós utilizamos cookies. Ao utilizar este site, você concorda com as políticas de privacidade!",
                purecookieLink = '<a href="https://www.seusiteaqui.com/cookies-e-politica-de-privacidade" target="_blank">Saiba mais.</a>',
                purecookieButton = "Aceitar";

            function pureFadeIn(e, o) {
                var i = document.getElementById(e);
                i.style.opacity = 0, i.style.display = o || "block",
                    function e() {
                        var o = parseFloat(i.style.opacity);
                        (o += .02) > 1 || (i.style.opacity = o, requestAnimationFrame(e))
                    }()
            }

            function pureFadeOut(e) {
                var o = document.getElementById(e);
                o.style.opacity = 1,
                    function e() {
                        (o.style.opacity -= .02) < 0 ? o.style.display = "none" : requestAnimationFrame(e)
                    }()
            }

            function setCookie(e, o, i) {
                var t = "";
                if (i) {
                    var n = new Date;
                    n.setTime(n.getTime() + 24 * i * 60 * 60 * 1e3), t = "; expires=" + n.toUTCString()
                }
                document.cookie = e + "=" + (o || "") + t + "; path=/"
            }

            function getCookie(e) {
                for (var o = e + "=", i = document.cookie.split(";"), t = 0; t < i.length; t++) {
                    for (var n = i[t];
                        " " == n.charAt(0);) n = n.substring(1, n.length);
                    if (0 == n.indexOf(o)) return n.substring(o.length, n.length)
                }
                return null
            }

            function eraseCookie(e) {
                document.cookie = e + "=; Max-Age=-99999999;"
            }

            function cookieConsent() {
                getCookie("purecookieDismiss") || (document.body.innerHTML += '<div class="cookieConsentContainer" id="cookieConsentContainer"><div class="cookieTitle"><a>' + purecookieTitle + '</a></div><div class="cookieDesc"><p>' + purecookieDesc + " " + purecookieLink + '</p></div><div class="cookieButton"><a onClick="purecookieDismiss();">' + purecookieButton + "</a></div></div>", pureFadeIn("cookieConsentContainer"))
            }

            function purecookieDismiss() {
                setCookie("purecookieDismiss", "1", 7), pureFadeOut("cookieConsentContainer")
            }
            window.onload = function() {
                cookieConsent()
            };
        </script>


</body>

</html>