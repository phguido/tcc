<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/polipriv.css">
    <link rel="stylesheet" href="assets/css/responsividade.css">
    <link rel="shortcut icon" href="assets/img/favicon_io/android-chrome-512x512.png" type="image/x-icon">
    <title>Agro & Tech</title>


</head>

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


    <div class="texto-politica">
        <h1>Política de Privacidade</h1>
        <p>
        <h5>Última atualização: 14/08/2023</h5><br>

        A SoloTech está comprometido em proteger a sua privacidade online. Esta política de privacidade descreve como coletamos, usamos, compartilhamos e protegemos as informações pessoais que você nos fornece.<br><br>

        <h5>Coleta de Informações Pessoais</h5>

        Quando você visita o nosso site, podemos coletar certas informações pessoais, incluindo, mas não se limitando a: nome, endereço de e-mail, informações de contato e dados demográficos. Essas informações podem ser coletadas por meio de formulários de inscrição, comentários, interações com nossas redes sociais ou outras formas de interação com o site.<br><br><br>



        <h5>As informações pessoais que coletamos podem ser usadas para:</h5>

        <li>Personalizar a sua experiência no nosso site.</li>
        <li>Enviar informações relevantes sobre produtos, serviços ou conteúdo..</li>
        <li>Melhorar o nosso site e serviços..</li>
        <li>Responder a dúvidas ou solicitações de suporte..</li>
        <li>Processar transações ou inscrições..</li>
        <li>Realizar análises estatísticas e pesquisas de mercado..</li>
        <li>Compartilhamento de Informações .</li><br><br>

        Nós não vendemos, alugamos ou compartilhamos suas informações pessoais com terceiros, exceto nas seguintes situações:

        Quando for necessário para fornecedores ou parceiros de serviços que nos auxiliam no funcionamento do site ou na prestação de serviços.
        Quando exigido por lei ou regulamento.
        Para proteger nossos direitos, privacidade, segurança ou propriedade, bem como de nossos usuários ou terceiros.
        Cookies e Tecnologias Semelhantes

        Nosso site pode usar cookies e outras tecnologias de rastreamento para melhorar a sua experiência. Essas tecnologias permitem a coleta de informações como endereço IP, tipo de navegador, sistema operacional e padrões de navegação.<br><br>

        <h5>Segurança</h5><br>

        Nós adotamos medidas de segurança adequadas para proteger as suas informações pessoais contra acesso não autorizado, alteração, divulgação ou destruição.<br><br>

        <h5>Links para Sites de Terceiros</h5><br>

        O nosso site pode conter links para sites de terceiros. Não nos responsabilizamos pelas práticas de privacidade desses sites. Recomendamos que você leia as políticas de privacidade de qualquer site que você visite.<br><br>

        <h5>Alterações a Esta Política de Privacidade</h5>

        Podemos atualizar esta política de privacidade de tempos em tempos. Recomendamos que você reveja periodicamente para se manter informado sobre como estamos protegendo suas informações.<br><br><br>

        <h5>Contato</h5>

        Se você tiver alguma dúvida sobre nossa política de privacidade, entre em contato conosco através do e-mail: atendimento@solotech.com.br
    </div>
    </div>

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