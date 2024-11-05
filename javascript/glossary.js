// const letras = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
//     let novoConteudo, botaoVoltar, letraAnterior, proximaLetra;

//     const pageContent = document.getElementById('page-content');
//     const paginationContainer = document.querySelector('.pagination');
//     const btnInicio = document.getElementById('inicio');
//     const btnFim = document.getElementById('fim');
//     const btnAnterior = document.getElementById('anterior');
//     const btnProximo = document.getElementById('proximo');
//     const totalPages = 15;
//     const maxVisiblePages = 10;
//     let currentPage = 1;

//     const pageContents = {
//       1: "<p><b>Absolutismo:</b> Sistema de governo em que o rei tem poder total sobre o Estado e a população.<br><br><b>Antigo Regime:</b> Organização social e política da Europa antes das Revoluções, baseada na monarquia, aristocracia e clero.<br><br><b>Aristocracia:</b> Classe social de nobres que detinha terras e poder político.<br><br><b>Assolutismo Monárquico:</b> Outra forma de se referir ao absolutismo, com o monarca exercendo controle absoluto.<br><br><b>Batalha de Hastings:</b> Conflito em 1066 na Inglaterra, que levou à conquista normanda do país.</p>",
//       2: "<p><b>Belle Époque:</b> Período de paz e progresso cultural na Europa, entre 1871 e 1914.<br><br><b>Bipolaridade:</b> Divisão do mundo em duas superpotências durante a Guerra Fria: EUA e União Soviética.<br><br><b>Bolchevismo:</b> Ideologia socialista radical que levou à Revolução Russa e à criação da União Soviética.<br><br><b>Bretton Woods:</b> Conferência que criou o sistema financeiro internacional após a Segunda Guerra Mundial.<br><br><b>Califado:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.</p>",
//       3: "<p>Página 3 com estilo verde</p><ul><li>Item 1</li><li>Item 2</li></ul>",
//       4: "<p>Página 4: Borda azul pontilhada</p>",
//       5: "<p>Página 5 com texto em itálico.</p>",
//       6: "<p>Página 6 em negrito com cor marrom escura.</p>",
//       7: "<p>Página 7: Todo o texto em maiúsculas</p>",
//       8: "<p>Página 8 com fundo azul claro.</p>",
//       9: "<p>Página 9 com cor roxa e texto grande.</p>",
//       10: "<p>Página 10 com gradiente de fundo.</p>",
//       11: "<p>Página 11 com borda pontilhada marrom.</p>",
//       12: "<p>Página 12: Fundo verde claro e fonte monoespaçada.</p>",
//       13: "<p>Página 13 usando fonte serifada.</p>",
//       14: "<p>Página 14 com cor rosa e fonte maior.</p>",
//       15: "<p>Página 15 alinhada à esquerda.</p>"
//     }

//     function updatePageContent(page) {
//       pageContent.innerHTML = pageContents[page] || "<p>Conteúdo não encontrado</p>";
//       pageContent.className = 'page-content'; // Reseta as classes para o estilo padrão
//       pageContent.classList.add(`page-${page}`);
//     }

//     function renderPageLinks(startPage) {
//       const pageLinks = Array.from(paginationContainer.children).filter(link => link !== btnInicio && link !== btnFim && link !== btnAnterior && link !== btnProximo);
//       pageLinks.forEach(link => link.remove());

//       let endPage = Math.min(startPage + maxVisiblePages - 1, totalPages);

//       for (let i = startPage; i <= endPage; i++) {
//         const pageLink = document.createElement('a');
//         pageLink.href = "#";
//         pageLink.textContent = i;
//         pageLink.dataset.page = i;
//         if (i === currentPage) {
//           pageLink.classList.add('active');
//         }
//         paginationContainer.insertBefore(pageLink, btnProximo);
//       }
//     }

//     paginationContainer.addEventListener('click', function(event) {
//       event.preventDefault();
//       const target = event.target;
//       if (target.tagName !== 'A') return;

//       let newPage = target.dataset.page;

