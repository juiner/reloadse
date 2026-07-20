#!/usr/bin/env bash
set -euo pipefail

BASEDIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
ROOTDIR="${BASEDIR}/.."
source "${BASEDIR}/utils.sh"

# Carrega credenciais
ENV_FILE="${ROOTDIR}/.env.deploy"
if [[ ! -f "$ENV_FILE" ]]; then
  echo -e "${RED}Arquivo .env.deploy nao encontrado na raiz do projeto.${NC}"
  echo "Crie a partir do modelo: cp .env.deploy.example .env.deploy"
  echo "E preencha: DEPLOY_HOST, DEPLOY_PORT, DEPLOY_USER, DEPLOY_PASS, DEPLOY_REMOTE_DIR"
  exit 1
fi
source "$ENV_FILE"

# Diretorio local do tema
LOCAL_THEME_DIR="${ROOTDIR}/wp-content/themes/reloadse-child"

if [[ ! -d "$LOCAL_THEME_DIR" ]]; then
  echo -e "${RED}Diretorio do tema nao encontrado: ${LOCAL_THEME_DIR}${NC}"
  exit 1
fi

# Verifica se lftp esta instalado
if ! command -v lftp &>/dev/null; then
  echo -e "${RED}lftp nao encontrado.${NC}"
  echo "Instale com: sudo apt-get install lftp"
  exit 1
fi

echo ""
echo -e "${BLUE}========================================${NC}"
echo -e "${BLUE}  Deploy do tema reloadse-child${NC}"
echo -e "${BLUE}========================================${NC}"
echo ""
echo -e "Host:    ${GREEN}${DEPLOY_HOST}:${DEPLOY_PORT}${NC}"
echo -e "Remoto:  ${GREEN}${DEPLOY_REMOTE_DIR}${NC}"
echo -e "Local:   ${GREEN}${LOCAL_THEME_DIR}${NC}"
echo ""
echo -e "Arquivos que serao enviados:"
find "$LOCAL_THEME_DIR" -type f -printf "  %P\n" 2>/dev/null || ls -1 "$LOCAL_THEME_DIR"
echo ""

confirm "DEPLOY TEMA WORDPRESS (PRODUCAO)"

echo -e "${YELLOW}Conectando via FTP...${NC}"
echo ""

lftp -u "${DEPLOY_USER},${DEPLOY_PASS}" "ftp://${DEPLOY_HOST}:${DEPLOY_PORT}" <<EOF
set ssl:verify-certificate no
set ftp:ssl-allow yes
mirror --reverse --delete --verbose --parallel=4 \
  "${LOCAL_THEME_DIR}/" "${DEPLOY_REMOTE_DIR}/"
bye
EOF

echo ""
echo -e "${GREEN}Deploy concluido com sucesso!${NC}"
