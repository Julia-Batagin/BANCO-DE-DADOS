## Atividade Primeiro Banco de Dados

Primeiro criamos o Banco de Dados no Moba chamado 
>Cidades

**Estando no usuário postgres**

![alt text](<Captura de tela 2026-08-13 101309.png>)

---

Agora aqui no VCS, para adicionar nosso Banco de Dados, fazemos o seguinte passo a passo:

>Clicamos neste icone

![alt text](<Captura de tela 2026-08-13 101125.png>)

>Adicionamos o id

![alt text](<Captura de tela 2026-08-13 101121.png>)

>Adicionamos o usuário

![](<Captura de tela 2026-08-13 101133.png>)

>Colocamos a senha do usuário

![alt text](<Captura de tela 2026-08-13 101143.png>)

>Adicionamos a porta

![alt text](<Captura de tela 2026-08-13 101152.png>)

>E entramos no Banco de Dados desejado

![](<Captura de tela 2026-08-13 101205.png>)

>Por fim irá aparecer o Banco de Dado ao lado, no meu caso renomei por "Atividades"

![alt text](<Captura de tela 2026-08-13 101255.png>)

![alt text](<Captura de tela 2026-08-13 101542.png>)
---
## Para Criar uma tabela usamos a opção "query", que seria como se fosse uma consulta

![alt text](image.png)

----

**Modelagem do Banco de Dados**
```mermaid
erDiagram 
PRODUTOS {
    int id PK "Gerado automaticamente" 
    varchar nome "Nome do produto" 
    numeric valor "Preço do produto em R$"
    int estoque "Irá armazenar a quantidade de produtos no estoque"

}
```
Após modelar iremos executar as etapas de criação e inserção de dados.
----
Para criar a primeira tabela usamos os comandos:
```sql
CREATE TABLE produtos(
    id INT GENERATED ALWAYS AS IDENTITY PRIMARY KEY, --Irá criar uma indentidade automaticamente para cada produto
    nome VARCHAR(100) NOT NULL,
    valor NUMERIC(10, 2) NOT NULL,
    estoque INT NOT NULL DEFAULT 0 --NOT NULL: Não nulo
    ); 

```
---
Para consultar todos os elementos da tabela, uso o comando:

```sql
SELECT * FROM produtos;
```
----
Para inserir valores, use o comando:

```sql
INSERT INTO produtos(nome, valor, estoque)
VALUES('Caneta', '1.50','100');
SELECT * FROM produtos; --Para selecionar os produtos e funcionar o código
```

---
## Tabela pronta

![alt text](<Captura de tela 2026-08-13 105602.png>)

>Código usado no "query"

![alt text](<Captura de tela 2026-08-13 110138.png>) 

![alt text](<Captura de tela 2026-08-13 110202.png>)

