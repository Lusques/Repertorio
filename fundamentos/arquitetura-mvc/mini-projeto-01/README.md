# Mini Projeto 01 - Fluxo MVC em PHP puro

## O que é

Primeiro projeto prático do aprendizado. Implementação do padrão MVC em PHP puro, sem framework, para fixar o conceito de separação de responsabilidades entre Model, Controller e View.

## Por que existe

Antes de aprofundar no Yii 1.13, o objetivo é sentir na prática o que cada camada faz e por que elas existem separadas.

## O que pratica

- Criação de uma classe Model com retorno de dados
- Criação de uma Controller que instancia a Model e passa dados pra View
- Criação de uma View que recebe e exibe os dados em uma tabela HTML

## Estrutura

```
mini-projeto-01/
├── Model/
│   └── Usuario.php           - Classe com método getUsuarios()
├── Controller/
│   └── UsuarioController.php - Classe com método actionIndex()
└── View/
    └── usuario/
        └── index.php         - Tabela HTML com id, nome e email
```

## Fonte

Projeto próprio - desenvolvido durante sessões de estudo.

## O que aprendi

> Preencher após concluir o projeto.
