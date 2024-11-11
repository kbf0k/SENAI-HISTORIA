-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11/11/2024 às 21:28
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `site_historia`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `ajuda`
--

CREATE TABLE `ajuda` (
  `id_ajuda` int(11) NOT NULL,
  `nome_ajuda` varchar(30) NOT NULL,
  `email_ajuda` varchar(30) NOT NULL,
  `assunto_ajuda` varchar(200) NOT NULL,
  `mensagem_ajuda` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `ajuda`
--

INSERT INTO `ajuda` (`id_ajuda`, `nome_ajuda`, `email_ajuda`, `assunto_ajuda`, `mensagem_ajuda`) VALUES
(1, 'Kaique', '5162@gmai.com', '123', '123131');

-- --------------------------------------------------------

--
-- Estrutura para tabela `glossario`
--

CREATE TABLE `glossario` (
  `id_glossario` int(11) NOT NULL,
  `titulo_glossario` varchar(250) NOT NULL,
  `descricao_glossario` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `glossario`
--

INSERT INTO `glossario` (`id_glossario`, `titulo_glossario`, `descricao_glossario`) VALUES
(7, 'Batalha de Hastings', 'Conflito em 1066 na Inglaterra, que levou à conquista normanda do país.'),
(8, 'Belle Époque', 'Período de paz e progresso cultural na Europa, entre 1871 e 1914.'),
(9, 'Bipolaridade', 'Divisão do mundo em duas superpotências durante a Guerra Fria: EUA e União Soviética.'),
(10, 'Bloqueio Continental', 'Divisão do mundo em duas superpotências durante a Guerra Fria: EUA e União Soviética.'),
(11, 'Bolchevismo', 'Ideologia socialista radical que levou à Revolução Russa e à criação da União Soviética.'),
(12, 'Bretton Woods', 'Conferência que criou o sistema financeiro internacional após a Segunda Guerra Mundial.'),
(15, 'Comunismo', 'Ideologia política que busca a eliminação da propriedade privada e a criação de uma sociedade sem classes.'),
(16, 'Cruzadas', 'Conjunto de expedições militares da Europa para recuperar os locais sagrados do cristianismo.'),
(17, 'Crise de 1929', 'Colapso econômico global que começou nos Estados Unidos e teve repercussões mundiais.'),
(18, 'Declaração de Direitos Humanos', 'Documento que estabelece direitos fundamentais a serem garantidos a todas as pessoas.'),
(19, 'Democratização', 'Processo de transição de um regime autoritário para um governo democrático.'),
(20, 'Ditadura', 'Forma de governo em que o poder é concentrado nas mãos de um líder ou um pequeno grupo.'),
(21, 'Diplomacia', 'Prática de conduzir negociações entre nações.'),
(22, 'Doutrina', 'Conjunto de princípios ou regras que orientam a ação política ou a conduta em geral.'),
(23, 'Era Napoleônica', 'Período de domínio de Napoleão Bonaparte na Europa, que incluiu guerras e reformas sociais.'),
(24, 'Era Vargas', 'Período em que Getúlio Vargas governou o Brasil, caracterizado por transformações políticas e sociais.'),
(25, 'Escravismo', 'Sistema social e econômico baseado na exploração do trabalho escravo.'),
(26, 'Estado', 'Entidade política com governo próprio que exerce soberania sobre um território.'),
(27, 'Estado de Bem-Estar Social', 'Modelo de estado que busca garantir direitos sociais e econômicos à população.'),
(28, 'Estado-Nação', 'Forma de organização política em que um estado é baseado em uma nação.'),
(29, 'Expansão Marítima', 'Aumento da presença e influência de nações em mares e oceanos, geralmente por meio de navegação e comércio.'),
(30, 'Fascismo', 'Ideologia política autoritária, nacionalista e militarista, que surgiu na Europa no início do século XX.'),
(31, 'Federalismo', 'Sistema político que divide o poder entre um governo central e várias entidades regionais.'),
(32, 'Feudalismo', 'Sistema político e econômico medieval baseado na posse de terras e relações de vassalagem.'),
(33, 'Golpe de Estado', 'Tomada ilegal do poder de um governo, geralmente conduzida por forças militares ou grupos políticos. Ocorrem quando há descontentamento com a liderança vigente, e podem resultar em regimes autoritários ou em mudanças significativas na estrutura política de um país.'),
(34, 'Grandes Navegações', 'Expedições marítimas realizadas entre os séculos XV e XVII por países europeus, como Portugal e Espanha, em busca de novas rotas comerciais e territórios. Resultou na descoberta de novas terras, expansão do comércio e início da colonização da América, África e Ásia.'),
(35, 'Guerra Civil Espanhola', 'Conflito de 1936 a 1939 entre republicanos, que defendiam uma república democrática, e nacionalistas, liderados por Francisco Franco, que buscavam um regime autoritário. A vitória dos nacionalistas levou ao estabelecimento de uma ditadura na Espanha, que durou até 1975.'),
(36, 'Guerra das Coreias', 'Conflito de 1950 à 1953 entre Coreia do Norte, apoiada por China e União Soviética, e Coreia do Sul, apoiada pelos Estados Unidos. A guerra terminou com um armistício.'),
(37, 'Guerra de Canudos', 'Conflito ocorrido em Canudos, no sertão da Bahia, entre 1896 e 1897, entre o Exército Brasileiro e seguidores de Antônio Conselheiro. A guerra terminou com a destruição do povoado e a morte de milhares de habitantes.'),
(38, 'Guerra do Vietnã', 'Conflito entre 1955 e 1975 envolvendo o Vietnã do Norte, apoiado pela União Soviética e China, contra o Vietnã do Sul e os Estados Unidos. A guerra terminou com a vitória do Vietnã do Norte e a unificação do país sob um regime comunista.'),
(39, 'Guerras Napoleônicas', 'Conflitos militares entre 1803 e 1815, entre a França de Napoleão Bonaparte contra várias coalizões europeias. Terminaram com a derrota de Napoleão na Batalha de Waterloo.'),
(40, 'Hegemonia', 'Predomínio ou influência de um grupo, nação ou ideologia sobre outros, seja no contexto político, econômico, cultural ou militar. Pode ser exercida por meio de poder direto ou pela liderança e influência ideológica.'),
(41, 'História', 'Estudo dos eventos passados, das culturas, das sociedades e dos indivíduos ao longo do tempo, buscando compreender as transformações e a evolução da humanidade. Baseia-se em registros, evidências e análises para interpretar as causas e consequências dos acontecimentos.'),
(42, 'Holocausto', 'Período durante a Segunda Guerra Mundial em que o regime nazista exterminou cerca de seis milhões de judeus, além de outros grupos perseguidos. É um dos eventos mais trágicos da história, simbolizando a brutalidade do totalitarismo.'),
(43, 'Iluminismo', 'Movimento intelectual e filosófico do século XVIII, que valorizava a razão, o progresso e a ciência como caminhos para melhorar a sociedade. Os iluministas criticavam a autoridade absoluta e a superstição, defendendo a liberdade, os direitos individuais e a igualdade perante a lei.'),
(44, 'Imperialismo', 'Política de expansão e dominação de territórios estrangeiros por nações poderosas, motivada por interesses econômicos, políticos e estratégicos.'),
(45, 'Império Bizantino', 'Herdeiro do Império Romano do Oriente, o Império Bizantino preservou e desenvolveu a cultura greco-romana, e teve grande influência na religião e política do mundo cristão oriental até sua queda para o Império Otomano.'),
(46, 'Império Romano', 'Civilização antiga que se expandiu a partir de Roma e dominou vastas áreas da Europa, Norte da África e Oriente Médio. Foi um dos maiores e mais influentes da história.'),
(47, 'Independência do Brasil', 'Proclamada em 7 de setembro de 1822 por Dom Pedro I, marcou a separação do Brasil de Portugal. Com isso, o Brasil tornou-se um império independente.'),
(48, 'Independência dos Estados Unidos', 'Proclamada em 4 de julho de 1776, marcou a separação das Treze Colônias da América do Norte do domínio britânico.'),
(49, 'Invasão da Polônia', 'Ofensiva militar da Alemanha nazista que marcou o início da Segunda Guerra Mundial. A invasão, seguida pela ocupação soviética no leste, levou ao fim do Estado polonês e à divisão de seu território entre Alemanha e União Soviética.'),
(50, 'Jovem Guarda', 'Movimento cultural brasileiro dos anos 1960 inspirado no rock internacional, liderado por músicos como Roberto Carlos, Erasmo Carlos e Wanderléa.'),
(52, 'KGB', '\"Comitê de Segurança do Estado\", foi a principal agência de inteligência e segurança da União Soviética de 1954 a 1991. Responsável pela espionagem, contraespionagem e controle interno.'),
(53, 'Liberalismo', 'Ideologia política e econômica que defende a liberdade individual, os direitos civis e a economia de mercado.'),
(54, 'Liga das Nações', 'Organização internacional fundada em 1920 após a Primeira Guerra Mundial para promover a paz e a cooperação entre países. Apesar de seus esforços, não conseguiu impedir conflitos futuros e foi substituída pela ONU em 1945.'),
(55, 'Livre Mercado', 'Sistema econômico em que os preços e a produção de bens e serviços são determinados pela oferta e demanda, sem intervenção governamental.'),
(56, 'Mercantilismo', 'Sistema econômico prevalente na Europa entre os séculos XVI e XVIII, focado na acumulação de riquezas e no controle estatal do comércio para fortalecer o poder nacional. '),
(57, 'Modernismo', 'Movimento artístico e cultural do final do século XIX e início do século XX que buscou romper com tradições e explorar novas formas de expressão. Envolveu diversas áreas, como literatura, artes plásticas e arquitetura.'),
(58, 'Monarquia Inglesa', 'Sistema de governo no Reino Unido onde o chefe de Estado é um monarca, cujo papel é em grande parte simbólico devido ao poder estar concentrado no parlamento.'),
(59, 'Movimentos Populares', 'Mobilizações sociais organizadas por grupos da população para reivindicar direitos, justiça social ou mudanças políticas. Podem incluir protestos, greves e movimentos de resistência.'),
(60, 'Muro de Berlim', 'Barreira física que separou a Alemanha Oriental (comunista) da Alemanha Ocidental (capitalista) durante a Guerra Fria. Simbolizou a divisão ideológica entre o bloco soviético e o ocidental. Sua queda em 1989 marcou o fim da Guerra Fria e o início da reunificação da Alemanha.'),
(61, 'Nacionalismo', 'Ideologia que defende a promoção e a preservação dos interesses e identidade de uma nação, baseada em fatores como cultura, história e língua. Pode ser uma força unificadora, mas também pode gerar conflitos, como demonstrado em diversas guerras e movimentos de independência.'),
(62, 'Napoleão Bonaparte', 'Líder francês que se tornou imperador de 1804 a 1814. Napoleão consolidou grandes conquistas na Europa, expandindo o Império Francês e implementando reformas jurídicas e administrativas.'),
(63, 'Nazismo', 'Ideologia e regime político liderado por Adolf Hitler na Alemanha, baseado no nacionalismo extremo, no autoritarismo, no antissemitismo e na crença na superioridade da raça ariana. Levou à perseguição de minorias, à Segunda Guerra Mundial e ao Holocausto, resultando na morte de milhões de pessoas.'),
(64, 'Neoliberalismo', 'Corrente econômica e política que defende a redução da intervenção estatal na economia, a privatização de empresas públicas, a liberalização do comércio e a ênfase na iniciativa privada.'),
(65, 'Ocidental', 'Refere-se aos países da Europa, América do Norte e outras regiões que seguem valores, tradições e sistemas políticos derivados da cultura greco-romana e do cristianismo. É frequentemente usado para distinguir as sociedades capitalistas e democráticas.'),
(66, 'ONU', '\"Organização das Nações Unidas\", uma organização internacional composta por países de todo o mundo, com o objetivo de promover a paz, segurança, direitos humanos, desenvolvimento sustentável e cooperação internacional.'),
(67, 'Órgão', 'estrutura ou entidade responsável por determinadas funções ou atribuições dentro de uma organização, governo ou instituição.'),
(68, 'Oriental', 'Termo frequentemente usado para se referir à região do Oriente. Em contextos históricos, pode se referir à influência cultural, econômica ou política de países dessa região, ou ainda à divisão da Europa entre o Ocidente e o Oriente, especialmente durante a Guerra Fria.'),
(69, 'Plano Marshall', 'Iniciado em 1948, foi um programa de ajuda econômica dos Estados Unidos para reconstruir a Europa após a Segunda Guerra Mundial. O objetivo era estabilizar as economias europeias, prevenir a expansão do comunismo e promover a recuperação das nações devastadas pela guerra, contribuindo para o fortalecimento das democracias ocidentais.'),
(70, 'Plano Molotov', 'Proposta de acordo de paz entre a União Soviética e a Alemanha nazista, assinada em 1939, que estabelecia a divisão da Polônia e a neutralidade entre os dois países. O plano foi uma estratégia de Stalin para evitar uma guerra em duas frentes até que a União Soviética estivesse melhor preparada militarmente.'),
(71, 'Política', 'Conjunto de atividades, instituições e processos pelos quais grupos tomam decisões coletivas sobre como governar e administrar a sociedade. A política envolve o exercício do poder, a elaboração de leis e a organização das relações entre indivíduos e grupos dentro de um Estado.'),
(72, 'Positivismo', 'Corrente filosófica fundada por Auguste Comte no século XIX, que defende a aplicação do método científico à sociedade para promover o progresso. O positivismo enfatiza a ordem e o progresso, acreditando que a sociedade pode ser organizada de maneira racional para alcançar a estabilidade e a melhoria social.'),
(73, 'Primavera Árabe', 'Série de protestos e revoltas populares iniciados em 2010 no mundo árabe, motivados por demandas de democracia, justiça social e direitos humanos. As manifestações resultaram na queda de regimes autoritários em países como Tunísia e Egito e geraram repercussões em toda a região.'),
(74, 'Primeira Guerra Mundial', 'Conflito global de 1914 a 1918, envolvendo as principais potências da época, dividido entre os Aliados e as Potências Centrais. Motivado por rivalidades imperialistas, nacionalismos e alianças, o conflito resultou em milhões de mortes e profundas transformações políticas e territoriais na Europa.'),
(75, 'Proletariado', 'Classe social formada por trabalhadores assalariados que dependem da venda de sua força de trabalho para subsistir.'),
(76, 'Queda de Constantinopla', 'Em 1453, marcou o fim do Império Bizantino com a conquista da cidade pelos otomanos, liderados pelo sultão Maomé II. Esse evento é considerado o marco final da Idade Média e o início da expansão otomana, impactando as rotas comerciais e impulsionando as Grandes Navegações.'),
(77, 'Queda do Muro de Berlim', 'Em 1989, simbolizou o fim da Guerra Fria e a reunificação da Alemanha, marcando a transição para o fim do socialismo no Leste Europeu.'),
(78, 'Revolução Francesa', 'Movimento revolucionário que ocorreu na França entre 1789 e 1799, marcando o fim do Antigo Regime. Inspirada por ideais de liberdade, igualdade e fraternidade, a revolução aboliu a monarquia, estabeleceu a República e trouxe profundas mudanças políticas, sociais e econômicas.'),
(79, 'Revolução Industrial', 'Transformação econômica e tecnológica que começou na Inglaterra no final do século XVIII, caracterizada pela transição de uma economia agrária para uma industrial, com inovações como a máquina a vapor e produção em massa. Resultou em urbanização, mudanças nas condições de trabalho e crescimento do capitalismo.'),
(80, 'Revolução Russa', 'Conjunto de eventos de 1917 que derrubou o regime czarista e instaurou o comunismo na Rússia. Dividida em duas partes: a Revolução de Fevereiro, que resultou na abdicação do czar Nicolau II e na formação de um governo provisório, e a Revolução de Outubro, onde os bolcheviques, liderados por Lenin, tomaram o poder. Teve grandes implicações, como a criação da União Soviética e a inspiração para movimentos comunistas globalmente.'),
(81, 'Socialismo', 'Ideologia que defende a propriedade coletiva ou estatal dos meios de produção, buscando igualdade social e justiça econômica. Visa reduzir desigualdades de riqueza e promover o bem-estar coletivo, administrando recursos para atender às necessidades de todos. O socialismo se manifesta em diversas formas, desde a social-democracia até o socialismo revolucionário.'),
(82, 'Totalitarismo', 'Sistema político com controle absoluto do Estado sobre a vida pública e privada, eliminando qualquer oposição por meio de propaganda, censura e repressão. Exemplos incluem o nazismo na Alemanha e o stalinismo na União Soviética, onde a ideologia do partido governante dominava todas as instituições.'),
(83, 'Tratado de Versalhes', 'Acordo de paz de 1919 que encerrou oficialmente a Primeira Guerra Mundial, impondo severas sanções à Alemanha, como perda de territórios, desmilitarização e reparações financeiras. Também criou a Liga das Nações para promover a paz. As condições do tratado contribuíram para a instabilidade na Alemanha, influenciando o surgimento do nazismo e a Segunda Guerra Mundial.'),
(84, 'Unificação Alemã', 'Processo ocorrido entre 1864 e 1871 que resultou na unificação dos diversos estados alemães sob o comando do Reino da Prússia, formando o Império Alemão. Liderado por Otto von Bismarck, foi um marco importante para a formação da Alemanha como nação.'),
(85, 'Unificação Italiana', 'Processo do século XIX que unificou os Estados e reinos da Península Itálica em um único país, culminando em 1861. Liderado por figuras como Giuseppe Garibaldi, Camillo di Cavour e o Rei Vítor Emanuel II, o movimento foi concluído em 1871, com Roma como capital do novo Reino da Itália.'),
(86, 'Vanguardismo', 'Movimento artístico e literário do início do século XX que rompeu com tradições, promovendo inovação e liberdade criativa. Com correntes como futurismo, dadaísmo, surrealismo e modernismo, desafiou normas culturais e influenciou áreas como literatura, pintura e arquitetura.'),
(87, 'Velha Guarda', 'Termo usado para designar os membros mais antigos e experientes de um partido ou movimento político, especialmente na esquerda e no socialismo. Representa figuras veteranas que defendem as tradições, ideologias e valores de um grupo ou movimento.'),
(90, 'Roma Antiga', 'Civilização que surgiu na Península Itálica e se expandiu de uma cidade para um vasto império. Fundada no século VIII a.C., passou de reino a república e, depois, a império, influenciando profundamente a cultura, política, direito e arquitetura ocidentais. Sua queda em 476 d.C. marcou o fim da Antiguidade Clássica.'),
(91, 'União Europeia', 'Bloco econômico e político formado por países europeus com o objetivo de promover a integração econômica, social e política, facilitando o comércio e a circulação de pessoas entre os países membros.'),
(92, 'União Soviética', 'Estado socialista criado em 1922 que reunia várias repúblicas sob um governo centralizado, liderado pelo Partido Comunista. Foi uma das superpotências mundiais durante a Guerra Fria, existindo até sua dissolução em 1991.'),
(94, 'Guerra Civil', 'Conflito interno em que facções de um mesmo país ou nação lutam pelo controle do governo, mudanças políticas ou independência. Pode ocorrer por motivos ideológicos, étnicos, regionais ou econômicos.'),
(122, 'Aristocracia', 'Sistema de governo ou classe social composta por indivíduos que pertencem a famílias nobres ou de alta posição social, com privilégios hereditários. Historicamente, a aristocracia exercia grande influência política, econômica e social, muitas vezes governando ou tendo controle sobre vastas terras e recursos.');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(150) NOT NULL,
  `sobrenome_usuario` varchar(150) NOT NULL,
  `tipo_usuario` enum('Aluno','Administrador') NOT NULL,
  `email_usuario` varchar(150) NOT NULL,
  `senha_usuario` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome_usuario`, `sobrenome_usuario`, `tipo_usuario`, `email_usuario`, `senha_usuario`) VALUES
(1, 'Kaique', 'Ferreira', 'Administrador', 'kaique1245br@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `ajuda`
--
ALTER TABLE `ajuda`
  ADD PRIMARY KEY (`id_ajuda`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `ajuda`
--
ALTER TABLE `ajuda`
  MODIFY `id_ajuda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
