$(document).ready(function(){
  var initi = false;
  $('#safira').click(function(){

    if(initi == false){
      communicateAction("Olá, eu sou a SAFIRA. Qual é o seu nome?");
      responsiveVoice.speak("Olá, eu sou a SAFIRA. Qual é o seu nome?", "Brazilian Portuguese Female", {
        pitch: 1,
        rate: 1
      });
      initi = true;
    }
    recog();
	});

});


function communicateAction (text) {
	var rec = document.getElementById('conversation');
	rec.innerHTML += '<div class="recognized animated "><div>' + text + '</div></div>';
 	rec.scrollTop = rec.scrollHeight;
$("html, body").animate({ scrollTop: $(document).height()-$(window).height() });
}

function recognized (text) {
	var rec = document.getElementById('conversation');
	rec.innerHTML += '<div class="action animated ">' + text + '</div>';
	rec.scrollTop = rec.scrollHeight;
  $("html, body").animate({ scrollTop: $(document).height()-$(window).height() });
}


  function recog(){

  	if(annyang){
  	  var commands = {
  	    'meu nome é *name':function(name){
  					responsiveVoice.speak(name + ". Que nome bonito, a partir de agora irei te chamar pelo nome. Tudo bem?", "Brazilian Portuguese Female", {
  						pitch: 1,
  						rate: 1,
              onstart: function(){
                communicateAction(name + ". Que nome bonito, a partir de agora irei te chamar pelo nome tudo bem?");
              },
              onend:function(){
                falas();
              }
  					});
  	    },
        'o que vocês fazem':function(){
          responsiveVoice.speak("Meus criadores trabalham para acelerar o processo de aplicação de inteligência artificial, aprendizado de máquinas, processamento de linguagem natural e tecnologias relacionadas.", "Brazilian Portuguese Female", {
            pitch: 1,
            rate: 1,
            onstart: function(){
              communicateAction('Meus criadores trabalham para acelerar o processo de aplicação de inteligência artificial, aprendizado de máquinas, processamento de linguagem natural e tecnologias relacionadas.');
            },
            onend:function(){
              communicateAction("Comandos: <li>Quem é Safira?</li> <li>Oque é AI?</li> <li>Segurança na AI</li> <li>O que vocês fazem ?</li> <li>Quem somos?</li>  <li>Doar</li>");
            }
          });
        },
        'segurança na (aí)':function(){
          responsiveVoice.speak("Vamos falar da importância da Segurança na AI. O impacto da AI na sociedade pode ser extremamente benéfico, motivando a pesquisa em muitas áreas, da economia e da lei a tópicos técnicos, como verificação, validade, segurança e controle. Entretanto, há de se manter requisitos de auto aprendizado, pautados nos valores humanos evitando riscos à integridade da sociedade.", "Brazilian Portuguese Female", {
            pitch: 1,
            rate: 1,
            onstart: function(){
              communicateAction('Vamos falar da importância da Segurança na AI. <br> O impacto da AI na sociedade pode ser extremamente benéfico, motivando a pesquisa em muitas áreas, da economia e da lei a tópicos técnicos, como verificação, validade, segurança e controle. Entretanto, há de se manter requisitos de auto aprendizado, pautados nos valores humanos evitando riscos à integridade da sociedade.');
            },
            onend:function(){
              communicateAction("Comandos: <li>Quem é Safira?</li> <li>Oque é AI?</li> <li>Segurança na AI</li> <li>O que vocês fazem ?</li> <li>Quem somos?</li>  <li>Doar</li>");
            }
          });
        },
        'quem é Safira':function(){
          responsiveVoice.speak("Oi! Sou a Safira, estou em minha versão de demonstração, ou seja, não possuo todas as minhas funcionalidades, mas posso te ajudar com os seguintes assuntos: .", "Brazilian Portuguese Female", {
            pitch: 1,
            rate: 1,
            onstart: function(){
              communicateAction('Oi! Sou a Safira, estou em minha versão de demonstração, ou seja, não possuo todas as minhas funcionalidades, mas posso te ajudar com os seguintes assuntos:');
            },
            onend:function(){
              communicateAction("Comandos: <li>Quem é Safira?</li> <li>Oque é AI?</li> <li>Segurança na AI</li> <li>O que vocês fazem ?</li> <li>Quem somos?</li>  <li>Doar</li>");
            }
          });
        },
        'oque é (aí)':function(){
          responsiveVoice.speak("Inteligência Artificial (IA) é um ramo da ciência da computação que se propõe a elaborar dispositivos que simulem a capacidade humana de raciocinar, perceber, tomar decisões e resolver problemas, enfim, a capacidade de ser inteligente.", "Brazilian Portuguese Female", {
            pitch: 1,
            rate: 1,
            onstart: function(){
              communicateAction('Inteligência Artificial (IA) é um ramo da ciência da computação que se propõe a elaborar dispositivos que simulem a capacidade humana de raciocinar, perceber, tomar decisões e resolver problemas, enfim, a capacidade de ser inteligente.');
            },
            onend:function(){
              communicateAction("Comandos: <li>Quem é Safira?</li> <li>Oque é AI?</li> <li>Segurança na AI</li> <li>O que vocês fazem ?</li> <li>Quem somos?</li>  <li>Doar</li>");
            }
          });

        },
        'fechar':function(){
          responsiveVoice.speak("Tudo bem...", "Brazilian Portuguese Female", {
            pitch: 1,
            rate: 1,
            onstart: function(){
              communicateAction('Tudo bem...');
            },
            onend:function(){
              annyang.pause();
            }
          });
        },
        ':nomatch': function (message) {
					responsiveVoice.speak("Perdão, não entendi. Talves o que você procura ainda não esteja disponivel...", "Brazilian Portuguese Female", {
						pitch: 1,
						rate: 1
					});
					recognized(message); communicateAction('Perdão, não entendi. Talves oque você procura ainda não esteja disponivel...');
				}
  	  };

  	  annyang.debug(true);
  	  annyang.setLanguage('pt-PT');
  	  annyang.addCommands(commands);

  	  annyang.start({autoRestart: false, continuous: false});

  	  annyang.addCallback('soundstart', function() {
  	  console.log('sound detected');
  	  });
  	  annyang.addCallback('result', function(result) {
  	  console.log('sound stopped');
      // recognized(result);
      // annyang.pause();
  	  });
      annyang.addCallback('resultMatch', function(userSaid) {
        console.log(userSaid); // sample output: 'hello'
        recognized(userSaid);
        $("html, body").animate({ scrollTop: $(document).height()-$(window).height() });
        // communicateAction('Alguns comandos: <li>Oque fazemos?</li> <li>Quem somos?</li> <li>Oque é AI?</li> <li>Doar</li>');
      });
  	}
  }