//       if (newPage === 'prev') {
//         newPage = Math.max(1, currentPage - 1);
//       } else if (newPage === 'next') {
//         newPage = Math.min(totalPages, currentPage + 1);
//       } else if (newPage === '1') {
//         newPage = 1;
//       } else if (newPage === '15') {
//         newPage = 15;
//       } else {
//         newPage = parseInt(newPage);
//       }

//       if (newPage !== currentPage) {
//         currentPage = newPage;
//         updatePageContent(currentPage);
//         let startPage = Math.max(1, Math.min(currentPage - Math.floor(maxVisiblePages / 2), totalPages - maxVisiblePages + 1));
//         renderPageLinks(startPage);
//       }
//     });

//     renderPageLinks(1);
//     updatePageContent(1);

//     // Seus conteúdos por letra
//   const contentByLetter = {
//     A: "<p class='conceitos'><b>Absolutismo:</b> Sistema de governo em que o rei tem poder total sobre o Estado e a população.<br><br><b>Antigo Regime:</b> Organização social e política da Europa antes das Revoluções, baseada na monarquia, aristocracia e clero.<br><br><b>Aristocracia:</b> Classe social de nobres que detinha terras e poder político.<br><br><b>Assolutismo Monárquico:</b> Outra forma de se referir ao absolutismo, com o monarca exercendo controle absoluto.</p>",
//     B: "<p class='conceitos'><b>Batalha de Hastings:</b> Conflito em 1066 na Inglaterra, que levou à conquista normanda do país.<br><br><b>Belle Époque:</b> Período de paz e progresso cultural na Europa, entre 1871 e 1914.<br><br><b>Bipolaridade:</b> Divisão do mundo em duas superpotências durante a Guerra Fria: EUA e União Soviética.<br><br><b>Bloqueio Continental:</b> Divisão do mundo em duas superpotências durante a Guerra Fria: EUA e União Soviética.<br><br><b>Bolchevismo:</b> Ideologia socialista radical que levou à Revolução Russa e à criação da União Soviética.<br><br><b>Bretton Woods:</b> Conferência que criou o sistema financeiro internacional após a Segunda Guerra Mundial.</p>",
//     C: "<p class='conceitos'><b>Califado:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Colonialismo:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Comunismo:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Cruzadas:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Crise de 1929:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.</p>",
//     D: "<p class='conceitos'><b>Declaração de Direitos Humanos:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Democratização:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Ditadura:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Diplomacia:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Doutrina:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.</p>",
//     E: "<p class='conceitos'><b>Era Napoleônica:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Era Vargas:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Escravismo:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Estado:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Estado de Bem-Estar Social:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Estado-Nação:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Expansão Marítima:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.</p>",
//     F: "<p class='conceitos'><b>Fascismo:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Federalismo:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Feudalismo:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.</p>",
//     G: "<p class='conceitos'><b>Golpe de Estado:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Grandes Navegações:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Guerra Civil Espanhola:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Guerra das Coreias:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Guerra de Canudos:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Guerra do Vietnã:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Guerras Napoleônicas:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.</p>",
//     H: "<p class='conceitos'><b>Hegemonia:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>História:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Holocausto:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.</p>",
//     I: "<p class='conceitos'><b>Iluminismo:</b> Conflito em 1066 na Inglaterra, que levou à conquista normanda do país.<br><br><b>Imperialismo</b> Período de paz e progresso cultural na Europa, entre 1871 e 1914.<br><br><b>Império Bizantino:</b> Divisão do mundo em duas superpotências durante a Guerra Fria: EUA e União Soviética.<br><br><b>Império Romano:</b> Divisão do mundo em duas superpotências durante a Guerra Fria: EUA e União Soviética.<br><br><b>Independência do Brasil:</b> Ideologia socialista radical que levou à Revolução Russa e à criação da União Soviética.<br><br><b>Independência dos Estados Unidos:</b> Ideologia socialista radical que levou à Revolução Russa e à criação da União Soviética.<br><br><b>Invasão da Polônia:</b> Conferência que criou o sistema financeiro internacional após a Segunda Guerra Mundial.</p>",
//     J: "<p class='conceitos'><b>Jovem Guarda:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Jusnaturalismo:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.</p>",
//     K: "<p class='conceitos'><b class='naosei'>KGB:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.</p>",
//     L: "<p class='conceitos'><b>Liberalismo:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Liga das Nações:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Livre Mercado:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.</p>",
//     M: "<p class='conceitos'><b>Mercantilismo:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Modernismo:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Monarquia Inglesa:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Movimentos Populares:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Muro de Berlim:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.</p>",
//     N: "<p class='conceitos'><b>Nacionalismo:</b> Sistema de governo em que o rei tem poder total sobre o Estado e a população.<br><br><b>Napoleão Bonaparte:</b> Organização social e política da Europa antes das Revoluções, baseada na monarquia, aristocracia e clero.<br><br><b>Nazismo:</b> Classe social de nobres que detinha terras e poder político.<br><br><b>Neoliberalismo:</b> Outra forma de se referir ao absolutismo, com o monarca exercendo controle absoluto.</p>",
//     O: "<p class='conceitos'><b>Ocidental:</b> Sistema de governo em que o rei tem poder total sobre o Estado e a população.<br><br><b>ONU:</b> Organização social e política da Europa antes das Revoluções, baseada na monarquia, aristocracia e clero.<br><br><b>Órgão:</b> Classe social de nobres que detinha terras e poder político.<br><br><b>Oriental:</b> Outra forma de se referir ao absolutismo, com o monarca exercendo controle absoluto.</p>",
//     P: "<p class='conceitos'><b>Plano Marshall:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Plano Molotov:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Política:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Positivismo:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Primavera Árabe:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Primeira Guerra Mundial:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Proletariado:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.</p>",
//     Q: "<p class='conceitos'><b>Queda de Constantinopla:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Queda do Muro de Berlim:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.</p>",
//     R: "<p class='conceitos'><b>Rebelião:</b> Ato de resistência ou insurreição de um grupo contra uma autoridade, governo ou sistema estabelecido, geralmente motivado por injustiças, opressão ou demandas por mudanças sociais, políticas ou econômicas. Rebeliões podem variar em intensidade, desde protestos e motins até confrontos armados.<br><br><b>Reconquista Espanhola:</b> Processo histórico de quase 800 anos (711-1492) em que os reinos cristãos da Península Ibérica combateram e gradualmente reconquistaram territórios sob domínio muçulmano. Iniciada após a invasão moura, a Reconquista terminou com a tomada de Granada pelos Reis Católicos, Isabel de Castela e Fernando de Aragão, unificando a Espanha sob o cristianismo.<br><br><b>Reforma Agrária:</b> Processo de redistribuição de terras com o objetivo de reduzir a concentração fundiária, promover a justiça social e aumentar a produtividade agrícola. Em geral, busca fornecer terras a camponeses e trabalhadores rurais, garantindo-lhes acesso à terra para cultivo e subsistência.<br><br><b>Reforma Gregoriana:</b> Movimento de reformas na Igreja Católica durante o século XI, liderado pelo Papa Gregório VII. Visava combater a corrupção e práticas como a simonia (compra de cargos eclesiásticos), além de reafirmar a independência da Igreja em relação ao poder secular.<br><br><b>Reforma Luterana:</b> Movimento religioso iniciado por Martinho Lutero no início do século XVI na Alemanha, criticando práticas da Igreja Católica, como a venda de indulgências. Lutero propôs mudanças baseadas na ideia de que a salvação depende exclusivamente da fé, resultando na criação das igrejas protestantes e dando início à Reforma Protestante.<br><br><b>Reforma Protestante:</b> Movimento de renovação religiosa no século XVI, iniciado por figuras como Martinho Lutero, João Calvino e outros. Esse movimento desafiou a autoridade da Igreja Católica e suas doutrinas, levando à criação de novas denominações cristãs (protestantes) e transformando profundamente o cenário religioso, político e social da Europa.<br><br><b>Regime Militar no Brasil:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Renascimento:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Revolta dos Canudos:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Revolução Americana:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Revolução Cubana:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Revolução dos Cravos:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Revolução Francesa:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Revolução Gloriosa:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Revolução Industrial:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Revolução Pernambucana:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Revolução Russa:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br><b>Roma Antiga:</b> Estado islâmico liderado por um califa, que é visto como o sucessor de Maomé.<br><br></p>",
//     S: "<p class='conceitos'><b>Século das Luzes:</b>  Movimento intelectual e cultural que ocorreu no século XVIII, caracterizado pela ênfase na razão, ciência e progresso humano. Filósofos como Voltaire, Rousseau e Montesquieu promoveram ideias sobre liberdade, direitos individuais e governo racional, influenciando revoluções e transformações sociais na Europa e nas Américas.<br><br><b>Segunda Guerra Mundial:</b> Conflito global ocorrido entre 1939 e 1945, envolvendo as principais potências divididas entre os Aliados (como EUA, URSS e Reino Unido) e o Eixo (liderado por Alemanha, Itália e Japão). Marcada por batalhas em grande escala, crimes contra a humanidade e o Holocausto, a guerra terminou com a vitória dos Aliados e levou à reorganização política e econômica mundial.<br><br><b>Servidão:</b> Sistema social e econômico em que camponeses, conhecidos como servos, eram ligados a uma terra pertencente a um senhor feudal. Em troca de proteção, os servos eram obrigados a trabalhar nas terras do senhor e pagar tributos, possuindo poucas liberdades e direitos. Foi uma prática comum na Idade Média e durou até o início da era moderna em algumas regiões.<br><br><b>Sistema Colonial:</b> Modelo econômico e político em que uma metrópole domina e explora uma colônia, utilizando suas terras, recursos e mão de obra para benefício próprio. As colônias produziam matérias-primas e bens destinados ao mercado da metrópole, que mantinha o controle administrativo e militar sobre o território. Esse sistema foi predominante entre os séculos XV e XIX, impulsionado pelas Grandes Navegações.<br><br><b>Sistema Feudal:</b> Estrutura social, econômica e política da Idade Média europeia, caracterizada pela organização em feudos — grandes propriedades governadas por senhores feudais. A economia era agrária e de subsistência, e a sociedade era rigidamente hierárquica, com senhores e vassalos. Os camponeses (servos) trabalhavam nas terras dos senhores em troca de proteção, tendo pouca mobilidade social e autonomia.<br><br><b>Socialismo:</b> Ideologia e sistema econômico que defende a propriedade coletiva ou estatal dos meios de produção e uma distribuição mais equitativa de riquezas. O socialismo busca reduzir desigualdades sociais e promover o bem-estar coletivo, propondo que os recursos e a economia sejam planejados para atender às necessidades de todos, em vez de concentrar riquezas em mãos privadas.<br><br><b>Sociedade Estamental:</b> Estrutura social rígida e hierárquica, onde a posição social dos indivíduos é determinada pelo nascimento. Nessa sociedade, existem estamentos ou \"camadas sociais\" com funções e direitos específicos, como clero, nobreza e camponeses, com pouca ou nenhuma mobilidade social entre os grupos.<br><br><b>Sociedade Feudal:</b> Organização social e econômica da Europa medieval baseada no sistema feudal, onde o poder estava descentralizado e dividido entre senhores feudais. A sociedade era estruturada em relações de vassalagem, com senhores protegendo e oferecendo terras a vassalos e camponeses, que em troca ofereciam trabalho, tributos e lealdade. A mobilidade social era muito limitada, e as relações eram de dependência entre os níveis da hierarquia.<br><br><b>Sociedade Medieval:</b> Estrutura social que prevaleceu na Europa durante a Idade Média (aproximadamente do século V ao XV), caracterizada pela influência da Igreja Católica, que ditava normas e valores. Essa sociedade era marcada por uma economia agrária, pelo sistema feudal e pela divisão em estamentos (clero, nobreza e camponeses). A sociedade medieval era altamente hierárquica, e a mobilidade social era restrita.<br><br></p>",
//     T: "<p class='conceitos'><b>Teoria Geocêntrica:</b> Modelo astronômico, predominante na Antiguidade e na Idade Média, que colocava a Terra no centro do universo, com o Sol, a Lua e os planetas girando ao seu redor. Foi defendida por filósofos como Ptolomeu e mais tarde desafiada pela Teoria Heliocêntrica.<br><br><b>Teoria Heliocêntrica:</b> Modelo astronômico que coloca o Sol no centro do sistema solar, com os planetas, incluindo a Terra, orbitando ao seu redor. Proposta por Nicolau Copérnico no século XVI, essa teoria revolucionou a ciência e substituiu a Teoria Geocêntrica.<br><br><b>Tratado de Kyoto:</b> Acordo internacional adotado em 1997 na cidade de Kyoto, Japão, com o objetivo de reduzir as emissões de gases de efeito estufa e combater as mudanças climáticas. Entrou em vigor em 2005, comprometendo diversos países a estabelecerem metas de redução de poluentes.<br><br><b>Tratado de Tordesilhas:</b> Acordo firmado em 1494 entre Portugal e Espanha, que dividiu as terras \"descobertas e por descobrir\" no Novo Mundo por uma linha imaginária no Oceano Atlântico. Esse tratado estabeleceu limites para a expansão colonial dos dois reinos, garantindo a Portugal territórios a leste da linha e à Espanha os territórios a oeste.<br><br><b>Tratado de Versalhes:</b> Acordo de paz assinado em 1919, ao final da Primeira Guerra Mundial, entre a Alemanha e os Aliados. O tratado impôs severas sanções econômicas e territoriais à Alemanha, responsabilizando-a pela guerra e exigindo reparações financeiras, o que impactou profundamente a economia alemã e influenciou a política europeia nas décadas seguintes.<br><br><b>Tratado de Viena:</b> Acordo estabelecido em 1815 durante o Congresso de Viena, que reorganizou o mapa da Europa após as Guerras Napoleônicas. Ele restaurou monarquias, redefiniu fronteiras e buscou equilibrar o poder entre as principais potências europeias para garantir a estabilidade e evitar novos conflitos.<br><br><b>Tríplice Aliança:</b> Aliança militar formada em 1882 entre Alemanha, Áustria-Hungria e Itália, com o objetivo de proteção mútua em caso de ataque por outras potências europeias, especialmente a França. A aliança foi um dos blocos principais da Primeira Guerra Mundial, embora a Itália tenha mudado de lado em 1915.<br><br><b>Tríplice Entente:</b> Aliança militar formada no início do século XX entre França, Rússia e Reino Unido, em resposta à Tríplice Aliança. Esse pacto visava conter o expansionismo dos impérios centrais, especialmente da Alemanha, e foi um dos blocos principais na Primeira Guerra Mundial.<br><br></p>",
//     U: "<p class='conceitos'><b>União Europeia:</b> Bloco econômico e político formado por países europeus com o objetivo de promover a integração econômica, social e política, facilitando o comércio e a circulação de pessoas entre os países membros.<br><br><b>União Soviética:</b> Estado socialista criado em 1922 que reunia várias repúblicas sob um governo centralizado, liderado pelo Partido Comunista. Foi uma das superpotências mundiais durante a Guerra Fria, existindo até sua dissolução em 1991.<br><br><b>Unificação Alemã:</b> Processo ocorrido entre 1864 e 1871 que resultou na unificação dos diversos estados alemães sob o comando do Reino da Prússia, formando o Império Alemão. Liderado por Otto von Bismarck, foi um marco importante para a formação da Alemanha como nação.</p>",
//     // Adicione mais letras e conteúdos conforme necessário
//   };

