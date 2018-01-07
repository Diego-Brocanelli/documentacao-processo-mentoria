# View: Cadastrar Produto

### Descrição

View responsável pelo cadastro de produtos.

- ***Elementos da tela:***
    - Título do sistema.
    - Botão de voltar.
    - Título da página.
    - Formulário de cadastro de produto.
    - Footer.

### Recursos

- Validar o valor do id recebido.
- Pesquisar os dados do produto que deseja atualizar.
- Realizar o bind dos dados do produto no formulário.
- Sanitizar os dados recebidos do form.
- Validar os dados recebidos do formulário.
    - Nome
        - Obrigatório.
        - Min: 3 caracteres.
        - Max: 255 caracteres.
    - Descrição
        - Obrigatório.
        - Min: 10 caracteres.
        - Max: 255 caracteres.
    - Quantidade
        - Obrigatório.
        - Min: 0.
        - Max: 9999999.
- Exibir erro de preenchimento abaixo do seu respectivo input.
- Atualizar os dados no Banco de dados.
- Sempre redirecionar para a mesma view.

### Objetivo

- Exibir os dados da view.
- Exibir o formulário.
- Implementar validação de dados.
- Implementar sanitização de dados.
- Atualizar os dados no Banco de dados.