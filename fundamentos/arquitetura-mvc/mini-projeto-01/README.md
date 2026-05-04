# Mini Projeto 01 - Fluxo MVC em PHP puro

## O que é

Implementação do padrão MVC em PHP puro, sem framework. O objetivo é demonstrar a separação de responsabilidades entre Model, Controller e View de forma clara e funcional, simulando o comportamento de um sistema real sem a abstração de um framework.

## Por que existe

Antes de trabalhar com frameworks como Yii ou Laravel, é fundamental entender o que acontece por baixo. Esse projeto representa esse entendimento na prática.

## Estrutura

```
mini-projeto-01/
├── Model/
│   └── Usuario.php           - Classe que representa os dados de usuário
├── Controller/
│   └── UsuarioController.php - Classe que orquestra Model e View
└── View/
    └── usuario/
        └── index.php         - Tabela HTML que exibe os usuários
```

## Responsabilidade de cada camada

**Model** - representa os dados e as regras sobre eles. Não sabe nada sobre a tela, só sobre os dados.

**Controller** - instancia a Model, busca os dados e decide qual View renderizar. É o orquestrador do fluxo.

**View** - recebe os dados prontos e só exibe. Não busca, não processa, não decide.

## Conceitos aplicados

- Encapsulamento com propriedades privadas e métodos públicos
- Separação de responsabilidades seguindo o padrão MVC
- Uso de `__DIR__` para navegação de arquivos com caminhos absolutos, evitando erros de caminho relativo
- Uso de `require_once` para importar dependências entre arquivos
- Uso de `include` para renderizar a View dentro do contexto da Controller, permitindo que variáveis sejam compartilhadas
- Hash de senha com `password_hash()` seguindo boas práticas de segurança
- Validação de dados antes de persistir com `isset()`

## Como visualizar

**Pré-requisitos:**
- PHP 7 ou superior instalado

**Rodando o servidor local:**

Acesse a pasta raiz do projeto pelo terminal e execute:

```bash
cd fundamentos/arquitetura-mvc/mini-projeto-01
php -S localhost:8000
```

Depois acesse no browser:

```
http://localhost:8000/Controller/UsuarioController.php
```

## Fonte

Projeto próprio - desenvolvido durante sessões de estudo.
