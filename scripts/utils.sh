#!/bin/bash
# utils.sh

############################################################
# UTILITÁRIO: Função confirm()
#
# Uso:
#   confirm "Mensagem para o usuário"
#
# O script exibirá uma mensagem solicitando que o usuário pressione
# apenas ENTER para continuar ou qualquer outra tecla + ENTER para sair.
#
# Exemplo:
#   confirm "RESTART DOS SERVIÇOS"
#
# Modo Automático (sem interação):
#   Para ignorar a confirmação (por exemplo, em scripts automatizados),
#   defina a variável de ambiente NO_CONFIRM=1:
#
#   NO_CONFIRM=1 ./seu-script.sh
#
# Ou dentro de um script:
#   export NO_CONFIRM=1
#   confirm "AÇÃO"
############################################################

# Cores ANSI
BLUE='\033[34m'
GREEN='\033[32m'
RED='\033[31m'
YELLOW='\033[33m'
NC='\033[0m' # No Color

# Função para aguardar o usuário apertar apenas ENTER para continuar
confirm() {
  local mensagem="$1"

  if [[ "${NO_CONFIRM:-}" == "1" ]]; then
    echo "[AUTO] Confirmação ignorada ($mensagem)"
    return
  fi

  echo ""
  echo "Pressione Enter para continuar ($mensagem) ou digite qualquer coisa e pressione Enter para sair..."
  read input
  if [ -n "$input" ]; then
    echo "Saindo..."
    exit 1
  fi
}