//   // Função para atualizar o conteúdo com base na letra selecionada
//   function updateContentByLetter(letter) {
//     const content = contentByLetter[letter] || "<p>Não há conteúdo disponível para esta letra.</p>";
//     pageContent.innerHTML = content;
//   }

//   // Adiciona o evento de clique para cada letra do alfabeto
//   document.querySelectorAll('.alphabet-container a').forEach(link => {
//     link.addEventListener('click', function(event) {
//       event.preventDefault();
//       const letter = link.textContent;
//       updateContentByLetter(letter);
//     });
//   });

//   function removerNavPags() {
//             const navPags = document.getElementById('navPags');
            
//             if (navPags) navPags.remove();
//         }

//     function atualizarConteudo(letraAtual) {

//       removerElementos();

//       const navLetras = document.getElementById('navLetras');

//       novoConteudo = updateContentByLetter(letraAtual);

//             letraAnterior = document.createElement('button');
//             letraAnterior.id = 'letraAnterior';
//             letraAnterior.textContent = 'Letra anterior';
//             letraAnterior.style.marginTop = '20px';
//             letraAnterior.style.padding = '10px 20px';
//             letraAnterior.style.border = '1px solid #665d50';
//             letraAnterior.style.backgroundColor = '#f9f9f9';
//             letraAnterior.style.borderRadius = '5px';
//             letraAnterior.style.textAlign = 'center';
//             letraAnterior.style.fontSize = '16px';
//             letraAnterior.style.cursor = 'pointer';
            