function falas(){
  var frase1 = "Você sabe o que é inteligência artificial?";
  var resp1 = "Inteligência Artificial (IA) é um ramo da ciência da computação que se propõe a elaborar dispositivos que simulem a capacidade humana de raciocinar, perceber, tomar decisões e resolver problemas, enfim, a capacidade de ser inteligente.";

  responsiveVoice.speak(frase1, "Brazilian Portuguese Female", {
    pitch: 1,
    rate: 1,
    onstart: function(){
      communicateAction(frase1);
    },
    onend:function(){
      responsiveVoice.speak(resp1, "Brazilian Portuguese Female", {
        pitch: 1,
        rate: 1,
        onstart: function(){
          communicateAction(resp1);
        },
        onend:function(){
          responsiveVoice.speak("Legal, não é mesmo? Você pode me perguntar sobre os assuntos abaixo:", "Brazilian Portuguese Female", {
            pitch: 1,
            rate: 1,
            onstart: function(){
              communicateAction("Legal, não é mesmo?");
            },
            onend:function(){
              communicateAction("Comandos: <li>Quem é Safira?</li> <li>Oque é AI?</li> <li>Segurança na AI</li> <li>O que vocês fazem ?</li> <li>Quem somos?</li>  <li>Doar</li>");
            }
          });
        }
      });
    }
  });
}
