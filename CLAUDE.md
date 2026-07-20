# CLAUDE.md

Este arquivo orienta o Claude Code (claude.ai/code) ao trabalhar neste repositório.

## Visão Geral

**ReloadSe** (reloadse.com.br) é um tema filho de WordPress (`reloadse-child`)
construído sobre o **GeneratePress**. O site é em **português do Brasil (pt-BR)**.

O plano de hospedagem (Hostinger) dá acesso **somente por FTP** — não há SSH,
WP-CLI remoto nem Git no servidor. O deploy é feito espelhando a pasta do tema
filho via `lftp`.

## Estrutura

Todo o código customizado vive em `wp-content/themes/reloadse-child/`:

- **style.css** — Declaração do tema filho (`Template: generatepress`).
- **functions.php** — Enfileira o `style.css` do filho com dependência do CSS do
  pai (`generate-style`). Adicione hooks/filtros do WordPress aqui.

Scripts de operação em `scripts/`:

- **deploy-theme.sh** — Envia (mirror) a pasta do tema para o servidor via FTP.
- **utils.sh** — Função `confirm()` de confirmação interativa (pule com `NO_CONFIRM=1`).

## Deploy

O deploy usa `lftp` e credenciais em `.env.deploy` (fora do versionamento).

```bash
# 1. Instale o lftp (uma vez):
sudo apt-get install lftp

# 2. Crie o .env.deploy a partir do modelo e preencha as credenciais:
cp .env.deploy.example .env.deploy

# 3. Rode o deploy (pede confirmação antes de enviar):
./scripts/deploy-theme.sh

# Deploy sem confirmação (automação):
NO_CONFIRM=1 ./scripts/deploy-theme.sh
```

O script faz `mirror --reverse --delete`: o conteúdo local de
`wp-content/themes/reloadse-child/` passa a ser a fonte da verdade e
**arquivos que existirem só no servidor, dentro dessa pasta, serão apagados**.

## Detalhes Técnicos

- Não há build, testes nem gerenciador de pacotes — é um tema WordPress puro.
  Edite PHP/CSS/JS diretamente; as mudanças valem no próximo reload da página.
- Servidor: `62.72.62.5:21` (Hostinger). `DEPLOY_REMOTE_DIR` usa o caminho
  absoluto: `/domains/reloadse.com.br/public_html/wp-content/themes/reloadse-child`.

## Segurança

- **Nunca** versione `FTP.txt` nem `.env.deploy` (ambos no `.gitignore`).
- Após ativar o tema filho no wp-admin (Aparência → Temas), o site passa a usar
  `reloadse-child`.