//             botaoVoltar = document.createElement('button');
//             botaoVoltar.textContent = 'Voltar';
//             botaoVoltar.style.marginTop = '20px';
//             botaoVoltar.style.padding = '10px 20px';
//             botaoVoltar.style.border = 'none';
//             botaoVoltar.style.backgroundColor = '#d4af37';
//             botaoVoltar.style.border = '1px solid #665d50';
//             botaoVoltar.style.color = 'white';
//             botaoVoltar.style.borderRadius = '5px';
//             botaoVoltar.style.fontSize = '16px';
//             botaoVoltar.style.cursor = 'pointer';
//             navLetras.appendChild(botaoVoltar);

//             botaoVoltar.addEventListener('click', function() {
//                 location.reload();
//             });

//             proximaLetra = document.createElement('button');
//             proximaLetra.id = 'proximaLetra';
//             proximaLetra.textContent = 'Próxima letra';
//             proximaLetra.style.marginTop = '20px';
//             proximaLetra.style.padding = '10px 20px';
//             proximaLetra.style.border = '1px solid #665d50';
//             proximaLetra.style.backgroundColor = '#f9f9f9';
//             proximaLetra.style.borderRadius = '5px';
//             proximaLetra.style.fontSize = '16px';
//             proximaLetra.style.cursor = 'pointer';

