# Modificações no CSS

## Login ADMINISTRADOR

### Página REGULAMENTO
- Centralizar o título de regulamento;
- Criar quadrinhos para os regulamentos;
- Na lista de escolher os regulamentos mudar de numeração para nomes;
- Corrigir a “endentação “ do conteúdo para que fique renderizado com a borda certa (adicionar uma div do lado para ficar certinho);
- Adicionar um botão para chamar as telas de adicionar, editar ou excluir regulamento;
- Retornar os dados do regulamento escolhido quando este for selecionado (o que está escrito no regulamento);
- Corrigir o alinhamento dos componentes;

### Página AGENDAMENTO
- Corrigir o título da página agendamento para bloquear aluno  para bloquear agendamento;
- Corrigir edentação;
- Incluir o campo de busca para buscar por nome e mostrar os dados;
- Na escolha de tempo permitir que o usuário digite a quantidade de tempo;

### Página NOTÍCIAS
- Mesmas modificações de regulamentos;

### Página CADASTRO DISCENTE 
- Corrigir edentação e alinhamento;
- Corrigir layout, bordas devem ser todas arredondadas ou todas quadradas;
- Adicionar a opção de listar os cadastrados;
- Matrícula deve ser a chave primária;
- Colocar um aviso no cadastro de que o tamanho de nome e login são limitados a 45 caracteres, matricula é limitada a 16;

### Página CADASTRO TUTOR
- Melhorar o componente de horário para que o user identifique o que é hora e o que é minuto;
- Melhorar a identificação do botão de adicionar mais um horário;
- Mostrar uma lista de tutores com dias e horários cadastrados;
- Adicionar os botões de adicionar, remover e editar;


## Login ATUTOR
- Adicionar o perfil ou ao menos o nome;

### Página AGENDAMENTOS
- Dar uma descrição da funcionalidade de bloqueio;
- Mostrar a lista de horários cadastrados;
- Melhorar a visualização do componente de horário do calendário;
- Melhorar a mensagem de erro no cadastro de horários;
- Adicionar botões desbloquear e bloquear na frente do aluno selecionado para facilitar o uso;
- Mostrar os dias em que alunos fizeram agendamentos;

## Login Discente

### Página HORÁRIOS
- Descrever que essa página só mostra os agendamentos do alunos;
- Mudar título da página para meus agendamentos;
- No horário agendado mostrar seu nome, nome do tutor ou outra coisa;

### Página AGENDAMENTOS
- Colocar o título como Horários disponíveis;
- Melhorar a forma de mostrar as opções;
- Adicionar os dias que já foram agendados;



# Modificações no BACK-END

## Login ADMINISTRADOR

### Página LOGIN
- Fazer o login com a matrícula e a senha;
- Matrícula deve ser a chave primária;

### Página REGULAMENTO
- Esvaziar o campo de seleção do regulamento, ou colocar a frase “selecione regulamento”;

### Página CADASTRO DISCENTE
- Está cadastrando vários usuários com as mesmas informações e isso não deveria ser possível;
- Não pode permitir cadastro com dados vazios;
- Matrícula deve ser a chave primária;

### Página CADASTRO TUTOR
- Está cadastrando vários usuários com as mesmas informações e isso não deveria ser possível;
- Não pode permitir cadastro com dados vazios;
- Matrícula deve ser a chave primária;
- Quanto aos horários seria interessante fazer um input sempre que adicionar um novo horário para já ir salvando no banco;




## Login de TUTOR

AGENDAMENTOS
não pode permitir agendamentos para horários ou dias que já passaram
validar tanto no horário inicial quanto no final

Frequência
adicionar a funcionalidade de frequência para que o tutor possa marcar quais alunos foram à academia no dia tal no horário tal
