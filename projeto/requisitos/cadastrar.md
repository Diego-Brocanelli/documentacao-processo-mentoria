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
- Armazenar os dados no Bando de dados.
- Sempre redirecionar para a mesma view.

### Objetivo

- Exibir os dados da view.
- Exibir o formulário.
- Implementar validação de dados.
- Implementar sanitização de dados.
- Armazenar os dados do form no Banco de dados.