//             const indexAtual = letras.indexOf(letraAtual);

//             if (indexAtual > 0) {
//                 letraAnterior.innerHTML = '&laquo; ' + letras[indexAtual - 1];
//                 letraAnterior.addEventListener('click', () => atualizarConteudo(letras[indexAtual - 1]));
//             } else {
//                 letraAnterior.innerHTML = 'Início' || 'A';
//                 letraAnterior.disabled = true; // Desabilita o botão se for o primeiro
//             }

//             if (indexAtual < letras.length - 1) {
//                 proximaLetra.innerHTML = letras[indexAtual + 1] + ' &raquo;';
//                 proximaLetra.addEventListener('click', () => atualizarConteudo(letras[indexAtual + 1]));
//             } else {
//                 proximaLetra.innerHTML = 'Fim' || 'Z';
//                 proximaLetra.disabled = true; // Desabilita o botão se for o último
//             }

//             navLetras.prepend(letraAnterior);
//             navLetras.appendChild(proximaLetra);
//     }

//     function removerElementos() {
//             if (novoConteudo) novoConteudo.remove();
//             if (botaoVoltar) botaoVoltar.remove();
//             if (letraAnterior) letraAnterior.remove();
//             if (proximaLetra) proximaLetra.remove();
//         }


//   document.getElementById('botaoA').addEventListener('click', function() {
//     removerNavPags();
//     atualizarConteudo('A');
//   });
  
