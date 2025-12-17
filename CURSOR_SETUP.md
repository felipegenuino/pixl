# Configuração do Cursor para LM Studio

## Variáveis de Ambiente

Para usar o modelo local do LM Studio no Cursor, você precisa configurar:

```
OPENAI_BASE_URL=https://c453f97c030d.ngrok-free.app/v1
OPENAI_API_KEY=lmstudio
OPENAI_MODEL=openai/gpt-oss-20b
```

## Como Configurar no Windows

### Opção 1: Variáveis de Ambiente do Sistema

1. Abra "Variáveis de Ambiente" no Windows:
   - Pressione `Win + R`
   - Digite `sysdm.cpl` e pressione Enter
   - Vá na aba "Avançado"
   - Clique em "Variáveis de Ambiente"

2. Adicione as três variáveis acima na seção "Variáveis do usuário"

3. Reinicie o Cursor

### Opção 2: Configurações do Cursor

1. Abra o Cursor
2. Pressione `Ctrl + Shift + P` para abrir a paleta de comandos
3. Digite "Preferences: Open Settings (JSON)"
4. Adicione as seguintes configurações:

```json
{
  "cursor.aiModel": "openai/gpt-oss-20b",
  "cursor.openaiBaseUrl": "https://c453f97c030d.ngrok-free.app/v1",
  "cursor.openaiApiKey": "lmstudio"
}
```

### Opção 3: PowerShell (Temporário)

Para testar rapidamente, você pode executar no PowerShell antes de abrir o Cursor:

```powershell
$env:OPENAI_BASE_URL="https://c453f97c030d.ngrok-free.app/v1"
$env:OPENAI_API_KEY="lmstudio"
$env:OPENAI_MODEL="openai/gpt-oss-20b"
```

## Verificação

1. Certifique-se de que o LM Studio está rodando e o servidor está ativo na porta 1234
2. Abra o Cursor
3. Tente usar o chat do Cursor - ele deve conectar ao seu modelo local

## Nota

Se você estiver usando WSL (Windows Subsystem for Linux), pode ser necessário configurar as variáveis de ambiente dentro do WSL também, ou usar o endereço `localhost` do Windows diretamente.

