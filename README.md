# andED PHP

## Descrição
Este é um projeto base para iniciar o desenvolvimento em PHP.

## Estrutura
- `src/`: Código fonte do projeto
- `tests/`: Testes do projeto
- `public/`: Arquivos públicos, como o ponto de entrada da aplicação (index.php)

## Como Executar
1. Instale as dependências:
    ```sh
    composer install
    ```
2. Execute o projeto:
    ```sh
    php -S localhost:8000 -t public
    ```

## Como Testar
Execute os testes usando PHPUnit:
```sh
./vendor/bin/phpunit tests