//   document.getElementById('botaoB').addEventListener('click', function() {
//     removerNavPags();
//     atualizarConteudo('B');
//   });

//   document.getElementById('botaoC').addEventListener('click', function() {
//     removerNavPags();
//     atualizarConteudo('C');
//   });

//   document.getElementById('botaoD').addEventListener('click', function() {
//     removerNavPags();
//     atualizarConteudo('D');
//   });

//   document.getElementById('botaoE').addEventListener('click', function() {
//     removerNavPags();
//     atualizarConteudo('E');
//   });

//   document.getElementById('botaoF').addEventListener('click', function() {
//     removerNavPags();
//     atualizarConteudo('F');
//   });

//   document.getElementById('botaoG').addEventListener('click', function() {
//     removerNavPags();
//     atualizarConteudo('G');
//   });

//   document.getElementById('botaoH').addEventListener('click', function() {
//     removerNavPags();
//     atualizarConteudo('H');
//   });

//   document.getElementById('botaoI').addEventListener('click', function() {
//     removerNavPags();
//     atualizarConteudo('I');
//   });

//   document.getElementById('botaoJ').addEventListener('click', function() {
//     removerNavPags();
//     atualizarConteudo('J');
//   });

//   document.getElementById('botaoK').addEventListener('click', function() {
//     removerNavPags();
//     atualizarConteudo('K');
//   });

