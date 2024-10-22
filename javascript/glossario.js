const letras = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
    let novoConteudo, botaoVoltar, letraAnterior, proximaLetra;

    const pageContent = document.getElementById('page-content');
    const paginationContainer = document.querySelector('.pagination');
    const btnInicio = document.getElementById('inicio');
    const btnFim = document.getElementById('fim');
    const btnAnterior = document.getElementById('anterior');
    const btnProximo = document.getElementById('proximo');
    const totalPages = 15;
    const maxVisiblePages = 10;
    let currentPage = 1;

    const pageContents = {
      1: "<p><b>Absolutismo:</b> Sistema de governo em que o rei tem poder total sobre o Estado e a população.<br><br><b>Antigo Regime:</b> Organização social e política da Europa antes das Revoluções, baseada na monarquia, aristocracia e clero.<br><br><b>Aristocracia:</b> Classe social de nobres que detinha terras e poder político.<br><br><b>Assolutismo Monárquico:</b> Outra forma de se referir ao absolutismo, com o monarca exercendo controle absoluto.<br><br><b>Batalha de Hastings:</b> Conflito em 1066 na Inglaterra, que levou à conquista normanda do país.</p>",
      2: "<p><b>Belle Époque:</b> Período de paz e progresso cultural na Europa, entre 1871 e 1914.<br><br><b>Bipolaridade:</b> Divisão do mundo em duas superpotências durante a Guerra Fria: EUA e União Soviética.<br><br><b>Bolchevismo:</b> Ideologia socialista radical que levou à Revolução Russa e à criação da União Soviética.<br><br><b>Bretton Woods:</b> Conferência que criou o sistema financeiro internacional após a Segunda Guerra Mundial.<br><br><b>Califado:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.</p>",
      3: "<p>Página 3 com estilo verde</p><ul><li>Item 1</li><li>Item 2</li></ul>",
      4: "<p>Página 4: Borda azul pontilhada</p>",
      5: "<p>Página 5 com texto em itálico.</p>",
      6: "<p>Página 6 em negrito com cor marrom escura.</p>",
      7: "<p>Página 7: Todo o texto em maiúsculas</p>",
      8: "<p>Página 8 com fundo azul claro.</p>",
      9: "<p>Página 9 com cor roxa e texto grande.</p>",
      10: "<p>Página 10 com gradiente de fundo.</p>",
      11: "<p>Página 11 com borda pontilhada marrom.</p>",
      12: "<p>Página 12: Fundo verde claro e fonte monoespaçada.</p>",
      13: "<p>Página 13 usando fonte serifada.</p>",
      14: "<p>Página 14 com cor rosa e fonte maior.</p>",
      15: "<p>Página 15 alinhada à esquerda.</p>"
    }

    function updatePageContent(page) {
      pageContent.innerHTML = pageContents[page] || "<p>Conteúdo não encontrado</p>";
      pageContent.className = 'page-content'; // Reseta as classes para o estilo padrão
      pageContent.classList.add(`page-${page}`);
    }

    function renderPageLinks(startPage) {
      const pageLinks = Array.from(paginationContainer.children).filter(link => link !== btnInicio && link !== btnFim && link !== btnAnterior && link !== btnProximo);
      pageLinks.forEach(link => link.remove());

      let endPage = Math.min(startPage + maxVisiblePages - 1, totalPages);

      for (let i = startPage; i <= endPage; i++) {
        const pageLink = document.createElement('a');
        pageLink.href = "#";
        pageLink.textContent = i;
        pageLink.dataset.page = i;
        if (i === currentPage) {
          pageLink.classList.add('active');
        }
        paginationContainer.insertBefore(pageLink, btnProximo);
      }
    }

    paginationContainer.addEventListener('click', function(event) {
      event.preventDefault();
      const target = event.target;
      if (target.tagName !== 'A') return;

      let newPage = target.dataset.page;

      if (newPage === 'prev') {
        newPage = Math.max(1, currentPage - 1);
      } else if (newPage === 'next') {
        newPage = Math.min(totalPages, currentPage + 1);
      } else if (newPage === '1') {
        newPage = 1;
      } else if (newPage === '15') {
        newPage = 15;
      } else {
        newPage = parseInt(newPage);
      }

      if (newPage !== currentPage) {
        currentPage = newPage;
        updatePageContent(currentPage);
        let startPage = Math.max(1, Math.min(currentPage - Math.floor(maxVisiblePages / 2), totalPages - maxVisiblePages + 1));
        renderPageLinks(startPage);
      }
    });

    renderPageLinks(1);
    updatePageContent(1);

    // Seus conteúdos por letra
  const contentByLetter = {
    A: "<p><b>Absolutismo:</b> Sistema de governo em que o rei tem poder total sobre o Estado e a população.<br><br><b>Antigo Regime:</b> Organização social e política da Europa antes das Revoluções, baseada na monarquia, aristocracia e clero.<br><br><b>Aristocracia:</b> Classe social de nobres que detinha terras e poder político.<br><br><b>Assolutismo Monárquico:</b> Outra forma de se referir ao absolutismo, com o monarca exercendo controle absoluto.<br><br></p>",
    B: "<p><b>Batalha de Hastings:</b> Conflito em 1066 na Inglaterra, que levou à conquista normanda do país.<br><br><b>Belle Époque:</b> Período de paz e progresso cultural na Europa, entre 1871 e 1914.<br><br><b>Bipolaridade:</b> Divisão do mundo em duas superpotências durante a Guerra Fria: EUA e União Soviética.<br><br><b>Bolchevismo:</b> Ideologia socialista radical que levou à Revolução Russa e à criação da União Soviética.<br><br><b>Bretton Woods:</b> Conferência que criou o sistema financeiro internacional após a Segunda Guerra Mundial.<br><br></p>",
    C: "<p><b>Califado:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Colonialismo:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Comunismo:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Cruzadas:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Crise de 1929:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br></p>",
    D: "<p><b>Declaração de Direitos Humanos:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Democratização:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Ditadura:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Diplomacia:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Doutrina:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br></p>",
    E: "<p><b>Califado:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Colonialismo:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Comunismo:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Cruzadas:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Crise de 1929:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br></p>",
    // Adicione mais letras e conteúdos conforme necessário
  };

  // Função para atualizar o conteúdo com base na letra selecionada
  function updateContentByLetter(letter) {
    const content = contentByLetter[letter] || "<p>Não há conteúdo disponível para esta letra.</p>";
    pageContent.innerHTML = content;
  }

  // Adiciona o evento de clique para cada letra do alfabeto
  document.querySelectorAll('.alphabet-container a').forEach(link => {
    link.addEventListener('click', function(event) {
      event.preventDefault();
      const letter = link.textContent;
      updateContentByLetter(letter);
    });
  });

  function removerNavPags() {
            const navPags = document.getElementById('navPags');
            
            if (navPags) navPags.remove();
        }

    function atualizarConteudo(letraAtual) {

      removerElementos();

      const navLetras = document.getElementById('navLetras');

      novoConteudo = updateContentByLetter(letraAtual);

            letraAnterior = document.createElement('button');
            letraAnterior.id = 'letraAnterior';
            letraAnterior.textContent = 'Letra anterior';
            letraAnterior.style.marginTop = '20px';
            letraAnterior.style.padding = '10px 20px';
            letraAnterior.style.border = '1px solid #ddd';
            letraAnterior.style.backgroundColor = '#f9f9f9';
            letraAnterior.style.borderRadius = '5px';
            letraAnterior.style.textAlign = 'center';
            letraAnterior.style.fontSize = '16px';
            letraAnterior.style.cursor = 'pointer';
            

            botaoVoltar = document.createElement('button');
            botaoVoltar.textContent = 'Voltar';
            botaoVoltar.style.marginTop = '20px';
            botaoVoltar.style.padding = '10px 20px';
            botaoVoltar.style.border = 'none';
            botaoVoltar.style.backgroundColor = '#8B0000';
            botaoVoltar.style.color = 'white';
            botaoVoltar.style.borderRadius = '5px';
            botaoVoltar.style.fontSize = '16px';
            botaoVoltar.style.cursor = 'pointer';
            navLetras.appendChild(botaoVoltar);

            botaoVoltar.addEventListener('click', function() {
                location.reload();
            });

            proximaLetra = document.createElement('button');
            proximaLetra.id = 'proximaLetra';
            proximaLetra.textContent = 'Próxima letra';
            proximaLetra.style.marginTop = '20px';
            proximaLetra.style.padding = '10px 20px';
            proximaLetra.style.border = '1px solid #ddd';
            proximaLetra.style.backgroundColor = '#f9f9f9';
            proximaLetra.style.borderRadius = '5px';
            proximaLetra.style.fontSize = '16px';
            proximaLetra.style.cursor = 'pointer';

            const indexAtual = letras.indexOf(letraAtual);

            if (indexAtual > 0) {
                letraAnterior.innerHTML = '&laquo; ' + letras[indexAtual - 1];
                letraAnterior.addEventListener('click', () => atualizarConteudo(letras[indexAtual - 1]));
            } else {
                letraAnterior.innerHTML = 'Início' || 'A';
                letraAnterior.disabled = true; // Desabilita o botão se for o primeiro
            }

            if (indexAtual < letras.length - 1) {
                proximaLetra.innerHTML = letras[indexAtual + 1] + ' &raquo;';
                proximaLetra.addEventListener('click', () => atualizarConteudo(letras[indexAtual + 1]));
            } else {
                proximaLetra.innerHTML = 'Fim' || 'Z';
                proximaLetra.disabled = true; // Desabilita o botão se for o último
            }

            navLetras.prepend(letraAnterior);
            navLetras.appendChild(proximaLetra);
    }

    function removerElementos() {
            if (novoConteudo) novoConteudo.remove();
            if (botaoVoltar) botaoVoltar.remove();
            if (letraAnterior) letraAnterior.remove();
            if (proximaLetra) proximaLetra.remove();
        }


  document.getElementById('botaoA').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('A');
  });
  
  document.getElementById('botaoB').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('B');
  });

  document.getElementById('botaoC').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('C');
  });

  document.getElementById('botaoD').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('D');
  });

  document.getElementById('botaoE').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('E');
  });

  document.getElementById('botaoF').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('F');
  });

  document.getElementById('botaoG').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('G');
  });

  document.getElementById('botaoH').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('H');
  });

  document.getElementById('botaoI').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('I');
  });

  document.getElementById('botaoJ').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('J');
  });

  document.getElementById('botaoK').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('K');
  });

  document.getElementById('botaoL').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('L');
  });

  document.getElementById('botaoM').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('M');
  });

  document.getElementById('botaoN').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('N');
  });

  document.getElementById('botaoO').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('O');
  });

  document.getElementById('botaoP').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('P');
  });

  document.getElementById('botaoQ').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('Q');
  });

  document.getElementById('botaoR').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('R');
  });

  document.getElementById('botaoS').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('S');
  });

  document.getElementById('botaoT').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('T');
  });

  document.getElementById('botaoU').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('U');
  });

  document.getElementById('botaoV').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('V');
  });

  document.getElementById('botaoW').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('W');
  });

  document.getElementById('botaoX').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('X');
  });

  document.getElementById('botaoY').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('Y');
  });

  document.getElementById('botaoZ').addEventListener('click', function() {
    removerNavPags();
    atualizarConteudo('Z');
  });

  const botoesAlfa = document.querySelectorAll('.botaoABC');
  let indexAlfa = 0;

  function selecionarLetra(index) {
    // Remove a classe 'selected' de todos os links
    botoesAlfa.forEach(link => link.classList.remove('selected'));

    // Adiciona a classe 'selected' ao link correspondente ao índice
    botoesAlfa[index].classList.add('selected');
  }

  botoesAlfa.forEach((botaoABC, index) => {
    botaoABC.addEventListener('click', function(event) {
      event.preventDefault();
      indexAlfa = index; // Atualiza o índice atual
      selecionarLetra(indexAlfa);
    });
  });

  document.getElementById('letraAnterior').addEventListener('click', function() {
    if (indexAlfa > 0) {
      indexAlfa--; // Diminui o índice para ir à esquerda
      selecionarLetra(indexAlfa);
    }
  });

  document.getElementById('proximaLetra').addEventListener('click', function() {
    if (indexAlfa < botoesAlfa.length - 1) {
      indexAlfa++; // Aumenta o índice para ir à direita
      selecionarLetra(indexAlfa);
    }
  });