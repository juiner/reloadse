<?php
/**
 * Front Page — Site institucional Reloadse (one-page)
 *
 * Template standalone: renderiza a home com marcação própria (sem o
 * header/footer do GeneratePress), mantendo wp_head()/wp_footer() para o
 * enfileiramento de assets, o admin bar e a compatibilidade com plugins.
 *
 * Os estilos e scripts são enfileirados em functions.php quando is_front_page().
 *
 * @package reloadse-child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$rl_img = trailingslashit( get_stylesheet_directory_uri() ) . 'assets/img/';
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Reloadse: inteligência artificial para instituições tradicionais. Uma empresa do Grupo P21, levando IA que resolve para os cartórios do Brasil.">
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'reloadse-home' ); ?>>
<?php if ( function_exists( 'wp_body_open' ) ) { wp_body_open(); } ?>

<svg class="hidden-defs" aria-hidden="true"><defs>
  <linearGradient id="ig" x1="0" y1="0" x2="1" y2="1">
    <stop offset="0" stop-color="#0075c5"/><stop offset="1" stop-color="#00cc99"/>
  </linearGradient>
</defs></svg>

<div class="progress" id="progress"></div>

<header id="header">
  <div class="wrap bar">
    <a class="brand" href="#top" aria-label="Reloadse, início">
      <img class="b-light" src="<?php echo esc_url( $rl_img . 'logo-branco.png' ); ?>" alt="Reloadse">
      <img class="b-dark" src="<?php echo esc_url( $rl_img . 'logo-preto.png' ); ?>" alt="Reloadse">
    </a>
    <nav class="main" aria-label="Navegação principal">
      <a href="#manifesto">Manifesto</a>
      <a href="#quem-somos">Quem somos</a>
      <a href="#o-que-fazemos">O que fazemos</a>
      <a href="#resultados">Resultados</a>
      <a href="#contato">Contato</a>
    </nav>
    <div class="nav-cta">
      <a href="#contato" class="btn" style="padding:11px 20px">Falar com a empresa</a>
      <button class="menu-btn" id="menuBtn" aria-label="Abrir menu" aria-expanded="false">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 6h18M3 12h18M3 18h18"/></svg>
      </button>
    </div>
  </div>
</header>

<nav class="mobile" id="mobileNav" aria-label="Navegação">
  <a href="#manifesto">Manifesto</a>
  <a href="#quem-somos">Quem somos</a>
  <a href="#o-que-fazemos">O que fazemos</a>
  <a href="#resultados">Resultados</a>
  <a href="#contato">Contato</a>
</nav>

<!-- HERO -->
<section class="hero" id="top">
  <div class="grid-bg"></div>
  <div class="wrap hero-inner">
    <div class="hero-copy">
      <span class="eyebrow reveal"><span class="dot"></span>Uma empresa do Grupo P21</span>
      <h1 class="reveal d1">Recarregando uma das <span class="accent">instituições</span> mais tradicionais do Brasil.</h1>
      <p class="sub reveal d2">Inteligência artificial de verdade para os cartórios, feita por quem vive o setor há mais de 20 anos.</p>
      <div class="cta-row reveal d3">
        <a href="#contato" class="btn">Falar com a empresa</a>
        <a href="#o-que-fazemos" class="btn btn--ghost">Conheça o Fala AI <span class="arw">→</span></a>
      </div>
      <div class="proofline reveal d4">
        <span>cartórios ativos</span><span class="sep"></span>
        <span>múltiplos estados</span><span class="sep"></span>
        <span>resultados reais</span>
      </div>
    </div>
    <div class="hero-visual reveal d3">
      <div class="seal">
        <div class="ring"></div>
        <div class="ring dashed"></div>
        <div class="core"><img src="<?php echo esc_url( $rl_img . 'simbolo-azul.png' ); ?>" alt="Símbolo Reloadse"></div>
        <div class="tick t1"><b>Inteligência</b> artificial</div>
        <div class="tick t2"><b>Transformação</b> digital</div>
        <div class="tick t3"><b>Cartórios</b> de protesto</div>
      </div>
    </div>
  </div>
</section>

<!-- MANIFESTO -->
<section class="section section--alt" id="manifesto">
  <div class="dots"></div>
  <div class="wrap">
    <div class="manifesto">
      <span class="eyebrow reveal"><span class="dot"></span>Manifesto</span>
      <p class="manifesto-statement reveal d1">Tradição não é o oposto de inovação. É a <em>base</em> dela.</p>
      <p class="lead reveal d2">Levamos inteligência artificial às instituições que sustentam a fé pública do país, sem abrir mão do rigor de quem entende do assunto.</p>
    </div>
    <div class="mv-grid">
      <div class="mv-card reveal d1">
        <span class="lbl">Missão</span>
        <h3>IA ao alcance de quem sustenta a confiança.</h3>
        <p>Democratizar o acesso à inteligência artificial para instituições tradicionais, transformando processos em resultados.</p>
      </div>
      <div class="mv-card reveal d2">
        <span class="lbl">Visão</span>
        <h3>Redefinir o padrão, a começar pelos cartórios.</h3>
        <p>Ser a principal parceira de transformação digital das instituições brasileiras.</p>
      </div>
    </div>
  </div>
</section>

<!-- QUEM SOMOS / DIAGRAMA -->
<section class="section" id="quem-somos">
  <div class="wrap qs-grid">
    <div class="qs-intro">
      <span class="eyebrow reveal"><span class="dot"></span>Quem somos</span>
      <h2 class="title reveal d1">A frente de IA do Grupo <span style="color:#8cbf43">P21</span>.</h2>
      <p class="reveal d2">Nascemos de duas décadas dentro do cartório. É por isso que nossa IA não apenas responde. Ela resolve.</p>
      <div class="pill-row reveal d3">
        <span class="pill">Setor extrajudicial</span>
        <span class="pill">Especialistas em protesto</span>
        <span class="pill">Tecnologia própria</span>
      </div>
    </div>
    <div class="diagram reveal d2" role="img" aria-label="A Reloadse é a frente de inteligência artificial dentro do Grupo P21, apoiada em mais de 20 anos no setor extrajudicial, e entrega o produto Fala AI.">
      <div class="p21">
        <div class="p21-badge">Grupo P21 · <span>Unerverso</span></div>
        <div class="p21-sub">O universo de soluções do grupo</div>
        <div class="orgcol">
          <div class="node legacy">
            <div class="nic"><svg viewBox="0 0 24 24" fill="none" stroke="url(#ig)" stroke-width="1.7"><path d="M3 21h18M5 21V7l7-4 7 4v14M9 21v-5h6v5"/></svg></div>
            <div><div class="nt">P21 Sistemas</div><div class="nd">A base · +20 anos no setor</div></div>
          </div>
          <div class="connector"><span class="line"></span></div>
          <div class="node reloadse">
            <div class="nic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M21 12a9 9 0 1 1-3-6.7"/><path d="M21 4v5h-5"/></svg></div>
            <div><div class="nt">Reloadse</div><div class="nd">Inteligência artificial</div></div>
          </div>
        </div>
      </div>
      <div class="connector"><span class="cap">entrega</span><span class="line"></span></div>
      <div class="product-out">
        <div class="nic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M21 11.5a8.4 8.4 0 0 1-8.5 8.5 8.4 8.4 0 0 1-3.8-.9L3 21l1.9-5.7a8.4 8.4 0 0 1-.9-3.8A8.5 8.5 0 0 1 12.5 3 8.5 8.5 0 0 1 21 11.5z"/></svg></div>
        <div><div class="nt">Fala AI</div><div class="nd">O produto em produção</div></div>
        <span class="tag">produto</span>
      </div>
    </div>
  </div>
</section>

<!-- O QUE FAZEMOS -->
<section class="section section--alt" id="o-que-fazemos">
  <div class="dots"></div>
  <div class="wrap">
    <div class="sec-head">
      <span class="eyebrow reveal"><span class="dot"></span>O que fazemos</span>
      <h2 class="title reveal d1">IA que resolve, não só responde.</h2>
      <p class="lead reveal d2">Tecnologia própria que transforma o atendimento repetitivo em resultado automático, com segurança jurídica e implantação em poucos dias.</p>
    </div>

    <div class="feat-grid">
      <div class="feat reveal d1">
        <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="url(#ig)" stroke-width="1.7"><rect x="4" y="4" width="16" height="16" rx="3"/><path d="M9 12l2 2 4-4"/><path d="M12 1v3M12 20v3M1 12h3M20 12h3"/></svg></div>
        <h3>Resolve na conversa</h3>
        <p>Consulta os títulos em tempo real pelo CPF/CNPJ e gera o pagamento ali mesmo. Menos fila, mais resolução.</p>
      </div>
      <div class="feat reveal d2">
        <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="url(#ig)" stroke-width="1.7"><path d="M21 11.5a8.4 8.4 0 0 1-8.5 8.5 8.4 8.4 0 0 1-3.8-.9L3 21l1.9-5.7a8.4 8.4 0 0 1-.9-3.8A8.5 8.5 0 0 1 12.5 3 8.5 8.5 0 0 1 21 11.5z"/><path d="M8.5 12h.01M12 12h.01M15.5 12h.01"/></svg></div>
        <h3>Atende 24/7 no WhatsApp</h3>
        <p>Texto, áudio, documento e imagem. A IA recebe 100% dos contatos e só passa para o humano quando é necessário.</p>
      </div>
      <div class="feat reveal d3">
        <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="url(#ig)" stroke-width="1.7"><path d="M3 3v18h18"/><path d="M7 15l3-3 3 3 5-6"/><circle cx="18" cy="9" r="1.4" fill="url(#ig)" stroke="none"/></svg></div>
        <h3>Gestão com dados</h3>
        <p>Painel unificado, monitoramento em tempo real e relatórios. O tabelião enxerga e controla cada atendimento.</p>
      </div>
      <div class="feat reveal d4">
        <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="url(#ig)" stroke-width="1.7"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg></div>
        <h3>Segurança jurídica</h3>
        <p>Conformidade com a LGPD e os Provimentos do CNJ, com implantação acompanhada de ponta a ponta.</p>
      </div>
    </div>

    <div class="product-card reveal d2">
      <div class="glow2"></div><div class="dots"></div>
      <div style="position:relative">
        <span class="lbl">Nosso produto</span>
        <h3>Fala AI</h3>
        <p>A plataforma que coloca o cartório atendendo 24 horas por dia pelo WhatsApp. É a Reloadse em produção, já resolvendo a maior parte das demandas sozinha.</p>
      </div>
      <div class="cta-w">
        <a href="https://botfala.ai/cartorio-solucao" target="_blank" rel="noopener" class="btn">Conhecer o Fala AI <span class="arw">→</span></a>
      </div>
    </div>
  </div>
</section>

<!-- RESULTADOS -->
<section class="section section--navy" id="resultados">
  <div class="dots"></div>
  <div class="wrap">
    <div class="results-head">
      <div>
        <span class="eyebrow reveal"><span class="dot"></span>Resultados reais</span>
        <h2 class="title reveal d1">Não é piloto.<br>É produção.</h2>
      </div>
      <div class="exec-note reveal d2">
        <p class="big"><b>81%</b> confiam na IA. Só <b>27%</b> colhem resultado. A diferença não é a tecnologia. É a execução.</p>
        <p class="src">Fonte: MIT Technology Review / WSI, 2025</p>
      </div>
    </div>
    <div class="result-grid">
      <div class="rcell reveal d1"><div class="n"><span class="pre">R$</span><span data-count="164649">0</span></div><div class="t">em boletos pagos em um único mês</div></div>
      <div class="rcell reveal d2"><div class="n"><span data-count="63">0</span>%</div><div class="t">resolvido pela IA, sem intervenção humana</div></div>
      <div class="rcell reveal d3"><div class="n"><span data-count="2668">0</span></div><div class="t">atendimentos no mês, 100% iniciados pela IA</div></div>
      <div class="rcell reveal d4"><div class="n"><span data-count="694">0</span></div><div class="t">boletos gerados automaticamente</div></div>
    </div>
    <p class="result-foot reveal">// Cartório parceiro · nov/2025. Resultados variam conforme o volume e a operação de cada cartório.</p>
  </div>
</section>

<!-- DIFERENCIAIS -->
<section class="section" id="por-que">
  <div class="wrap">
    <div class="sec-head">
      <span class="eyebrow reveal"><span class="dot"></span>Por que a Reloadse</span>
      <h2 class="title reveal d1">Quando quem entende de cartório constrói a IA.</h2>
    </div>
    <div class="diff-grid">
      <div class="diff reveal d1"><div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="url(#ig)" stroke-width="1.7"><path d="M12 2l2.4 5 5.6.8-4 4 1 5.5L12 19.8 6.9 22.3 8 16.8l-4-4 5.6-.8z"/></svg></div><h3>Especialistas em protesto</h3><p>Mais de uma década imersos no setor. A IA fala a língua do cartório porque nós falamos.</p></div>
      <div class="diff reveal d2"><div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="url(#ig)" stroke-width="1.7"><path d="M13 2L4.5 13H11l-1 9 8.5-11H12z"/></svg></div><h3>IA que resolve</h3><p>Consulta e conclui o pagamento na conversa. Não é um FAQ automatizado.</p></div>
      <div class="diff reveal d3"><div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="url(#ig)" stroke-width="1.7"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></div><h3>Implantação em dias</h3><p>Acompanhada de ponta a ponta, sem exigir equipe de TI no cartório.</p></div>
      <div class="diff reveal d4"><div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="url(#ig)" stroke-width="1.7"><path d="M3 3v18h18"/><path d="M7 14l3-4 3 3 4-6"/></svg></div><h3>Resultados comprovados</h3><p>Meses de entrega real, documentados, em cartórios de vários estados.</p></div>
      <div class="diff reveal d5"><div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="url(#ig)" stroke-width="1.7"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>Segurança jurídica</h3><p>LGPD e Provimentos do CNJ como ponto de partida, não como detalhe.</p></div>
      <div class="diff reveal d6"><div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="url(#ig)" stroke-width="1.7"><path d="M16 11a4 4 0 1 0-4-4"/><path d="M3 21v-1a6 6 0 0 1 12 0v1"/><circle cx="9" cy="7" r="4"/></svg></div><h3>Parceria, não fornecedor</h3><p>Ficamos ao lado da sua operação para transformar tecnologia em resultado.</p></div>
    </div>
  </div>
</section>

<!-- CONTATO -->
<section class="section section--navy" id="contato" style="background:radial-gradient(120% 100% at 82% 0%,#0a4a7a,#00243f 55%)">
  <div class="dots"></div>
  <div class="wrap">
    <span class="eyebrow reveal"><span class="dot"></span>Vamos conversar</span>
    <h2 class="title reveal d1" style="max-width:16ch">Vamos <span style="background:linear-gradient(120deg,#0094f8,#00cc99);-webkit-background-clip:text;background-clip:text;color:transparent">recarregar</span> o seu cartório?</h2>
    <p class="lead reveal d2" style="color:#bcd6ee;margin-top:18px">Conte sobre a sua operação. Nossa equipe retorna para entender o contexto e mostrar a IA funcionando na prática.</p>

    <div class="contact-grid">
      <form class="contact-form reveal d1" id="contactForm" novalidate>
        <div class="row2">
          <div class="field"><label for="nome">Nome</label><input id="nome" name="nome" type="text" placeholder="Seu nome" required></div>
          <div class="field"><label for="org">Cartório / Instituição</label><input id="org" name="org" type="text" placeholder="Nome do cartório"></div>
        </div>
        <div class="row2">
          <div class="field"><label for="email">E-mail</label><input id="email" name="email" type="email" placeholder="voce@exemplo.com.br" required></div>
          <div class="field"><label for="tel">WhatsApp</label><input id="tel" name="tel" type="tel" placeholder="(00) 00000-0000"></div>
        </div>
        <div class="field"><label for="msg">Mensagem</label><textarea id="msg" name="msg" rows="4" placeholder="Volume de atendimentos e o que você busca."></textarea></div>
        <div style="display:flex;align-items:center;gap:18px;flex-wrap:wrap">
          <button type="submit" class="btn">Enviar mensagem</button>
          <span class="form-ok" id="formOk">✓ Obrigado! Abrimos seu e-mail para concluir.</span>
        </div>
        <p class="form-note">Ao enviar, abriremos seu aplicativo de e-mail com a mensagem pronta.</p>
      </form>

      <div class="contact-info reveal d2">
        <div class="info-card">
          <div class="lbl">Onde estamos</div>
          <p>Setor SCS, Quadra 02, Bloco C, Nº 22<br>Ed. Serra Dourada, Sala 609, Parte C67<br>Brasília, DF · CEP 70.300-902</p>
        </div>
        <div class="info-card">
          <div class="lbl">O produto</div>
          <p>Conheça o <b>Fala AI</b>, nossa solução para cartórios de protesto.<br><a class="inline" href="https://botfala.ai/cartorio-solucao" target="_blank" rel="noopener">botfala.ai/cartorio-solucao →</a></p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <div class="wrap">
    <div class="foot-grid">
      <div>
        <img class="wm" src="<?php echo esc_url( $rl_img . 'logo-branco.png' ); ?>" alt="Reloadse">
        <p class="about">Inteligência artificial para instituições tradicionais. Transformamos processos em resultados, começando pelos cartórios do Brasil.</p>
      </div>
      <div>
        <div class="fh">Navegação</div>
        <ul>
          <li><a href="#manifesto">Manifesto</a></li>
          <li><a href="#quem-somos">Quem somos</a></li>
          <li><a href="#o-que-fazemos">O que fazemos</a></li>
          <li><a href="#resultados">Resultados</a></li>
          <li><a href="#contato">Contato</a></li>
        </ul>
      </div>
      <div>
        <div class="fh">Reloadse</div>
        <ul>
          <li><a href="https://botfala.ai/cartorio-solucao" target="_blank" rel="noopener">Produto Fala AI ↗</a></li>
          <li><a href="#contato">Falar com a empresa</a></li>
          <li><span style="color:#4f7296">Uma empresa do Grupo P21</span></li>
        </ul>
      </div>
    </div>
    <div class="foot-bottom">
      <span>© 2026 Reloadse · Transformação Digital</span>
      <span>Brasília, DF · reloadse.com.br</span>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