//   document.getElementById('botaoL').addEventListener('click', function() {
//     removerNavPags();
//     atualizarConteudo('L');
//   });

//   document.getElementById('botaoM').addEventListener('click', function() {
//     removerNavPags();
//     atualizarConteudo('M');
//   });

//   document.getElementById('botaoN').addEventListener('click', function() {
//     removerNavPags();
//     atualizarConteudo('N');
//   });

//   document.getElementById('botaoO').addEventListener('click', function() {
//     removerNavPags();
//     atualizarConteudo('O');
//   });

//   document.getElementById('botaoP').addEventListener('click', function() {
//     removerNavPags();
//     atualizarConteudo('P');
//   });

//   document.getElementById('botaoQ').addEventListener('click', function() {
//     removerNavPags();
//     atualizarConteudo('Q');
//   });

//   document.getElementById('botaoR').addEventListener('click', function() {
//     removerNavPags();
//     atualizarConteudo('R');
//   });

//   document.getElementById('botaoS').addEventListener('click', function() {
//     removerNavPags();
//     atualizarConteudo('S');
//   });

//   document.getElementById('botaoT').addEventListener('click', function() {
//     removerNavPags();
//     atualizarConteudo('T');
//   });

//   document.getElementById('botaoU').addEventListener('click', function() {
//     removerNavPags();
//     atualizarConteudo('U');
//   });

//   document.getElementById('botaoV').addEventListener('click', function() {
//     removerNavPags();
//     atualizarConteudo('V');
//   });

//   document.getElementById('botaoW').addEventListener('click', function() {
//     removerNavPags();
//     atualizarConteudo('W');
//   });

//   document.getElementById('botaoX').addEventListener('click', function() {
//     removerNavPags();
//     atualizarConteudo('X');
//   });

//   document.getElementById('botaoY').addEventListener('click', function() {
//     removerNavPags();
//     atualizarConteudo('Y');
//   });

//   document.getElementById('botaoZ').addEventListener('click', function() {
//     removerNavPags();
//     atualizarConteudo('Z');
//   });

//   const botoesAlfa = document.querySelectorAll('.botaoABC');
//   let indexAlfa = 0;

//   function selecionarLetra(index) {
//     // Remove a classe 'selected' de todos os links
//     botoesAlfa.forEach(link => link.classList.remove('selected'));

//     // Adiciona a classe 'selected' ao link correspondente ao índice
//     botoesAlfa[index].classList.add('selected');
//   }

//   botoesAlfa.forEach((link, index) => {
//     link.addEventListener('click', function(event) {
//       event.preventDefault();
//       indexAlfa = index; // Atualiza o índice atual
//       selecionarLetra(indexAlfa);
//     });
//   });

//   document.getElementById('letraAnterior').addEventListener('click', function() {
//     if (indexAlfa > 0) {
//       indexAlfa--; // Diminui o índice para ir à esquerda
//       selecionarLetra(indexAlfa);
//     }
//   });

//   document.getElementById('proximaLetra').addEventListener('click', function() {
//     if (indexAlfa < botoesAlfa.length - 1) {
//       indexAlfa++; // Aumenta o índice para ir à direita
//       selecionarLetra(indexAlfa);
//     }
//   });

//   const searchBar = document.getElementById('barra-pesquisa');
//   const searchButton = document.getElementById('botao-pesquisa');
//   const concepts = document.querySelectorAll('.conceitos');
//   const suggestionsList = document.getElementById('sugestoes');
//   const naoEncontrado = document.getElementById('naoEncontrado');
//   let highlightedIndex = -1; // Índice do item destacado

