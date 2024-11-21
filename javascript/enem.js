document.getElementById('logout').addEventListener('click', () => {
    Swal.fire({
        title: "Você deseja sair?",
        icon: "warning",
        showCancelButton: true,
        cancelButtonText: "Cancelar",
        cancelButtonColor: "#d33",
        confirmButtonText: "Sim, sair",
        confirmButtonColor: "#4b3f35",
        backdrop: `rgba(0, 0, 0, 0.5)`
    }).then((result) => {
        if (result.isConfirmed) {
            fetch('logout.php', {
                method: 'POST'
            })
                .then(response => {
                    if (response.ok) {
                        window.location.href = "index.php";
                    }
                })
        }
    });
});
document.getElementById('logout-mobile').addEventListener('click', () => {
    Swal.fire({
        title: "Você deseja sair?",
        icon: "warning",
        showCancelButton: true,
        cancelButtonText: "Cancelar",
        cancelButtonColor: "#d33",
        confirmButtonText: "Sim, sair",
        confirmButtonColor: "#4b3f35",
        backdrop: `rgba(0, 0, 0, 0.5)`
    }).then((result) => {
        if (result.isConfirmed) {
            fetch('logout.php', {
                method: 'POST'
            })
                .then(response => {
                    if (response.ok) {
                        window.location.href = "index.php";
                    }
                })
        }
    });
});
  
  // MENUMOBILE
  const btnMobile = document.getElementById('btn-mobile');
  
  function toggleMenu(event) {
  if (event.type === 'touchstart') event.preventDefault();
  const nav = document.getElementById('nav');
  nav.classList.toggle('active');
  const active = nav.classList.contains('active');
  event.currentTarget.setAttribute('aria-expanded', active);
  if (active) {
    event.currentTarget.setAttribute('aria-label', 'Fechar Menu');
  } else {
    event.currentTarget.setAttribute('aria-label', 'Abrir Menu');
  }
  }
  
  btnMobile.addEventListener('click', toggleMenu);
  btnMobile.addEventListener('touchstart', toggleMenu);
  
  document.getElementById('btn-mobile').addEventListener('click', function() {
    const nav = document.getElementById('nav');
    const btn = document.getElementById('btn-mobile');
    
    nav.classList.toggle('active');
    
    // Atualizar o aria-expanded para acessibilidade
    const isExpanded = nav.classList.contains('active');
    btn.setAttribute('aria-expanded', isExpanded ? 'true' : 'false');
  });
  
  
  const questions = {
    1: {
        title: "Pergunta 1",
        text: "(Enem/2016) É hoje a nossa festa nacional. O Brasil inteiro, da capital do Império à mais remota e insignificante de suas aldeolas, congrega-se unânime para comemorar o dia que o tirou dentre as nações dependentes para colocá-lo entre as nações soberanas, e entregou-lhes seus destinos, que até então haviam ficado a cargo de um povo estranho. As festividades em torno da Independência do Brasil estão diretamente relacionadas com:",
        options: [
            "a) a construção e manutenção de símbolos para a formação de uma identidade nacional.",
            "b) o domínio da elite brasileira sobre os principais cargos políticos, que se efetivou logo após 1822.",
            "c) os interesses de senhores de terras que, após a Independência, exigiram a abolição da escravidão.",
            "d) o apoio popular às medidas tomadas pelo governo imperial para a expulsão de estrangeiros do país.",
            "e) a consciência da população sobre os seus direitos adquiridos posteriormente à transferência da Corte para o Rio de Janeiro."
        ],
        correct: "A",
        explanation: "Resposta Correta: Alternativa A) Esta é uma questão onde se necessita mais conhecimentos de interpretação que de História. O uso de símbolos como festas nacionais, bandeira e hino tem como objetivo formar uma comunidade que se identifique com esses emblemas e assim, uma identidade nacional. As demais opções não são corretas, pois o domínio da elite e a conscientização sobre direitos adquiridos não estavam diretamente relacionados com a construção da identidade nacional na época."
    },
    2: {
        title: "Pergunta 2",
        text: "(Enem/2010) Para o Paraguai, portanto, essa foi uma guerra pela sobrevivência. De todo modo, uma guerra contra dois gigantes estava fadada a ser um teste debilitante e severo para uma economia de base tão estreita. Lopez precisava de uma vitória rápida e, se não conseguisse vencer rapidamente, provavelmente não venceria nunca.",
        options: [
            "a) representou a afirmação do Exército Brasileiro como um ator político de primeira ordem.",
            "b) confirmou a conquista da hegemonia brasileira sobre a Bacia Platina.",
            "c) concretizou a emancipação dos escravos negros.",
            "d) incentivou a adoção de um regime constitucional monárquico.",
            "e) solucionou a crise financeira, em razão das indenizações recebidas."
        ],
        correct: "A",
        explanation: "Resposta Correta: Alternativa A) O Exército brasileiro saiu fortalecido do conflito e passou a exigir mais participação no cenário político, o que acabaria redundando no golpe republicano. As demais opções não são corretas. Afinal, o Brasil não conquista a hegemonia da Bacia Platina e nem os escravos negros são emancipados."
    },
    3: {
        title: "Pergunta 3",
        text: "(Enem/2011) Se a mania de fechar, verdadeiro habitus da mentalidade medieval nascido talvez de um profundo sentimento de insegurança, estava difundida no mundo rural, estava do mesmo modo no meio urbano, pois que uma das características da cidade era de ser limitada por portas e por uma muralha. As práticas e os usos das muralhas sofreram importantes mudanças no final da Idade Média, quando elas assumiram a função de pontos de passagem ou pórticos. Este processo está diretamente relacionado com:",
        options: [
            "a) o crescimento das atividades comerciais e urbanas.",
            "b) a migração de camponeses e artesãos.",
            "c) a expansão dos parques industriais e fabris.",
            "d) o aumento do número de castelos e feudos.",
            "e) a contenção das epidemias e doenças."
        ],
        correct: "A",
        explanation: "Resposta Correta: Alternativa A) No começo da Idade Média, as muralhas tinham função defensiva. No entanto, com o aumento populacional e o deslocamento de pessoas e mercadorias, urgia controlar a entrada e saída nas cidades, além de cobrar os respectivos impostos. As demais opções não são corretas, pois as muralhas não tinham função direta de conter epidemias ou expandir a indústria."
    },
    4: {
        title: "Pergunta 4",
        text: "(Enem/2016) A Lei das Doze Tábuas, de meados do século V a.C., fixou por escrito um velho direito costumeiro. No relativo às dívidas não pagas, o código permitia, em última análise, matar o devedor; ou vendê-lo como escravo ‘do outro lado do Tibre’ — isto é, fora do território de Roma. A referida lei foi um marco na luta por direitos na Roma Antiga, pois possibilitou que os plebeus:",
        options: [
            "a) modificassem a estrutura agrária assentada no latifúndio.",
            "b) exercessem a prática da escravidão sobre seus devedores.",
            "c) conquistassem a possibilidade de casamento com os patrícios.",
            "d) ampliassem a participação política nos cargos políticos públicos.",
            "e) reivindicassem as mudanças sociais com base no conhecimento das leis."
        ],
        correct: "E",
        explanation: "Resposta Correta: Alternativa E) Apesar de ainda ser mais favorável aos patrícios que aos plebeus, a Lei das Doze Tábuas permitiu que as leis estivessem registradas e fossem imutáveis, o que ajudava muito num processo judicial. Também autorizou os plebeus ocupar mais cargos políticos, algo que anteriormente figurava como exceção e não regra. As demais opções não estão corretas."
    },
    5: {
        title: "Pergunta 5",
        text: "(Enem/2012) É verdade que nas democracias o povo parece fazer o que quer; mas a liberdade política não consiste nisso. Deve-se ter sempre presente em mente o que é independência e o que é liberdade. A liberdade é o direito de fazer tudo o que as leis permitem; se um cidadão pudesse fazer tudo o que elas proíbem, não teria mais liberdade, porque os outros também teriam tal poder. A característica de democracia ressaltada por Montesquieu diz respeito:",
        options: [
            "a) ao status de cidadania que o indivíduo adquire ao tomar as decisões por si mesmo.",
            "b) ao condicionamento da liberdade dos cidadãos à conformidade às leis.",
            "c) à possibilidade de o cidadão participar no poder e, nesse caso, livre da submissão às leis.",
            "d) ao livre-arbítrio do cidadão em relação àquilo que é proibido, desde que ciente das consequências.",
            "e) ao direito do cidadão exercer sua vontade de acordo com seus valores pessoais."
        ],
        correct: "B",
        explanation: "Resposta Correta: Alternativa B) Montesquieu propõe um conceito de liberdade onde o indivíduo seria responsável pelas suas escolhas, mas dentro do limite das leis, para garantir a convivência social. As demais opções falham em entender a liberdade como um conceito condicionado pelas leis."
    },
    6: {
        title: "Pergunta 6",
        text: "(Enem/2014) As relações do Estado brasileiro com o movimento operário e sindical, bem como as políticas públicas voltadas para as questões sociais durante o primeiro governo da Era Vargas (1930-1945), são temas amplamente estudados pela academia brasileira em seus vários aspectos. São também os temas mais lembrados pela sociedade quando se pensa no legado varguista. Durante o governo de Getúlio Vargas, foram desenvolvidas ações de cunho social, dentre as quais se destaca a",
        options: [
            "a) disseminação de organizações paramilitares inspiradas nos regimes fascistas europeus.",
            "b) aprovação de normas que buscavam garantir a posse das terras aos pequenos agricultores.",
            "c) criação de um conjunto de leis trabalhistas associadas ao controle das representações sindicais.",
            "d) implementação de um sistema de previdência e seguridade para atender aos trabalhadores rurais.",
            "e) implantação de associações civis como uma estratégia para aproximar as classes médias e o governo."
        ],
        correct: "C",
        explanation: "Resposta Correta: Alternativa C) Ao mesmo tempo em que promoveu leis que melhoravam a vida dos trabalhadores, o governo de Getúlio Vargas usou os sindicatos para controlá-los. As demais opções não estão corretas porque as opções b) e d) não se aplicam diretamente ao contexto das políticas sociais de Vargas."
    },
    7: {
        title: "Pergunta 7",
        text: "(Enem/2010) A Inglaterra pedia lucros e recebia lucros. Tudo se transformava em lucro. As cidades tinham sua sujeira lucrativa, suas favelas lucrativas, sua fumaça lucrativa, sua desordem lucrativa, sua ignorância lucrativa, seu desespero lucrativo. As novas fábricas e os novos altos-fornos eram como as Pirâmides, mostrando mais a escravização do homem que seu poder.",
        options: [
            "a) A grandiosidade dos prédios onde se localizavam as fábricas revelava os avanços da engenharia e da arquitetura do período, transformando as cidades em locais de experimentação estética e artística.",
            "b) A facilidade em se estabelecer relações lucrativas transformava as cidades em espaços privilegiados para a livre iniciativa, característica da nova sociedade capitalista.",
            "c) O desenvolvimento de métodos de planejamento urbano aumentava a eficiência do trabalho industrial.",
            "d) A construção de núcleos urbanos integrados por meios de transporte facilitava o deslocamento dos trabalhadores das periferias até as fábricas.",
            "e) O alto nível de exploração dos trabalhadores industriais ocasionava o surgimento de aglomerados urbanos marcados por péssimas condições de moradia, saúde e higiene."
        ],
        correct: "E",
        explanation: "Resposta Correta: Alternativa E) A Revolução Industrial trouxe a possibilidade de encontrar mais produtos por preços acessíveis, mas este fenômeno não veio acompanhado da melhoria de vida da classe trabalhadora. Portanto, a opção e) retrata muito bem o que acontecia com a classe trabalhadora neste momento."
    },
    8: {
        title: "Pergunta 8",
        text: "(Enem/2011) Acompanhando a intenção da burguesia renascentista de ampliar seu domínio sobre a natureza e sobre o espaço geográfico, através da pesquisa científica e da invenção tecnológica, os cientistas também iriam se atirar nessa aventura, tentando conquistar a forma, o movimento, o espaço, a luz, a cor e mesmo a expressão e o sentimento.",
        options: [
            "a) fé e misticismo.",
            "b) ciência e arte.",
            "c) cultura e comércio.",
            "d) política e economia.",
            "e) astronomia e religião."
        ],
        correct: "B",
        explanation: "Resposta Correta: Alternativa B) No Renascimento, os autores buscaram constantemente usar os avanços científicos em suas criações artísticas. Podemos citar o estudo da anatomia que passou a ser obrigatório para desenhar com precisão o corpo humano."
    },
    9: {
        title: "Pergunta 9",
        text: "(Enem/2018) O encontro entre o Velho e o Novo Mundo, que a descoberta de Colombo tornou possível, é de um tipo muito particular: é uma guerra – ou a Conquista -, como se dizia então. E um mistério continua: o resultado do combate. Por que a vitória fulgurante, se os habitantes da América eram tão superiores em número aos adversários e lutaram no próprio solo? Se nos limitarmos à conquista do México – a mais espetacular, já que a civilização mexicana é a mais brilhante do mundo pré-colombiano – como explicar que Cortez, liderando centenas de homens, tenha conseguido tomar o reino de Montezuma, que dispunha de centenas de milhares de guerreiros?",
        options: [
            "a) implantar as missões cristãs entre as comunidades submetidas.",
            "b) utilizar a superioridade física dos mercenários africanos.",
            "c) explorar as rivalidades existentes entre os povos nativos.",
            "d) introduzir vetores para a disseminação de doenças epidêmicas.",
            "e) comprar terras para o enfraquecimento das teocracias autóctones."
        ],
        correct: "C",
        explanation: "Resposta Correta: Alternativa C) O autor expressa sua perplexidade diante da conquista do império asteca, liderada por Hernán Cortés, que foi possível em grande parte devido à aliança estratégica entre os espanhóis e diversos grupos indígenas rivais dos astecas. Esse tipo de aliança ajudou a ampliar o exército de Cortés, tornando possível a derrota de Montezuma e a tomada do Império Asteca. As demais alternativas não correspondem às estratégias reais usadas durante a Conquista."
    },
    10: {
        title: "Pergunta 10",
        text: "(ENEM/2010) Em nosso país queremos substituir o egoísmo pela moral, a honra pela probidade, os usos pelos princípios, as conveniências pelos deveres, a tirania da moda pelo império da razão, o desprezo à desgraça pelo desprezo ao vício, a insolência pelo orgulho, a vaidade pela grandeza de alma, o amor ao dinheiro pelo amor à glória, a boa companhia pelas boas pessoas, a intriga pelo mérito, o espirituoso pelo gênio, o brilho pela verdade, o tédio da volúpia pelo encanto da felicidade, a mesquinharia dos grandes pela grandeza do homem.",
        options: [
            "a) À alta burguesia, que desejava participar do poder legislativo francês como força política dominante.",
            "b) Ao clero francês, que desejava justiça social e era ligado à alta burguesia.",
            "c) A militares oriundos da pequena e média burguesia, que derrotaram as potências rivais e queriam reorganizar a França internamente.",
            "d) À nobreza esclarecida, que, em função do seu contato com os intelectuais iluministas, desejava extinguir o absolutismo francês.",
            "e) Aos representantes da pequena e média burguesia e das camadas populares, que desejavam justiça social e direitos políticos."
        ],
        correct: "E",
        explanation: "Resposta Correta: Alternativa E) Robespierre foi um dos líderes mais radicais da Revolução Francesa porque criticava violentamente setores como o clero, a nobreza e à burguesia. Portanto, neste trecho ele exalta as qualidades daqueles que mais sofriam durante o Antigo Regime: os servos e a pequena e média burguesia."
    }
};

