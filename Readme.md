# Sistema de Autoatendimento - Correios

## Descrição

Este repositório contém o desenvolvimento de um **Sistema de Autoatendimento** para a empresa **Correios**, com o objetivo de facilitar o atendimento ao cliente de maneira autônoma e eficiente. O sistema oferece as seguintes funcionalidades:

- **Envio de Encomendas**
- **Receber Encomendas**
- **Relatar Problemas**

O sistema está sendo desenvolvido utilizando **HTML/CSS** para a interface do usuário e **PHP** para a lógica de backend, que inclui a geração de tokens através de incrementos para o acompanhamento de solicitações, e tambem o reconhecimento dos tokens dentro do setor e pagina correspondente.
O sistema tambem irá contar no futuro com uma implementação de um codigo que irá fazer uma conexão com uma balança e sensor de imagem para saber peso, tamanho, formato do objeto e assim poder mostrar para o cliente qual embalagem será a mais recomendada para o seu item.
Também terá funcionalidades para que os dados sejam imprimidos e assim colocados na caixa da embalagem para depois ser enviado. 
## Funcionalidades

1. **Envio de Encomendas**: Permite que o cliente registre uma encomenda para envio, gerando um token exclusivo para rastreamento.
2. **Receber Encomendas**: Facilita a busca da encomenda que está em um ponto dos correios, no qual o usuario pode resgatar com seus dados.
3. **Relatar Problemas**: Permite que os clientes converse com funcionarios ou até mesmo consiga tirar suas duvidas no painel, sobre problemas com suas encomendas, como atrasos ou extravios.

## Tecnologias Utilizadas

- **HTML5**: Estrutura da interface do usuário.
- **CSS3**: Estilização e responsividade.
- **PHP**: Backend responsável pela geração de tokens e manipulação de dados.

## Instalação

1. Clone o repositório:
   ```bash
   git clone https://github.com/ThiagoRAlmeida2/Hackathon_Correios.git
   ```
2. Naveque até o diretório do projeto:
   ```bash
   cd Correios
   ```
3. Execute o sistema em um servidor local (Como Apache ou XAMPP) para que o PHP funcione corretamente

## Estrutura do Projeto

- `/css`: Contém os arquivos de estilização do sistema.
- `/php`: Scripts PHP responsáveis pela geração de tokens e outras funcionalidades de backend.
- `/html`: Contém as páginas HTML com as interfaces de Envio, Recebimento e Problemas.

## Como Usar

1. Acesse o sistema via navegador.
2. Selecione a funcionalidade desejada (Envio de Encomendas, Receber Encomendas, Problemas).
3. O sistema irá gerar ou solicitar o token para o acompanhamento das suas encomendas.

## Contribuições

Contribuições são bem-vindas! Se deseja contribuir com melhorias, siga os passos abaixo:

1. Faça um fork do repositório.
2. Crie uma nova branch:
   ```bash
   git checkout -b minha-contribuicao
   ```
3. Faça as alterações e commit:
   ```bash
   git commit -m "Minha contribuição"
   ```
4. Envie para a branch principal
   ```bash
   git push origin minha-contribuicao
   ```