//     function showSuggestions() {
//       const searchTerm = searchBar.value.toLowerCase();
//       suggestionsList.innerHTML = ''; // Limpa sugestões anteriores
//       let foundSuggestion = false; // Variável para rastrear se alguma sugestão foi encontrada

//       concepts.forEach((conceitos, index) => {
//         const conceptName = conceitos.querySelector('b').textContent.toLowerCase().replace(':', '');
//         if (conceptName.includes(searchTerm) && searchTerm !== '') {
//           const suggestionItem = document.createElement('li');
//           suggestionItem.textContent = conceptName; // Remove ":" aqui
//           suggestionItem.classList.add('sugestao');
//           suggestionItem.onclick = () => {
//             searchBar.value = suggestionItem.textContent; // Define o valor da barra de pesquisa com a sugestão
//             searchConcepts(); // Chama a função de busca
//             suggestionsList.style.display = 'none'; // Oculta sugestões
//           };
//           suggestionItem.dataset.index = index; // Armazena o índice
//           suggestionsList.appendChild(suggestionItem);
//           foundSuggestion = true; // Sugestão encontrada
//         }
//       });

//       // Exibir ou ocultar a lista de sugestões
//       suggestionsList.style.display = foundSuggestion ? 'block' : 'none';
//       highlightedIndex = -1; // Reseta o índice destacado
//     }

//    // Função de pesquisa
//    function searchConcepts() {
//       const searchTerm = searchBar.value.toLowerCase();
//       console.log('Buscando por:', searchTerm);
//       let found = false; // Variável para rastrear se algum time foi encontrado

//       concepts.forEach(conceitos => {
//         const conceptName = conceitos.querySelector('b').textContent.toLowerCase().replace(':', '');
//         if (conceptName.includes(searchTerm)) {
//           conceitos.style.display = 'block';
//           found = true; // Time encontrado
//         } else {
//           conceitos.style.display = 'none';
//         }
//       });

//       // Exibir ou ocultar a mensagem "Nenhum time encontrado"
//       naoEncontrado.style.display = found ? 'none' : 'block';

//       // Oculta as sugestões após a pesquisa
//       suggestionsList.style.display = 'none';
//     }

//     // Função para destacar a sugestão
//     function highlightSuggestion(index) {
//       const sugestoes = document.querySelectorAll('.sugestao');
//       sugestoes.forEach((sugestao, i) => {
//         sugestao.classList.toggle('highlighted', i === index); // Aplica a classe "highlighted" apenas ao item destacado
//       });
//     }
    
//     // Acionar a pesquisa ao clicar no botão
//     searchButton.addEventListener('click', searchConcepts);

//     // Acionar sugestões enquanto digita
//     searchBar.addEventListener('input', showSuggestions);

//     // Acionar a pesquisa ao pressionar "Enter"
//     searchBar.addEventListener('keypress', (e) => {
//       if (e.key === 'Enter') {
//         searchConcepts();
//       }
//     });

//     // Navegar pelas sugestões com as teclas de seta
//     searchBar.addEventListener('keydown', (e) => {
//         const sugestoes = document.querySelectorAll('.sugestao');
//         if (e.key === 'ArrowDown') {
//           highlightedIndex = (highlightedIndex + 1) % sugestoes.length; // Incrementa o índice
//           highlightSuggestion(highlightedIndex);
//           e.preventDefault(); // Impede o comportamento padrão
//         } else if (e.key === 'ArrowUp') {
//           highlightedIndex = (highlightedIndex - 1 + sugestoes.length) % sugestoes.length; // Decrementa o índice
//           highlightSuggestion(highlightedIndex);
//           e.preventDefault(); // Impede o comportamento padrão
//         } else if (e.key === 'Enter' && highlightedIndex >= 0) {
//           // Realiza a pesquisa com a sugestão destacada
//           searchBar.value = sugestoes[highlightedIndex].textContent; // Atualiza o valor da barra de pesquisa
//           searchConcepts();
//         }
//       });


//       document.getElementById('form-pesquisar').addEventListener('submit', function(event) {
//         event.preventDefault();
//       });