function showQuestion(id) {
    const questionItem = document.getElementById(`question-item-${id}`);
    const template = document.getElementById("question-template");
    const questionClone = template.content.cloneNode(true);

    // Preencher dados da pergunta
    questionClone.querySelector("#question-title").textContent = questions[id].title;
    questionClone.querySelector("#question-text").textContent = questions[id].text;

    // Inserir alternativas
    const options = questionClone.querySelectorAll(".options button");
    options.forEach((button, index) => {
        button.textContent = questions[id].options[index];
    });

    // Remover outras perguntas já exibidas
    const existingQuestion = questionItem.querySelector(".question");
    if (existingQuestion) {
        existingQuestion.remove();
    } else {
        // Inserir pergunta logo abaixo do botão
        questionItem.appendChild(questionClone);
    }

    // Adicionar o botão de mostrar explicação
    const showExplanationBtn = document.createElement("button");
    showExplanationBtn.textContent = "Mostrar Resposta";
    showExplanationBtn.classList.add("show-explanation-btn");

    // Criar a explicação da resposta
    const explanationDiv = document.createElement("div");
    explanationDiv.classList.add("answer-explanation");
    explanationDiv.textContent = questions[id].explanation;
    
    // Inicialmente esconder a explicação
    explanationDiv.style.display = "none";
    
    showExplanationBtn.addEventListener("click", function() {
        if (explanationDiv.style.display === "none") {
            explanationDiv.style.display = "block";
            showExplanationBtn.textContent = "Esconder Resposta";
        } else {
            explanationDiv.style.display = "none";
            showExplanationBtn.textContent = "Mostrar Resposta";
        }
    });

    // Inserir o botão e a explicação no final da pergunta
    const questionElement = questionItem.querySelector(".question");
    questionElement.appendChild(showExplanationBtn);
    questionElement.appendChild(explanationDiv);
}

function checkAnswer(button, userAnswer) {
    const questionTitle = button.closest(".question").querySelector("#question-title").textContent;
    const questionId = Object.keys(questions).find(id => questions[id].title === questionTitle);
    const feedback = button.closest(".question").querySelector("#feedback");

    // Verificar resposta
    if (questions[questionId].correct === userAnswer) {
        feedback.textContent = "Correto! Boa resposta!";
        feedback.className = "feedback correct";
    } else {
        feedback.textContent = "Errado! Tente novamente.";
        feedback.className = "feedback incorrect";
    }

    // Exibir feedback
    feedback.style.display = "block";
}

function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}
